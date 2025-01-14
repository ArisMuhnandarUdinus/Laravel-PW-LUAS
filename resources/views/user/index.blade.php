@include('layout.head')
@include('layout.header')

<h3>User yang bergabung</h3>
<a href="{{ route('register') }}" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Bergabung</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allUser as $item => $i)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('layout.footer')
