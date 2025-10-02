<!DOCTYPE html>
<html>
<head>
    <title>Daftar Program</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Daftar Program</h2>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID Program</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item['program']); ?></td>
                    <td><?php echo e($item['nama']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\pojek2laravel\resources\views/tugasweek03/program.blade.php ENDPATH**/ ?>