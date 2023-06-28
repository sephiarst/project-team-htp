<h1>Table Induk User</h1>

<table border="1" width="75%">
 <tr style="background:black;color:white">
    <td>No</td>
    <td>ID User</td>
    <td>Username</td>
    <td>Passowrd</td>
    <td>nama lengkap</td>
    <td>asal kantor</td>

 </tr>   
<?php 
$no=0;
foreach ($indukuser as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id }}</td>
    <td>{{ $rows->username }}</td>
    <td>{{ $rows->passowrd }}</td>
    <td>{{ $rows->nama_lengkap }}</td>
    <td>{{ $rows->asal_kantor }}</td>

    <td>
       
    </td>
</tr>
<?php 
}
?>
</table>