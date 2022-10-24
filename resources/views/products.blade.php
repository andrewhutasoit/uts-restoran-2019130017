@include('layouts.header')
<main>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Daftar Menu</h1>
        <br />
        <div class="container align-items-center">
            <div class="row justify-content-center w-100 h-100 mb-4 mt-3 mr-2">
                @forelse ($products as $item => $allProducts)
                    <div class="col-4 d-flex align-items-stretch">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset($allProducts['urlgambar']) }}" alt="Card image cap">
                            <div class="card-body bg-dark">
                                <p class="card-text text-white">Nama: <span>{{ $allProducts['nama'] }}</span></p>
                                <p class="card-text text-white">Harga: <span>{{ $allProducts['harga'] }}</span></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-dark d-inline-block">
                        Menu tidak tersedia.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</main>
@include('layouts.footer')
