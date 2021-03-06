<?php $__env->startSection('content'); ?>
    <div class="row" id="validation">
        <div class="col-12">
            <div class="card wizard-content">
                <div class="card-block">
                    <h4 class="card-title">Order</h4>

                    <form action="#" class="validation-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6>Cart</h6>
                        <section>
                            <div id="cart2"></div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Address</h6>
                        <section>
                            <div id="customerInfoForm"></div>
                        </section>
                        <!-- Step 3 -->
                        <h6>Pay</h6>
                        <section>
                            <div id="invoice"></div>
                        </section>
                        <!-- Step 4 -->
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/site/orderwizard.blade.php ENDPATH**/ ?>