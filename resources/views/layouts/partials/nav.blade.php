<aside class="left-sidebar">
<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">

            @guest
                <li class="nav-small-cap">Pizza </li>
                <li>
                    <a class="has-arrow" href="{{ url("/") }}" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        Menu
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="{{ url("/") }}" aria-expanded="false">
                        <i class="mdi mdi-compass-outline"></i>
                        Login
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="{{ url("/") }}" aria-expanded="false">
                        <i class="mdi mdi-compass-outline"></i>
                        Basket
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="{{ url("/") }}" aria-expanded="false">
                        <i class="mdi mdi-compass-outline"></i>
                        Contact us
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="{{ url("/") }}" aria-expanded="false">
                        <i class="mdi mdi-compass-outline"></i>
                        About us
                    </a>
                </li>
            @endguest

        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
