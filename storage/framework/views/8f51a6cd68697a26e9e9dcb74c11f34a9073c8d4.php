<?php $__env->startSection('title', "orders"); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-block">


            <table class="table table-striped" >
                <thead>
                <tr >
                    <th># </th>
                    <th>Customer Name </th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>State</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $i = 1;
                   $orderState = \Illuminate\Support\Facades\Config::get("constants.orderState");
                ?>
                 <?php $__currentLoopData = $itemList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                         <td><?php echo e($i++); ?></td>
                         <td >
                            <?php echo e($item->o_customerName); ?>

                         </td>
                         <td>
                             <?php echo e($item->o_finalPrice); ?></td>
                         <td>
                             <?php echo e($item->created_at); ?>

                         </td>
                         <td>
                             <span class="label label-<?php echo e($orderState[$item->o_state]['cssClass']); ?>"><?php echo e($orderState[$item->o_state]['title']); ?></span>
                         </td>
                         <td>
                             <a href="<?php echo e(route('order', $item->o_id )); ?>">
                                 <button type="button" class="btn waves-effect waves-light btn-info">View</button>
                             </a>
                         </td>
                     </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

                <tfoot>
                <?php echo e($itemList->links()); ?>


                </tfoot>
            </table>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<script>
    function searchItem(){
        window.location = ""
    }

</script>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/order/list.blade.php ENDPATH**/ ?>