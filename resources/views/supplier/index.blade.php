@extends('layout.main')
@section('content')

<h1>Master Supplier</h1>
<div class="card">
<div class="card-header">
<table class="table table-sm table-stripped table-bordered">
    <thead>
<tr>
    <td>No</td>
    <td>Kode Supplier</td>
    <td>Nama Supplier</td>
</tr>
<?php
$no=0; 
foreach ($supplier as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nama_dosen }}</td>
    <td>{{ $rows->nama_mk }}</td>
</tr>

<?php
}

?>

</table>
</tbody>

</div>
</div>

@endsection