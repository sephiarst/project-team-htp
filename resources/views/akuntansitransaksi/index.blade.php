@extends('layout.main')
@section('content')

<h1>Transaksi</h1>
<div class="card">
<div class="card-header">
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
    <td>No</td>
    <td>Kode Jurnal</td>
    <td>Nomor Perkiraan</td>
    <td>Tanggal Transaksi</td>
    <td>Bulan Transaksi</td>
    <td>Jenis Transaksi</td>
    <td>Keterangan Transaksi</td>
    <td>Debet</td>
    <td>Kredit</td>
    <td>Tanggal Posting</td>
    <td>Keterangan Posting</td>
    
 </tr>  
 </thead>

<tbody> 
<?php 
$no=0;
foreach ($akuntansitransaksi as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    td>{{ $rows->kode_jurnal }}</td>
    <td>{{ $rows->nomor_perkiraan }}</td>
    <td>{{ $rows->tanggal_transaksi }}</td>
    <td>{{ $rows->bulan_transaksi }}</td>
    <td>{{ $rows->jenis_transaksi }}</td>
    <td>{{ $rows->keterangan_transaksi }}</td>
    <td>{{ $rows->debet }}</td>
    <td>{{ $rows->kredit }}</td>
    <td>{{ $rows->tanggal_posting }}</td>
    <td>{{ $rows->keterangan_posting }}</td>

    
    
    <td>{{ $rows->tipe }}</td>
    
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection