<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <h3><i class="fa fa-shopping-cart"></i> Check Out</h3> --}}
                                    @if (!empty($pesanan))
                                        <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Gambar</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga</th>
                                                    <th>Total Harga</th>
                                                    <th>Aksi</th>
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
                                                        <td>{{ $pesanan_detail->jumlah }}</td>
                                                        <td align="right">Rp.
                                                            {{ number_format($pesanan_detail->barang->harga) }}
                                                        </td>
                                                        <td align="right">Rp.
                                                            {{ number_format($pesanan_detail->jumlah_harga) }}
                                                        </td>
                                                        <td>
                                                            <form
                                                                action="{{ url('checkout') }}/{{ $pesanan_detail->id }}"
                                                                method="post">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Anda yakin akan menghapus data ?');"><i
                                                                        class="fa fa-trash">Delete</i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="5" align="right"><strong>Total Harga :</strong>
                                                    </td>
                                                    <td align="right"><strong>Rp.
                                                            {{ number_format($pesanan->jumlah_harga) }}</strong>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('konfirmasi-check-out') }}"
                                                            class="btn btn-success"
                                                            onclick="return confirm('Anda yakin akan Check Out ?');">
                                                            <i class="fa fa-shopping-cart"></i> Check Out
                                                        </a>
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
            </div>
        </div>
    </div>

    <style>
        .card {
            margin-top: 20px;
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #ccc;
        }

        .card-header h3 {
            margin-bottom: 0;
        }

        .card-body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead th {
            text-align: left;
            padding: 10px;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ccc;
        }

        table tbody td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        table tbody tr:hover {
            background-color: #f7f7f7;
        }

        table tbody td img {
            max-width: 100%;
        }

        table tfoot td {
            text-align: right;
            font-weight: bold;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .btn-success {
            display: inline-block;
            background-color: #1dc02e;
            color: #fff;
            padding: 4px 15px;
            margin: 15px 0;
            border-radius: 20px;
            transition: background 0.5s;
        }

        .btn-danger {
            display: inline-block;
            background-color: #c01d1d;
            color: #fff;
            padding: 4px 15px;
            margin: 15px 0;
            border-radius: 20px;
            transition: background 0.5s;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }

        .btn-sm i {
            margin-right: 5px;
        }

        .btn:hover {
            background: black;
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
    </style>
</x-app-layout>
