<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Monitor</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Seri Monitor</td>
            <td><?php echo e($data->monitor->seri); ?></td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td><?php echo e($data->jumlah); ?></td>
        </tr>
        <tr>
            <td>Harga Satuan</td>
            <td><?php echo e($data->monitor->harga); ?></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td><?php echo e($data->harga_total); ?></td>
        </tr>
        <tr>
            <td>Pembeli</td>
            <td><?php echo e($data->user->username); ?></td>
        </tr>
        <tr>
            <td>Tanggal Pembelian</td>
            <td><?php echo e($data->created_at); ?></td>
        </tr>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/pembelian/show.blade.php ENDPATH**/ ?>