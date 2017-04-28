<nav class="navbar user-info-navbar" role="navigation">

    <!-- Left links for user info navbar -->
    <ul class="user-info-menu left-links list-inline list-unstyled">

        <li class="hidden-sm hidden-xs">
            <a href="#" data-toggle="sidebar">
                <i class="fa-bars"></i>
            </a>
        </li>

        <li class="dropdown hover-line">
            <a href="#" data-toggle="dropdown">
                <i class="fa-bell-o"></i>
                <span class="badge badge-green">2</span>
            </a>

            <ul class="dropdown-menu messages">
                <li>

                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">

                        <li class="active"><!-- "active" class means message is unread -->
                            <a href="#">
											<span class="line">
												<strong>BlockChain Provide</strong>
												<span class="light small">- yesterday</span>
											</span>

                                <span class="line desc small">
												You have a request has been match the provide
											</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
											<span class="line">
												<strong>BlockChain Request</strong>
												<span class="light small">- 2 days ago</span>
											</span>

                                <span class="line desc small">
												Your provide has been match to a request
											</span>
                            </a>
                        </li>

                        <!-- Repeated -->

                        <li class="active"><!-- "active" class means message is unread -->
                            <a href="#">
											<span class="line">
												<strong>BlockChain Provide</strong>
												<span class="light small">- yesterday</span>
											</span>

                                <span class="line desc small">
												You have a request has been match the provide
											</span>
                            </a>
                        </li>

                        <li><!-- "active" class means message is unread -->
                            <a href="#">
											<span class="line">
												<strong>BlockChain Provide</strong>
												<span class="light small">- yesterday</span>
											</span>

                                <span class="line desc small">
												You have a request has been match the provide
											</span>
                            </a>
                        </li>
                        <li><!-- "active" class means message is unread -->
                            <a href="#">
											<span class="line">
												<strong>BlockChain Provide</strong>
												<span class="light small">- yesterday</span>
											</span>

                                <span class="line desc small">
												You have a request has been match the provide
											</span>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="external">
                    <a href="blank-sidebar.html">
                        <span>All Messages</span>
                        <i class="fa-link-ext"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>


    <!-- Right links for user info navbar -->
    <ul class="user-info-menu right-links list-inline list-unstyled">

        <li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

            <form method="get" action="extra-search.html">
                <input type="text" name="s" class="form-control search-field" placeholder="Type to search..."/>

                <button type="submit" class="btn btn-link">
                    <i class="linecons-search"></i>
                </button>
            </form>

        </li>

        <li class="dropdown user-profile">
            <a href="#" data-toggle="dropdown">
                <img src="/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32"
                     width="28"/>
                <span>
								BUU Bryant
								<i class="fa-angle-down"></i>
							</span>
            </a>

            <ul class="dropdown-menu user-profile-menu list-unstyled">
                <li class="last">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>

    </ul>

</nav>