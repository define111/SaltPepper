<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Traits\MyTraits;

class EventsController extends Controller
{
  use MyTraits;
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
        //Create a geojson for showing the events on the map, use the trait
        $jsonEvents = $this->GenerateGEOJSON($events);
        // return($geojson);
        return view ('events.index')->with('events', $events)->with('jsonEvents', $jsonEvents);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */


     //Multi step
     public function createStep1(Request $request)
     {
         $event = $request->session()->get('event');
         return view('events.create-step1',compact('event', $event));
     }
     /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function postCreateStep1(Request $request)
     {
     $validatedData = $request->validate([
       'sideA' => 'required',
       'sideB' => 'required',
       'location' => 'required',
       'category' => 'required',
       'date' => 'required',
       'starttime' => 'required',
       'duration' => 'required',
       'price' => 'required',
       'people' => 'required',
       'registration' => 'required',
       'break' => 'required',
       'registration' => 'required',
       'pricedetails' => 'required',
        ]);
     //to add the separte prices for the groups if needed
     if($validatedData['pricedetails'] == 'nein'){
       $validatedData = $request->validate([
           'priceA' => 'required',
           'priceB' => 'required',
       ]);
     }else{
     }
           $validatedData['date'] = strtotime($request->input('date') . " " . $request->input('starttime') . ":00");
           unset($validatedData['starttime']);
           if(empty($request->session()->get('event'))){
               $event = new Event();
               $event->fill($validatedData);
               $request->session()->put('event', $event);
           }else{
               $event = $request->session()->get('event');
               $event->fill($validatedData);
               $request->session()->put('event', $event);
           }
           return redirect('/events/create-step2');
           // print_r ($event);
       }

       /**
        * Show the step 2 Form for creating a new event.
        *
        * @return \Illuminate\Http\Response
        */
       public function createStep2(Request $request)
       {
           $event = $request->session()->get('event');
           return view('events.create-step2',compact('event', $event));
       }
       /**
      * Post Request to store step1 info in session
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
       public function postCreateStep2(Request $request)
       {
       $event = $request->session()->get('event');
       $validatedData = $request->validate([
          'description' => 'required',
        ]);
        $event->description = $validatedData['description'];
        $request->session()->put('event', $event);
        return redirect('/events/create-step3');
        }

         /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
        public function createStep3(Request $request)
        {
            $event = $request->session()->get('event');
            return view('events.create-step3',compact('event',$event));
        }

        /**
   * Show the Product Review page
   *
   * @return \Illuminate\Http\Response
   */
  public function removeImage(Request $request)
  {
      $product = $request->session()->get('product');
      $product->productImg = null;
      return view('products.create-step2',compact('product', $product));
  }

 public function store(Request $request)
 {
   $event = $request->session()->get('event');
   $event->save();
   return redirect('/events')->with('success', 'Event Created');
 }
}
