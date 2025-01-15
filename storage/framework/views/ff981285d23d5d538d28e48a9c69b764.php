<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Transaksi Pembelian</h3>
<a href="<?php echo e(route('pembelian.create')); ?>" class="tombol">Beli</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if($data->isEmpty()): ?>
            <tr>
                <td class="text-center" colspan="100%">
                    Data kosong
                </td>
            </tr>
        <?php else: ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($loop->iteration); ?>

                    </td>
                    <td>
                        <?php echo e($d->created_at); ?>

                    </td>
                    <td>
                        <?php echo e($d->total_harga); ?>

                    </td>
                    <td>
                        <form action="" class="aksi">
                            <a href="<?php echo e(route('pembelian.show', $d->id)); ?>" class="tombol">Detail</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/pembelian/index.blade.php ENDPATH**/ ?>