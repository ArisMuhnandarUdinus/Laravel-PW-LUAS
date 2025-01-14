@include('layout.head')
@include('layout.header')

<h3>Detail DetailPembelian</h3>

<table>
    <tbody>
        <tr>
            <td width="150px">Nama detail pembelian</td>
            <td>{{ $detailpembelian->nama }}</td>
        </tr>
    </tbody>
</table>

@include('layout.footer')
