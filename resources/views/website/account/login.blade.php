<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/website.css') }}" />
</head>

<body>
    <div class="login-background">
        <div class="login-wrapper">
            <form>
                <h1>Faça o seu login</h1>
                <p>Mussum Ipsum, cacilds vidis litro abertis. Mé faiz elementum girarzis</p>
                <input class="mt-20 input" type="email" name="email" placeholder="E-mail" required>
                <input class="input" type="password" name="password" placeholder="Senha" required>
                <button class="input button-primary">Login</button>
            </form>
        </div>
    </div>

    <script src="{{ mix('/assets/js/website.js') }}"></script>
</body>

</html>