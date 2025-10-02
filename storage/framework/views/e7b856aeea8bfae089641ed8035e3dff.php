<!DOCTYPE html>
<html>
<head>
    <title>Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            max-height: 250px;
            width: 100%;
            object-fit: contain;
            padding: 10px;
            border-radius: 12px;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body class="container mt-5">
    <h1 class="text-center mb-5">Meet Our Team</h1>

    <div class="row justify-content-center">
        <?php
            $team = [
                ['nama' => 'Fadillah Dani Prawoto', 'posisi' => 'Project Manager', 'foto' => 'fadil.jpg'],
                ['nama' => 'Fathi Fathan Fathurrohman N', 'posisi' => 'Backend Developer', 'foto' => 'fathan.jpg'],
                ['nama' => 'Muhamad Hafidz Hazhari', 'posisi' => 'Frontend Developer', 'foto' => 'hapis.jpg'],
            ];
        ?>

        <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 text-center">
                    <img src="/img/<?php echo e($member['foto']); ?>" class="card-img-top" alt="Foto <?php echo e($member['nama']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($member['nama']); ?></h5>
                        <p class="card-text text-muted"><?php echo e($member['posisi']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\pojek2laravel\resources\views/tugasweek03/team.blade.php ENDPATH**/ ?>