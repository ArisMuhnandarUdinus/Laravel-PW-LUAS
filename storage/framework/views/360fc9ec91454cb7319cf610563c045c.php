<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Buat Buku</h3>

<form action="<?php echo e(route('buku.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="">Judul Buku:</label>
        <input type="text" name="judul" id="" placeholder="Masukkan nama buku">
    </div>

    <div class="form-group">
        <label for="">Pengarang:</label>
        <input type="text" name="pengarang" id="" placeholder="Masukkan pengarang">
    </div>

    <div class="form-group">
        <label for="">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" id="" min="1900" placeholder="Masukkan tahun terbit">
    </div>

    <div class="form-group">
        <label for="">Penerbit:</label>
        <select name="penerbit_id" id="">
            <option value="Pilih penerbit" selected disabled>Pilih penerbit</option>
            <?php $__currentLoopData = $penerbit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($p->id); ?>"><?php echo e($p->nama_penerbit); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Kategori:</label>
        <select name="kategori_id" id="">
            <option value="Pilih kategori" selected disabled>Pilih kategori</option>
            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($k->id); ?>"><?php echo e($k->nama_kategori); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Stock Buku:</label>
        <input type="number" name="stock" id="" min="0" placeholder="Masukkan stock buku">
    </div>

    <div class="form-group">
        <label for="">Harga Buku:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga buku">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/buku/create.blade.php ENDPATH**/ ?>