<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Cilame Towing - About Us</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    @include('layout.header')

    <div class="container towing">
        <div class="container" style="height: 150px">
            <h3 class="text-center font-weight-bold">About Us   </h3>
        </div>

    </div>
    @include('layout.footer')

    <script src="/js/app.js"></script>
</body>

</html>
