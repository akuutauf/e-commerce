{{-- Navabar Start --}}
<section id="navbar">
    <nav class="navbar navbar-expand-md navbar-dark navbar-color fixed-top shadow-card  ">
        <div id="navbar-container" class="container d-flex justify-content-lg-around align-items-center">
            <a class="navbar-brand semi-bold font-20" href="/beranda-customer">Obugame</a>
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
                    <a href="/dashboard-toko-customer"><i class="fa-solid fa-store icon-size icon-store-2"></i></a>
                </div>

                {{-- Pengecekkan tombol user --}}
                @if (auth()->user() != null)
                    <a id="Login-button" class="btn btn-login px-sm-4 py-sm-1 my-auto" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a id="login-button" class="btn btn-login px-sm-4 py-sm-1 my-auto" href="/">LOGIN</a>
                @endif
            </div>
        </div>
    </nav>
</section>
{{-- Navbar End --}}
