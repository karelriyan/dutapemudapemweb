<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline mt-5">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                            <a href="/user/edit">
                                <div class="alert alert-primary">Klik Disini untuk ganti password</div>
                            </a>
                        <?php endif; ?>
                        <?php if(session('berhasil')): ?>
                            <div class="alert alert-success"><?php echo e(session('berhasil')); ?></div>
                        <?php endif; ?>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="img/user.png"
                                    alt="User profile picture" />
                            </div>

                            

                            <p class="text-muted text-center">Pemuda Pelopor</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Email</b>
                                    <a class="float-right"><?php echo e(Auth::guard('web')->user()->email); ?></a>
                                </li>

                                
                                



                                
                            </ul>

                            <a href="<?php echo e(route('peserta.edit')); ?>" class="btn btn-primary btn-block"><b>Ubah Password</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pendaftar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\DutaPemudaFinal-main\resources\views/peserta/index.blade.php ENDPATH**/ ?>