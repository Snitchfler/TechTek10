<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                        </ol>
                    </nav>
                </div>
                <div style="max-width: 100%; margin: 0 auto;">
                    <div style="background-color: #fff; padding: 16px; margin-top: 16px;">
                        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                            <div style="width: 50%; max-width: 400px; margin-right: 16px; margin-left: auto; ">
                                <img src="{{ url('images') }}/{{ $barang->gambar }}"
                                    style="display: block; width: 80%; height: auto;" alt="">
                            </div>
                            <div style="width: 50%; max-width: 400px; margin:auto">
                                <h2 style="font-size: 28px; margin-top: 0; margin-bottom :8px">
                                    {{ $barang->nama_barang }}</h2>
                                <table style="font-size: 14px; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="margin-right: 8px;">Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($barang->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-right: 8px;">Stok</td>
                                            <td>:</td>
                                            <td>{{ number_format($barang->stok) }}</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-right: 8px;">Keterangan</td>
                                            <td>:</td>
                                            <td>{{ $barang->keterangan }}</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-right: 8px;">Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}">
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan"
                                                        style="border-radius: 4px; padding: 0.001px; width: 100%; margin-bottom: 8px;"
                                                        required="">
                                                    <button type="submit"
                                                        style="background-color: #007bff; color: #fff; border-radius: 4px; padding: 8px; width: 100%; text-align: center;">
                                                        <i class="fa fa-shopping-cart"></i> Masukkan Keranjang
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .breadcrumb {
            display: flex;
            margin-bottom: 1rem;
            list-style: none;
            padding: 0;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            display: inline-block;
            padding-right: 0.5rem;
            color: #6c757d;
            content: "›";
            font-weight: bold;
        }

        .breadcrumb-item a {
            color: #007bff;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }
    </style>
</x-app-layout>
