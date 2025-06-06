<aside class="left-sidebar with-vertical">
    <div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('user.dashboard')}}" class="text-nowrap text-center fw-bolder fs-6 logo-img">
                {{-- <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" /> --}}
                <span style="color: #4F73D9; font-weight:bolder; font-size: xx-large;">Investor Lands</span> {{-- <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" /> --}}
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fw-bolder fs-5 d-block d-xl-none">
                IL
            </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('user.dashboard')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-grid"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" id="get-url" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-home-plus"></i>
                        </span>
                        <span class="hide-menu">Listings</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('user.mylistings')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">My Listings</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('user.myprofile')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('user.notifications')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-bell"></i>
                        </span>
                        <span class="hide-menu">Notifications</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('user.logoutuserpanel')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-logout-2 text-danger"></i>
                        </span>
                        <span class="hide-menu text-danger">Log out</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<header class="topbar">
    <div class="with-vertical">
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Header -->
        <!-- ---------------------------------- -->
        <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
                <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                    <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                {{-- <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                      <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="ti ti-search"></i>
                      </a>
                  </li> --}}
            </ul>

            {{-- <ul class="navbar-nav quick-links d-none d-lg-flex align-items-center">
                  <!-- ------------------------------- -->
                  <!-- start apps Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item nav-icon-hover-bg rounded w-auto dropdown d-none d-lg-block mx-0">
                      <div class="hover-dd">
                          <a class="nav-link" href="javascript:void(0)">
                              Apps<span class="mt-1">
                                  <i class="ti ti-chevron-down fs-3"></i>
                              </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                              <div class="row">
                                  <div class="col-8">
                                      <div class="ps-7 pt-7">
                                          <div class="border-bottom">
                                              <div class="row">
                                                  <div class="col-6">
                                                      <div class="position-relative">
                                                          <a href="app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-chat.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      Chat Application
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                                                              </div>
                                                          </a>
                                                          <a href="app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-invoice.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      Invoice App
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                                                              </div>
                                                          </a>
                                                          <a href="app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-mobile.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      Contact Application
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                                                              </div>
                                                          </a>
                                                          <a href="app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-message-box.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      Email App
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                                                              </div>
                                                          </a>
                                                      </div>
                                                  </div>
                                                  <div class="col-6">
                                                      <div class="position-relative">
                                                          <a href="page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-cart.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      User Profile
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">learn more information</span>
                                                              </div>
                                                          </a>
                                                          <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-date.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      Calendar App
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">Get dates</span>
                                                              </div>
                                                          </a>
                                                          <a href="app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-lifebuoy.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      Contact List Table
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                                                              </div>
                                                          </a>
                                                          <a href="app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-application.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                              </div>
                                                              <div>
                                                                  <h6 class="mb-1 fw-semibold fs-3">
                                                                      Notes Application
                                                                  </h6>
                                                                  <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                                                              </div>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row align-items-center py-3">
                                              <div class="col-8">
                                                  <a class="fw-semibold d-flex align-items-center lh-1" href="javascript:void(0)">
                                                      <i class="ti ti-help fs-6 me-2"></i>Frequently
                                                      Asked Questions
                                                  </a>
                                              </div>
                                              <div class="col-4">
                                                  <div class="d-flex justify-content-end pe-4">
                                                      <button class="btn btn-primary">Check</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-4 ms-n4">
                                      <div class="position-relative p-7 border-start h-100">
                                          <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                          <ul class="">
                                              <li class="mb-3">
                                                  <a class="fw-semibold bg-hover-primary" href="page-pricing.html">Pricing Page</a>
                                              </li>
                                              <li class="mb-3">
                                                  <a class="fw-semibold bg-hover-primary" href="authentication-login.html">Authentication Design</a>
                                              </li>
                                              <li class="mb-3">
                                                  <a class="fw-semibold bg-hover-primary" href="authentication-register.html">Register Now</a>
                                              </li>
                                              <li class="mb-3">
                                                  <a class="fw-semibold bg-hover-primary" href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-error.html">404 Error Page</a>
                                              </li>
                                              <li class="mb-3">
                                                  <a class="fw-semibold bg-hover-primary" href="app-notes.html">Notes App</a>
                                              </li>
                                              <li class="mb-3">
                                                  <a class="fw-semibold bg-hover-primary" href="page-user-profile.html">User Application</a>
                                              </li>
                                              <li class="mb-3">
                                                  <a class="fw-semibold bg-hover-primary" href="page-account-settings.html">Account Settings</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end apps Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown-hover d-none d-lg-block">
                      <a class="nav-link" href="app-chat.html">Chat</a>
                  </li>
                  <li class="nav-item dropdown-hover d-none d-lg-block">
                      <a class="nav-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html">Calendar</a>
                  </li>
                  <li class="nav-item dropdown-hover d-none d-lg-block">
                      <a class="nav-link" href="app-email.html">Email</a>
                  </li>
              </ul> --}}

            <div class="d-block d-lg-none py-4">
                <a href="index.html" class="text-nowrap logo-img">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti ti-dots fs-7"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                        <i class="ti ti-align-justified fs-7"></i>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                            <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                <i class="ti ti-bell-ringing"></i>
                                @php
                                use App\Models\Nortification;
                                $authuser = Auth::guard('customer')->user();
                                $data = Nortification::where('sendto', $authuser->user_type)
                                ->orWhere('sendto', 'all')
                                ->orderBy('created_at', 'DESC')->get();
                                @endphp

                                @if($data->isNotEmpty())
                                <div class="notification bg-primary rounded-circle"></div>
                                @endif

                            </a>
                            <div style="height: 300px; overflow-y: scroll;" class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                    <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                </div>
                                @if($data->isNotEmpty())
                                <div>
                                    @foreach ($data->take(5) as $row)
                                    <div class="message-body" data-simplebar>
                                        <a href="#" class="py-6 px-7 text-wrap row d-flex align-items-center dropdown-item">
                                            <div class="col-md-4 p-0">
                                                <img src="{{ asset('assets/images/Notificaitons/'.$row->notificationimg) }}" alt="user" class="rounded img-fluid" />
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="mb-1 fw-semibold lh-base">
                                                    {{ $row->notificationname }}
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary text-wrap"> {{ Str::limit($row->notificationdes,20) }}</span>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    <div class="py-6 px-7 mb-1">
                                        <a href="{{ route('user.notifications') }}">
                                            <button class="btn btn-outline-primary w-100">
                                                See All Notifications
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                @else
                                <div class="d-flex justify-content-center align-items-center mt-5">
                                    <p class="mb-0 text-muted">No new notifications</p>
                                </div>
                                @endif
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="user-profile-img">
                                        @if(Auth::guard('customer')->user()->profile_photo_path)
                                        @if(Str::startsWith(Auth::guard('customer')->user()->profile_photo_path, 'https://'))
                                        <img src="{{ Auth::guard('customer')->user()->profile_photo_path }}" alt="modernize-img" width="40" height="40">
                                        @else
                                        <img src="{{ asset('assets/images/Users/' . Auth::guard('customer')->user()->profile_photo_path) }}" alt="modernize-img" width="40" height="40">
                                        @endif
                                        @else
                                        <img src="{{ asset('assets/images/defaultuser.png') }}" alt="modernize-img" width="40" height="40">
                                        @endif
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">

                                        @if(Auth::guard('customer')->user()->profile_photo_path)
                                        @if(Str::startsWith(Auth::guard('customer')->user()->profile_photo_path, 'https://'))
                                        <img src="{{ Auth::guard('customer')->user()->profile_photo_path }}" alt="modernize-img" width="40" height="40">
                                        @else
                                        <img src="{{ asset('assets/images/Users/' . Auth::guard('customer')->user()->profile_photo_path) }}" alt="modernize-img" width="40" height="40">
                                        @endif
                                        @else
                                        <img src="{{ asset('assets/images/defaultuser.png') }}" alt="modernize-img" width="40" height="40">
                                        @endif
                                        <div class="ms-3">
                                            @if (Auth::guard('customer')->user())
                                            <h5 class="mb-1 fs-3">{{ Auth::guard('customer')->user()->name }}</h5>
                                            @else
                                            <h5 class="mb-1 fs-3">Guest User</h5>
                                            @endif
                                            <p class="mb-0 d-flex align-items-center gap-2">
                                                <i class="ti ti-mail fs-4"></i>
                                                {{ Auth::guard('customer')->user()->email }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <a href="{{ route('user.myprofile') }}" class="py-8 px-7 mt-8 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-account.svg" alt="modernize-img" width="24" height="24" />
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-1 fs-3 fw-semibold lh-base">
                                                    My Profile
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <form method="GET" action="{{ route('user.logoutuserpanel') }}">
                                            @csrf
                                            <button type="submit" class=" w-100 btn btn-outline-primary">Log Out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end profile Dropdown -->
                        <!-- ------------------------------- -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ---------------------------------- -->
        <!-- End Vertical Layout Header -->
        <!-- ---------------------------------- -->

        <!-- ------------------------------- -->
        <!-- apps Dropdown in Small screen -->
        <!-- ------------------------------- -->
        <!--  Mobilenavbar -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
            <nav class="sidebar-nav scroll-sidebar">
                <div class="offcanvas-header justify-content-between">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/favicon.ico" alt="modernize-img" class="img-fluid" />
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body h-n80" data-simplebar="" data-simplebar>
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span>
                                    <i class="ti ti-apps"></i>
                                </span>
                                <span class="hide-menu">Apps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level my-3">
                                <li class="sidebar-item py-2">
                                    <a href="app-chat.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-chat.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">
                                                Chat Application
                                            </h6>
                                            <span class="fs-2 d-block text-muted">New messages arrived</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a href="app-invoice.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-invoice.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                            <span class="fs-2 d-block text-muted">Get latest invoice</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-cotact.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-mobile.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">
                                                Contact Application
                                            </h6>
                                            <span class="fs-2 d-block text-muted">2 Unsaved Contacts</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a href="app-email.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-message-box.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                            <span class="fs-2 d-block text-muted">Get new emails</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a href="page-user-profile.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-cart.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">
                                                User Profile
                                            </h6>
                                            <span class="fs-2 d-block text-muted">learn more information</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-date.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">
                                                Calendar App
                                            </h6>
                                            <span class="fs-2 d-block text-muted">Get dates</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a href="app-contact2.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-lifebuoy.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">
                                                Contact List Table
                                            </h6>
                                            <span class="fs-2 d-block text-muted">Add new contact</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a href="app-notes.html" class="d-flex align-items-center">
                                        <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-application.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                        </div>
                                        <div>
                                            <h6 class="mb-1 bg-hover-primary">
                                                Notes Application
                                            </h6>
                                            <span class="fs-2 d-block text-muted">To-do and Daily tasks</span>
                                        </div>
                                    </a>
                                </li>
                                <ul class="px-8 mt-7 mb-4">
                                    <li class="sidebar-item mb-3">
                                        <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a class="fw-semibold text-dark" href="page-pricing.html">Pricing Page</a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a class="fw-semibold text-dark" href="authentication-login.html">Authentication Design</a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a class="fw-semibold text-dark" href="authentication-register.html">Register Now</a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a class="fw-semibold text-dark" href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-error.html">404 Error Page</a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a class="fw-semibold text-dark" href="app-notes.html">Notes App</a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a class="fw-semibold text-dark" href="page-user-profile.html">User Application</a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a class="fw-semibold text-dark" href="page-account-settings.html">Account Settings</a>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-message-dots"></i>
                                </span>
                                <span class="hide-menu">Chat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-calendar"></i>
                                </span>
                                <span class="hide-menu">Calendar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-mail"></i>
                                </span>
                                <span class="hide-menu">Email</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="app-header with-horizontal">
        <nav class="navbar navbar-expand-xl container-fluid p-0">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
                    <a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-xl-block">
                    <a href="index.html" class="text-nowrap nav-link">
                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="modernize-img" />
                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/light-logo.svg" class="light-logo" width="180" alt="modernize-img" />
                    </a>
                </li>
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-xl-flex">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-search"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">
                <!-- ------------------------------- -->
                <!-- start apps Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item nav-icon-hover-bg rounded w-auto dropdown d-none d-lg-flex">
                    <div class="hover-dd">
                        <a class="nav-link" href="javascript:void(0)">
                            Apps<span class="mt-1">
                                <i class="ti ti-chevron-down fs-3"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                            <div class="row">
                                <div class="col-8">
                                    <div class="ps-7 pt-7">
                                        <div class="border-bottom">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-chat.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Chat Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-invoice.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Invoice App
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-mobile.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-message-box.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Email App
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-cart.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    User Profile
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">learn more information</span>
                                                            </div>
                                                        </a>
                                                        <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-date.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Calendar App
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get dates</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-lifebuoy.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact List Table
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                                                            </div>
                                                        </a>
                                                        <a href="app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-application.svg" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Notes Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center py-3">
                                            <div class="col-8">
                                                <a class="fw-semibold d-flex align-items-center lh-1" href="javascript:void(0)">
                                                    <i class="ti ti-help fs-6 me-2"></i>Frequently
                                                    Asked Questions
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end pe-4">
                                                    <button class="btn btn-primary">Check</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 ms-n4">
                                    <div class="position-relative p-7 border-start h-100">
                                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                        <ul class="">
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="page-pricing.html">Pricing Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="authentication-login.html">Authentication Design</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="authentication-register.html">Register Now</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-error.html">404 Error Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="app-notes.html">Notes App</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="page-user-profile.html">User Application</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary" href="page-account-settings.html">Account Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ------------------------------- -->
                <!-- end apps Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="app-chat.html">Chat</a>
                </li>
                <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html">Calendar</a>
                </li>
                <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="app-email.html">Email</a>
                </li>
            </ul>
            <div class="d-block d-xl-none">
                <a href="index.html" class="text-nowrap nav-link">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/dark-logo.svg" width="180" alt="modernize-img" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                    <a href="javascript:void(0)" class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                        <i class="ti ti-align-justified fs-7"></i>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <!-- ------------------------------- -->
                        <!-- start language Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                            <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                <i class="ti ti-moon moon"></i>
                            </a>
                            <a class="nav-link sun light-layout" href="javascript:void(0)">
                                <i class="ti ti-sun sun"></i>
                            </a>
                        </li>
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                            <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-flag-en.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                        <div class="position-relative">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-flag-en.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                        </div>
                                        <p class="mb-0 fs-3">English (UK)</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                        <div class="position-relative">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-flag-cn.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                        </div>
                                        <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                        <div class="position-relative">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-flag-fr.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                        </div>
                                        <p class="mb-0 fs-3">français (French)</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                        <div class="position-relative">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-flag-sa.svg" alt="modernize-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                                        </div>
                                        <p class="mb-0 fs-3">عربي (Arabic)</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end language Dropdown -->
                        <!-- ------------------------------- -->

                        <!-- ------------------------------- -->
                        <!-- start shopping cart Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                            <a class="nav-link position-relative" href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="ti ti-basket"></i>
                                <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                            </a>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end shopping cart Dropdown -->
                        <!-- ------------------------------- -->

                        <!-- ------------------------------- -->
                        <!-- start notification Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                            <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                    <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                    <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                </div>
                                <div class="message-body" data-simplebar>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-1 fw-semibold lh-base">
                                                Roman Joined the Team!
                                            </h6>
                                            <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-1 fw-semibold lh-base">
                                                New message
                                            </h6>
                                            <span class="fs-2 d-block text-body-secondary">Salma sent you new message</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-1 fw-semibold lh-base">
                                                Bianca sent payment
                                            </h6>
                                            <span class="fs-2 d-block text-body-secondary">Check your earnings</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-1 fw-semibold lh-base">
                                                Jolly completed tasks
                                            </h6>
                                            <span class="fs-2 d-block text-body-secondary">Assign her new tasks</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-6.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-1 fw-semibold lh-base">
                                                John received payment
                                            </h6>
                                            <span class="fs-2 d-block text-body-secondary">$230 deducted from account</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                        <span class="me-3">
                                            <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-7.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                        </span>
                                        <div class="w-100">
                                            <h6 class="mb-1 fw-semibold lh-base">
                                                Roman Joined the Team!
                                            </h6>
                                            <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="py-6 px-7 mb-1">
                                    <button class="btn btn-outline-primary w-100">
                                        See All Notifications
                                    </button>
                                </div>
                            </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end notification Dropdown -->
                        <!-- ------------------------------- -->

                        <!-- ------------------------------- -->
                        <!-- start profile Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="user-profile-img">
                                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="modernize-img" />
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="py-3 px-7 pb-0">
                                        <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                    </div>
                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="modernize-img" />
                                        <div class="ms-3">
                                            <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                            <span class="mb-1 d-block">Designer</span>
                                            <p class="mb-0 d-flex align-items-center gap-2">
                                                <i class="ti ti-mail fs-4"></i>
                                                info@modernize.com
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <a href="page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-account.svg" alt="modernize-img" width="24" height="24" />
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-1 fs-3 fw-semibold lh-base">
                                                    My Profile
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                                            </div>
                                        </a>
                                        <a href="app-email.html" class="py-8 px-7 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-inbox.svg" alt="modernize-img" width="24" height="24" />
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-1 fs-3 fw-semibold lh-base">
                                                    My Inbox
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
                                            </div>
                                        </a>
                                        <a href="app-notes.html" class="py-8 px-7 d-flex align-items-center">
                                            <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-tasks.svg" alt="modernize-img" width="24" height="24" />
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-1 fs-3 fw-semibold lh-base">
                                                    My Task
                                                </h6>
                                                <span class="fs-2 d-block text-body-secondary">To-do and Daily Tasks</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <div class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="fs-4 mb-3 fw-semibold">
                                                        Unlimited Access
                                                    </h5>
                                                    <button class="btn btn-primary">
                                                        Upgrade
                                                    </button>
                                                </div>
                                                <div class="col-6">
                                                    <div class="m-n4 unlimited-img">
                                                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/unlimited-bg.png" alt="modernize-img" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="authentication-login.html" class="btn btn-outline-primary">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end profile Dropdown -->
                        <!-- ------------------------------- -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<aside class="left-sidebar with-horizontal">
    <!-- Sidebar scroll-->
    <div>
        <!-- Sidebar navigation-->
        <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span>
                            <i class="ti ti-home-2"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="index.html" class="sidebar-link">
                                <i class="ti ti-aperture"></i>
                                <span class="hide-menu">Modern</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index2.html" class="sidebar-link">
                                <i class="ti ti-shopping-cart"></i>
                                <span class="hide-menu">eCommerce</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index3.html" class="sidebar-link">
                                <i class="ti ti-currency-dollar"></i>
                                <span class="hide-menu">NFT</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index4.html" class="sidebar-link">
                                <i class="ti ti-cpu"></i>
                                <span class="hide-menu">Crypto</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index5.html" class="sidebar-link">
                                <i class="ti ti-activity-heartbeat"></i>
                                <span class="hide-menu">General</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index6.html" class="sidebar-link">
                                <i class="ti ti-playlist"></i>
                                <span class="hide-menu">Music</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ============================= -->
                <!-- Apps -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Apps</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span>
                            <i class="ti ti-archive"></i>
                        </span>
                        <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html" class="sidebar-link">
                                <i class="ti ti-calendar"></i>
                                <span class="hide-menu">Calendar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="app-kanban.html" class="sidebar-link">
                                <i class="ti ti-layout-kanban"></i>
                                <span class="hide-menu">Kanban</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="app-chat.html" class="sidebar-link">
                                <i class="ti ti-message-dots"></i>
                                <span class="hide-menu">Chat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-mail"></i>
                                </span>
                                <span class="hide-menu">Email</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="app-contact.html" class="sidebar-link">
                                <i class="ti ti-phone"></i>
                                <span class="hide-menu">Contact Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="app-contact2.html" class="sidebar-link">
                                <i class="ti ti-list-details"></i>
                                <span class="hide-menu">Contact List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="app-notes.html" class="sidebar-link">
                                <i class="ti ti-notes"></i>
                                <span class="hide-menu">Notes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="app-invoice.html" class="sidebar-link">
                                <i class="ti ti-file-text"></i>
                                <span class="hide-menu">Invoice</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="page-user-profile.html" class="sidebar-link">
                                <i class="ti ti-user-circle"></i>
                                <span class="hide-menu">User Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="blog-posts.html" class="sidebar-link">
                                <i class="ti ti-article"></i>
                                <span class="hide-menu">Posts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/blog-detail.html" class="sidebar-link">
                                <i class="ti ti-details"></i>
                                <span class="hide-menu">Detail</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-shop.html" class="sidebar-link">
                                <i class="ti ti-shopping-cart"></i>
                                <span class="hide-menu">Shop</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-shop-detail.html" class="sidebar-link">
                                <i class="ti ti-basket"></i>
                                <span class="hide-menu">Shop Detail</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-product-list.html" class="sidebar-link">
                                <i class="ti ti-list-check"></i>
                                <span class="hide-menu">List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-checkout.html" class="sidebar-link">
                                <i class="ti ti-brand-shopee"></i>
                                <span class="hide-menu">Checkout</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="eco-add-product.html">
                                <i class="ti ti-file-plus"></i>
                                <span class="hide-menu">Add Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="eco-edit-product.html">
                                <i class="ti ti-file-pencil"></i>
                                <span class="hide-menu">Edit Product</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ============================= -->
                <!-- Frontend pages -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Frontend pages</span>
                </li>
                <!-- =================== -->
                <!-- pages -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-app-window"></i>
                        </span>
                        <span class="hide-menu">Frontend pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-landingpage.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Homepage</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-aboutpage.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">About Us</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-contactpage.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Contact Us</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-blogpage.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Blog</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-blogdetailpage.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Blog Details</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ============================= -->
                <!-- PAGES -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">PAGES</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span>
                            <i class="ti ti-notebook"></i>
                        </span>
                        <span class="hide-menu">Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/page-faq.html" class="sidebar-link">
                                <i class="ti ti-help"></i>
                                <span class="hide-menu">FAQ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="page-account-settings.html" class="sidebar-link">
                                <i class="ti ti-user-circle"></i>
                                <span class="hide-menu">Account Setting</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="page-pricing.html" class="sidebar-link">
                                <i class="ti ti-currency-dollar"></i>
                                <span class="hide-menu">Pricing</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-cards.html" class="sidebar-link">
                                <i class="ti ti-cards"></i>
                                <span class="hide-menu">Card</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-banners.html" class="sidebar-link">
                                <i class="ti ti-ad"></i>
                                <span class="hide-menu">Banner</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html" class="sidebar-link">
                                <i class="ti ti-chart-bar"></i>
                                <span class="hide-menu">Charts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/landingpage/index.html" class="sidebar-link">
                                <i class="ti ti-app-window"></i>
                                <span class="hide-menu">Landing Page</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ============================= -->
                <!-- UI -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">UI</span>
                </li>
                <!-- =================== -->
                <!-- UI Elements -->
                <!-- =================== -->
                <li class="sidebar-item mega-dropdown">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-layout-grid"></i>
                        </span>
                        <span class="hide-menu">UI</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="ui-accordian.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Accordian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-badge.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Badge</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-buttons.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Buttons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-dropdowns.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Dropdowns</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-modals.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Modals</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-tab.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Tab</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-tooltip-popover.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Tooltip & Popover</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-notification.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Alerts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-progressbar.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Progressbar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-pagination.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Pagination</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-typography.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Typography</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-bootstrap-ui.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Bootstrap UI</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-breadcrumb.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Breadcrumb</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-offcanvas.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Offcanvas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-lists.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Lists</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-grid.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Grid</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-carousel.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Carousel</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-scrollspy.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Scrollspy</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-spinner.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Spinner</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-link.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Link</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ============================= -->
                <!-- Forms -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Forms</span>
                </li>
                <!-- =================== -->
                <!-- Forms -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-file-text"></i>
                        </span>
                        <span class="hide-menu">Forms</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <!-- form elements -->
                        <li class="sidebar-item">
                            <a href="form-inputs.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Forms Input</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-input-groups.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Input Groups</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-input-grid.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Input Grid</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-checkbox-radio.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Checkbox & Radios</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-bootstrap-switch.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Bootstrap Switch</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-select2.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Select2</span>
                            </a>
                        </li>
                        <!-- form inputs -->
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-basic.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Basic Form</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-vertical.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Form Vertical</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-horizontal.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Form Horizontal</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-actions.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Form Actions</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-row-separator.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Row Separator</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-bordered.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Form Bordered</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-detail.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Form Detail</span>
                            </a>
                        </li>
                        <!-- form wizard -->
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-wizard.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Form Wizard</span>
                            </a>
                        </li>
                        <!-- Quill Editor -->
                        <li class="sidebar-item">
                            <a href="form-editor-quill.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Quill Editor</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ============================= -->
                <!-- Tables -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Tables</span>
                </li>
                <!-- =================== -->
                <!-- Bootstrap Table -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-layout-sidebar"></i>
                        </span>
                        <span class="hide-menu">Tables</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-basic.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Basic Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-dark-basic.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Dark Basic Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-sizing.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Sizing Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-layout-coloured.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Coloured Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-datatable-basic.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Basic Initialisation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-datatable-api.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">API</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-datatable-advanced.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Advanced Initialisation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ============================= -->
                <!-- Charts -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Charts</span>
                </li>
                <!-- =================== -->
                <!-- Apex Chart -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-chart-pie"></i>
                        </span>
                        <span class="hide-menu">Charts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-line.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Line Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-area.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Area Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-bar.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Bar Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-pie.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Pie Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-radial.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Radial Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-radar.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Radar Chart</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ============================= -->
                <!-- Icons -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Icons</span>
                </li>
                <!-- =================== -->
                <!-- Tabler Icon -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-archive"></i>
                        </span>
                        <span class="hide-menu">Icon</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="icon-tabler.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Tabler Icon</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="icon-solar.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Solar Icon</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- multi level -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="rounded-3">
                            <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                        </span>
                        <span class="hide-menu">Multi DD</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://bootstrapdemos.adminmart.com/modernize/dist/docs/index.html" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Page 1</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link has-arrow">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Page 2</span>
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Page 2.1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Page 2.2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti ti-circle"></i>
                                        <span class="hide-menu">Page 2.3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                                <i class="ti ti-circle"></i>
                                <span class="hide-menu">Page 3</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
