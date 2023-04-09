<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if ($query)
                    You searched for "{{ $query }}"
                @else
                    No search query provided.
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        @csrf
        @if (isset($results))
            @foreach ($results as $barang)
                <div class="col-4">
                    <img src="{{ asset('images/' . $barang->gambar) }}" alt="{{ $barang->nama_barang }}" />
                    <h4>{{ $barang->nama_barang }}</h4>
                    <p>Rp. {{ number_format($barang->harga) }}</p>
                    <p>Stok: {{ $barang->stok }}</p>
                    <p>{{ $barang->keterangan }}</p>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary" data-toggle="modal"
                        data-target="#detailPesananModal-{{ $barang->id }}"
                        id="btnDetailPesanan-{{ $barang->id }}"><i class="fa fa-shopping-cart"></i>
                        Pesan</a>
                </div>
            @endforeach
        @endif
    </div>
</x-app-layout>
