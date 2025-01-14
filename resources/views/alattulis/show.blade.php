@include('layout.head')
@include('layout.header')

<h3>Detail Alat Tulis</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama Alat Tulis</td>
            <td>{{ $alattulis->nama }}</td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>{{ $alattulis->stok }}</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>{{ $alattulis->harga }}</td>
        </tr>
    </tbody>
</table>

@include('layout.footer')
