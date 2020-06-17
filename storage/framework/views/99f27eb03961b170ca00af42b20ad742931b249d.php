<!DOCTYPE html>
<html  lang="en" >

<head>
 <?php echo $__env->make("layouts.partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

<div id="main-wrapper">
<?php echo $__env->make("layouts.partials.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("layouts.partials.nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="app">
        <div id="app">
            <?php echo $__env->yieldContent('slideShow'); ?>
        </div>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <?php if(auth()->guard()->check()): ?>
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $__env->yieldContent('title'); ?></h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route("dashboard")); ?>">Home</a></li>
                                <li class="breadcrumb-item active">list</li>
                            </ol>
                        </div>
                        <div class="col-md-7 col-4 align-self-center">
                            <div class="d-flex m-t-10 justify-content-end">
                                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                    <div class="chart-text m-r-10">
                                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                        <h4 class="m-t-0 text-info">0</h4></div>
                                    <div class="spark-chart">
                                        <div id="monthchart"></div>
                                    </div>
                                </div>
                                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                    <div class="chart-text m-r-10">
                                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                        <h4 class="m-t-0 text-primary">0</h4></div>
                                    <div class="spark-chart">
                                        <div id="lastmonthchart"></div>
                                    </div>
                                </div>
                                <div class="">
                                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <div id="app">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

</div>

<?php echo $__env->yieldContent('js'); ?>;


<?php echo $__env->make('layouts.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="<?php echo e(asset('js/app.js')); ?>" ></script>
</body>
</html><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/layouts/master.blade.php ENDPATH**/ ?>