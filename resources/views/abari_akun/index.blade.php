<h1>Master Akun (by: Abdul Bari)</h1>
<a href="{{ asset('abari_akun/tambah')  }}">Tambah Data</a>
<table border="1" width="75%">
 <tr style="background:black;color:white">
    <td>No</td>
    <td>Nomor Perkiraan</td>
    <td>Nama Perkiraan</td>
    <td>Kelompok</td>
    <td>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($akun as $rows){
$no++;
?>
<tr>
    <td><?php echo $no ?></td>
    <td><?php echo $rows->nomor_perkiraan ?></td>
    <td><?php echo $rows->nama_perkiraan ?></td>
    <td><?php echo $rows->kelompok ?></td>
    <td>
        <a href="{{ asset('abari_akun/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('abari_akun/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>