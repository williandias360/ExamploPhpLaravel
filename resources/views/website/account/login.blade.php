<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/website.css') }}" />
</head>

<body>
    <div class="login-background">
        <div class="login-wrapper">
            <form>
                <h1>Faça o seu login</h1>
                <p>Mussum Ipsum, cacilds vidis litro abertis. Mé faiz elementum girarzis, nisi eros vermeio. Interagi no mé, 
                    cursus quis, vehicula ac nisi. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. 
                    Paisis, filhis, espiritis santis.</p>
                <label>
                    <span></span>
                    <input type="text" name="email" placeholder="">
                </label>
                <label>
                    <span></span>
                    <input type="password" name="password" placeholder="">
                </label>

                <button></button>
            </form>
        </div>
    </div>

    <script src="{{ mix('/assets/js/website.js') }}"></script>
</body>

</html>