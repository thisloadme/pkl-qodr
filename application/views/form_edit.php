			<div class="container">
<?php if ($var) {
	$kode = $var->kode;
	$nama = $var->nama;
	$nick = $var->nick;
	$tempat = $var->tempat_lahir;
	$tanggal = $var->tanggal_lahir;
	$alamat = $var->alamat;
	$negara = $var->nationality;
	$no = $var->no_hp;
	$email = $var->email;
	$gambar = $var->gambar;
} ?>
				<br>
				<div class="row">
					<div class="container">
						<h5><i class="material-icons teal-text">create</i>   Form ubah identitas siswa</h5>
						<form class="col s12 m12" enctype="multipart/form-data" action="<?=site_url('c_home/update/'.$kode) ?>" method="post">
							<div class="input-field">
							<label for="nama">Nama</label>
							<input id="nama" value="<?=$nama ?>" class="validate" type="text" name="nama"><br>
							</div>

							<div class="input-field">
							<label for="nick">Nickname</label>
							<input id="nick" value="<?=$nick ?>" class="validate" type="text" name="nick"><br>
							</div>
							
							<div class="input-field">
							<label for="tempat">Tempat Lahir</label>
							<input id="tempat" value="<?=$tempat ?>" class="validate" type="text" name="tempat"><br>
							</div>
							
							<div class="input-field">
							<label for="tanggal">Tanggal Lahir</label><br>
							<input id="tanggal" value="<?=$tanggal ?>" type="date" name="tanggal"><br>
							</div>
							
							<div class="input-field">
							<label for="alamat">Alamat</label>
							<input id="alamat" value="<?=$alamat ?>" class="validate" type="text" name="alamat"><br>
							</div>

							<div class="input-field">
							<label for="negara">Negara</label>
							<input id="negara" value="<?=$negara ?>" class="validate" type="text" name="negara"><br>
							</div>

							<div class="input-field">
							<label for="hp">No. HP</label>
							<input id="hp" value="<?=$no ?>" class="validate" type="number" name="hp"><br>
							</div>

							<div class="input-field">
							<label for="email">Email</label>
							<input id="email" value="<?=$email ?>" class="validate" type="email" name="email"><br>
							</div>
							
							<label for="foto">Cari Foto</label>
							<div class="file-field input-field">
								<div class="btn">
									<span><i class="material-icons">search</i></span>
									<input disabled="true" type="file" id="foto" name="up">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" value="---Foto tidak dapat diubah---" type="text" name="nama_foto">
								</div>
							</div>

							<br>
							<input type="submit" class="btn-large teal right hoverable" value="Ubah" name="btn">
						</form>

					</div>
				</div>
				
			</div>

