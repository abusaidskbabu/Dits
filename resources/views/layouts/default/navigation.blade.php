<div class="header-area">
  {{-- <div class="header-top-bar-info bg-gray d-none d-lg-block">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="top-bar-wrap">
                      <div class="top-bar-left">
                          <div class="top-bar-text"><a href="#" class="font-medium display-inline">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?</div>
                      </div>
                      <div class="top-bar-right">
                          <ul class="top-bar-info">
                              <li class="info-item">
                                  <a href="tel:01228899900" class="info-link">
                                      <i class="info-icon fa fa-phone"></i>
                                      <span class="info-text"><strong>0122 8899900</strong></span>
                                  </a>
                              </li>
                              <li class="info-item">
                                  <i class="info-icon fa fa-map-marker-alt"></i>
                                  <span class="info-text">58 Howard Street #2 San Francisco</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}

  <div class="header-bottom-wrap header-sticky bg-white">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="header position-relative">
                      <!-- brand logo -->
                      <div class="header__logo">
                        @if(File::exists(public_path('/uploads/images/'.$setting->logo)))
                            <a href="/"><img class="img-fluid avatar-96" src="/uploads/images/{{ $setting->logo }}" alt="">  </a>
                        @else
                            <a href="/"><img src="{{url('/')}}/uploads/images/backend-logo.jpg" alt=""> </a>
                        @endif
                      </div>

                      <div class="header-right">

                          <!-- navigation menu -->
                          <div class="header__navigation menu-style-three d-none d-xl-block">
                              <nav class="navigation-menu">

                                  <ul>
                                    <li class="has-children--multilevel-submenu">
                                        <a href="/"><span>Home</span></a>
                                    </li>
                                    <li class="has-children--multilevel-submenu">
                                      <a href="{{ route('about') }}"><span>About Us</span></a>
                                      </li>
                                      <li class="has-children--multilevel-submenu">
                                          <a href="/services"><span>Services</span></a>
                                      </li>
                                      <li class="has-children--multilevel-submenu">
                                          <a href="/"><span>Portfolio</span></a>
                                      </li>
                                      <li class="has-children--multilevel-submenu">
                                          <a href="/"><span>Projects</span></a>
                                      </li>
                                      <li class="has-children has-children--multilevel-submenu">
                                          <a href="#"><span>IT solutions</span></a>
                                          <ul class="submenu">
                                              <li><a href="it-services.html"><span>IT Services</span></a></li>
                                              <li><a href="managed-it-service.html"><span>Managed IT Services</span></a></li>
                                              <li><a href="industries.html"><span>Industries</span></a></li>
                                              <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                              <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                                          </ul>
                                      </li>
                                 
                                      <li class="has-children--multilevel-submenu">
                                          <a href="/posts"><span>Blog</span></a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
                              <form action="#" class="search-form-top-active">
                                  <div class="search-icon" id="search-overlay-trigger">
                                      <a href="javascript:void(0)">
                                          <i class="fa fa-search"></i>
                                      </a>
                                  </div>
                              </form>
                          </div>

                          <!-- mobile menu -->
                          <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                              <i></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


</div>

