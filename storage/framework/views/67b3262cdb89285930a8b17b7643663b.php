<!DOCTYPE html>
<html>

<head>
    <title>Detail User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-3">Detail User</h2>

        <div class="card">
            <div class="card-body">

                <p class="card-text"><strong>Email:</strong> <?php echo e($user->email); ?></p>
                
                <p class="card-text"><strong>Password:</strong><br><?php echo e($user->password); ?></p>
                

            </div>
        </div>

        
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\DutaPemudaFinal-main\resources\views/peserta/show.blade.php ENDPATH**/ ?>