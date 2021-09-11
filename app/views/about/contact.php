
<body style="background-color: #F0E5CF;">
	<div class="container">
		<div class="row mt-5">
			<div class="col-6 ">
				<blockquote class="blockquote mt-5">
			    	<p class="fs-2 mb-4">Kontak Kami</p>
			    	<footer class="blockquote-footer ms-2">Silahkan tinggalkan pesan anda, pada kolom yang tersedia.</footer>
			    </blockquote>
				<img src="<?= BASEURL ; ?>/img/server.jpg" style="width: 30rem;" class='rounded mt-4 img-fluid'>
			</div>
			<div class="col-6 mt-5">	
				<form action="" method="POST">
					<div class="mb-3 mt-5">
						<label for="nama" class="form-label">Nama</label>
					    <input type="text" name="nama" class="form-control" id="nama">
					</div>
					<div class="mb-3">
					    <label for="email" class="form-label">Email</label>
					    <input type="email" name="email" class="form-control" id="email">
					</div>
					<div class="mb-3">
						<label for="pesan" class="form-label">Pesan</label>
  						<textarea class="form-control" id="pesan" name="pesan" aria-label="With textarea"></textarea>
					</div>
					
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>
	</div>	
</body>