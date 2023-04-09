<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Sukses Check Out</h3>
                        <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di
                            rekening
                            <strong>Bank BRI Nomer Rekening : 123-123-123</strong> dengan nominal : <strong>Rp.
                                {{ number_format($pesanan->kode + $pesanan->jumlah_harga) }}</strong>
                        </h5>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                        @if (!empty($pesanan))
                            <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ url('images') }}/{{ $pesanan_detail->barang->gambar }}"
                                                    width="100" alt="...">
                                            </td>
                                            <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                            <td>{{ $pesanan_detail->jumlah }} kain</td>
                                            <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga) }}
                                            </td>
                                            <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}
                                            </td>

                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td align="right"><strong>Rp.
                                                {{ number_format($pesanan->jumlah_harga) }}</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                        <td align="right"><strong>Rp. {{ number_format($pesanan->kode) }}</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong>
                                        </td>
                                        <td align="right"><strong>Rp.
                                                {{ number_format($pesanan->kode + $pesanan->jumlah_harga) }}</strong>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
    <style>
        .container {
            margin: 0 auto;
            max-width: 960px;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            font-size: 16px;
            font-weight: 500;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-color: #007bff;
            border: 1px solid #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 15px;
        }

        .btn:hover {
            background-color: #0069d9;
            border: 1px solid #0062cc;
        }

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

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-body {
            padding: 30px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table th {
            font-weight: 500;
            text-align: inherit;
            background-color: #e9ecef;
            border-bottom: 2px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary>th,
        .table-primary>td {
            background-color: #007bff !important;
            color: #fff;
        }

        .table-primary th,
        .table-primary td {
            border-color: #007bff;
        }

        .table-primary.table-bordered {
            border: 2px solid #007bff;
        }

        .table-primary.table-bordered th,
        .table-primary.table-bordered td {
            border: 1px solid #007bff;
        }
    </style>
</x-app-layout>
