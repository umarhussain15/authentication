<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Ngo;
use App\Cause;
use App\Item;
use DateTime;


class NgoAuthorController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Ngo $ngo)
  {
    return view('authors.index', [
      'ngo' => $ngo,
    ]);
  }

  public function update(Cause $cause)
  {
    return view('authors.updateView', [
      'cause' => $cause
    ]);
  }

  public function store(Request $request, Cause $cause)
  {
    if (Input::get('general'))
    {
      $rules = ['title' => 'required|string|max:255',
        'description' => 'required|string',
        'venue' => 'string|min:5',
      ];

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails())
      {
        return redirect('/envy/author/cause/' . $cause->ngo->user_id)
          ->withErrors($validator);
      }
      else
      {
        $cause->cause_title = $request->title;
        $cause->cause_description = $request->description;
        $cause->cause_venue = $request->venue;
        $cause->save();

        return view('ngos.causeView', [
          'cause' => $cause,
        ]);
      }
    }
    elseif (Input::get('details')) 
    {
      $items = $cause->items;
      $changed = false;

      foreach ([1, 2, 3] as $var)
      {
        if (Input::get('new-name-' . $var))
        {
          $rules = ['new-name-' . $var => 'required|string',
            'new-required-' . $var => 'integer',
            'new-promised-' . $var => 'integer',
            'new-received-' . $var => 'integer'
          ];

          $validator = Validator::make(Input::all(), $rules);

          if ($validator->fails())
          {
            return redirect('/envy/author/cause/' . $cause->ngo->user_id)
              ->withErrors($validator);
          }
          else
          {
            $item = new Item;
            $item->cause_id = $cause->cause_id;
            $item->item_name = Input::get('new-name-' . $var);
            $item->item_required = (int)Input::get('new-required-' . $var);
            $item->item_promised = (int)Input::get('new-promised-' . $var);
            $item->item_received = (int)Input::get('new-received-' . $var);
            $item->save();
            $changed = true;
          }
        }
      }

      foreach ($items as $var)
      {
        if (Input::get('name-' . $var->item_id))
        {
          $rules = ['name-' . $var->item_id => 'required|string',
            'required-' . $var->item_id => 'integer',
            'promised-' . $var->item_id => 'integer',
            'received-' . $var->item_id => 'integer'
          ];

          $validator = Validator::make(Input::all(), $rules);

          if ($validator->fails())
          {
            return redirect('/envy/author/cause/' . $cause->ngo->user_id)
              ->withErrors($validator);
          }
          else
          {
            $item = Item::where('item_id', (int)$var->item_id)->first();
            $item->item_name = Input::get('name-' . $var->item_id);
            $item->item_required = (int)Input::get(
              'required-' . $var->item_id);
            $item->item_promised = (int)Input::get(
              'promised-' . $var->item_id);
            $item->item_received = (int)Input::get(
              'received-' . $var->item_id);
            $item->save();
            $changed = true;
          }
        }
      }

      if ($changed)
      {
        return view('ngos.causeView', [
          'cause' => $item->cause,
        ]);
      }
    }
    elseif (Input::get('status'))
    {

      if (Input::get('completed'))
      {
        $cause->is_completed = true;
        $cause->save();

        return view('ngos.causeView', [
          'cause' => $cause,
        ]);
      }
      else
      {
        return redirect('/envy/author/cause/' . $cause->ngo->user_id);
      }
    }
  }

  public function storeCause(Request $request, Ngo $ngo)
  {
    $cause = new Cause;

    $rules = ['title' => 'required|string|max:255',
      'description' => 'required|string',
      'venue' => 'string|min:5',
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
      return redirect('/envy/author/' . $ngo->user_id)
        ->withErrors($validator);
    }
    else
    {
      $date = (new DateTime())->format('Y-m-d H:i:s');

      $cause->user_id = $ngo->user_id;
      $cause->cause_title = $request->title;
      $cause->cause_description = $request->description;
      $cause->cause_venue = $request->venue;
      $cause->started = $date;
      $cause->save();

      // return view('ngos.causeView', [
      //   'cause' => $cause,
      // ]);
    }
  
    $changed = false;

    foreach ([1, 2, 3, 4, 5] as $var)
    {
      if (Input::get('new-name-' . $var))
      {
        $rules = ['new-name-' . $var => 'required|string',
          'new-required-' . $var => 'integer',
          'new-promised-' . $var => 'integer',
          'new-received-' . $var => 'integer'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
          return redirect('/envy/author/' . $ngo->user_id)
            ->withErrors($validator);
        }
        else
        {
          $item = new Item;
          $item->cause_id = $cause->cause_id;
          $item->item_name = Input::get('new-name-' . $var);
          $item->item_required = (int)Input::get('new-required-' . $var);
          $item->item_promised = (int)Input::get('new-promised-' . $var);
          $item->item_received = (int)Input::get('new-received-' . $var);
          $item->save();
          // $changed = true;
        }
      }
    }

    
    return view('ngos.causeView', [
      'cause' => $item->cause,
    ]);
  }

  public function messageView(Request $request, Ngo $ngo)
  {
    return view('authors.messageView', [
      'ngo' => $ngo
    ]);
  }
}
