<?php include 'db.php'; 
$id=$_GET['id'];
$select="SELECT * FROM admin WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
 <div>
            <form action="" method="POST">
                <input value="<?php echo $row['username'] ?>" type="text" name="username" placeholder="username"> <br><br>
                <input type="password" name="password" placeholder="password" value=<?php echo $row['password'] ?>> <br><br>
                <input type="submit" name="update_btn" value="Update"> <br><br>
                <button><a href="view.php">Back</a></button>
            </form>
        </div>
        <?php
        if (isset($_POST['update_btn'])) {
            $username= $_POST['username'];
            $password = $_POST['password'];
            $update = "UPDATE admin SET username='$username',password='$password'WHERE id ='$id'";    
            $data = mysqli_query($con, $update);
            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("Data Updated Successfully");
                </script>
                <?php   
            }
            else {
                ?>
                <script type="text/javascript">
                    alert("Please try again");
                    window.open("http://localhost/library/view.php","_self");
                </script>
                <?php
            }
        }
        ?>
