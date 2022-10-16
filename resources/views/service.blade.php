<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Cilame Towing - Service</title>
</head>

<body>
    @include('layout.header')
    <div class="container towing">
        <div class="container" style="height: 150px">
            <h3 class="text-center font-weight-bold">Our Services</h3>
        </div>
        <div class="row feature">
            <div class="contanier col-md-7">
                <h2 class="feature-heading">TOWING</h2>
                <ul style="list-style-position: outside;">
                    <li><strong>HYDRAULIC TOWING </strong>Direkomendasikan untuk mobil sedan Sport car, Hype car,
                        Mobil kontes. Dengan kelebihan flat deck atau permukaan rata</li>
                    <li><strong>MANUAL TOWING</strong> untuk towing seluruh</li>
                    <li><strong>CRANE TOWING</strong> Untuk mobil mogok dengan kendala roda terkunci oleh system
                        mobil atau kecelakaan yang menyebabkan hilangnya roda depan atau belakang</li>
                </ul>
            </div>
            <div class="col-md-5">
                <img src="/img/service1.jpg" alt="">
            </div>
        </div>
        <hr class="feature-divider">
        <div class="row feature">
            <div class="contanier col-md-7">
                <h3 class="feature-heading">ROADSIDE ASSISTANCE</h2>
                    <ul style="list-style-position: outside;">
                        <li>Layanan pengisian bahan bakar minyak jika kehabisan BBM sampai dengan SPBU terdekat.</li>
                        <li>Bantuan penggantian ban bocor atau pecah dengan ban cadangan. ( Penambalan hingga pengisian
                            angin ditempat )</li>
                        <li><strong>JUMPER START</strong> Menyalakan mesin kendaraan dengan menggunakan jumper.</li>
                    </ul>
            </div>
            <div class="col-md-4 order-md-1">
                <img src="/img/service2.jpg" alt="">
            </div>
        </div>
        <hr class="feature-divider">

        <div class="row feature">
            <div class="contanier col-md-7">
                <h3 class="feature-heading">SPECIAL REQUEST</h2>
                    <div>
                        <p>Permintaan khusus seperti membawa yacht, kapal laut <em>sesuai dengan dimensi</em>, jetski
                            atau &nbsp;bukan kendaraan bermotor yang dilengkapi roda seperti genset mesin fabrikasi dll
                        </p>
                    </div>
            </div>
            <div class="col-md-4 order-md-1">
                <img src="/img/service3.jpg" alt="">
            </div>
        </div>
        <hr class="feature-divider">

        <div class="row feature">
            <div class="contanier col-md-7">
                <h3 class="feature-heading">EVAKUASI</h2>
                    <div>
                        <p>LAKALANTAS, Kecelakaan kendaraan masuk parit Penyelesaian permasalahan seperti mobil yang
                            sudah lama tidak dipakai mati total.</p>
                    </div>
            </div>
            <div class="col-md-4 order-md-1">
                <img src="/img/service4.jpg" alt="">
            </div>
        </div>
        <hr class="feature-divider">
    </div>
    @include('layout.footer')
</body>

</html>
