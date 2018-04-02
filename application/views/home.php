<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <div class="row">
				<img src="<?=base_url() ?>img/qodr.png" alt="x" class="responsive-img col m4 offset-m2 s4 offset-s2">
				<img src="<?=base_url() ?>img/smk.png" alt="x" class="responsive-img col m4 s4"></div>
				<h4 class="teal-text center">Prakerin SMK N 1 Bawang</h4>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?=base_url() ?>img/1.jpg" alt="Unsplashed background img 1"></div>
  </div>
			<div class="container">
				<br><hr>
				<h5 class="center black-text">About Us</h5>

				<?php foreach ($ambil as $s) { ?>
					
				<div class="card col s12 m6 z-depth-3 hoverable">
					<div class="card-image">
						<img src="<?=base_url() ?><?=$s->gambar ?>" style="height: 425px!important; width: 100%;" class="responsive-img hoverable">
						<span class="card-title"><?=$s->nama ?></span>
					</div>
					<div class="card-content">
						<h5>My Special Skills</h5>
						<ul class="collection with-header hoverable">
							<li class="collection-item"><i class="material-icons">label</i><?=$s->nama_skill ?></li>
						</ul>
						<h5>My Sacred Bio</h5>
						<table class="table-border table-striped hoverable responsive-table">
							<tr>
								<th>Nama</th>
								<td><?=$s->nama ?></td>
							</tr>
							<tr>
								<th>Nickname</th>
								<td><?=$s->nick ?></td>
							</tr>
							<tr>
								<th>Tempat Lahir</th>
								<td><?=$s->tempat_lahir ?></td>
							</tr>
							<tr>
								<th>Tanggal Lahir</th>
								<td><?=$s->tanggal_lahir ?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td><?=$s->alamat ?></td>
							</tr>
							<tr>
								<th>Kewarganegaraan</th>
								<td><?=$s->nationality ?></td>
							</tr>
							<tr>
								<th>No. HP</th>
								<td><?=$s->no_hp ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?=$s->email ?></td>
							</tr>
							<tr>
								<th>Gabung Sejak</th>
								<td><?=$s->bergabung ?></td>
							</tr>
						</table>
						<br>
						<a class="teal-text" title="Edit Manusia ini biar nampak ganteng sedikit :v" href="<?=site_url('c_home/hal_edit/'.$s->kode) ?>"><i class="material-icons">create</i></a>
						<a class="teal-text right" title="Hapus Manusia ini dari muka bumi :v" href="<?=site_url('c_home/hapus/'.$s->kode) ?>"><i class="material-icons">clear</i></a>
						<br>			
					</div>
				</div>
			<?php } ?>
				
			</div>