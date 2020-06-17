

<header class="topbar" style="position: fixed; top: 0px; width: 100%;">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <b>
                    <img width="1100" height="60" src="<?php echo e(asset("images/logo.jpeg")); ?>" alt="Pizza logo" class="dark-logo" />
                    <img width="100" height="60" src="<?php echo e(asset("images/logo.jpeg")); ?>" alt="Pizza Logo" class="light-logo" />
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
               
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown mega-dropdown ">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark"
                       href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-cart"></i></a>
                    <div class="dropdown-menu scale-up-left">
                        <div id="cart"></div>
                        <div class="row">
                            <div className="offset-md-10 col-lg-2 col-md-2">
                                <a href="<?php echo e(route("basket")); ?>">
                                    <button type="button" class="btn btn-success"> Continue</button>
                                </a>
                            </div>
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
</header><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/layouts/partials/header.blade.php ENDPATH**/ ?>