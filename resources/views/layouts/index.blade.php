@include('layouts.header')
<main>
    <h1 class="text-white">Hi! Selamat Datang di Cijerah Resto</h1>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="{{ asset('assets/images/nasgor.jpeg') }}" alt="" width="500px">
            </div>
            <div class="col-4">
                <div class="row text text-white">
                    <p>Tersedia Promo khusus bulan ini (Oktober)!!
                        <br>Paket khusus berdua, diskon 20%.
                        <br>Paket beramai-ramai, diskon 25%.
                    </p>
                    <button class="bg-dark"> <a class="text-white" href="{{ route('products') }}">Pesan Sekarang</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <p class="text-white">Jam Operasional: 10.00 AM - 23.00 PM<br>
                    Lokasi: Jl. Cijerah Raya no 102, Bandung Kulon, Bandung, Jawa Barat.
                </p>
            </div>
        </div>
    </div>
</main>
@include('layouts.footer')
