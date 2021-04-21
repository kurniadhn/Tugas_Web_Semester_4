

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Error')); ?></div>

                <div class="card-body">
                    <?php if(session('error')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Anda tidak dapat mengakses halaman ini!')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\C_Web_E41191553_DickyKurniaRamadhan\Tugas_6\resources\views/error.blade.php ENDPATH**/ ?>