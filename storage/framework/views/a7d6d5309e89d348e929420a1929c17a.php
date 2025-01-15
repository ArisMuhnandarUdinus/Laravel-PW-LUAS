<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Riwayat Pembelian</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Item</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php if($data->isEmpty()): ?>
            <tr>
                <td class="text-center" colspan="100%">
                    Belum ada barang yang dibeli
                </td>
            </tr>
        <?php else: ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($loop->iteration); ?>

                    </td>
                    <td>
                        <?php echo e($d->nama_item); ?>

                    </td>
                    <td>
                        <?php echo e($d->jumlah); ?>

                    </td>
                    <td>
                        Rp. <?php echo e($d->harga); ?>,00
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/pembelian/index.blade.php ENDPATH**/ ?>