<div class="page-header navbar navbar-fixed-top pod-navbar">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">

        <div class="pod-timer-header-area hidden-sm hidden-xs">
            <div class="pod-timer-header text-center">
                <div class="timer-area">
                    <span>UTC | </span>
                    <span class="utc-hour">-</span>
                    <img src="backend/clint/images/timer-separator.gif" class="timer-separator" style="width:3px; display:none;" />
                    <span class="utc-minute"></span>
                    <!--                    <span class="utc-second"></span>-->
                </div>
                <div class="timer-area">
                    <span>BST | </span>
                    <span class="bst-hour">-</span>
                    <img src="backend/clint/images/timer-separator.gif" class="timer-separator" style="width:3px; display:none;" />
                    <span class="bst-minute"></span>
                    <!--                    <span class="bst-second"></span>-->
                </div>
            </div>
        </div>

        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="">
                <img src="https://caab.pod.aero/shared/images/logo/pod_logo.svg" alt="logo" class="logo-default" />
            </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div style="display:inline-block; padding:16px 20px; color:#484848" class="hidden-sm hidden-xs">Customer Portal</div>
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">

            <ul class="nav navbar-nav pull-right">
                <li>
                    <div style="display:inline-block; padding:16px 20px; colors:#484848">
                        <div class="pod-timer"></div>
                    </div>
                </li>
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="username username-hide-on-mobile">
                            HICKY DIAZ                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="profile">
                                <i class="fa fa-user"></i> Account Management
                            </a>
                        </li>
                        <li>
                            <a href="site/logout">
                                <i class="icon-key"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->

    </div>
    <!-- END HEADER INNER -->
</div>