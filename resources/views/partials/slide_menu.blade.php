<div class="sidebar-menu toggle-others fixed">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="/" class="logo-expanded">
                    <img src="/assets/images/logo@2x.png" width="162" alt=""/>
                </a>

                <a href="/" class="logo-collapsed">
                    <img src="/assets/images/logo-collapsed@2x.png" width="40" alt=""/>
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a>

                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>

            <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
            <div class="settings-icon">

            </div>

        </header>


        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li>
                <a href="#">
                    <i class="linecons-cog"></i>
                    <span class="title">System Config</span>
                </a>
                <ul>
                    <li>
                        <a href="/chargings">
                            <span class="title">Charging Config</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="linecons-note"></i>
                    <span class="title">Charging Management</span>
                </a>
                <ul>
                    <li>
                        <a href="/chargings">
                            <span class="title">Charging Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="/chargings/create">
                            <span class="title">Create Chargings</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="linecons-cloud"></i>
                    <span class="title">About Us</span>
                </a>
                <ul>
                    <li>
                        <a href="/chargings">
                            <i class="entypo-flow-line"></i>
                            <span class="title">Help</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

</div>