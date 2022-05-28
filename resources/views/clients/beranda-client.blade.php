@extends('base-client')

@section('title')
    <title>Obugami | Beranda User</title>
@endsection

@section('content')
    <div class="container">

    </div>
    <div id="carouselExampleCaptions" class="carousel slide bg-white " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" width="80%" src="img/snack_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1" style="color: #9772fb">Obugami</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1).
                                    This template is 100% free provided by <a rel="sponsored" class="text-success"
                                        href="https://templatemo.com" target="_blank">TemplateMo</a> website.
                                    Image credits go to <a rel="sponsored" class="text-success"
                                        href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/"
                                        target="_blank">Unsplash</a> and
                                    <a rel="sponsored" class="text-success" href="https://icons8.com/"
                                        target="_blank">Icons 8</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" width="80%" src="img/snack_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites.
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any
                                    kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" width="80%" src="img/snack_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites.
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell
                                    your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev btn-light" style="width: 10%" type="button" data-target="#carouselExampleCaptions"
            data-slide="prev">
            <i class="fas fa-chevron-left" style="color: #9772fb"></i>
        </a>
        <a class="carousel-control-next btn-light " style="width: 10%" type="button" data-target="#carouselExampleCaptions"
            data-slide="next">
            <i class="fas fa-chevron-right" style="color: #9772fb"></i>
        </a>
    </div>
    </div>
    <!-- End Banner Hero -->

    {{-- Kategori Produk Start --}}
    <section id="kategori" class="mt-lg-5 pt-lg-5">
        <div id="konten" class="container mt-3 mb-3">
            <h3 class="medium font-20">Cemilan Goodmood</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($goodmood) > 0)
                <div class="row py-4 px-2">
                    @foreach ($goodmood as $item)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text semi-bold">{{ $item[0] }}</p>
                                    <p class="card-text product-price bold">Rp. {{ $item[1] }}</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text semi-bold font-10 text-left">{{ $item[2] }}<br><span
                                                    class="card-text total-sales regular">Terjual
                                                    {{ $item[3] }}</span></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-left shop-location mt-4 regular">
                                                {{ $item[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5">
            <hr class="hr-color">
        </div>
        <div id="konten" class="container">
            <h3 class="medium font-20 mb-3">Cemilan Santai</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($santai) > 0)
                <div class="row py-4 px-2">
                    @foreach ($santai as $item1)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item1[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text semi-bold">{{ $item1[0] }}</p>
                                    <p class="card-text product-price bold">Rp. {{ $item1[1] }}</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text semi-bold font-10 text-left">{{ $item1[2] }}<br><span
                                                    class="card-text total-sales regular">Terjual
                                                    {{ $item1[3] }}</span></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-left shop-location mt-4 regular">
                                                {{ $item1[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5">
            <hr class="hr-color">
        </div>
        <div id="konten" class="container">
            <h3 class="medium font-20">Mix Kategori</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($mix) > 0)
                <div class="row py-4 px-2">
                    @foreach ($mix as $item2)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item2[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text semi-bold">{{ $item2[0] }}</p>
                                    <p class="card-text product-price bold">Rp. {{ $item2[1] }}</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text semi-bold font-10 text-left">{{ $item2[2] }}<br><span
                                                    class="card-text total-sales regular">Terjual
                                                    {{ $item2[3] }}</span></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-left shop-location mt-4 regular">
                                                {{ $item2[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    {{-- Kategori Produk End --}}
    <script src="assets/js/templatemo.js"></script>
@endsection
