<?php $__env->startSection('title', "Items List"); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-block">


            <table class="table table-striped" >
                <thead>
                <tr >
                    <th># </th>
                    <th>Title </th>
                    <th>Price</th>
                    <th>Item Type</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $i = 1;
                ?>
                 <?php $__currentLoopData = $itemList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                         <td><?php echo e($i++); ?></td>
                         <td >
                             <img src=<?php echo e(route("itemImage", $item->i_mainImage)); ?> alt="user" width="40"
                                  className="img-container"/>
                            <?php echo e($item->i_title); ?>

                         </td>
                         <td>
                             <?php echo e($item->i_price); ?></td>
                         <td>
                             <?php echo e($item->it_title); ?>

                         </td>
                         <td>

                             <button type="button" class="btn waves-effect waves-light btn-danger" onclick="deleteItem(<?php echo e($item->i_id); ?>)">Delete</button>
                             <a href="<?php echo e(route('editItem', $item->i_id)); ?>">
                                 <button type="button" class="btn waves-effect waves-light btn-info">Edit</button>
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
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/item/list.blade.php ENDPATH**/ ?>