<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>

        <input type="text" name="name" placeholder="Nama" requared>
        <input type="email" name="email" placeholder="Email" requared>
        <input type="password" name="password" placeholder="Password" requared>
        <button type="submit">daftar</button>        
    </div>    
    <?php if($errors->any()): ?>
    <p class="error"><?php echo e($errors->first); ?></p>
    <?php endif; ?>
</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/resources/views/auth/register.blade.php ENDPATH**/ ?>