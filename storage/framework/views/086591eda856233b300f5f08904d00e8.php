<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Riwayat Pembelian</h3>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Alat Tulis</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Aksi</th>
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
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($loop->iteration); ?>

                    </td>
                    <td>
                        <?php echo e($r->alattulis->nama); ?>

                    </td>
                    <td>
                        <?php echo e($r->jumlah); ?>

                    </td>
                    <td>
                        <?php echo e($r->harga_total); ?>

                    </td>
                    <td>
                        <form action="" class="aksi">
                            <a href="<?php echo e(route('pembelian.show', $r->id)); ?>" class="tombol">Detail</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/pembelian/riwayat.blade.php ENDPATH**/ ?>