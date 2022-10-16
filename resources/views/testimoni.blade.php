<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Cilame Towing - Testimoni</title>
</head>

<body>
    @include('layout.header')

    <div class="container towing">
        <div class="container" style="height: 150px">
            <h3 class="text-center font-weight-bold">Testimoni</h3>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="testimoni">
                    <img src="/img/testi2.jpg" class="rounded-circle" alt="Cinque Terre">
                </div>

                <h2>Josua</h2>
                <p>Testimoni 1.</p>
            </div>
            <div class="col-lg-4">
                <div class="testimoni">
                    <img src="/img/testi1.jpg" class="rounded-circle" alt="Cinque Terre">
                </div>

                <h2>Yossii</h2>
                <p>Testimoni 2.</p>
            </div>
            <div class="col-lg-4">
                <div class="testimoni">
                    <img src="/img/testi3.jpg" class="rounded-circle" alt="Cinque Terre">
                </div>

                <h2>Martin</h2>
                <p>Testimoni 3.</p>
            </div>
        </div>

        <hr class="feature-divider">

    </div>
    @include('layout.footer')

    <script src="/js/app.js"></script>
</body>

</html>
