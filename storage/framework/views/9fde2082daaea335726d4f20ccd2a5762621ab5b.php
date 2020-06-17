<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/13/20
 * Time: 10:13 PM
 */
?>



<?php $__env->startSection('title', "dashboard"); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <!-- Column -->
    <div class="col-md-8  col-lg-6">
        <div class="row">
            <!-- Column -->

            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0 font-light" id="itemsCount">$ <?php echo e($totalPrice); ?></h3>
                                <h5 class="text-muted m-b-0">Total Sale</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0 font-lgiht" id="totalSale"><?php echo e($itemCount); ?></h3>
                                <h5 class="text-muted m-b-0">Total Items</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0 font-lgiht" id="order"><?php echo e($orderCount); ?></h3>
                                <h5 class="text-muted m-b-0">Order</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="d-flex flex-row">
                            <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="m-b-0 font-lgiht">$687</h3>
                                <h5 class="text-muted m-b-0">Ad. Expense</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
    <div class="col-md-4 col-lg-6">
        <div class="card">
            <div class="card-block">
                <h3 class="card-title">Percentage of sale itemTypes</h3>
                <h6 class="card-subtitle"></h6>
                <div id="visitor" style="height:290px; width:100%;"></div>
            </div>
            <div>
                <hr class="m-t-0 m-b-0">
            </div>
            <div class="card-block text-center ">
                <ul class="list-inline m-b-0" id="itemTypeUl">
                </ul>
            </div>
        </div>

    </div>




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/home/dashboard.blade.php ENDPATH**/ ?>