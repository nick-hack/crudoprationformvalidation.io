
            <?php
                include_once 'connection.php';

                $id=$_GET['id'];
                $q="DELETE FROM new WHERE id= $id";
                if(mysqli_query($conn,$q)){
                    header('location:datafetch.php');
                    echo "delete successfull";
                }else{
                    echo "delete failed";
                }
            

        ?>