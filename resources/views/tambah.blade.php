<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TechTek Store</title>
</head>

<body>
    <div class="header">
        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" required>
            </div>
            <div>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" required>
            </div>
            <div>
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" required>
            </div>
            <div>
                <label for="stok">Stok</label>
                <input type="number" name="stok" id="stok" required>
            </div>
            <div>
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="5" required></textarea>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>

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
</body>

</html>

</x-app-layout>
