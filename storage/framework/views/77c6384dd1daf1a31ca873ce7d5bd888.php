<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>
    <span>
        Selamat datang di
    </span>
    Jual Beli Monitor
</h1>

<div class="d-flex justify-content-center gap-5">
    <a class="tombol py-2 px-3 w-25 text-center" href="<?php echo e(route('login')); ?>">Login</a>
    <a class="tombol py-2 px-3 w-25 text-center" href="<?php echo e(route('register')); ?>">Register</a>
</div>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/welcome.blade.php ENDPATH**/ ?>