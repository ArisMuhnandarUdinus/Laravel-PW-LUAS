<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Register</h1>
<form action="<?php echo e(route('user.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="register" value="1">
    <label for="username">Username:</label>
    <input type="text" name="name" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <p>Punya akun? <a href="<?php echo e(route('login')); ?>">Login</a></p>
    <br>
    <button class="tombol" type="submit">Register</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-buku-laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>