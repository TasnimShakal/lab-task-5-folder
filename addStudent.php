<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br><br>
  <input type="text" id="name" name="name"><br><br>
  <label for="surname">Nickname:</label><br><br>
  <input type="text" id="surname" name="surname"><br><br>
  <label for="username">User Name:</label><br><br>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Password:</label><br><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

