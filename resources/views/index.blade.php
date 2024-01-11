@extends('core.home')
@section('content')
<header>
    <nav class="container navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="#">Kuy.id</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="" target="_blank" class="nav-link">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank" class="nav-link">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank" class="nav-link">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank" class="nav-link">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <div class="container hero text-center text-white">
        <div class="row">
            <div class="col-sm-12 mt-5 mb-5">
                <div class="h1">
                    PT. Kuy santuy indonesia
                </div>
                <h1 class="mt-4 hero-title">Cari jasa IT murah dan terjangkau?</h1>
                <p class="mt-4">
                    Kuy santuy in dulu aja, Menyediakan jasa pembuatan website dan content writer untuk anda, plus banyak promonya!
                </p>
                <a href="#product-first" class="btn mybtn mb-5 mt-3 px-5">Lihat Kebawah</a>
                <div class="pb-5"></div>
                <div class="pb-2"></div>
            </div>
        </div>
    </div>
</header>
<div class="shoesimg text-center mb-5">
    <img src="" alt="" style="width: 80%;margin: 0 auto;">
</div>
<div class="pb-2"></div>
<div class="container testimonial mt-5">
    <div class="row">
        @foreach ($testimoni as $testi)

        <div class="col-sm-6 text-center">
            <p class="text-testi">
                {!! $testi->komentar !!}
            </p>
            <div class="rating text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <img src="" alt="" class="profile mt-4">
            <div class="h4 mt-3">
                {{ $testi->nama }}
            </div>
            <p class="small">
                {{ $testi->profesi }}
            </p>
        </div>
        @endforeach

    </div>
</div>
<div class="pb-5"></div>

<div class="container-fluid back-half mt-5" id="product-first">
    <div class="container mt-5 pt-5 pb-5">
        <div class="row">
            <div class="col-sm-3 mt-3">
                <div class="radius mt-8">
                    <div class="pt-5 spacing5"></div>
                    <div class="bg-white mb-4" style="width: 120px;padding: 2px;"></div>
                    <h2 class="text-white">Pembuatan Website</h2>
                    <div class="pt-3"></div>
                    <p class="text-white">
                        Promo pembuatan website murah dan banyak promonya.
                    </p>
                    <div class="prev bg-white border next-btn mt-4" style="font-size: 10pt;">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="next bg-white border prev-btn mt-4" style="font-size: 10pt;">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-sm-offset-3 mt-3">
                <div class="swiper-container">
                    <div class="swiper-wrapper pt-4 pb-5">
                    @foreach ($it as $it)

                    <div class="swiper-slide pl-1 pr-1">
                        <div class="shadow bg-white rounded-lg radius detail-brosur p-2">
                            <a href="#">
                                <img src="{{ $it->gambar }}" class="w-100" style="margin-top:10px;">
                            </a>
                            <div class="rating text-center mt-3 mb-4">
                                @for ($i = 0; $i < $it->bintang; $i++)
                                    
                                    <i class="fa fa-star"></i>
                                @endfor
                                
                            </div>
                            <div class="h5 text-center mb-4">
                                {{ $it->nama }}
                            </div>
                            <div class="price-discount h6 text-center">
                                <s>{{ number_format($it->harga_coret, 2, ',', '.') }}</s>
                            </div>
                            <div class="h5 mb-4 text-center" style="color: #2B2AAC;">
                                <b>{{ number_format($it->harga, 2, ',', '.') }}</b>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    </div>
                    <div class="swiper-pagination" style="margin-top: 100px !important;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid back-half-2 mt-5">
    <div class="container mt-5 pt-5 pb-5">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 mt-3 order-2 order-sm-1">
                <div class="swiper-container">
                    <div class="swiper-wrapper pt-4 pb-5">
                        @foreach ($content as $content)


                        <div class="swiper-slide pl-1 pr-1">
                            <div class="shadow bg-white rounded-lg radius detail-brosur p-2">
                                <a href="#">
                                    <img src="{{ $content->gambar }}" class="w-100" style="margin-top:10px;">
                                </a>
                                <div class="rating text-center mt-3 mb-4">
                                    @for ($i = 0; $i < $content->bintang; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                                <div class="h5 text-center mb-4">
                                    {{ $content->nama }}
                                </div>
                                <div class="price-discount h6 text-center">
                                    <s>{{ number_format($content->harga_coret, 2, ',', '.') }}</s>
                                </div>
                                <div class="h5 mb-4 text-center" style="color: #2B2AAC;">
                                    <b>{{ number_format($content->harga, 2, ',', '.') }}</b>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination" style="margin-top: 100px !important;"></div>
                </div>
            </div>
            <div class="col-sm-3 mt-3 order-1 order-sm-2">
                <div class="radius mt-8">
                    <div class="pt-5 spacing5"></div>
                    <div class="bg-white mb-4" style="width: 120px;padding: 2px;"></div>
                    <h2 class="text-white">Content Writer</h2>
                    <div class="pt-3"></div>
                    <p class="text-white">
                        Penulisan content untuk website anda dengan harga murah.
                    </p>
                    <div class="prev bg-white border next-btn mt-4" style="font-size: 10pt;">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="next bg-white border prev-btn mt-4" style="font-size: 10pt;">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pb-5"></div>
<div class="pb-5"></div>
<div class="container text-center mt-5 featured-product">
    <h2 class="text-center">Produk Unggulan Kami</h2>
    <div class="product-name text-center">
        {{ $random->nama }}
    </div>
    <img src="" alt="" class="product-image">
    <div class="price-discount mt-5 h2 text-center">
        <s>{{ number_format($random->harga_coret, 2, ',', '.') }}</s>
    </div>
    <div class="h1 mb-4 mt-2 text-center" style="color: #2B2AAC;">
        <b>{{ number_format($random->harga, 2, ',', '.') }}</b>
    </div>

    <a href="https://wa.me/6285861356127" target="_blank" class="btn btn-buy mb-5 mt-3 px-5">Beli Sekarang</a>
</div>

<div class="pt-5"></div>
<div class="container">
    <div class="row" style="">
        <div class="col-sm-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="#4d69d1" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
            </svg>
        </div>
        <div class="col-sm-9 p-4">
            <h3>Garansi Uang Kembali</h3>
            <p class="mt-4">
                Kami selalu menjaga kualitas produk kami sehingga kami memberikan jaminan kepada para calon pembeli jika calon pembeli tidak puas dengan produk yang diterima, hal ini membuktikan produk kami tentunya harus berkualitas tinggi!
            </p>
        </div>
    </div>
</div>
<div class="pt-5"></div>

<div class="container-fluid mt-5" style="background-color: #4D69D1;">
    <div class="p-2"></div>
    <h2 class="text-center text-white pt-5 pb-5">Kelebihan Qodha.id</h2>
    <div class="p-5"></div>
    <div class="p-4"></div>
</div>
<div class="container value-product">
    <div class="row">
        <div class="col-sm-4 box-value">
            <div class=" shadow-lg p-4 bg-white">
                <h3>Produk Original</h3>
                <p class="mt-3">
                    produk yang kami tawarkan dijamin orinya! jadi pembeli gak perlu khawatir tentang produk yang kami punya
                </p>
            </div>
        </div>

        <div class="col-sm-4 box-value">
            <div class=" shadow-lg p-4 bg-white">
                <h3>Kualitas aromaterapi</h3>
                <p class="mt-3">
                    Dengan bahan yang bekualitas Aromaterapi qodha dijamin selalu menggunakan bahan baku yang berkualitas dan terjamin
                </p>
            </div>
        </div>
        <div class="col-sm-4 box-value">
            <div class=" shadow-lg p-4 bg-white">
                <h3>Ketahanan aroma</h3>
                <p class="mt-3">
                    Karena bahannya yang mantap, aromaterapi kami memiliki ketahanan yang cukup tinggi untuk dipakai segala kegiatan.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="pt-5"></div>
<div class="pt-3"></div>
<div class="container faq">
    <h2 class="text-center pt-5 pb-5">FAQ</h2>
    <div class="accordion" id="accordionExample">
        @foreach ($faq as $faq)

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button">
                    {{ $faq->tanya }}
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{ $faq->jawab }}
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<div class="p-5"></div>


<div class="p-5"></div>
<footer>
    <div class="container-fluid text-center text-white py-5" style="background: #2B2AAC;">
        
        <p>
            By <a href="#" class="text-white mt-2">Bahlul</a>
        </p>
    </div>
</footer>

@endsection
