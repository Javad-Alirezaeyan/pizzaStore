

<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <b>
                    <img width="1100" height="60" src="{{ asset("images/logo.png") }}" alt="Pizza logo" class="dark-logo" />
                    <img width="100" height="60" src="{{ asset("images/logo.png") }}" alt="Pizza Logo" class="light-logo" />
                </b>

            </a>
        </div>



        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>

                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
               {{-- <li class="nav-item hidden-sm-down search-box">
                    <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>--}}
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown mega-dropdown ">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark"
                       href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-cart"></i></a>
                    <div class="dropdown-menu scale-up-left">
                        <div id="cart"></div>

                        <div className="col-lg-3 col-md-4 pull-right">
                            <button type="button" className="btn btn-block btn-lg btn-success">Continue</button>
                        </div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->


            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->

        </div>
    </nav>
</header>