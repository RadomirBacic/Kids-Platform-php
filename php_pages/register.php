<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="../css_pages/register.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>
    
    <!--Register form-->
    <center>
        <div class="formDesign">
            <center>
                <h3 class="registerTittleDesign">Register form</form></h3>
            </center>
            <form class="registerForm" action="register_check.php" method="GET">
                <div>
                    <label class="labelDesign">Username</label>
                    <input class="inputDesign" type="text" name="username">
                </div>
                <div>
                    <label class="labelDesign">Password</label>
                    <input class="inputDesign" type="password" name="password">
                </div>
                <div>
                    <label class="labelDesign">Email</label>
                    <input class="inputDesign" type="email" name="email">
                </div>
                <div>
                    <label class="labelDesign">Age</label>
                    <input class="inputDesign" type="text" name="age"> 
                </div>
                
                <div>
                    <input class="btn btn-primary" type="submit" name="register" value="Register">
                </div>
            </form>
        </div>
    </center>


</body>
</html>