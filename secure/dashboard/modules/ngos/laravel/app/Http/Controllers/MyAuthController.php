<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Auth;
use Hash;
use App\User;
use App\Ngo;

class MyAuthController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  
  public function getLogin()
  {
    return view('auth.login');
  }

  public function postLogin()
  {
    $rules = ['email' => 'required|email',
      'password' => 'required|min:5'];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
      return redirect('/envy/auth/login')->withErrors($validator)
        ->withInput(Input::except('password'));
    }
    else
    {
      $credentials = ['user_email' => Input::get('email'),
        'password' => Input::get('password'),
        'is_user_ngo' => 1];

      if (Auth::attempt($credentials, true))
      {
        return redirect('/envy/author/' . User::where('user_email', 
          Input::get('email'))->first()->user_id);
      }
      else
      {
        $check = User::where('user_email', Input::get('email'))->first();

        if ($check && !($check->is_user_ngo))
        {
          $validator->getMessageBag()->add('NGO', 
            'Not registered as NGO.');
        }
        else
        {
          $validator->getMessageBag()->add('Credentials', 
            'No user registered with given email ID.');
        }
        
        return redirect('/envy/auth/login/')->withErrors($validator);
      }
    }
  }

  public function getLogout()
  {
    Auth::logout();
    return redirect('/envy');
  }

  public function getRegister()
  {
    return view('auth.register');
  }

  public function postRegister()
  {
    $rules = [
      'email'=>'required|email',
      'ngo-name' => 'required|min:5',
      'ngo-desc' => 'string|min:20',
      'ngo-email' => 'required|email',
      'ngo-phone' => 'required|min:7',
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
      return redirect('/envy/auth/register')->withErrors($validator)
        ->withInput();
    }
    else
    {
      $user = User::where('user_email', Input::get('email'))->first();
      
      if ($user && !($user->is_user_ngo))
      {
        $user->is_user_ngo = true;
        $user->save();

        $ngo = new Ngo;
        $ngo->user_id = $user->user_id;
        $ngo->ngo_name = Input::get('ngo-name');
        $ngo->ngo_email = Input::get('ngo-email');
        $ngo->ngo_phone = Input::get('ngo-phone');
        $ngo->ngo_description = Input::get('ngo-desc');
        $ngo->save();
      }

      // $user = new User;
      // $user->user_name = Input::get('name');
      // $user->user_email = Input::get('email');
      // $user->password = Hash::make(Input::get('password'));
      // $user->is_user_ngo = true;
      // $user->save();

      return redirect('/envy/auth/login');
    }

  }

  
}
