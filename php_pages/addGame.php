<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add game page</title>

	<link rel="stylesheet" type="text/css" href="../css_pages/adminDashboard.css">
	<link rel="stylesheet" type="text/css" href="../css_pages/addGame.css">
	<?php 
		include '../include_pages/links_bootstrap.php';
	?>
</head>
<body>

	<?php 
		include '../include_pages/admin_sidebar.php';
	 ?>

	<center>

	 	<div class="content">
	 		
	 		<h1 class="addGameTittleDesign">Add Game</h1>
			<div >
	 				<form class="addGameForm"  action="addGameCheck.php" method="POST" enctype="multipart/form-data">

	 						<label class="labelDesign">Game name</label>
	 						<input class="inputDesign" type="text" name="gameName"> <br>
	 						<label class="labelDesign">Brand</label>
	 						<input class="inputDesign" type="text" name="brand"> <br>
	 						<label class="labelDesign">Release date</label>
	 						<input class="inputDesign" type="date" name="releaseDate"> <br>
	 						<label class="labelDesign" for="picture">What you upload</label>
	 						<select name="picture" id="picture">
	 							<option value="">Select type of picture</option>
	 							<option value="featuredPicture">Featured picture</option>
	 							<option value="thumbnailPicture">Thumbnail picture</option>
	 							<option value="screenshotPicture">Screenshot picture</option>
	 						</select>
	 						<label class="labelDesign">Upload file</label>
	 						<input class="fileUpload" type="file" name="file"> <br>
	 						<input class="inputDesign" type="submit" name="submit" value="Upload">

					</form>
	 		</div>
	 	</div>
	 </center>
</body>
</html>