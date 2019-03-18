<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('user')->paginate(10);
        // $events = Event::orderBy('created_at','asc')->paginate(10);
        // echo $events->user->name;
        //Create a geojson for showing the events on the map
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
        // return($geojson);
        return view ('events.index')->with('events', $events)->with('jsonEvents', $jsonEvents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request, [
    'city' => 'required',
    'place' => 'required',
    'date' => 'required',
    'time' => 'required',
    'price' => 'required',
    'category' => 'required',
    'sideA' => 'required',
    'sideB' => 'required',
    'number_of_persons' => 'required',
    'description' => 'required',
    'tags' => 'required'
    ]);

    // Handle File Upload
    // if($request->hasFile('cover_image')){
    //     // Get filename with the extension
    //     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
    //     // Get just filename
    //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //     // Get just ext
    //     $extension = $request->file('cover_image')->getClientOriginalExtension();
    //     // Filename to store
    //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
    //     // Upload Image
    //     $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
    // } else {
    //     $fileNameToStore = 'noimage.jpg';
    // }

    // Create Event
    $event = new Event;
    $event->city = $request->input('city');
    $event->place = $request->input('place');
    $event->address = $request->input('address');
    $event->date = $request->input('date') . " " . $request->input('time') . ":00";
    $event->price = $request->input('price');
    $event->category = $request->input('category');
    $event->sideA = $request->input('sideA');
    $event->sideB = $request->input('sideB');
    $event->number_of_persons = $request->input('number_of_persons');
    $event->description = $request->input('description');
    $event->tags = $request->input('tags');
    //add the coordinates for the map
    $address = $event->address;
    $address = str_replace(" ", "+", $address);
    $city = $event->city;
    $event->user_id = auth()->user()->id;
    // Create a stream
    $opts = array('http'=>array('header'=>"User-Agent: StevesCleverAddressScript 3.7.6\r\n"));
    $context = stream_context_create($opts);
    // Open the file using the HTTP headers set above
    $nominatim = file_get_contents('https://nominatim.openstreetmap.org/search?q='.$address.','.$city.'&format=json', false, $context);
    // $nominatim = file_get_contents('https://nominatim.openstreetmap.org/search?q=simbacherstraße+17,M%C3%BCnchen&format=json', false, $context);
    $nominatim1=json_decode($nominatim);
    $event->coordinate_lat = $nominatim1[0]->lat;
    $event->coordinate_lon = $nominatim1[0]->lon;
    //
    // $event->background_image = $fileNameToStore;
    $event->save();

    return redirect('/events')->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $event = Event::find($id);
      return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
      'city' => 'required',
      'place' => 'required',
      'date' => 'required',
      'time' => 'required',
      'price' => 'required',
      'category' => 'required',
      'sideA' => 'required',
      'sideB' => 'required',
      'number_of_persons' => 'required',
      'description' => 'required',
      'tags' => 'required'
      ]);

      // Handle File Upload
      // if($request->hasFile('cover_image')){
      //     // Get filename with the extension
      //     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
      //     // Get just filename
      //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      //     // Get just ext
      //     $extension = $request->file('cover_image')->getClientOriginalExtension();
      //     // Filename to store
      //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
      //     // Upload Image
      //     $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
      // } else {
      //     $fileNameToStore = 'noimage.jpg';
      // }

      // Create Event
      $event = Event::find($id);
      $event->city = $request->input('city');
      $event->place = $request->input('place');
      $event->date = $request->input('date') . " " . $request->input('time') . ":00";
      $event->price = $request->input('price');
      $event->category = $request->input('category');
      $event->sideA = $request->input('sideA');
      $event->sideB = $request->input('sideB');
      $event->number_of_persons = $request->input('number_of_persons');
      $event->description = $request->input('description');
      $event->tags = $request->input('tags');
      // $event->user_id = auth()->user()->id;
      // $event->background_image = $fileNameToStore;
      $event->save();
      //
      return redirect('/events/'.$id)->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/events')->with('success', 'Event Removed');
    }
}
