@include('layout.head')
@include('layout.header')

<h3>Alat Tulis</h3>
<a href="{{ route('alattulis.create') }}" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Alat Tulis</th>
            <th>Stock</th>
            <th>Harga</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alattulis as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->stok }}</td>
                <td>{{ $r->harga }}</td>
                <td>
                    <form action="{{ route('alattulis.destroy', $r->id) }}" class="aksi" method="POST">
                        <a href="{{ route('alattulis.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('alattulis.edit', $r->id) }}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('layout.footer')
