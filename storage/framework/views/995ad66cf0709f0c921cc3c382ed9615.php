<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>User yang bergabung</h3>
<a href="<?php echo e(route('register')); ?>" class="tombol">Tambah</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Bergabung</th>
        </tr>
    </thead>
    <tbody>
        <?php if($allUser->isEmpty()): ?>
            <tr>
                <td class="text-center" colspan="100%">
                    Data kosong
                </td>
            </tr>
        <?php else: ?>
            <?php $__currentLoopData = $allUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($i->name); ?></td>
                    <td><?php echo e($i->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/user/index.blade.php ENDPATH**/ ?>