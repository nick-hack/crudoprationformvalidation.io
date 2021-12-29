<?php
session_start();
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---bootsrtap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<!---bootsrtap-->
    <title>register form</title>
    <style>
        .c{
            margin-top:100px;
            border: 1px solid black;
            height: 400px;
            padding :20px;

        }
    </style>
</head>
<body>
  <a href="datafetch.php"><button type="submit" class="btn btn-warning">view</button></a>
    <div class="container c">
<form class=box action="" method="post">
           <h1>Login</h1>
          <!-- <input type="text" name="username" placeholder="Username">
           <input type="Password" name="passwd" placeholder="Password">
           <input type="submit" name="submit" value="login">
    -->
    <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-6">
      <input type="text" id="username" name="username" class="form-control" placeholder="Username">
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-6">
      <input type="password" id="passwd" name="passwd" class="form-control" placeholder="Password">
    </div>
</div>

<button type="submit" name="submit" class="btn btn-primary">login</button>
<button type="reset" class="btn btn-warning">RESET</button>

<div class="text-center">Don't have an account? <a href="reg.php">Signup Here</a></div>
       </form>
    </div>

<?php
 if(isset($_POST['submit']))
 {
        $user=$_POST['username'];
        $pwd=$_POST['passwd'];
        $query="SELECT * FROM new WHERE username='$user' && passwd='$pwd'";
        $data=mysqli_query($conn, $query);
        $total=mysqli_num_rows($data);
        //  echo $total;

  if($total==1)
  {
    $_SESSION['name']=$user;
    header('location:index.php');
   }
  else {
    echo "<br>invalid Username & password";
  }
}

        ?>

  

</body>
</html>