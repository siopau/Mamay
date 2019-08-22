<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
          <a class="navbar-brand mr-lg-5" href="/"><img src="../img/brand/white.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="../index.html">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <i class="ni ni-ui-04 d-lg-none"></i>
                  <span class="nav-link-inner--text">Marketplace</span>
                </a>
                <div class="dropdown-menu dropdown-menu-xl">
                  <div class="dropdown-menu-inner">
                    <a href="/donate-milk" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                        <i class="ni ni-tag"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-primary mb-md-1">Donate Breastmilk</h6>
                        <p class="description d-none d-md-inline-block mb-0">A healthy lactating mother who volunteers to give breast milk for the benefit of other
                          infants in need of breast milk</p>
                      </div>
                    </a>
                    <a href="/purchase-milk" class="media d-flex align-items-center">
                      <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                        <i class="ni ni-shop"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="heading text-primary mb-md-1">Purchase Breastmilk</h6>
                        <p class="description d-none d-md-inline-block mb-0">Search Faster, Better & Smarter Here! Find Where To Buy Breastmilk.</p>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">About us</span>
                </a>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Login</a>
                  <a href="#" class="dropdown-item">Register</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <i class="ni ni-collection d-lg-none"></i>
                  <span class="nav-link-inner--text">Articles</span>
                </a>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Breastfeeding Chemenelet</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item dropdown">
                  <a href="/cart" class="nav-link" role="button">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="nav-link-inner--text">Cart</span>
                  </a>
              </li>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
      
                  </ul>
      
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>
      
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </ul>
          </div>
        </div>
      </nav>