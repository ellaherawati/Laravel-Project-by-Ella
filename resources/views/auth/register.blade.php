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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="name" placeholder="Nama" requared>
        <input type="email" name="email" placeholder="Email" requared>
        <input type="password" name="password" placeholder="Password" requared>
        <button type="submit">daftar</button>        
    </div>    
    @if ($errors->any())
    <p class="error">{{ $errors->first }}</p>
    @endif
</body>
</html>