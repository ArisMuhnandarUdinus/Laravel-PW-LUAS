<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Kategori</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama kategori</td>
            <td><?php echo e($kategori->nama_kategori); ?></td>
        </tr>
    </tbody>
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/kategori/show.blade.php ENDPATH**/ ?>