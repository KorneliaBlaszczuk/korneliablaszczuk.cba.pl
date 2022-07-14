<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja użytkowników | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
    <?php
    if (isset($_POST['create'])){
        $firstname   = $_POST['firstname'];
        $lastname    = $_POST['lastname'];
        $email       = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password    = $_POST['password'];

        $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
		if($result){
			echo 'Zapisano dane';
		}else{
			echo 'Błąd - sprawdź poprawność danych';
        }
    }
    ?>
</div>
<div>
<form action="registration.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <br>
                <h1>Rejestracja</h1>
                <br>
                <p>Wypełnij formularz odpowiednimi danymi</p>
                <br>
                <label for="firstname"><b>Imię</b></label>
                <input class="form-control" type="text" name="firstname" required>
                <br>
                <label for="lastname"><b>Nazwisko</b></label>
                <input class="form-control" type="text" name="lastname" required>
                <br>
                <label for="email"><b>Adres email</b></label>
                <input class="form-control" type="email" name="email" required>
                <br>
                <label for="phonenumber"><b>Numer telefonu</b></label>
                <input class="form-control" type="number" name="phonenumber" required>
                <br>
                <label for="password"><b>Hasło</b></label>
                <input class="form-control" type="password" name="password" required>
                <br>
                <input class="btn btn-primary" type="submit" name="create" value="Zarejestruj się">
            </div>
           
        </div>
        
    </div>
</form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript"></script>
</body>
</html>