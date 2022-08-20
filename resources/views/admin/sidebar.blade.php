<div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <div class="user-box">
        
                    <div class="float-left">
                        <img src="{{asset('admin_assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                                            </a>
                            <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-face-profile mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-settings mr-2"></i> Settings</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i> Lock screen</a></li>
                               
                                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                                <li>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="mdi mdi-power-settings mr-2"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>

                        @endguest


                        <p class="font-13 text-muted m-0">Administrator</p>
                    </div>
                </div>

                <ul class="metismenu" id="side-menu">

                    <li>
                        <a href="{{route('admin')}}" class="waves-effect">
                            <i class="mdi mdi-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="  fas fa-landmark"></i>
                            <span> Company </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('companies.create')}}">Add Company </a></li>
                            <li><a href="{{route('companies.index')}}">Company List </a></li>
                            <li><a href="{{route('view_user')}}">User List </a></li>
                        
                        </ul>


                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class=" fas fa-cogs"></i>
                            <span> Machinery </span>
                            <span class="menu-arrow"></span>
                        </a>
                       

                        <ul class="nav-second-level" aria-expanded="false">
                            <!-- <li><a href="{{route('cat_list')}}">Machinery List</a></li> -->
                            <li><a href="{{route('add_cat')}}">Categories</a></li>
                            <!-- <li><a href="{{route('cat_list')}}">Category List</a></li> -->
                            <li><a href="{{route('machine.create')}}">Add  Machine</a></li>
                            <li><a href="{{route('machine.index')}}">Machine List</a></li>
                            <li><a href="{{route('usermachine.index')}}">User Machine List</a></li>
                            <li><a href="{{route('machine_post')}}">Machine Post List</a></li>

                        </ul>

                        
                        
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fas fa-dice-d6"></i>
                            <span> Proposal Section</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('proposal_list')}}">Proposal List</a></li>
                            
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class=" fas fa-hands-helping"></i>
                            <span> Work Order </span>
                            <span class="menu-arrow"></span>
                        </a>

                      
                        <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('order_list')}}">work-order List</a></li>
                        </ul>
                    </li>
                   
                  
                    

                    

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-atom-variant"></i>
                            <span> Deals </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('dealList')}}">Deals List</a></li>
                            <li><a href="{{route('completed_deal')}}">Completed Deal List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class=" fas fa-money-check-alt"></i>
                            <span>Finance </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('add_withdraw')}}">Withdrawn</a></li>
                        <li><a href="{{route('list_collection')}}">Collection List</a></li>
                        <li><a href="{{route('withdraw_list')}}">Withdrawals List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fas fa-shuttle-van"></i>
                            <span>Delivery </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('deliveryman_list')}}">Delivery Request List</a></li>
                        <li><a href="{{route('delivery')}}">Add Delivery Man</a></li>
                        <li><a href="{{route('view_delivery')}}">Delivery Man List</a></li>
                        <li><a href="{{route('withdraw_list')}}">Withdrawals List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fas fa-book"></i>
                            <span> Reports </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('cash_ledger')}}">Cash Book</a></li>
                            <li><a href="{{route('expired_dates')}}">Expired Deal</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-palette"></i>
                            <span> Elements </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin/modals')}}">Modals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-atom-variant"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin/font_awesome')}}">Font awesome</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-widgets"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin/forms')}}">Forms</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-view-list"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin/tables')}}">Data Table</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-google-pages"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin/login')}}">Login</a></li>
                            <li><a href="{{route('admin/register')}}">Register</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <div class="content-page">