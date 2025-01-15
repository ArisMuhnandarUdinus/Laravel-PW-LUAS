<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Pembelian Alat Tulis</h3>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Alat Tulis</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php if($detailPembelian->isEmpty()): ?>
            <tr>
                <td class="text-center" colspan="100%">
                    Data kosong
                </td>
            </tr>
        <?php else: ?>
            <?php $__currentLoopData = $detailPembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php
                        $i = $a->alat_tulis_id;
                    ?>
                    <td><?php echo e($key + 1); ?></td>
                    
                    
                    <td><?php echo e($alatTulis[$i - 2]->nama); ?></td>
                    <td><?php echo e($a->jumlah); ?></td>
                    <td><?php echo e($a->pembelian->total_harga); ?></td>
                    <td><?php echo e($a->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/detailpembelian/index.blade.php ENDPATH**/ ?>