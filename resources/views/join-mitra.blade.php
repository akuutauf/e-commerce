@extends('base-admin')

@section('title')
    <title>Obugame | Join Reseller</title>
@endsection

{{-- Start Profile Section --}}
<section>
    <div id="profile-toko" class="text-center">
        <img src="{{ asset('img/obugame_logo_01.jpg') }}" alt="obugame" width="250"
            class="rounded-circle img-thumbnail mt-3" />
        <h1 class="color-theme medium h1 pt-3">OBUGAME</h1>
        <p class="lead medium color-description">Banana Snack | Dragon Rengginang | Dragon Drink</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#9772FB" fill-opacity="1"
                d="M0,64L30,85.3C60,107,120,149,180,165.3C240,181,300,171,360,170.7C420,171,480,181,540,202.7C600,224,660,256,720,250.7C780,245,840,203,900,170.7C960,139,1020,117,1080,117.3C1140,117,1200,139,1260,138.7C1320,139,1380,117,1410,106.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    </div>
</section>
{{-- End Profile Section --}}

<section class="bg-theme-color">
    <section>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col">
                    <h3 class="semi-bold text-white">Obugame</h3>
                    <h2 class="semi-bold gold-text">Bermitra Bersama Kami</h2>
                </div>
            </div>
            <div class="row mb-3 mt-4 text-left d-flex justify-content-center">
                <div class="col-lg-4 mb-3">
                    <p class="semi-bold text-white text-left h2">
                        Yuk bergabung bersama <span class="gold-text">#Obugame</span> jadikan usaha bisnis kamu sukses
                        bersama kami
                    </p>
                    <p class="text-white font-20">Menyediakan berbagai Makanan dan Minuman hasil olahan Pisang dan Buah
                        Naga,
                        yang rasanya
                        ngangenin. Sudah banyak produk dan partner kami, Ayo tunggu apa lagi, mari kita bermitra
                        bersama!</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 id="text-info" class="text-white"><span class="gold-text">20</span><br>Produk</h2>
                            <p id="text-info" class="text-white">Puluhan jenis inovasi produk yang telah kami produksi.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h2 id="text-info" class="text-white"><span class="gold-text">15</span><br>Mitra</h2>
                            <p id="text-info" class="text-white">Belasan partners yang telah bekerjasama dengan kami</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center my-auto">
                    <img src="{{ asset('ilustrator/mitra.svg') }}" class="img-fluid" width="500" alt="">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,64L30,101.3C60,139,120,213,180,213.3C240,213,300,139,360,106.7C420,75,480,85,540,112C600,139,660,181,720,170.7C780,160,840,96,900,96C960,96,1020,160,1080,197.3C1140,235,1200,245,1260,213.3C1320,181,1380,107,1410,69.3L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    </section>
</section>

<section class="bg-white pb-5">
    <section>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col">
                    <h3 class="semi-bold color-theme">Obugame</h3>
                    <h2 class="semi-bold color-description-2">Syarat dan Ketentuan Reseller</h2>
                </div>
            </div>
            <div class="row mb-3 mt-3 text-left d-flex justify-content-around">
                <div class="col-lg-5 text-center my-auto mb-5">
                    <div class="card card-list-produk shadow-card border-none p-3">
                        <div class="row">
                            <div class="col-lg-12 my-auto padding-card text-left">
                                <h4 class="text-left semi-bold pl-3 pb-2">Syarat dan Ketentuan</h4>
                                <ol class="text-list regular">
                                    <li>Wajib memiliki alamat email</li>
                                    <li>Wajib memiliki nomor telepon aktif</li>
                                    <li>Memiliki akun toko shopee sebagai reseller</li>
                                    <li>Memiliki media sosial wa, facebook, dan ig</li>
                                </ol>
                                <hr class="hr-color hr-card ml-4">
                                <a href="" class="btn btn-chat mt-2 medium ml-3 mb-2">
                                    Bermitra Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-5 p-5 my-auto">
                    <p class="semi-bold color-description-2 text-left h2">
                        Syarat dan ketentuan bermitra bersama <span class="color-theme">#Obugame</span>, yuk Bermitra
                        bersama kami!
                    </p>
                    <p class="color-description-2 font-20">
                        Saat ini bisnis kami <span class="color-theme medium">#Obugame</span> berkembang dengan pesat,
                        kami
                        siap membantu dan bermitra dengan
                        Anda. Berikut adalah syarat dan ketentuan untuk bermitra bersama kami. Tunggu apa lagi yuk mulai
                        bangun bisnis Anda bersama <span class="color-theme medium">#Obugame.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</section>
