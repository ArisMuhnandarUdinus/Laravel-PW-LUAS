@include('layout.head')
@include('layout.header')

<h3>Buat DetailPembelian</h3>

<form action="{{ route('detailpembelian.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Detail Pembelian:</label>
        <input type="text" name="nama" id="" placeholder="Masukkan nama detail pembelian">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
