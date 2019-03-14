@extends('layouts.app')

@section('content')
<a href="/events" class="my-1 btn_grey btn btn-primary ">Go Back</a>
<!-- Hero Section-->
<section style="background-image: url('https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1515164783716-8e6920f3e77c.jpg');" class="pt-7 pb-5 d-flex align-items-end dark-overlay bg-cover">
  <div class="container overlay-content">
    <div class="d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end">
      <div class="text-white mb-4 mb-lg-0">
        <div class="badge badge-pill badge-transparent px-3 py-2 mb-4">{{$event->category}}</div>
        <h1 class="text-shadow verified">{{$event->sideA}} treffen auf {{$event->sideB}}</h1>
        <p><i class="fa-map-marker-alt fas mr-2"></i> 53 Broadway, Brooklyn, NY 1129</p>
        <p class="mb-0 d-flex align-items-center"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-gray-200 mr-4">                   </i>8 Reviews</p>
      </div>
      {{-- @if(!Auth::guest())
        @if(Auth::user()->id == $event->user_id) --}}
            <div class="calltoactions"><a href="/events/{{$event->id}}/edit" class="btn btn-primary btn-muted">Edit</a></div>
            {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-primary btn-muted'])}}
            {!!Form::close()!!}
         {{-- @endif
       @endif --}}
      <div class="calltoactions"><a href="#leaveReview" onclick="$('#leaveReview').collapse('show')" data-smooth-scroll class="btn btn-primary">Leave a Review</a></div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- About Listing-->
        <ul class="list-inline text-lg mb-4">
          <li class="list-inline-item mr-3"><i class="far fa-calendar-check mr-1 text-secondary"></i>{{$event->date->format('d.m.Y')}}</li>
          <li class="list-inline-item mr-3"><i class="far fa-clock mr-1 text-secondary"></i>{{$event->date->format('H:i')}}</li>
          <li class="list-inline-item mr-3"><i class="fa fa-users mr-1 text-secondary"></i>{{$event->number_of_persons}} {{$event->sideA}} vs. {{$event->number_of_persons}} {{$event->sideB}}</li>
        </ul>
        <div class="text-block">
          <h3 class="mb-3">About</h3>
          <p class="text-muted">{!!$event->description!!}</p>
          <p class="text-sm"><a href="#">Contact your host NAME for additional questions<i class="fa fa-long-arrow-alt-right ml-2"></i></a></p>
        </div>
        <div class="text-block">
          <!-- Listing Location-->
          <h3 class="mb-4">Location</h3>
          <div class="map-wrapper-300 mb-3">
            <div id="detailMap" class="h-100"></div>
          </div>
        </div>
        <div class="text-block">
            <div class="media"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-10.jpg" alt="Jack London" class="avatar avatar-lg mr-4">
              <div class="media-body">
                <p> <span class="text-muted text-uppercase text-sm">Hosted by </span><br><strong>Jack London</strong></p>
                <p class="text-muted text-sm mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                <p class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <p class="text-sm"><a href="#">See Jack's 3 other listings <i class="fa fa-long-arrow-alt-right ml-2"></i></a></p>
              </div>
            </div>
          </div>
        <div class="text-block">
          <p class="subtitle text-sm text-primary">Reviews    </p>
          <h5 class="mb-4">Reviews from Guests</h5>
          <div class="media d-block d-sm-flex review">
            <div class="text-md-center mr-4 mr-xl-5"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-8.jpg" alt="Padmé Amidala" class="d-block avatar avatar-xl p-2 mb-2"><span class="text-uppercase text-muted text-sm">Dec 2018</span></div>
            <div class="media-body">
              <h6 class="mt-2 mb-1">Padmé Amidala</h6>
              <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i>
              </div>
              <p class="text-muted text-sm">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections     </p>
            </div>
          </div>
          <div class="media d-block d-sm-flex review">
            <div class="text-md-center mr-4 mr-xl-5"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-2.jpg" alt="Luke Skywalker" class="d-block avatar avatar-xl p-2 mb-2"><span class="text-uppercase text-muted text-sm">Dec 2018</span></div>
            <div class="media-body">
              <h6 class="mt-2 mb-1">Luke Skywalker</h6>
              <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-gray-200"></i>
              </div>
              <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.     </p>
            </div>
          </div>
          <div class="media d-block d-sm-flex review">
            <div class="text-md-center mr-4 mr-xl-5"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-3.jpg" alt="Princess Leia" class="d-block avatar avatar-xl p-2 mb-2"><span class="text-uppercase text-muted text-sm">Dec 2018</span></div>
            <div class="media-body">
              <h6 class="mt-2 mb-1">Princess Leia</h6>
              <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-primary"></i><i class="fa fa-xs fa-star text-gray-200"></i><i class="fa fa-xs fa-star text-gray-200"></i>
              </div>
              <p class="text-muted text-sm">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.     </p>
            </div>
          </div>
          <div class="py-5">
            <button type="button" data-toggle="collapse" data-target="#leaveReview" aria-expanded="false" aria-controls="leaveReview" class="btn btn-outline-primary">Leave a review</button>
            <div id="leaveReview" class="collapse mt-4">
              <h5 class="mb-4">Leave a review</h5>
              <form id="contact-form" method="get" action="#" class="form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name" class="form-label">Your name *</label>
                      <input type="text" name="name" id="name" placeholder="Enter your name" required="required" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="rating" class="form-label">Your rating *</label>
                      <select name="rating" id="rating" class="custom-select focus-shadow-0">
                        <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                        <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                        <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                        <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                        <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Your email *</label>
                  <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                </div>
                <div class="form-group">
                  <label for="review" class="form-label">Review text *</label>
                  <textarea rows="4" name="review" id="review" placeholder="Enter your review" required="required" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post review</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div style="top: 100px;" class="p-4 shadow ml-lg-4 rounded sticky-top">
          <p class="text-muted"><span class="text-primary h2">{{$event->price}}€</span> per person</p>
          <li class="list-inline-item mb-3">
            <div class="d-flex align-items-center text-sm">
              <div class="icon-circle bg-secondary mr-2"><i class="fa fa-check"></i></div><span>Welcome drink included</span>
            </div>
          </li>
          <li class="list-inline-item mb-3">
            <div class="d-flex align-items-center text-sm">
              <div class="icon-circle bg-secondary mr-2"><i class="fa fa-check"></i></div><span>{{$event->created_at->format('d.m.Y')}}, {{$event->created_at->format('H:i')}}</span>
            </div>
          </li>
          <li class="list-inline-item mb-3">
            <div class="d-flex align-items-center text-sm">
              <div class="icon-circle bg-secondary mr-2"><i class="fa fa-check"></i></div><span>{{$event->place}}, {{$event->address}}</span>
            </div>
          </li>
          <li class="list-inline-item mb-1">
            <div class="d-flex align-items-center text-sm">
              <div class="icon-circle bg-secondary mr-2"><i class="fa fa-check"></i></div><span>On-site support by your Host (link)</span>
            </div>
          </li>
          <hr class="my-3">
          <div class="media align-items-center">
            <div class="media-body">
              <h3 class="title text-lg text-primary card-title text-center">{{$event->sideA}} vs. {{$event->sideB}}</h4>
            </div>
          </div>
          <form id="booking-form" method="get" action="#" autocomplete="off" class="form">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Book your event</button>
            </div>
          </form>
          <hr class="my-3">
          <div class="text-center">
            <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> Bookmark This event</a></p>
            <p class="text-muted text-sm">79 people bookmarked this event </p>
          </div>
        </div>
    </div>
  </div>
</section>
<div class="py-4 bg-gray-100">
      <div class="container">
        <h5 class="mb-0">Similar events</h5>
        <p class="subtitle text-sm text-primary mb-4">You may also like         </p>
        <!-- Slider main container-->
        <div data-swiper="{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;roundLengths&quot;:true,&quot;breakpoints&quot;:{&quot;1200&quot;:{&quot;slidesPerView&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:2},&quot;565&quot;:{&quot;slidesPerView&quot;:1}},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;clickable&quot;:true,&quot;dynamicBullets&quot;:true}}" class="swiper-container swiper-container-mx-negative swiper-init">
          <!-- Additional required wrapper-->
          <div class="swiper-wrapper pb-5">
            <!-- Slides-->
            <div class="swiper-slide h-auto px-2">
              <!-- place item-->
              <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="w-100 h-100">
                <div class="card h-100 border-0 shadow">
                  <div class="card-img-top overflow-hidden gradient-overlay"> <img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/photo-1484154218962-a197022b5858.jpg" alt="Modern, Well-Appointed Room" class="img-fluid"/><a href="detail-rooms.html" class="tile-link"></a>
                    <div class="card-img-overlay-bottom z-index-20">
                      <div class="media text-white text-sm align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-0.jpg" alt="Pamela" class="avatar avatar-border-white mr-2"/>
                        <div class="media-body">Pamela</div>
                      </div>
                    </div>
                    <div class="card-img-overlay-top text-right"><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                        <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a></div>
                  </div>
                  <div class="card-body d-flex align-items-center">
                    <div class="w-100">
                      <h6 class="card-title"><a href="detail-rooms.html" class="text-decoration-none text-dark">Modern, Well-Appointed Room</a></h6>
                      <div class="d-flex card-subtitle mb-3">
                        <p class="flex-grow-1 mb-0 text-muted text-sm">Private room</p>
                        <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                        </p>
                      </div>
                      <p class="card-text text-muted"><span class="h4 text-primary">$80</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <!-- place item-->
              <div data-marker-id="59c0c8e322f3375db4d89128" class="w-100 h-100">
                <div class="card h-100 border-0 shadow">
                  <div class="card-img-top overflow-hidden gradient-overlay"> <img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/photo-1426122402199-be02db90eb90.jpg" alt="Cute Quirky Garden apt, NYC adjacent" class="img-fluid"/><a href="detail-rooms.html" class="tile-link"></a>
                    <div class="card-img-overlay-bottom z-index-20">
                      <div class="media text-white text-sm align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-7.jpg" alt="John" class="avatar avatar-border-white mr-2"/>
                        <div class="media-body">John</div>
                      </div>
                    </div>
                    <div class="card-img-overlay-top text-right"><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                        <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a></div>
                  </div>
                  <div class="card-body d-flex align-items-center">
                    <div class="w-100">
                      <h6 class="card-title"><a href="detail-rooms.html" class="text-decoration-none text-dark">Cute Quirky Garden apt, NYC adjacent</a></h6>
                      <div class="d-flex card-subtitle mb-3">
                        <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                        <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                        </p>
                      </div>
                      <p class="card-text text-muted"><span class="h4 text-primary">$121</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <!-- place item-->
              <div data-marker-id="59c0c8e3a31e62979bf147c9" class="w-100 h-100">
                <div class="card h-100 border-0 shadow">
                  <div class="card-img-top overflow-hidden gradient-overlay"> <img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="Modern Apt - Vibrant Neighborhood!" class="img-fluid"/><a href="detail-rooms.html" class="tile-link"></a>
                    <div class="card-img-overlay-bottom z-index-20">
                      <div class="media text-white text-sm align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-8.jpg" alt="Julie" class="avatar avatar-border-white mr-2"/>
                        <div class="media-body">Julie</div>
                      </div>
                    </div>
                    <div class="card-img-overlay-top text-right"><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                        <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a></div>
                  </div>
                  <div class="card-body d-flex align-items-center">
                    <div class="w-100">
                      <h6 class="card-title"><a href="detail-rooms.html" class="text-decoration-none text-dark">Modern Apt - Vibrant Neighborhood!</a></h6>
                      <div class="d-flex card-subtitle mb-3">
                        <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                        <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i><i class="fa fa-star text-gray-300">                                  </i>
                        </p>
                      </div>
                      <p class="card-text text-muted"><span class="h4 text-primary">$75</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <!-- place item-->
              <div data-marker-id="59c0c8e3503eb77d487e8082" class="w-100 h-100">
                <div class="card h-100 border-0 shadow">
                  <div class="card-img-top overflow-hidden gradient-overlay"> <img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/photo-1494526585095-c41746248156.jpg" alt="Sunny Private Studio-Apartment" class="img-fluid"/><a href="detail-rooms.html" class="tile-link"></a>
                    <div class="card-img-overlay-bottom z-index-20">
                      <div class="media text-white text-sm align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-9.jpg" alt="Barbora" class="avatar avatar-border-white mr-2"/>
                        <div class="media-body">Barbora</div>
                      </div>
                    </div>
                    <div class="card-img-overlay-top text-right"><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                        <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a></div>
                  </div>
                  <div class="card-body d-flex align-items-center">
                    <div class="w-100">
                      <h6 class="card-title"><a href="detail-rooms.html" class="text-decoration-none text-dark">Sunny Private Studio-Apartment</a></h6>
                      <div class="d-flex card-subtitle mb-3">
                        <p class="flex-grow-1 mb-0 text-muted text-sm">Shared room</p>
                        <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                        </p>
                      </div>
                      <p class="card-text text-muted"><span class="h4 text-primary">$93</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <!-- place item-->
              <div data-marker-id="59c0c8e39aa2eed0626e485d" class="w-100 h-100">
                <div class="card h-100 border-0 shadow">
                  <div class="card-img-top overflow-hidden gradient-overlay"> <img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/photo-1522771739844-6a9f6d5f14af.jpg" alt="Mid-Century Modern Garden Paradise" class="img-fluid"/><a href="detail-rooms.html" class="tile-link"></a>
                    <div class="card-img-overlay-bottom z-index-20">
                      <div class="media text-white text-sm align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-10.jpg" alt="Jack" class="avatar avatar-border-white mr-2"/>
                        <div class="media-body">Jack</div>
                      </div>
                    </div>
                    <div class="card-img-overlay-top text-right"><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                        <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a></div>
                  </div>
                  <div class="card-body d-flex align-items-center">
                    <div class="w-100">
                      <h6 class="card-title"><a href="detail-rooms.html" class="text-decoration-none text-dark">Mid-Century Modern Garden Paradise</a></h6>
                      <div class="d-flex card-subtitle mb-3">
                        <p class="flex-grow-1 mb-0 text-muted text-sm">Entire house</p>
                        <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                        </p>
                      </div>
                      <p class="card-text text-muted"><span class="h4 text-primary">$115</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto px-2">
              <!-- place item-->
              <div data-marker-id="59c0c8e39aa2edasd626e485d" class="w-100 h-100">
                <div class="card h-100 border-0 shadow">
                  <div class="card-img-top overflow-hidden gradient-overlay"> <img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/photo-1488805990569-3c9e1d76d51c.jpg" alt="Brooklyn Life, Easy to Manhattan" class="img-fluid"/><a href="detail-rooms.html" class="tile-link"></a>
                    <div class="card-img-overlay-bottom z-index-20">
                      <div class="media text-white text-sm align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/avatar/avatar-11.jpg" alt="Stuart" class="avatar avatar-border-white mr-2"/>
                        <div class="media-body">Stuart</div>
                      </div>
                    </div>
                    <div class="card-img-overlay-top text-right"><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                        <svg class="svg-icon text-white">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a></div>
                  </div>
                  <div class="card-body d-flex align-items-center">
                    <div class="w-100">
                      <h6 class="card-title"><a href="detail-rooms.html" class="text-decoration-none text-dark">Brooklyn Life, Easy to Manhattan</a></h6>
                      <div class="d-flex card-subtitle mb-3">
                        <p class="flex-grow-1 mb-0 text-muted text-sm">Private room</p>
                        <p class="flex-shrink-1 mb-0 card-stars text-xs text-right"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                        </p>
                      </div>
                      <p class="card-text text-muted"><span class="h4 text-primary">$123</span> per night</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- If we need pagination-->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    {{-- @if(!Auth::guest())
        @if(Auth::user()->id == $event->user_id)
            <a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['eventsController@destroy', $event->id], 'method' => 'event', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
         @endif
    @endif --}}

    {{-- Script --}}
    <script>
    createDetailMap({
      mapId: 'detailMap',
      mapZoom: 14,
      mapCenter: [40.732346, -74.0014247],
      circleShow: true,
      circlePosition: [40.732346, -74.0014247]
    })

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.19.0/jquery.daterangepicker.min.js"> </script>
    <script src="js/datepicker-detail.js">   </script>
@endsection
