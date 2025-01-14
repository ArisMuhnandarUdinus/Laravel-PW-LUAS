<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Buku</h3>
<a href="<?php echo e(route('buku.create')); ?>" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $allBuku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($r->judul); ?></td>
                <td><?php echo e($r->pengarang); ?></td>
                <td><?php echo e($r->tahun_terbit); ?></td>
                <td><?php echo e($r->penerbit->nama_penerbit); ?></td>
                <td><?php echo e($r->kategori->nama_kategori); ?></td>
                <td><?php echo e($r->harga); ?></td>
                <td>
                    <form action="<?php echo e(route('buku.destroy', $r->id)); ?>" class="aksi" method="POST">
                        <a href="<?php echo e(route('buku.show', $r->id)); ?>" class="tombol">Detail</a>
                        <a href="<?php echo e(route('buku.edit', $r->id)); ?>" class="tombol">Edit</a>
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
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/buku/index.blade.php ENDPATH**/ ?>