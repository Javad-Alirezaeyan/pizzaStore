<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/2/19
 * Time: 11:05 PM
 */
?>
<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <b>
                    <img width="1100" height="60" src="{{ asset("images/logo.jpg") }}" alt="Email Service" class="dark-logo" />
                    <img width="100" height="60" src="{{ asset("images/logo.jpg") }}" alt="Email Service" class="light-logo" />
                </b>

            </a>
        </div>

        <div class="navbar-collapse">


            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>

                <li class="nav-item hidden-sm-down search-box">
                    <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>



            </ul>

        </div>
    </nav>
</header>
