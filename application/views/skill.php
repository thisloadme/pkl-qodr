<div class="container">
	<br>
	<div class="row">
		<div class="container">
			<h5><i class="material-icons teal white-text">add</i>  2. Form Skill</h5>
				<div class="row">
					<br>
					<h5>Pilihlah 1 Skill istimewamu</h5>
					<br>
					<?php foreach ($data as $s) { ?>
						
					<ul class="collection hoverable">
						<a href="<?=site_url('c_home/kasi_skill/'.$this->uri->segment(3).'/'.$s->kode_skill) ?>"><li class="collection-item teal-text" value="<?=$s->nama_skill ?>"><?= $s->nama_skill ?></li></a>
					</ul>

					<?php } ?>
				</div>
				<br><br>
				<br>
		</div>


	</div>
</div>