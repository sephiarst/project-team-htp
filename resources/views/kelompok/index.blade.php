<h1>Kelompok</h1>
<table border="1" width="75%">
<tr>
    <td>No</td>
    <td>Kelompok</td>
</tr>
<?php
$no=0; 
foreach ($kelompok as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->Kelompok }}</td>
</tr>

<?php
}

?>

</table>