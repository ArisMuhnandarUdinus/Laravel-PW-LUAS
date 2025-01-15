<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Tambah User</h3>
<form action="<?php echo e(route('user.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="register" value="1">
    <label for="username">Username:</label>
    <input type="text" name="name" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button class="tombol" type="submit">Register</button>
</form>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/user/register.blade.php ENDPATH**/ ?>