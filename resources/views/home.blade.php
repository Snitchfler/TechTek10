<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <!-- CSS untuk Slick -->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />

        <!-- CSS untuk Slick Theme -->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
        <title>TechTek Store</title>
    </head>

    <body>

        <div class="header">
            <div class="slider">
                @foreach (glob('carousel/*') as $image)
                    <div class="col-2">
                        <img src="{{ asset($image) }}" width="100%">
                    </div>
                @endforeach
            </div>
            <div class="small-container">
                <div class="title">
                    <h2>Featured Products</h2>
                </div>
                <div class="row">
                    @if (isset($barangs))
                        @foreach ($barangs as $barang)
                            <div class="col-4">
                                <img src="{{ asset('images/' . $barang->gambar) }}" alt="{{ $barang->nama_barang }}" />
                                <h4>{{ $barang->nama_barang }}</h4>
                                <p>Rp. {{ number_format($barang->harga) }}</p>
                                <p>Stok: {{ $barang->stok }}</p>
                                <p>{{ $barang->keterangan }}</p>
                                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i
                                        class="fa fa-shopping-cart"></i> Pesan</a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col-1">
                                <h3>Download Our App</h3>
                                <img src="asset/app-store.png">
                                <img src="asset/play-store.png">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, placeat?</p>
                            </div>
                            <div class="footer-col-2">
                                <img src="asset/LogoIcon.png" width="50px">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, alias?</p>
                            </div>
                            <div class="footer-col-3">
                                <h3>Follow Us</h3>
                                <ul>
                                    <li>Facebook</li>
                                    <li>Twitter</li>
                                    <li>Instagram</li>
                                    <Li>Youtube</Li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
    <!-- Script untuk jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Script untuk Slick -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Script untuk inisialisasi Slick -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
    </script>



    </html>
</x-app-layout>
