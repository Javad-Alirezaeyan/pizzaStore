<aside class="left-sidebar">
<div class="scroll-sidebar">
    <nav class="sidebar-nav">
        <ul id="sidebarnav">

            @guest
                <li class="nav-small-cap">Pizza </li>
                <li>
                    <a class="has-arrow" href="{{ url("/") }}" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="{{ route("basket") }}" aria-expanded="false">
                        <i class="mdi mdi-basket"></i>
                        Basket
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="#contactus" aria-expanded="false">
                        <i class="mdi mdi-compass-outline"></i>
                        Contact us
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="#aboutus" aria-expanded="false">
                        <i class="mdi mdi-compass-outline"></i>
                        About us
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href={{ route("login") }} aria-expanded="false">
                        <i class="mdi mdi-login"></i>
                        Login
                    </a>
                </li>
            @endguest

            @auth
                    <li class="nav-small-cap">Pizza </li>
                    <li>
                        <a class="has-arrow" href="{{ route("dashboard") }}" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ route("orders") }}" aria-expanded="false">
                            <i class="mdi mdi-view-list"></i>
                            Orders
                        </a>
                    </li>

                    <li>
                        <a class="has-arrow" href="{{ route("addNewItem") }}" aria-expanded="false">
                            <i class="mdi mdi-new-box"></i>
                            Add new
                        </a>
                    </li>


                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="mdi mdi-repeat-off"></i>
                            Report
                        </a>
                    </li>

                    <li>
                        <a class="has-arrow" href={{ route("logout") }} aria-expanded="false">
                            <i class="mdi mdi-logout"></i>
                            Logout
                        </a>
                    </li>
            @endauth

        </ul>
    </nav>
</div>
</aside>
