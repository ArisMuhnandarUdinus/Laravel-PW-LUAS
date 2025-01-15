<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Monitor</h3>
<a href="<?php echo e(route('monitor.create')); ?>" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Seri Monitor</th>
            <th>Resolusi</th>
            <th>Stock</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $allMonitor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($r->seri); ?></td>
                <td><?php echo e($r->resolusi->nama); ?></td>
                <td><?php echo e($r->stock); ?></td>
                <td><?php echo e($r->harga); ?></td>
                <td>
                    <form action="<?php echo e(route('monitor.destroy', $r->id)); ?>" class="aksi" method="POST">
                        <a href="<?php echo e(route('monitor.show', $r->id)); ?>" class="tombol">Detail</a>
                        <a href="<?php echo e(route('monitor.edit', $r->id)); ?>" class="tombol">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="tombol">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/monitor/index.blade.php ENDPATH**/ ?>