<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function landing(){
      return view('pages.landing');
  }

  public function eventmanagers(){
      return view('pages.eventmanagers');
  }

  public function locations(){
      return view('pages.locations');
  }

  public function providers(){
      return view('pages.providers');
  }

  public function customers(){
      return view('pages.customers');
  }
}
