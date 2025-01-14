@include('layout.head')
@include('layout.header')

<h3>Ubah DetailPembelian</h3>

<form action="{{ route('detailpembelian.update', $detailpembelian->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama Detail Pembelian:</label>
        <input type="text" name="nama" id="" value="{{ $detailpembelian->nama }}">
    </div>

    <button type="submit" class="tombol">Update</button>
</form>

@include('layout.footer')
