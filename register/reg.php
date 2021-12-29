<?php
include_once 'connection.php';
$username="";
$mobile="";

?>
<hr>



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
            height: 430px;
            padding :20px;

        }
    </style>
</head>
<body>
<?php
 
  
 @$id=$_GET['id'];
 
$q="SELECT * FROM new WHERE id= '$id'";
$data=mysqli_query($conn,$q) or die("Query unsuccessfull");



if(mysqli_num_rows($data) > 0)
        while($row=mysqli_fetch_assoc($data))
        {
          $fname=$row['fname'];
          $addr=$row['addr'];
          $mobile=$row['mobile'];
          $dob=$row['dob'];
          $username=$row['username'];
          $passwd=$row['passwd'];

{
?>

    <div class="container c">
  
    <form action="update.php" method="post">

    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>" placeholder="Name">
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" id="fname" name="fname" class="form-control" value="<?php echo $fname ?>" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-6">
      <input type="text" id="addr" name="addr" class="form-control" value="<?php echo $addr; ?>" placeholder="Address">
    </div>
  </div>

  <div class="form-group row">
    <label for="mobile" class="col-sm-2 col-form-label">MOb No.</label>
    <div class="col-md-6">
    <div <?php if(isset($mobile_error)):?> class="form_error" <?php endif ?> >
      <input type="text" id="mobile" name="mobile" value="<?php echo $mobile ?>" class="form-control" placeholder="Mobile no">
      <?php if(isset($mobile_error)):?>
        <span><?php echo $mobile_error; ?></span>
        <?php endif ?>
      </div>
    </div>
</div>
   
<div class="form-group row">
    <label for="Dob" class="col-sm-2 col-form-label">Date of Birth</label>
    <div class="col-sm-6">
      <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $dob ?>" placeholder="Date of Birth">
    </div>
</div>
   

<div class="form-group row" >
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-md-6">
    <div <?php if (isset($name_error)):?> class="form_error" <?php endif ?> >
      <input type="text" id="username" name="username" value="<?php echo $username ?>" class="form-control" placeholder="Username">
    <?php if (isset($name_error)): ?>
      <span><?php echo $name_error; ?></span>
      <?php endif ?>
      </div>
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-6">
      <input type="password" id="passwd" name="passwd" class="form-control" value="<?php echo $passwd ?>" placeholder="Password">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
     <a href="#"><button type="submit" id="submit" name="submit" class="btn btn-primary" >Sign up</button></a>
     <button type="submit" id="done" name="done" class="btn btn-info" value="update" >UPDATE</button>
    </div>
  </div>


  <div class="text-center">Already have an account? <a href="login.php">Login Here</a></div>
    
  </div>
</form>
<?php
        }
    }
?>
<?php
     if(isset($_POST['submit']))
      {
        
        $fname=$_POST['fname'];
        $addr=$_POST['addr'];
        $mobile=$_POST['mobile'];
        $dob=$_POST['dob'];
        $username=$_POST['username'];
        $passwd=$_POST['passwd'];

       $sql= "SELECT * FROM new WHERE (username= '$username' or mobile= '$mobile');";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0)
        {
          $name_error= "already taken";
          
        }
        else{
          $query= "INSERT INTO new (fname,addr,mobile,dob,username,passwd)VALUES('$fname','$addr','$mobile','$dob','$username','".md5($passwd)."')";
          $data = mysqli_query($conn,$query);
          echo 'inserted data';
          exit();
        }
      }
?>

    
</body>
</html>