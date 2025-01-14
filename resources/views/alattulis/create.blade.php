@include('layout.head')
@include('layout.header')

<h3>Tambah Alat Tulis</h3>

<form action="{{ route('alattulis.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nama Alat Tulis</label>
        <input type="text" name="nama" id="" placeholder="Masukkan nama">
    </div>

    <div class="form-group">
        <label>Stock</label>
        <input type="number" name="stok" id="" min="0" placeholder="Masukkan jumlah stock">
    </div>

    <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
