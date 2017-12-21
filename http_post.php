<html>
<body>
<form method="POST" action="http_post.php">
    id : <input type="text" name="id"/>
    password : <input type="text" name="password"/>
    <input type="submit"/>
</form>
</body>
</html>
1
2
3
<?php
	echo $_POST['id'] . ',' . $_POST['password'];
?>