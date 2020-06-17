<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/14/20
 * Time: 11:49 PM
 */
?>




<?php $__env->startSection('title', "order"); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-block printableArea">
                <h3><b>INVOICE</b> <span class="pull-right">factor Id: <?php echo e($order->o_id); ?></span></h3>
                <hr/>
                <div class="row">
                    <div class="col-md-12">

                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">Customer Info</b></h3>
                                <p class="text-muted m-l-5">
                                    <br/> <?php echo e($order->o_customerName); ?>

                                    <br/> <?php echo e($order->o_customerAddress); ?>

                                    <br/> <?php echo e($order->o_customerPhone); ?>

                            </address>

                        </div>
                        <div class="pull-right text-right">


                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php echo e($i = 1); ?>

                                    <?php $__currentLoopData = $itemList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td>
                                          <img src="<?php echo e(route("itemImage", $item->i_mainImage)); ?>" alt="user" width="40"
                                                 class="img-container"/>
                                            <?php echo e($item->i_title); ?>

                                        </td>
                                        <td><?php echo e($item->oi_quantity); ?></td>
                                        <td><?php echo e($item->oi_unitPrice); ?></td>
                                        <td><?php echo e($item->oi_totalPrice); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right m-t-30 text-right">
                                    <p>Sub - Total amount: $<?php echo e($order->o_totalPrice); ?></p>
                                    <p>Delivery Price : $<?php echo e($order->o_deliveryPrice); ?> </p>
                                    <hr/>
                                    <h3><b>Total :</b> $<?php echo e($order->o_finalPrice); ?></h3>
                                </div>
                                <div class="clearfix"></div>
                                <hr/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/order/view.blade.php ENDPATH**/ ?>