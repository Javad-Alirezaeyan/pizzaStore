<aside class="left-sidebar">
<div class="scroll-sidebar">
    <nav class="sidebar-nav">
        <ul id="sidebarnav">

            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-small-cap">Pizza </li>
                <li>
                    <a class="has-arrow" href="<?php echo e(url("/")); ?>" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="<?php echo e(route("basket")); ?>" aria-expanded="false">
                        <i class="mdi mdi-basket"></i>
                        Basket
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="<?php echo e(url("/")); ?>#menufood" aria-expanded="false">
                        <i class="mdi mdi-menu"></i>
                        Menu
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
                    <a class="has-arrow" href=<?php echo e(route("login")); ?> aria-expanded="false">
                        <i class="mdi mdi-login"></i>
                        Login
                    </a>
                </li>
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
                    <li class="nav-small-cap">Pizza </li>
                    <li>
                        <a class="has-arrow" href="<?php echo e(route("dashboard")); ?>" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo e(route("orders")); ?>" aria-expanded="false">
                            <i class="mdi mdi-view-list"></i>
                            Orders
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo e(route("itemsList")); ?>" aria-expanded="false">
                            <i class="mdi mdi-new-box"></i>
                            Items list
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo e(route("item")); ?>" aria-expanded="false">
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
                        <a class="has-arrow" href=<?php echo e(url("logout")); ?> aria-expanded="false">
                            <i class="mdi mdi-logout"></i>
                            Logout
                        </a>
                    </li>
            <?php endif; ?>

        </ul>
    </nav>
</div>
</aside>
<?php /**PATH /home/javad/workspace/pizzaTask/resources/views/layouts/partials/nav.blade.php ENDPATH**/ ?>