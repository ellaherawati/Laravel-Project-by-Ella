<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan ella ujian</title>
</head>
<body>
    <div class="container">
        <h5>Hallo Ini ella yang sangat cantikk</h5>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if($errors->any()): ?>
        <p class="error"<?php echo e($errors->first); ?>> </p> 
        <?php endif; ?>
    </div>
    
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/auth/index.blade.php ENDPATH**/ ?>