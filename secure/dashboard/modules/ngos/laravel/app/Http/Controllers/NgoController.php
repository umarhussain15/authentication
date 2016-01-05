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
use App\Message;
use DateTime;

class NgoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  
  public function index()
  {
    $ngos = Ngo::all();

    return view('ngos.index', [
      'ngos' => $ngos,
    ]);
  }

  public function ngoView(Ngo $ngo)
  {
    $causes = Cause::where('user_id', $ngo->user_id)->get();

    return view('ngos.ngoView', [
      'causes' => $causes,
    ]);
  }

  public function causeView(Cause $cause)
  {
    // $items = Item::where('cause_id', $cause->cause_id)->get();
    // $ngo = Ngo::where('user_id', $cause->user_id)->first();
    $cause = Cause::where('cause_id', $cause->cause_id)->first();
    
    return view('ngos.causeView', [
      // 'ngo' => $ngo,
      'cause' => $cause,
      // 'items' => $items,
    ]);
  }

  public function viewAll()
  {
    $causes = Cause::all();
    
    return view('ngos.allView', [
      'causes' => $causes,
    ]);
  }

  public function contactView(Ngo $ngo)
  {
    return view('ngos.contactView',[
      'ngo' => $ngo,
    ]);
  }

  public function storeMessage(Request $request, Ngo $ngo)
  {
    $rules = ['sender' => 'required|max:255',
      'subject' => 'required|max:255',
      'body' => 'required|min:20'
    ];

    $validator = validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
      return redirect('/envy/' . $ngo->user_id . '/contact-us')
        ->withErrors($validator);
    }
    else
    {
      $message = new Message;
      $message->user_id = $ngo->user_id;
      $message->sender = $request->sender;
      $message->message_subject = $request->subject;
      $message->message_body = $request->body;
      $message->sent_date = (new DateTime())->format('Y-m-d H:i:s');
      $message->save();

      return redirect('/envy/' . $ngo->user_id . '/contact-us');
    }
    
  }
}
