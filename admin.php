<?php 
include 'db.php';
?>
<!DOCTYPE html>
<head>
    <title>admin login</title>
    <style>
        body {
            font-family: Arial, Sans-serif;
            background-color: gray;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            width: 300px;
            margin-left: 20px;
        }

        form label {
            display: flex;
            margin-top: 10px;
            font-size: 18px;
        }

        input[type="submit"] {
            width: 200px;
            height: 35px;
            margin-top: 20px;
            border: none;
            background-color: #ff7200;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>
        <form method="POST">
            <h1>books details</h1>
            <div class="container">
                <label>username:</label>
                <input type="text" name="bookname" placeholder="bookname">
                <label>password</label>
                <input type="text" name="author" placeholder="author">
                <input type="submit" name="save_btn" value="login">
		<button><a href="detail.php">display</a>
            </div>
        </form>

        <?php
        if (isset($_POST['save_btn'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "INSERT INTO tuser(username, password) VALUES('$username', '$password')";
            $data = mysqli_query($con, $query);

            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("login successfully")
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("try again")
                </script>
                <?php
            }
        }
        ?>
<p><a href="register.php">register here?</a><p>
    </center>
</body>
</html>