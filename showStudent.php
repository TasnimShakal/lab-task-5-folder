<?php  
require_once 'controller/studentInfo.php';

$student = fetchStudent($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Nickname</th>
		<th>Username</th>
		<th>Password</th>
		<th>Picture</th>
	</tr>
	<tr>
		<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
		<td><?php echo $student['Surname'] ?></td>
		<td><?php echo $student['Username'] ?></td>
		<td><?php echo $student['Password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>