<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Detail Buku</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Judul buku</td>
            <td><?php echo e($buku->judul); ?></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><?php echo e($buku->pengarang); ?></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><?php echo e($buku->tahun_terbit); ?></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><?php echo e($buku->penerbit->nama_penerbit); ?></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><?php echo e($buku->kategori->nama_kategori); ?></td>
        </tr>
    </tbody>
    <?php dd($buku); ?>;
</table>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/buku/show.blade.php ENDPATH**/ ?>