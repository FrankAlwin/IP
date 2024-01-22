<!DOCTYPE html>
<head>
<style>
body
{
font-family:Arial,Sans-serif;
background-color:gray;
margin:0;
display:flex;
align-items:center;
justify-content:center;
height:100vh;
}
.container
{
max-width:400px;
margin:100px auto;
padding:20px;
background-color:white;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}
form
{
width:300px;
margin-left:20px;
}
form label
{
display:flex;
margin-top:10px;
font-size:18px;
}
input[type="submit"]
{
width:200px;
height:35px;
margin-top:20px;
border:none;
background-color:#ff7200;
color:white;
font-size:18px;
cursor:pointer;
}
</style>
<center>
<body
<form>
<div class="container">
<h1>welcome</h1>
<a href="admin.php"><input type="submit" name="save_btn" value="admin"></a>
<a href="reportdirector.php"><input type="submit" name="save_btn" value="reportdirector"></a>
<a href="tuser.php"><input type="submit" name="save_btn" value="tuser"></a>
</div>
</form>
</body>
</center>
</html>