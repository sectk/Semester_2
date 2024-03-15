<?php 

    session_start();
    require_once '../dbcontroller.php';
    $db = new DB;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login restoran</title>
</head>
<body>
    <div class="container">

    <div class="row">
        <div class="col-4 mx-auto mt-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">PAASWORD</label>
                    <input type="password" name="password" required class="form-control">
                </div>

                <div>
                    <input type="submit" name="login" value="LOGIN" class="btn btn-primary">
                </div>

            </form>

         </div>
       </div>
    </div>
</body>
</html>

<?php 

if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM tabeluser WHERE email='$email' AND $password";

    echo $sql;

}

?>
