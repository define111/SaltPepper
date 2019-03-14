@extends('layouts.app')

@section('content')
  <section class="hero-home">
    <div class="swiper-container hero-slider">
      <div class="swiper-wrapper dark-overlay">
        <div style="background-image:url(img/photo/puzzle.jpg)" class="swiper-slide"></div>
        <div style="background-image:url(img/photo/photo-1501621965065-c6e1cf6b53e2.jpg)" class="swiper-slide"></div>
        <div style="background-image:url(img/photo/photo-1519974719765-e6559eac2575.jpg)" class="swiper-slide"></div>
        <div style="background-image:url(img/photo/photo-1490578474895-699cd4e2cf59.jpg)" class="swiper-slide"></div>
        <div style="background-image:url(img/photo/photo-1534850336045-c6c6d287f89e.jpg)" class="swiper-slide"></div>
      </div>
    </div>
    <div class="container py-6 py-md-7 text-white z-index-20">
      <div class="row">
        <div class="col-xl-10">
          <div class="text-center text-lg-left">
            <p class="subtitle letter-spacing-4 mb-2 text-secondary text-shadow">The best business experience</p>
            <h1 class="display-3 font-weight-bold text-shadow">Find long term partners</h1>
          </div>
          <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
            <form action="/search" method="POST" role="search">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-4 d-flex align-items-center form-group">
                  <input type="text" name="search" placeholder="What are you searching for?" class="form-control border-0 shadow-0">
                </div>
                <div class="col-lg-3 d-flex align-items-center form-group">
                  <div class="input-label-absolute input-label-absolute-right w-100">
                    <select title="City" name="location" data-style="btn-form-control" class="selectpicker">
                      <option value="München">München</option>
                      <option value="München">Stuttgart</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center form-group no-divider">
                  <select title="Categories" name="category" data-style="btn-form-control" class="selectpicker">
                    <option value="Sport">Sport</option>
                    <option value="Art">Art</option>
                    <option value="Love">Love</option>
                    <option value="Household">Household</option>
                  </select>
                </div>
                <div class="col-lg-2">
                  <button type="submit" class="btn btn-primary btn-block rounded-xl h-100">Search </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
     <section class="pt-4 pb-6">
       <div class="container">
         <div class="pb-lg-4">
           <p class="subtitle text-secondary">One-of-a-kind business matching app</p>
           <h2 class="mb-5">Discover great local businesses around you</h2>
         </div>
         <div class="row">
           <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
             <div class="px-0 pr-lg-3">
               <div class="icon-rounded mb-3 bg-secondary-light">
                 <svg class="svg-icon w-2rem h-2rem text-secondary">
                   <use xlink:href="#love-pin-1"> </use>
                 </svg>
               </div>
               <h3 class="h6 text-uppercase">Find the perfect couch</h3>
               <p class="text-muted text-sm">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed in</p>
             </div>
           </div>
           <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
             <div class="px-0 pr-lg-3">
               <div class="icon-rounded mb-3 bg-primary-light">
                 <svg class="svg-icon w-2rem h-2rem text-primary">
                   <use xlink:href="#pay-by-card-1"> </use>
                 </svg>
               </div>
               <h3 class="h6 text-uppercase">Find a nanny for your children</h3>
               <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit</p>
             </div>
           </div>
           <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
             <div class="px-0 pr-lg-3">
               <div class="icon-rounded mb-3 bg-secondary-light">
                 <svg class="svg-icon w-2rem h-2rem text-secondary">
                   <use xlink:href="#food-1"> </use>
                 </svg>
               </div>
               <h3 class="h6 text-uppercase">Fall in love</h3>
               <p class="text-muted text-sm">His room, a proper human room although a little too small, lay peacefully between its four familiar </p>
             </div>
           </div>
           <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
             <div class="px-0 pr-lg-3">
               <div class="icon-rounded mb-3 bg-primary-light">
                 <svg class="svg-icon w-2rem h-2rem text-primary">
                   <use xlink:href="#pay-1"> </use>
                 </svg>
               </div>
               <h3 class="h6 text-uppercase">Find your perfect tennant</h3>
               <p class="text-muted text-sm">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of </p>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6 bg-gray-100">
       <div class="container">
         <div class="text-center pb-lg-4">
           <p class="subtitle text-secondary">Find a perfect match</p>
           <h2 class="mb-5">Popular speed datings around you</h2>
         </div>
       </div>
       <div class="container-fluid">
         <!-- Slider main container-->
         <div class="swiper-container swiper-container-mx-negative items-slider-full px-lg-5">
           <!-- Additional required wrapper-->
           <div class="swiper-wrapper pb-5">
             <!-- Slides-->
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e322f3375db4d89128" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e3a31e62979bf147c9" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e3503eb77d487e8082" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e39aa2eed0626e485d" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e39aa2edasd626e485d" class="w-100 h-100">
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
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e322f3375db4d89128" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e3a31e62979bf147c9" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e3503eb77d487e8082" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e39aa2eed0626e485d" class="w-100 h-100">
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
             </div>
             <div class="swiper-slide h-auto px-2">
               <!-- venue item-->
               <div data-marker-id="59c0c8e39aa2edasd626e485d" class="w-100 h-100">
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
           </div>
           <!-- If we need pagination-->
           <div class="swiper-pagination"></div>
         </div>
         <div class="text-center mt-5"><a href="/events" class="btn btn-outline-primary">See all places</a></div>
       </div>
     </section>
     <!-- Divider Section-->
     <section class="py-6 py-lg-7 position-relative dark-overlay"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/photo/photo-1507915135761-41a0a222c709.jpg" alt="" class="bg-image">
       <div class="container">
         <div class="overlay-content text-white py-lg-5 text-center">
           <p class="subtitle text-white letter-spacing-4 mb-4">Find the best spots</p>
           <h3 class="display-3 font-weight-bold text-serif text-shadow mb-5">Travel & Explore</h3>
           <p class="lead text-shadow mb-5">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p><a href="category-rooms.html" class="btn btn-primary">Get started</a>
         </div>
       </div>
     </section>
     <!-- Brands Section-->
     <section class="py-6">
       <div class="container">
         <h5 class="text-center text-uppercase letter-spacing-3 mb-5">Our brands</h5>
         <!-- Brands Slider-->
         <div class="swiper-container brands-slider">
           <div class="swiper-wrapper pb-5">
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-1.svg" alt="Brand 1" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-2.svg" alt="Brand 2" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-3.svg" alt="Brand 3" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-4.svg" alt="Brand 4" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-5.svg" alt="Brand 5" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-6.svg" alt="Brand 6" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-1.svg" alt="Brand 1" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-2.svg" alt="Brand 2" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-3.svg" alt="Brand 3" class="img-fluid w-6rem opacity-7"></div>
             <!-- item-->
             <div class="swiper-slide h-auto d-flex align-items-center justify-content-center"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/brand/brand-4.svg" alt="Brand 4" class="img-fluid w-6rem opacity-7"></div>
           </div>
           <div class="swiper-pagination"></div>
         </div>
       </div>
     </section>
     <!-- Divider Section-->
     <section class="py-6 bg-gray-100">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-left">
             <p class="subtitle text-secondary">Start using Directory today</p>
             <p class="text-lg">Directory is the best way to find & discover great local businesses</p>
             <p class="text-muted mb-0">This won’t be the first time you look for a listing directory theme, but with Listify it may be the last time.</p>
           </div>
           <div class="col-lg-6 d-flex align-items-center justify-content-center">
             <div class="text-center">
               <p class="mb-2"><a href="#" class="btn btn-lg btn-primary">Create Your Account</a></p>
               <p class="text-muted text-small">It's free!</p>
             </div>
           </div>
         </div>
       </div>
     </section>
     <!-- Instagram-->
     <section>
       <div class="container-fluid px-0">
         <div class="swiper-container instagram-slider">
           <div class="swiper-wrapper">
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-1.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-2.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-3.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-4.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-5.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-6.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-7.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-8.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-9.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-10.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-11.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-12.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-13.jpg" alt="" class="img-fluid hover-scale"></a></div>
             <div class="swiper-slide overflow-hidden"><a href="#"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-0/img/instagram/instagram-14.jpg" alt="" class="img-fluid hover-scale"></a></div>
           </div>
         </div>
       </div>
     </section>
@endsection
