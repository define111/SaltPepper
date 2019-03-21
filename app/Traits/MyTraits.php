<?php // Code in app/Traits/MyTrait.php

namespace App\Traits;

trait MyTraits
{
    protected function GenerateGEOJSON($events)
    {
      $jsonEvents =["type" => "FeatureCollection", "features" => []];
      foreach ($events as $key => $event) {
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
            "name" => $event->sideA." treffen auf ".$event->sideB,
            "image" => "restaurant-1430931071372-38127bd472b8.jpg",
            "link" => "/events/{$event->id}",
            "place" => $event->place,
            "category" => $event->category,
            "organiser" => $event->user->name,
            "rating_user" => $event->user->rating,
            "address" => "{$event->address}, {$event->city}",
            "about" => $event->description,
          ]
        ];
      };
    return $jsonEvents;
    }
}
