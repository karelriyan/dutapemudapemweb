<?php $__env->startSection('title', 'form'); ?>
<?php $__env->startSection('content'); ?>

    <section>
        
        <div id="wizard-step-1">
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3 class="text-center">Syarat dan Ketentuan</h3>
                        <p class="text-muted mb-4">Pastikan Anda memahami seluruh syarat dan ketentuan yang berlaku.</p>

                        <div class="card px-lg-5 px-3" style="border-radius: 15px;">
                            <div class="card-body py-3">
                                
                                <ol class="mx-2">
                                    <li>
                                        warga negara indonesia yang bertaqwa kepada tuhan yang maha esa
                                    </li>
                                    <li>KTP Tangerang Selatan</li>
                                    <li>Usia 17-30.</li>
                                    <li>Berpendidikan minimal SMA/SLTA</li>
                                    <li>Belum menikah</li>
                                    <li>Surat keterangan kesehatan jasmani dan rohani dari dokter</li>
                                    <li>Telah melakukan kegiatan pengembangan masyarakat yang dibuktikan dengan laporan
                                        yang terdokumentasi dalam bentuk foto dan liputan media dan lain-lain</li>
                                    <li>Tidak merokok dan terbebas dari Narkoba</li>
                                    <li>Memiliki wawasan kebangsaan dan cinta tanah air serta pengetahuan yang luas mengenai
                                        isu-isu</li>
                                    <li>Mampu berkomunikasi efektif dan mahir menggunakan media sosial seperti : email,
                                        facebook, X dan lain-lain </li>
                                    <li>Mengetahui dan menguasai seni dan budaya terutama kesenian daerah Provinsi Banten
                                    </li>
                                    <li>Tidak Pernah terlibat dalam tindakan kriminal</li>
                                </ol>
                                <div class="form-check text-left ml-5 my-4">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms">
                                    <label class="" for="agreeTerms">
                                        Saya menyetujui syarat dan ketentuan pendaftaran Duta Pemuda.
                                    </label>
                                </div>

                                <div id="alert-warning" class="alert alert-danger d-none" role="alert">
                                    Silakan centang kotak persetujuan terlebih dahulu.
                                </div>

                                <button id="btn-lanjut" class="btn" style="width: 100%">Lanjut Pendaftaran</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        

        
        <div id="wizard-step-2" style="display: none">
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3 class="text-center">Pendaftaran Pemuda Pelopor Tahun 2025</h3>
                        <p class="text-muted mb-4">Isi formulir ini dengan data yang benar dan lengkap.</p>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="card px-lg-5 px-3" style="border-radius: 15px;">
                            <div class="card-body py-3 ">

                                
                                <form method="POST" action="<?php echo e(route('lomba.submit', $lomba->id)); ?>" id="myForm"
                                    class="form-card mt-4 needs-validation" novalidate enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Email</label>
                                            <input class="form-control" type="text" id="email" name="email"
                                                placeholder="" required>
                                            <div class="invalid-feedback">EMail.</div>
                                        </div>
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Password</label>
                                            <input class="form-control" type="password" id="password" name="password"
                                                placeholder="" required>
                                            <div class="invalid-feedback">PAssworda anjay.</div>
                                        </div>
                                    </div>

                                    
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <?php $__currentLoopData = $lomba->syarat_lomba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syarat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $parts = explode(':', $syarat);
                                                    $field = $parts[0];
                                                    $type = $parts[1] ?? 'text';
                                                ?>

                                                <label
                                                    class="form-control-label h6 px-3"><?php echo e(ucfirst(str_replace('_', ' ', $field))); ?>

                                                    <span class="text-danger">*</span>
                                                </label>

                                                <?php if($type === 'file'): ?>
                                                    <input class="form-control" type="file"
                                                        name="data_isian[<?php echo e($field); ?>]" required>
                                                <?php else: ?>
                                                    <input class="form-control" type="text"
                                                        name="data_isian[<?php echo e($field); ?>]"
                                                        value="<?php echo e(old("data_isian.$field")); ?>" required>
                                                    <div class="invalid-feedback">Wajib diisi.</div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    

                                    


                                    


                                    

                                    <div class="form-check text-left ml-5 my-4">
                                        <input name="cek" class="form-check-input" type="checkbox" id="invalidCheck"
                                            required>
                                        <label class="">
                                            Saya menyatakan bahwa seluruh data yang saya isi adalah benar.
                                        </label>
                                    </div>
                            </div>
                            <div id="alert-warning-2" class="alert alert-danger d-none" role="alert">
                                Silakan lengkapi data anda.
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-12 button">
                                    <button type="submit" class="btn" style="width: 100%">Kirim</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready(function() {
                $('#btn-lanjut').click(function() {
                    if (!$('#agreeTerms').is(':checked')) {
                        $('#alert-warning').removeClass('d-none');
                    } else {
                        $('#alert-warning').addClass('d-none');
                        $('#wizard-step-1').hide();
                        $('#wizard-step-2').show();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                    }
                });

                $('#myForm').on('submit', function(event) {
                    event.preventDefault();

                    let form = this;
                    const checkBox = document.getElementById("invalidCheck");
                    let isValid = form.checkValidity();

                    // Tampilkan alert jika form tidak valid atau checkbox tidak dicentang
                    if (!isValid || !checkBox.checked) {
                        $('#alert-warning-2').removeClass('d-none');
                    } else {
                        $('#alert-warning-2').addClass('d-none');
                    }

                    // Jika checkbox tidak dicentang, tambahkan pesan khusus
                    if (!checkBox.checked) {
                        $('#alert-warning-2').text("Silakan centang kotak persetujuan dan lengkapi data Anda.");
                    } else if (!isValid) {
                        $('#alert-warning-2').text("Silakan lengkapi data Anda.");
                    }

                    if (isValid && checkBox.checked) {
                        form.submit();
                    } else {
                        form.classList.add('was-validated');
                    }
                });
            });
        </script>

        
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\DutaPemudaFinal-main\resources\views/lomba/form.blade.php ENDPATH**/ ?>