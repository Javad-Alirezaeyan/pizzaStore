<?php
$pluginPath = "theme/assets/plugins/";
$themePath = "theme/";
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<script >
    window.Laravel =
    <?php echo json_encode([
        'csrfToken' => csrf_token(),
        'baseUrl' => URL::to('/')
    ]); ?>
</script>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset("images/favicon.ico")); ?>">

<title><?php echo $__env->yieldContent('title'); ?></title>


<link href="<?php echo e(asset("theme/assets/plugins/bootstrap/css/bootstrap.min.css")); ?> " rel="stylesheet"/>
<link href="<?php echo e(asset("theme/assets/plugins/chartist-js/dist/chartist.min.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/chartist-js/dist/chartist-init.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/css-chart/css-chart.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/morrisjs/morris.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/c3-master/c3.min.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/dropify/dist/css/dropify.min.css")); ?>" rel="stylesheet">

<link href="<?php echo e(asset("theme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/bootstrap-select/bootstrap-select.min.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/footable/css/footable.core.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/switchery/dist/switchery.min.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/horizontal/css/style.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/toast-master/css/jquery.toast.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/sweetalert/sweetalert.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/multiselect/css/multi-select.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/horizontal/css/colors/blue.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("theme/assets/plugins/wizard/steps.css")); ?>" rel="stylesheet">
<link href="<?php echo e(asset("css/main.css")); ?>" rel="stylesheet">



<?php /**PATH /home/javad/workspace/pizzaTask/resources/views/layouts/partials/head.blade.php ENDPATH**/ ?>