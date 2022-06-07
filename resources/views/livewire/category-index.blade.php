<div>
    {{-- Start dropdown --}}
    <div class="container">
        <div id="kategori" class="container mt-5 mb-3">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="kategori-form" class="medium font-18 text-left">Kategori Produk</label>
                            <select wire:model="byCategories" class="form-control form-theme" id="kategori-form"
                                name="kategori-form">
                                <option value="">Semua Produk
                                </option>
                                @foreach ($dataCategory as $categories)
                                    <option value="{{ $categories->MP_ProductName }}">
                                        {{ $categories->MP_ProductName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End dropdown --}}

    {{-- Start Kategori Produk --}}
    <section class="mt-lg-3">
        <div class="container">
            <div class="row py-4 px-2">
                @if ($category->isEmpty())
                    @foreach ($category as $product)
                        <div class="col-lg-3 d-flex justify-content-center mb-4">
                            <a href="/details_product/{{ $product->DocEntry }}/show" class="card-a">
                                <div class="card shadow-card border-none">
                                    <img class="card-img-top" src="{{ $product->MP_Pic1 }}" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="h6 card-text medium text-left text-card">{{ $product->Itemname }}
                                        </p>
                                        <p class="card-text product-price bold">Rp.
                                            {{ intval($product->MP_UnitPrice) }}
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="card-text semi-bold font-10 text-left text-card">
                                                    Obugame<br><span class="card-text total-sales regular medium">Stok
                                                        {{ $product->MPStockProduct }}</span></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h6 class="card-text text-right shop-location mt-4 font-10 semi-bold">
                                                    {{ $product->MPName }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    @foreach ($products as $product)
                        <div class="col-lg-3 d-flex justify-content-center mb-4">
                            <a href="/details_product/{{ $product->DocEntry }}/show" class="card-a">
                                <div class="card shadow-card border-none">
                                    <img class="card-img-top" src="{{ $product->MP_Pic1 }}" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="h6 card-text medium text-left text-card">{{ $product->Itemname }}
                                        </p>
                                        <p class="card-text product-price bold">Rp.
                                            {{ intval($product->MP_UnitPrice) }}
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="card-text semi-bold font-10 text-left text-card">
                                                    Obugame<br><span class="card-text total-sales regular medium">Stok
                                                        {{ $product->MPStockProduct }}</span></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h6 class="card-text text-right shop-location mt-4 font-10 semi-bold">
                                                    {{ $product->MPName }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    {{-- End Kategori Produk --}}
</div>
