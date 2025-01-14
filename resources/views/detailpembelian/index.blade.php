@include('layout.head')
@include('layout.header')

<h3>Detail Pembelian Alat Tulis</h3>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Detail Pembelian</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allDetailPembelian as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->nama }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('layout.footer')
