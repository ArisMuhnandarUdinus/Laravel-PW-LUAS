<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Penerbit</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama penerbit</td>
            <td><?php echo e($penerbit->nama_penerbit); ?></td>
        </tr>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/penerbit/show.blade.php ENDPATH**/ ?>