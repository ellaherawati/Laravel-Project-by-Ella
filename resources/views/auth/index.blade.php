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
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        @if ($errors->any())
        <p class="error"{{ $errors->first }}> </p> 
        @endif
    </div>
    
    </body>
</html>