<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Cilame Towing</title>
</head>

<body>
    @include('layout.header')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/towing1.jpg" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/towing2.jpeg" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/towing3.jpg" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="container towing">
        <div class="row feature">
            <div class="col-md-7">
                <h3 class="feature-heading">CILAME TOWING</h2>
                    <p>Cilame Towing merupakan perusahaan yang bergerak dalam jasa transportasi angkutan kendaraan
                        bermotor dimana untuk
                        memberi rasa kepercayaan dan keamanan lebih kepada seluruh customer. Sistem yang terintegrasi
                        dapat memberikan kemudahan pengiriman dalam, maupun luar kota. Bagi kami Keselamatan, ketepatan
                        waktu dan kenyamanan dalam perjalanan adalah prioritas kami, serta kemudahan akses untuk
                        berinteraksi dan berkomunikasi hingga pemantauan posisi selama proses pengiriman menjadi standar
                        prosedur kami.</p>
            </div>
            <div class="col-md-4 order-md-1">
                <img src="/img/service1.jpg" alt="">
            </div>
        </div>

        <hr class="feature-divider">

    </div>
    @include('layout.footer')
</body>

</html>
