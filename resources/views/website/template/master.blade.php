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
    @include('website.template.header')
    @yield('content')
    @include('website.template.footer')
    <script src="{{ mix('/assets/js/website.js') }}"></script>
</body>

</html>