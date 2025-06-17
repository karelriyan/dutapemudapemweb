<?php $__env->startSection('title'); ?>
<?php $__env->startSection('content'); ?>

    <?php if(session('success')): ?>
        <p style="color:green"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card px-lg-5 px-3" style="border-radius: 15px;">
                    <div class="card-body py-4 text-left">
                        <h2 class="text-center">Pilih Kategori</h2>
                        <h6 class="text-muted text-center mb-5">Pilih program yang kamu inginkan.</h6>
                        
                        <div class="mx-lg-5 mx-md-3 mx-1">

                            
                            <?php $__currentLoopData = $lombas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lomba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('lomba.form', $lomba->id)); ?>">
                                    
                                    <div class="program-item mb-5 d-flex flex-row align-items-center">
                                        <img src="img/logo_ppan.png" alt="" width="52px" class="mr-3">
                                        <h6><?php echo e($lomba->nama_lomba); ?> (<?php echo e($lomba->tahun); ?>)</h6>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\DutaPemudaFinal-main\resources\views/lomba/index.blade.php ENDPATH**/ ?>