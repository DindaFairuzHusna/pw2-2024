<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<div>
        
           
        <form action="hasil_pendaftaran.php" method="POST" class="w-75 mt-5 mx-auto p-4 border shadow-sm">

        <h5>Form Pendaftaran</h5>
            <div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
                <label for="alamat">Alamat</label>
				<textarea name="alamat" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="tel" name="telepon"  class="form-control" id="telepon">
			</div>
			<button name="submit" class="btn btn-primary" id="submit">Submit</button>
		</form>

	</div>
</body>
</html>