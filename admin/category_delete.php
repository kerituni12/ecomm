<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM category WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Chuyên mục đã được xóa';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Vui lòng chọn danh mục cần xóa';
	}

	header('location: category.php');
	
?>