{{-- Navabar Start --}}
<section id="navbar">
    <nav class="navbar navbar-expand-md navbar-dark navbar-color fixed-top shadow-card  ">
        <div id="navbar-container" class="container d-flex justify-content-lg-around align-items-center">
            @if (auth()->user() != null)
                <a title="Beranda" class="navbar-brand semi-bold font-20" href="/home">Obugame</a>
            @else
                <a title="Beranda" class="navbar-brand semi-bold font-20" href="/beranda-customer">Obugame</a>
            @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                <form class="form-inline my-3 mx-auto search-bar" method="GET"
                    action="{{ url('search-customer') }}">
                    <input type="text" name="search" id="search" class="form-control pl-5 medium secondary-color"
                        size="40" type="search" placeholder="Cari produk di Obugame" aria-label="Search">
                    <label for="search"
                        class="label-search fa-solid fa-magnifying-glass search-color ml-3 my-auto"></label>
                </form>
                <div id="icon-store" class="mx-lg-5 p-3">
                    <a title="Dashboard Toko" href="/dashboard-toko-customer"><i
                            class="fa-solid fa-store icon-size icon-store-2"></i></a>
                </div>
                {{-- Menu Navbar Dropdown --}}
                <div class="dropdown">
                    <button class="btn btn-login dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        @if (auth()->user() != null) title="Menu User" @else title="Menu Customer" @endif>
                        @if (auth()->user() != null)
                            {{ Auth::user()->name }}
                        @else
                            Customer
                        @endif
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if (auth()->user() != null)
                            {{-- Pengecekkan tombol user --}}
                            <a id="item-menu" class="dropdown-item" href="/beranda-customer">
                                <i class="fa-solid fa-house pr-3"></i>
                                Beranda
                            </a>
                            <a id="item-menu" class="dropdown-item" href="/kelola-produk">
                                <i class="fa-solid fa-bars-progress pr-3"></i>
                                Kelola Produk
                            </a>
                            <a id="item-menu" class="dropdown-item" href="/kelola-promo">
                                <i class="fa-solid fa-tags pr-3"></i>
                                Kelola Promo
                            </a>
                            <a id="item-menu" class="dropdown-item" href="/join-mitra">
                                <i class="fa-solid fa-bullhorn pr-3"></i>
                                Join Reseller
                            </a>
                            <hr class="hr-panel">
                            <a id="item-menu" class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-power-off pr-3"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <a id="item-menu" class="dropdown-item" href="/beranda-customer">
                                <i class="fa-solid fa-house pr-3"></i>
                                Beranda
                            </a>
                            <a id="item-menu" class="dropdown-item" href="/join-mitra">
                                <i class="fa-solid fa-bullhorn pr-3"></i>
                                Join Reseller
                            </a>
                            <hr class="hr-panel">
                            <a id="item-menu" class="dropdown-item" href="/login">
                                <div class="row">
                                    <div class="col-lg">
                                        <i class="fa-solid fa-power-off pr-3"></i>
                                        Login
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>
{{-- Navbar End --}}
