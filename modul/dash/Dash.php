 <h1 class="h2">Dashboard</h1>
 <div class="btn-toolbar mb-2 mb-md-0">
  <strong><?= date("D F Y") ?></strong>
  </div>
</div>
	<div class="row">
	<div class="col-md-4">
		<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
		  <div class="card-header">Mata Pelajaran</div>
		  <div class="card-body">
		    <h5 class="card-title">primary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		     <a href="?url=MataPelajaran" class="text-white">
			     <i class="fa fa-book" aria-hidden="true"></i>
			     <?= hitungData("SELECT * FROM tbl_mp") ?> <span>Mata Pelajaran</span>	
		     </a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
		  <div class="card-header">Guru</div>
		  <div class="card-body">
		    <h5 class="card-title">Primary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="?url=myGuru" class="text-white">
			     <i class="fa fa-user" aria-hidden="true"></i>
			     <?= hitungData("SELECT * FROM tbl_guru") ?> <span>Guru</span>
		    </a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
		  <div class="card-header">Siswa</div>
		  <div class="card-body">
		    <h5 class="card-title">Primary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="?url=mySiswa" class="text-white">
			     <i class="fa fa-user" aria-hidden="true"></i>
			     <?= hitungData("SELECT * FROM siswa") ?> <span>Siswa</span>
		    </a>
		  </div>
		</div>
	</div>
</div>

</div>
