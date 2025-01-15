<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Alat Tulis</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama Alat Tulis</td>
            <td><?php echo e($data->alattulis->nama_alat_tulis); ?></td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td><?php echo e($data->jumlah); ?></td>
        </tr>
        <tr>
            <td>Harga Satuan</td>
            <td><?php echo e($data->alattulis->harga); ?></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td><?php echo e($data->harga_total); ?></td>
        </tr>
        <tr>
            <td>Pembeli</td>
            <td><?php echo e($data->user->name); ?></td>
        </tr>
        <tr>
            <td>Tanggal Pembelian</td>
            <td><?php echo e($data->created_at); ?></td>
        </tr>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/pembelian/show.blade.php ENDPATH**/ ?>