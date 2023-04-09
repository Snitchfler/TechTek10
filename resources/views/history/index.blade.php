<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table style="border-collapse: collapse;">
                        <thead>
                            <tr style="background-color: #007bff; color: white; text-align: left;">
                                <th style="padding: 10px;">No</th>
                                <th style="padding: 10px;">Tanggal</th>
                                <th style="padding: 10px;">Status</th>
                                <th style="padding: 10px;">Jumlah Harga</th>
                                <th style="padding: 10px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($pesanans as $pesanan)
                                <tr style="border: 1px solid black;">
                                    <td style="padding: 10px;">{{ $no++ }}</td>
                                    <td style="padding: 10px;">{{ $pesanan->created_at }}</td>
                                    <td style="padding: 10px;">
                                        @if ($pesanan->status == 1)
                                            Sudah Pesan & Belum dibayar
                                        @else
                                            Sudah dibayar
                                        @endif
                                    </td>
                                    <td style="padding: 10px;">Rp.
                                        {{ number_format($pesanan->jumlah_harga + $pesanan->kode) }}</td>
                                    <td style="padding: 10px;">
                                        <a href="{{ url('history') }}/{{ $pesanan->id }}"
                                            style="background-color: grey; color: white; padding: 10px; border-radius: 5px; text-decoration: none;">
                                            <i class="fa fa-info"></i> Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Style untuk tombol Kembali */


        /* Style untuk daftar menu */
        ul {
            list-style-type: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            padding: 0;
        }

        ul li a {
            color: black;
            padding: 10px;
            text-decoration: none;
        }

        ul li:nth-child(2) {
            font-weight: bold;
        }

        /* Style untuk judul halaman */
        h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Style untuk tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            border: 1px solid black;
            background-color: grey;
            color: white;
            text-align: left;
            padding: 10px;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }

        td:first-child {
            font-weight: bold;
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
    </x-app-layouut>
