<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Alat Tulis</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama Alat Tulis</td>
            <td><?php echo e($alattulis->nama); ?></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><?php echo e($alattulis->stok); ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?php echo e($alattulis->harga); ?></td>
        </tr>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/alattulis/show.blade.php ENDPATH**/ ?>