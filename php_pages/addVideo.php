<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add video page</title>

	<link rel="stylesheet" type="text/css" href="../css_pages/adminDashboard.css">
	<link rel="stylesheet" type="text/css" href="../css_pages/addVideo.css">
	<?php include '../include_pages/links_bootstrap.php';?>

</head>
<body>
	<?php include '../include_pages/admin_sidebar.php'; ?>
	<h1>Welcome</h1>


	<center>
		<div class="content">
			<h1 class="addVideoTittleDesign">Add Video</h1>
			<div>
				<form action="" method="POST" enctype="multipart/form-data">
					<div>
						<label class="labelDesign">Video name</label>
						<input class="inputDesign" type="text" name="videoName">
					</div>
					<div>
						<label class="labelDesign">Genre</label>
						<input class="inputDesign" type="text" name="genre">
					</div>
					<div>
						<label class="labelDesign">Length</label>
						<input class="inputDesign" type="time" name="length">
					</div>
					<div>
						<input class="btn btn-primary" type="submit" name="addVideo" value="Add video">
					</div>
				</form>
			</div>
		</div>
	</center>

</body>
</html>
