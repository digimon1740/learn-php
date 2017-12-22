<?php
	$dbh = new PDO('mysql:host=127.0.0.1;dbname=opentutorials;port=3306', "devsh", "1740");
	switch ($_GET['mode']) {
		case 'insert':
			$stmt = $dbh->prepare("INSERT INTO topic (title, description, created) VALUES (:title, :description, now())");
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':description', $description);

			$title = $_POST['title'];
			$description = $_POST['description'];
			$stmt->execute();
			header("Location: list.php");
			break;
		case 'delete':
			$stmt = $dbh->prepare('DELETE FROM topic WHERE id = :id');
			$stmt->bindParam(':id', $id);

			$id = $_POST['id'];
			$stmt->execute();
			header("Location: list.php");
			break;
		case 'modify':
			$stmt = $dbh->prepare('UPDATE topic SET title = :title, description = :description WHERE id = :id');
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':id', $id);

			$title = $_POST['title'];
			$description = $_POST['description'];
			$id = $_POST['id'];
			$stmt->execute();
			header("Location: list.php?id={$_POST['id']}");
			break;
	}
?>