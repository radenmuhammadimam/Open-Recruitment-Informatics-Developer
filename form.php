<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<h2>Form Registrasi Anggota iDev 2017</h2>
			<div class="form-group">
				<label class="col-lg-4 control-label">
					Nama<span class="req"></span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="text" required autocomplete="off"
					name="nama">
				</div>
			</div>
			
			<label class="col-lg-4 control-label">
					Email<span class="req"></span>
			</label>
			<div class="col-lg-4">
					<input class="form-control" type="email" required autocomplete="off"
					name="email">
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-4 control-label">
					No. HP<span class="req"></span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="text" required autocomplete="off"
					name="no_hp">
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-4 control-label">
					Jenis Kelamin<span class="req"></span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="radio" required autocomplete="off"
					name="jenis_kelamin" <p> Laki-Laki </p>
					<input class="form-control" type="radio" required autocomplete="off"
					name="jenis_kelamin" <p> Perempuan </p>
					<input class="form-control" type="radio" required autocomplete="off"
					name="jenis_kelamin" <p> Other </p> 
				</div>
				<button type="submit" class="button button-block center-block" name="register">
				<a href="response.php">Submit</a>
				</button>
			</div>	
</body>
</html>
