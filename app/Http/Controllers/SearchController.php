<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Traits\MyTraits;

class SearchController extends Controller
{
  use MyTraits;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $location = $request->get('location');
      $category = $request->get('category');
      $yourEvents = Event::with('user')
                        ->where('city', 'LIKE', '%' .$location . '%')
                        ->where('category', 'LIKE', '%' .$category . '%')
                        ->orderBy('date', 'desc')
                        ->get();
      //Create a geojson for showing the events on the map
      $jsonEvents = $this->GenerateGEOJSON($yourEvents);
      return view ('events.index')->with('events', $yourEvents)->with('jsonEvents', $jsonEvents);
    }
}
