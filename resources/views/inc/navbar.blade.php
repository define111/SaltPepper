<header class="header">
  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
    <div class="container-fluid">
      <div class="d-flex"><a href="\" class="navbar-brand py-1"><img src="{{ URL::asset('img/logo.svg') }}"></a>
        <form action="#" id="search" class="form-inline d-none d-sm-flex">
          <div class="input-label-absolute input-label-absolute-left input-reset input-expand ml-lg-2 ml-xl-3">
            <label for="search_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
            <input id="search_search" placeholder="Search" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
            <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas"></i></button>
          </div>
        </form>
      </div>
      <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
      <!-- Navbar Collapse -->
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <form action="#" id="searchcollapsed" class="form-inline my-2 d-sm-none">
          <div class="input-label-absolute input-label-absolute-left input-reset w-100">
            <label for="searchcollapsed_search" class="label-absolute"><i class="fa fa-search"></i><span class="sr-only">What are you looking for?</span></label>
            <input id="searchcollapsed_search" placeholder="Search" aria-label="Search" class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
            <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas">           </i></button>
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown"><a id="homeDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle active">
              More Info</a>
          <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu"><a href="\customers" class="dropdown-item">Find a local business that suits you</a><a href="\providers" class="dropdown-item">Find long term customers</a><a href="\locations" class="dropdown-item">For Restaurants</a></div>
          </li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Help</a>
          </li>
          <li class="nav-item ml-lg-3"><a href="/events/create" class="btn_secondary btn">Organize Speed Dating</a></li>

          <!-- Authentication Links -->
          @guest
            <li class="nav-item ml-lg-3"><a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a></li>
          @if (Route::has('register'))
            <li class="nav-item ml-lg-3"><a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a></li>
          @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/home">Home</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
</header>
