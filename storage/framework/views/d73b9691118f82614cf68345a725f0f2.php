<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Login</h1>
<form action="<?php echo e(route('user.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="username">Username:</label>
    <input type="text" name="name" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button class="tombol" type="submit">Login</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/user/login.blade.php ENDPATH**/ ?>