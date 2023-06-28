+<h1>Edit Data Transaksi</h1>
<form action="{{ asset('views_yosi/edit_proses_yosi') }}" method="POST">
@csrf
<input type="hidden" name="id_transaksi" value="<?php echo $views_yosi->id_transaksi ?>">
Nomor Akun <input type="text" name="kode_jurnal" value="<?php echo $views_yosi->kode_jurnal ?>"><br>
Nomor Perkiraan <input type="text" name="nomor_perkiraan" value="<?php echo $views_yosi->nomor_perkiraan ?>"><br>
Tanggal Transaksi <input type="text" name="tanggal_transaksi" value="<?php echo $views_yosi->tanggal_transaksi ?>"><br>
Bulan Transaksi <input type="text" name="bulan_transaksi" value="<?php echo $views_yosi->bulan_transaksi ?>"><br>
Jenis Transaksi <input type="text" name="jenis_transaksi" value="<?php echo $views_yosi->jenis_transaksi ?>"><br>
<input type="submit" value="Simpan">
</form>