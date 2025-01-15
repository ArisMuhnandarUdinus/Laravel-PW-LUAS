<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Ubah Buku</h3>

<form action="<?php echo e(route('buku.update', $buku->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group">
        <label for="">Judul Buku:</label>
        <input type="text" name="judul" id="" placeholder="Masukkan nama buku" value="<?php echo e($buku->judul); ?>">
    </div>

    <div class="form-group">
        <label for="">Pengarang:</label>
        <input type="text" name="pengarang" id="" placeholder="Masukkan pengarang"
            value="<?php echo e($buku->pengarang); ?>">
    </div>

    <div class="form-group">
        <label for="">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" id="" min="1900" placeholder="Masukkan tahun terbit"
            value="<?php echo e($buku->tahun_terbit); ?>">
    </div>

    <div class="form-group">
        <label for="">Penerbit:</label>
        <select name="penerbit_id" id="" value="<?php echo e($buku->tahun_terbit); ?>">
            <?php $__currentLoopData = $penerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($p->id); ?>" <?php echo e($p->id == $buku->penerbit_id ? 'selected' : ''); ?>>
                    <?php echo e($p->nama_penerbit); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Kategori:</label>
        <select name="kategori_id" id="">
            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($k->id); ?>" <?php echo e($p->id == $buku->kategori_id ? 'selected' : ''); ?>>
                    <?php echo e($k->nama_kategori); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Harga Buku:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga buku"
            value="<?php echo e($k->harga); ?>">
    </div>

    <button type="submit" class="tombol">Submit</button>

</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/buku/edit.blade.php ENDPATH**/ ?>