<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="nav-item active open">
                <a href="{{url('dashboard')}}" class="nav-link">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span></a>
            </li>

            <?php $role =  Auth::user()->role; ?>

            @if($role == 'admen' || $role == 'super-admen' || $role == 'customer')            
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-plane"></i>
                    <span class="title">Flights Menu</span>                    
                    <span class="arrow"></span> 
                </a>

                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/pending')}}" class="nav-link ">
                            <i class="fa fa-exclamation-circle"></i>
                            <span class="title">Pending Permits</span>

                            <span class="title" style="color: #1bbc9b; font-weight: bold; background-color: white; border-radius: 50%; padding: 0px 2px;">
                                {{$pendings}}
                            </span>
                            
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/approved')}}" class="nav-link ">
                            <i class="fa fa-check-circle"></i>
                            <span class="title">Approved Permits</span>
                            <span class="title" style="color: green; font-weight: bold; background-color: white; border-radius: 50%; padding: 0px 2px;">
                                {{$approved}}
                            </span>
                        </a>
                    </li>
                    
                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/cancelled')}}" class="nav-link ">
                            <i class="fa fa-times-circle"></i>
                            <span class="title">Cancelled</span>
                            <span class="title" style="color: #e7505a; font-weight: bold; background-color: white; border-radius: 50%; padding: 0px 2px;">
                                {{$cancelled}}
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif 

            @if(Auth::user()->role == 'super-admen')
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    <span class="arrow"></span> </a>                    
                <ul class="sub-menu">

                    <li class="nav-item ">
                        <a href="{{route('register')}}" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add User</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{route('users.admens')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Admens</span>
                        </a>
                    </li> 

                    <li class="nav-item ">
                        <a href="{{route('users.customers')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Customers</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{route('users.moderators')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Moderators</span>
                        </a>
                    </li>                                       
                </ul>
            </li>
            @endif


            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Operators</span>

                    <span class="arrow"></span> </a>                    
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{route('operators.create')}}" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add Operator</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{route('operators.index')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Operators</span>
                        </a>
                    </li>                                        
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Airports</span>

                    <span class="arrow"></span> </a>                    
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{route('airports.create')}}" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add Airport</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{route('airports.index')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Airports</span>
                        </a>
                    </li>                                        
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Countries</span>

                    <span class="arrow"></span> </a>                    
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{route('countries.create')}}" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add Country</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{route('countries.index')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Countries</span>
                        </a>
                    </li>                                        
                </ul>
            </li>

            @if(Auth::user()->role == 'customer')
            <li class="nav-item">
                <a href="{{url('dashboard/contact-us')}}" class="nav-link">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Customer Support</span>

                </a>
            </li>
            @endif

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>

    <!-- END SIDEBAR -->
</div>