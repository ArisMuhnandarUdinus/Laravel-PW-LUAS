@include('layout.head')
@include('layout.header')

<h3>Ubah Alat Tulis</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('alattulis.update', $alattulis->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nama Alat Tulis AlatTulis:</label>
        <input type="text" name="nama" placeholder="Masukkan nama alat tulis" value="{{ $alattulis->nama }}">
    </div>

    <div class="form-group">
        <label>Stock Alat Tulis:</label>
        <input type="number" name="stok" id="" min="1" placeholder="Masukkan harga alat tulis"
            value="{{ $alattulis->stok }}">
    </div>

    <div class="form-group">
        <label>Harga Alat Tulis:</label>
        <input type="number" name="harga" id="" min="1" placeholder="Masukkan harga alat tulis"
            value="{{ $alattulis->harga }}">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
