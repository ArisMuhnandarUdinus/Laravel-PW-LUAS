<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Monitor</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Seri Monitor</td>
            <td><?php echo e($monitor->seri); ?></td>
        </tr>
        <tr>
            <td>Resolusi</td>
            <td><?php echo e($monitor->resolusi->nama); ?></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><?php echo e($monitor->stock); ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?php echo e($monitor->harga); ?></td>
        </tr>
        <tr>
            <td>Tanggal Rilis</td>
            <td><?php echo e($monitor->created_at->format('Y-m-d')); ?></td>
        </tr>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/monitor/show.blade.php ENDPATH**/ ?>