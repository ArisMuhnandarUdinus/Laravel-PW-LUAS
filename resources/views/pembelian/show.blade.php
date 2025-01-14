@include('layout.head')
@include('layout.header')

<h3>Detail Alat Tulis</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama Alat Tulis</td>
            <td>{{ $data->alattulis->nama_alat_tulis }}</td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td>{{ $data->jumlah }}</td>
        </tr>
        <tr>
            <td>Harga Satuan</td>
            <td>{{ $data->alattulis->harga }}</td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>{{ $data->harga_total }}</td>
        </tr>
        <tr>
            <td>Pembeli</td>
            <td>{{ $data->user->name }}</td>
        </tr>
        <tr>
            <td>Tanggal Pembelian</td>
            <td>{{ $data->created_at }}</td>
        </tr>
    </tbody>
</table>

@include('layout.footer')
