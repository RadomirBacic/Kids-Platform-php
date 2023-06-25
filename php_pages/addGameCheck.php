

<?php 

include 'configConn.php';

if (isset($_POST['submit'])) {
	$gameName = $_POST['gameName'];
	$brand = $_POST['brand'];
	$releaseDate = $_POST['releaseDate'];
	$picture = $_POST['picture'];
	$fileName = rand(1000,10000)."-".$_FILES['file']['name'];
	$tempName = $_FILES['file']['tmp_name'];
	$uploadsDir = 'D:/xampp/htdocs/';
	$location = $uploadsDir;
	$fileSize = $_FILES['file']['size'];

	// check empty
	if (!empty($gameName)) {
			//Check if the name already exist
			$prepQuery = $conn->prepare("SELECT * FROM games WHERE GameName = ?");
			$prepQuery->bind_param("s",$gameName);
			$prepQuery->execute();
			$result = $prepQuery->get_result();

			if ($result->num_rows > 0) {
				echo "This game name already exist go update game";
			}else{

				//All good we proceed and check is Brand field empty
				if (!empty($brand)) {

					//All good we proceed and check is release date field empty
						if (!empty($releaseDate)) {

							// All good we proceed and check is it picture type choosen
								if (empty($picture)) {
										echo "Please select type of picture";
								// If selected Featured picture insert in that column in database		
								}elseif($picture === 'featuredPicture'){

							
									
									move_uploaded_file($tempName, $uploadsDir.'/'.$fileName);

									$sql = "INSERT INTO files(FileName,UploadedOn,Location,Size) VALUES('$fileName',NOW(),'$location','$fileSize')";

									$query = mysqli_query($conn,$sql) or die(mysql_error($conn));

									if ($conn->query($sql) === TRUE) {
										$fileId = $conn->insert_id;
										$query1 = "INSERT INTO games(GameName,Brand,ReleaseDate,FeaturedPicture) VALUES('$gameName','$brand','$releaseDate','$fileId')";

										$que = mysqli_query($conn,$query1) or die(mysql_error($conn));

										if ($que == 1) {
											echo "Featured picture uploaded";
										}else{
											echo "Featured picture upload failed";
										}
									}
								// If selected Thumbnail picture, insert in that column in database		
								}elseif ($picture ==='thumbnailPicture') {
									move_uploaded_file($tempName,$uploadsDir.'/'.$fileName);

									$sql = "INSERT INTO files(FileName,UploadedOn,Location,Size) VALUES('$fileName',NOW(),'$location','$fileSize')";

									$query = mysqli_query($conn,$sql) or die(mysql_error($conn));

									if ($conn->query($sql) === TRUE) {
										$fileId = $conn->insert_id;
										$query1 = "INSERT INTO games(GameName,Brand,ReleaseDate,ThumbnailPicture) VALUES('$gameName','$brand', '$releaseDate','$fileId')";

										$que = mysqli_query($conn,$query1) or die(mysql_error($conn));

										if ($que == 1) {
											echo "Thumbnail picture uploaded";
										}else{
											echo "Thumbnail picture upload failed";
										}
									}
									// If selected Screenshot picture insert in that column in database	
								}elseif ($picture === 'screenshotPicture') {
									move_uploaded_file($tempName,$uploadsDir.'/'.$fileName);

									$sql = "INSERT INTO files(FileName,UploadedOn,Location,Size) VALUES('$fileName',NOW(),'$location','$fileSize')";

									$query = mysqli_query($conn,$sql) or die(mysql_error($conn));

									if ($conn->query($sql) === TRUE) {
										$fileId = $conn->insert_id;
										$query1 = "INSERT INTO games(GameName,Brand,ReleaseDate,ScreenshotPicture) VALUES('$gameName','$brand','$releaseDate','$fileId')";

										$que = mysqli_query($conn,$query1) or die(mysql_error($conn));

										if ($que == 1) {
											echo "Screenshot picture uploaded";
										}else{
											echo "Screenshot picture upload failed";
										}
									}
								}else{
									echo "Something wrong with uploading try again";
								}

						}else{
							echo "Field release date is required";
						}
				}else{
					echo "Field Brand is required";
				}

			}
	}else{
		echo "Field Game name is required";
	}


}




?>