<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class SearchController extends Controller
{
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
      $jsonEvents =["type" => "FeatureCollection", "features" => []];
      foreach ($yourEvents as $key => $event) {
        $jsonEvents['features'][$key] = [
          "type" => "Feature",
          "geometry" => [
            "type" => "Point",
            "coordinates" => [
              $event->coordinate_lon,
              $event->coordinate_lat
            ]
          ],
          "properties" => [
            "id" => "59c0c8e33b1527bfe2abaf92",
            "index" => 0,
            "isActive" => true,
            "logo" => "http =>//placehold.it/32x32",
            "image" => "restaurant-1430931071372-38127bd472b8.jpg",
            "link" => "detail.html",
            "url" => "#",
            "name" => "Blue Hills",
            "category" => "Restaurants",
            "email" => "biancabriggs@bluehill.com",
            "stars" => 4,
            "phone" => "+1 (920) 407-3975",
            "address" => "151 Karweg Place, Waumandee, Iowa, 5508",
            "about" => "Cupidatat excepteur non dolore laborum et quis nostrud veniam dolore deserunt. Pariatur dolore ut in elit id nulla. Irure nostrud sint deserunt enim Lorem. Do eu esse consequat mollit labore commodo officia labore voluptate sit voluptate cupidatat.\r\n",
            "tags" => [
              "Restaurant",
              "Contemporary"
            ]
          ]
        ];
      }



      return view ('events.index')->with('events', $yourEvents)->with('jsonEvents', $jsonEvents);
    }
}
