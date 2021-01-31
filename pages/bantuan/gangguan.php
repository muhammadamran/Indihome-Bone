
<div class="container card border-5 shadow-sm text-dark mb-3 overflow-hidden" data-aos="fade-up" style="width:1000px; height:500px; position:middle; margin-top:50px; border-radius:20px;">
	<hr>
	<h3 align="center">Laporan Anda</h3>
	<hr>
	<div class="panel panel-inverse">
		<div class="panel-body">
			<table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
				<thead>
					<tr>
						<!-- <th class="text-nowrap">NIP</th> -->
						<th class="text-nowrap">Nomor User</th>
						<th class="text-nowrap">Nama User</th>
						<th class="text-nowrap">Email User</th>
						<th class="text-nowrap">Alamat</th>
						<th class="text-nowrap">Nomor HP</th>
						<th class="text-nowrap">Keluhan</th>
						<th class="text-nowrap">Jawaban</th>
						<th class="text-nowrap">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$us = $_SESSION['id_user'];
					$data = $db->query("SELECT * FROM keluhan WHERE id_user='$us' ORDER BY id DESC", 0);
					while($row = $data->fetch_assoc()) {
						?>
						<tr>
							<td><?= $row['id_user'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['id_user'] ?></td>
							<td><?= $row['nama_user'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['nama_user'] ?></td>
							<td><?= $row['email_user'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['email_user'] ?></td>
							<td><?= $row['alamat'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['alamat'] ?></td>
							<td><?= $row['hp_user'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['hp_user'] ?></td>
							<td><?= $row['keluhan'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['keluhan'] ?></td>
							<td><?= $row['jawaban'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['jawaban'] ?></td>
							<td><?= $row['status'] == NULL ? "<i><font style='color:red;'>Belum direspon Petugas & Admin</font></i>" : $row['status'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="container card border-5 shadow-sm text-dark mb-3 overflow-hidden" data-aos="fade-up" style="width:500px; height:500px; position:middle; margin-top:50px; border-radius:20px;">
	<div class="">
		<form action="pages/bantuan/info_proses.php?aksi=masuk" method="POST" role="form">
			<br>
			<h3>Laporan Keluhan</h3>
			<br>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control" placeholder="Input Alamat">
			</div>
			<br>
			<div class="form-group">
				<label for="keluhan">Keluhan</label>
				<textarea rows="6" cols="50" name="keluhan" class="form-control" placeholder="Keluhan"></textarea>
			</div>
			<input type="hidden" name="email" value="<?php echo $_SESSION['email_user'];?>">
			<input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'];?>">
			<input type="hidden" name="nama" value="<?php echo $_SESSION['nama_user'];?>">
			<input type="hidden" name="hp" value="<?php echo $_SESSION['nomorhp_user'];?>">
			<br>
			<button type="submit" value="submit" class="beli">Submit</button>
		</form>
	</div>
</div>
<style>
	.beli{
		background: #3498db;
		width: 50%;
		color: #fff;
		border-radius: 50px;
		border:none;
		margin: 0 0 0 30px;
		padding: 10px 25px;
	}
	.beli:hover{
		background: #57aae1;
		color: #fff;
	}
</style>