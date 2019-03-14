@extends('layouts.app')

@section('content')
<!-- Leaflet Maps-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 py-5 p-xl-5">
      <h1 class="text-serif mb-4">Treffe Partnern in München</h1>
      <hr class="my-4">
      <form action="#">
        <div class="row">
          <div class="col-xl-4 col-md-6 mb-4">
            <label for="form_search" class="form-label">Keyword</label>
            <div class="input-label-absolute input-label-absolute-right">
              <div class="label-absolute"><i class="fa fa-search"></i></div>
              <input type="search" name="search" placeholder="Keywords" id="form_search" class="form-control pr-4">
            </div>
          </div>
          <div class="col-xl-4 col-md-6 mb-4">
            <label for="form_neighbourhood" class="form-label">Neighbourhood</label>
            <select name="neighbourhood" id="form_neighbourhood" multiple data-style="btn-selectpicker" data-live-search="true" data-selected-text-format="count &gt; 1" title="" class="selectpicker form-control">
              <option value="neighbourhood_0">Battery Park City    </option>
              <option value="neighbourhood_1">Bowery    </option>
              <option value="neighbourhood_2">Carnegie Hill    </option>
              <option value="neighbourhood_3">Central Park    </option>
              <option value="neighbourhood_4">Chelsea    </option>
              <option value="neighbourhood_5">Chinatown    </option>
              <option value="neighbourhood_6">Civic Center    </option>
              <option value="neighbourhood_7">East Harlem    </option>
              <option value="neighbourhood_8">Financial District    </option>
              <option value="neighbourhood_9">Flatiron    </option>
              <option value="neighbourhood_10">Garment District    </option>
              <option value="neighbourhood_11">Gramercy Park    </option>
              <option value="neighbourhood_12">Greenwich Village    </option>
              <option value="neighbourhood_13">East Village    </option>
              <option value="neighbourhood_14">West Village    </option>
              <option value="neighbourhood_15">Hamilton Heights    </option>
              <option value="neighbourhood_16">Harlem    </option>
              <option value="neighbourhood_17">Hell's Kitchen / Clinton    </option>
              <option value="neighbourhood_18">Inwood    </option>
              <option value="neighbourhood_19">Kips Bay    </option>
              <option value="neighbourhood_20">Lenox Hill    </option>
              <option value="neighbourhood_21">Little Italy    </option>
              <option value="neighbourhood_22">Lower Eastside    </option>
              <option value="neighbourhood_23">Madison Square    </option>
              <option value="neighbourhood_24">Manhattan Valley    </option>
              <option value="neighbourhood_25">Meatpacking District    </option>
              <option value="neighbourhood_26">Midtown    </option>
              <option value="neighbourhood_27">Morningside Heights    </option>
              <option value="neighbourhood_28">Murray Hill    </option>
              <option value="neighbourhood_29">NoHo    </option>
              <option value="neighbourhood_30">NoLita    </option>
              <option value="neighbourhood_31">Roosevelt Island    </option>
              <option value="neighbourhood_32">SoHo    </option>
              <option value="neighbourhood_33">Stuyvesant Town (Stuyvesant Square)    </option>
              <option value="neighbourhood_34">Sutton Place    </option>
              <option value="neighbourhood_35">Times Square    </option>
              <option value="neighbourhood_36">Tribeca    </option>
              <option value="neighbourhood_37">Turtle Bay    </option>
              <option value="neighbourhood_38">Upper Eastside    </option>
              <option value="neighbourhood_39">Upper Westside    </option>
              <option value="neighbourhood_40">Washington Heights    </option>
              <option value="neighbourhood_41">Yorkville    </option>
            </select>
          </div>
          <div class="col-xl-4 col-md-6 mb-4">
            <label for="form_category" class="form-label">Category</label>
            <select name="category" id="form_category" multiple data-style="btn-selectpicker" data-selected-text-format="count &gt; 1" title="" class="selectpicker form-control">
              <option value="category_0">Hipster    </option>
              <option value="category_1">Music club    </option>
              <option value="category_2">Bar    </option>
              <option value="category_3">Pub    </option>
              <option value="category_4">Deli    </option>
              <option value="category_5">Bistro    </option>
            </select>
          </div>
          <div class="col-12 mb-4">
            <label class="form-label">Tag</label>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" id="type_0" name="type[]" class="custom-control-input">
                  <label for="type_0" class="custom-control-label">Hipster</label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" id="type_1" name="type[]" class="custom-control-input">
                  <label for="type_1" class="custom-control-label">Music club</label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" id="type_2" name="type[]" class="custom-control-input">
                  <label for="type_2" class="custom-control-label">Bar</label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" id="type_3" name="type[]" class="custom-control-input">
                  <label for="type_3" class="custom-control-label">Pub</label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" id="type_4" name="type[]" class="custom-control-input">
                  <label for="type_4" class="custom-control-label">Deli</label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" id="type_5" name="type[]" class="custom-control-input">
                  <label for="type_5" class="custom-control-label">Bistro</label>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-12 pb-4">
            <div id="moreFilters" class="collapse">
              <div class="mb-4">
                <label class="form-label">Cuisine</label>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="cuisine_0" name="cuisine[]" class="custom-control-input">
                      <label for="cuisine_0" class="custom-control-label">Fusion</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="cuisine_1" name="cuisine[]" class="custom-control-input">
                      <label for="cuisine_1" class="custom-control-label">Indian</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="cuisine_2" name="cuisine[]" class="custom-control-input">
                      <label for="cuisine_2" class="custom-control-label">French</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="cuisine_3" name="cuisine[]" class="custom-control-input">
                      <label for="cuisine_3" class="custom-control-label">American</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="cuisine_4" name="cuisine[]" class="custom-control-input">
                      <label for="cuisine_4" class="custom-control-label">Mexican</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="cuisine_5" name="cuisine[]" class="custom-control-input">
                      <label for="cuisine_5" class="custom-control-label">Other</label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="row">
                <div class="col-xl-6 mb-4">
                  <label class="form-label">Price</label>
                  <div id="slider-snap" class="text-primary"></div>
                  <div class="nouislider-values">
                    <div class="min">From $<span id="slider-snap-value-from"></span></div>
                    <div class="max">To $<span id="slider-snap-value-to"></span></div>
                  </div>
                  <input type="hidden" name="pricefrom" id="slider-snap-input-from" value="40">
                  <input type="hidden" name="priceto" id="slider-snap-input-to" value="110">
                </div>
                <div class="col-xl-6 mb-4">
                  <label class="form-label">Vegetarians</label>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="vegetarians_0" name="vegetarians" class="custom-control-input">
                        <label for="vegetarians_0" class="custom-control-label">All</label>
                      </div>
                    </li>
                    <li class="list-inline-item">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="vegetarians_1" name="vegetarians" class="custom-control-input">
                        <label for="vegetarians_1" class="custom-control-label">Vegetarian only</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <button type="submit" class="btn btn-primary"> <i class="fas fa-filter mr-1"></i>Filter                </button>
          </div>
          <div class="col-6 mb-4 text-right">
            <button type="button" data-toggle="collapse" data-target="#moreFilters" aria-expanded="false" aria-controls="moreFilters" data-expanded-text="Less filters" data-collapsed-text="More filters" class="btn btn-link btn-collapse text-secondary pl-0">More filters</button>
          </div>
        </div>
      </form>
      <hr class="my-4">
      <div class="d-flex justify-content-between align-items-center flex-column flex-md-row mb-4">
        <div class="mr-3">
          <p class="mb-3 mb-md-0"><strong>12</strong> results found</p>
        </div>
        <div>
          <label for="form_sort" class="form-label mr-2">Sort by</label>
          <select name="sort" id="form_sort" data-style="btn-selectpicker" title="" class="selectpicker">
            <option value="sortBy_0">Most popular   </option>
            <option value="sortBy_1">Recommended   </option>
            <option value="sortBy_2">Newest   </option>
            <option value="sortBy_3">Oldest   </option>
            <option value="sortBy_4">Closest   </option>
          </select>
        </div>
      </div>
      <div class="row">
      {{-- Show the events --}}
      @if(count($events) > 0)
          @foreach($events as $event)
            <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 mb-5">
              <div class="card h-100 border-0 shadow">
                {{-- <img style="width:100%" src="/storage/cover_images/{{$event->cover_image}}"> --}}
                <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1430931071372-38127bd472b8.jpg); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
                  <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="/events/{{$event->id}}" class="tile-link"></a>
                  <div class="card-img-overlay-bottom z-index-20">
                    <h4 class="text-white text-shadow">{{$event->sideA}} treffen auf {{$event->sideB}}</h4>
                    <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                    </i>
                    </p>
                  </div>
                  <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                    <div class="badge badge-transparent badge-pill px-3 py-2">{{$event->category}}</div><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                      <svg class="svg-icon text-white">
                        <use xlink:href="#heart-1"> </use>
                      </svg></a>
                  </div>
                </div>
                <div class="card-body">
                  <p class="text-sm text-muted mb-3">{!!$event->description!!}</p>
                  <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">{{$event->user->name}}</a></p>
                  {{-- by {{$event->user->name}} --}}
                  <p class="text-sm mb-0"><a href="#" class="mr-1">{{$event->tags}}</a>
                  </p>
                </div>
              </div>
            </div>
          @endforeach
      @else
          <p>No events found</p>
      @endif
        <!-- venue item-->
        <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 mb-5">
          <div class="card h-100 border-0 shadow">
            <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1430931071372-38127bd472b8.jpg); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
              <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="detail.html" class="tile-link"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <h4 class="text-white text-shadow">Blue Hill</h4>
                <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                    </i>
                </p>
              </div>
              <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                <div class="badge badge-transparent badge-pill px-3 py-2">Restaurants</div><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-sm text-muted mb-3"> Cupidatat excepteur non dolore laborum et quis nostrud veniam dolore deserunt. Pariatur dolore ut in elit id nulla. Irur...</p>
              <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
              <p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#" class="mr-1">Contemporary</a>
              </p>
            </div>
          </div>
        </div>
        <!-- venue item-->
        <div data-marker-id="59c0c8e322f3375db4d89128" class="col-sm-6 mb-5">
          <div class="card h-100 border-0 shadow">
            <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1436018626274-89acd1d6ec9d.jpg); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
              <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="detail.html" class="tile-link"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <h4 class="text-white text-shadow">Plutorque</h4>
                <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                </p>
              </div>
              <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                <div class="badge badge-transparent badge-pill px-3 py-2">Restaurant</div><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-sm text-muted mb-3"> Proident irure eiusmod velit veniam consectetur id minim irure et nostrud mollit magna velit. Commodo amet proident aliq...</p>
              <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
              <p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#" class="mr-1">Fusion</a>
              </p>
            </div>
          </div>
        </div>
        <!-- venue item-->
        <div data-marker-id="59c0c8e3a31e62979bf147c9" class="col-sm-6 mb-5">
          <div class="card h-100 border-0 shadow">
            <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1466978913421-dad2ebd01d17.jpg); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
              <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="detail.html" class="tile-link"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <h4 class="text-white text-shadow">Junipoor</h4>
                <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                </p>
              </div>
              <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                <div class="badge badge-transparent badge-pill px-3 py-2">Music club</div><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-sm text-muted mb-3"> Lorem amet ex duis in et fugiat consectetur laborum eiusmod labore. Quis cupidatat et do dolor in in magna. Eu sit quis ...</p>
              <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
              <p class="text-sm mb-0"><a href="#" class="mr-1">Music,</a><a href="#" class="mr-1">Techno,</a><a href="#" class="mr-1">House</a>
              </p>
            </div>
          </div>
        </div>
        <!-- venue item-->
        <div data-marker-id="59c0c8e3503eb77d487e8082" class="col-sm-6 mb-5">
          <div class="card h-100 border-0 shadow">
            <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1477763858572-cda7deaa9bc5.jpg); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
              <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="detail.html" class="tile-link"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <h4 class="text-white text-shadow">Musix</h4>
                <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                    </i><i class="fa fa-star text-gray-300">                    </i>
                </p>
              </div>
              <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                <div class="badge badge-transparent badge-pill px-3 py-2">Music club</div><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-sm text-muted mb-3"> Deserunt eiusmod Lorem proident consequat elit culpa laboris ea cupidatat. Consequat dolore proident ipsum qui sint enim...</p>
              <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
              <p class="text-sm mb-0"><a href="#" class="mr-1">Music,</a><a href="#" class="mr-1">Club,</a><a href="#" class="mr-1">Rock</a>
              </p>
            </div>
          </div>
        </div>
        <!-- venue item-->
        <div data-marker-id="59c0c8e39aa2eed0626e485d" class="col-sm-6 mb-5">
          <div class="card h-100 border-0 shadow">
            <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1504087697492-238a6bf49ce8.jpg); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
              <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="detail.html" class="tile-link"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <h4 class="text-white text-shadow">Prosure</h4>
                <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                </p>
              </div>
              <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                <div class="badge badge-transparent badge-pill px-3 py-2">Restaurant</div><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-sm text-muted mb-3"> Cillum sunt reprehenderit ea non irure veniam dolore commodo labore fugiat est consequat velit. Cupidatat nisi qui ad si...</p>
              <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
              <p class="text-sm mb-0"><a href="#" class="mr-1">Nisi,</a><a href="#" class="mr-1">Ex,</a><a href="#" class="mr-1">Eiusmod</a>
              </p>
            </div>
          </div>
        </div>
        <!-- venue item-->
        <div data-marker-id="59c0c8e39aa2edasd626e485d" class="col-sm-6 mb-5">
          <div class="card h-100 border-0 shadow">
            <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/restaurant-1505275350441-83dcda8eeef5.jpg); min-height: 200px;" class="card-img-top overflow-hidden dark-overlay bg-cover">
              <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a href="detail.html" class="tile-link"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <h4 class="text-white text-shadow">Take That</h4>
                <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                    </i>
                </p>
              </div>
              <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                <div class="badge badge-transparent badge-pill px-3 py-2">Café</div><a href="javascript: void();" class="card-fav-icon position-relative z-index-40">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a>
              </div>
            </div>
            <div class="card-body">
              <p class="text-sm text-muted mb-3"> Cillum sunt reprehenderit ea non irure veniam dolore commodo labore fugiat est consequat velit. Cupidatat nisi qui ad si...</p>
              <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt Damon</a></p>
              <p class="text-sm mb-0"><a href="#" class="mr-1">Nisi,</a><a href="#" class="mr-1">Ex,</a><a href="#" class="mr-1">Eiusmod</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <nav aria-label="Page navigation example">
        <ul class="pagination pagination-template d-flex justify-content-center">
          <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
          <li class="page-item active"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
        </ul>
      </nav>
    </div>
    <div class="col-lg-6 map-side-lg pr-lg-0">
      <div id="categorySideMap" class="map-full"></div>
    </div>
  </div>
</div>

<!-- Map-->
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
<script src="js/map-category.js"></script>
<script>
  createListingsMap({
      mapId: 'categorySideMap',
      jsonFile: 'js/restaurants-geojson.json'
  });
</script>



@endsection
