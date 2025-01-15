<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Login</h1>
<?php if(session('error')): ?>
    <p style="color: red;"><?php echo e(session('error')); ?></p>
<?php endif; ?>
<form action="<?php echo e(route('auth.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <p>Belum punya akun? <a href="<?php echo e(route('register')); ?>">Register</a></p>
    <br>
    <button class="tombol" type="submit">Login</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>