<h1>Djurnal</h1>
<table border="1" width="75%">
<tr>
    <td>id</td>
    <td>transaksi_id</td>
    <td>jurnalkode</td>
    <td>NomorPerkiraan</td>
    <td>TanggalTransaksi</td>
    <td>bulan_transaksi</td>
    <td>jenis_transaksi</td>
    <td>Keterangan</td>






</tr>
<?php
$no=0; 
foreach ($djurnal as $rows){
$no++;
?>
<tr>
    <td>{{ $id }}</td>
    <td>{{ $rows->transaksi_id }}</td>
    <td>{{ $rows->jurnalkode }}</td>
    <td>{{ $rows->NomorPerkiraan }}</td>
    <td>{{ $rows->TanggalTransaksi }}</td>
    <td>{{ $rows->bulan_transaksi }}</td>
    <td>{{ $rows->jenis_transaksi }}</td>
    <td>{{ $rows->Keterangan }}</td>

</tr>

<?php
}

?>

</table>