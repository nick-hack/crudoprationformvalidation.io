<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DATA FETCH</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        <!--bootsrtap -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            *{
                margin:0;
                padding:0;
                
            }
        </style>
    </head>
    <body>
        <div class="container pt-3">
           
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <table class="table-bordered table-dark table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>MOBILE</th>
                    <th>DATE OF BIRTH</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'connection.php';
                $sql = "SELECT * FROM new";
                $result= mysqli_query($conn,$sql);
                
                if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id =$row['id'];
                        $fname=$row['fname'];
                        $addr=$row['addr'];
                        $mobile=$row['mobile'];
                        $dob=$row['dob'];
                        $username=$row['username'];
                        $passwd=$row['passwd'];
              
                ?>
                <tr>
                <td><input type="text" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
                    <td><input type="text" name="addr" value="<?php echo $addr; ?>"></td>
                    <td><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td>
                    <td><input type="text" name="dob" value="<?php echo $dob; ?>"></td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                    <td><input type="text" name="passwd" value="<?php echo $passwd; ?>"></td>
                    
                     <td><button type="submit" class="btn btn-warning"> <a href="reg.php?id=<?php echo $row['id']; ?>" class="text-white">Edit</a></button></td>
                    <td><button type="submit" class="btn btn-danger"><a href="del.php?id=<?php echo $row['id']; ?>" class="text-white">Delete</a></button></td>
                </tr>
            </tbody>
            <?php
            }
            }
            else{
                ?>
                <div class="">Result 0</div>
           <?php } ?>

        </table>
        </div>

        </div>
                <div class="button" ><a href="login.php">LOgin</a><br>
                <br><a href="reg.php">signup</a>
            </div>
    
    </body>
</html>