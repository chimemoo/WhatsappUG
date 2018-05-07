<!DOCTYPE html>
<html>
	<head>
		<title>WauG - Whatsapp Url Generator</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<a class="navbar-brand" href="#">WAUG - Whatsapp Url Generator</a>
		</nav>
		<br><br>
		<div class="container">
			<h2 align="center">This is Whatsapp Url click for chat Generator</h2>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col">
					<form action="">
						<div class="form-group">
							<label for="numphone">Phone Number</label>
							<input type="text" name="numphone" id="numphone" placeholder="Eg : 088888888888" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="text">Message</label>
							<textarea name="text" cols="20" rows="10" id="text" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary" id="generate">Generate</button>
						</div>
					</form>
				</div>
				<div class="col">
					<form action="">
						<div class="form-group">
							<label for="link">Link</label>
							<textarea name="link" id="link" cols="20" rows="10" class="form-control" disabled></textarea>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="container-fluid  fixed-bottom bg-light" style=" color: #999;">
			<div class="row">
				<div class="col-sm-12">
					<p align="center">&copy; Christ Memory</p>
				</div>
			</div>
		</div>


		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>