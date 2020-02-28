<?php
session_start();
include('config.php');
include('libs/Smarty.class.php');

$db = mysqli_connect($host, $user, $pass, $database);
mysqli_query($db, "SET NAMES utf8");

$t = new Smarty;

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

$t->assign('success', false);
$t->assign('logged', false);
$t->assign('loginadmin', false);

if(isset($_SESSION['message'])) {
	$t->assign('success', 'uspeshno se registrirahte');
	$t->assign($_SESSION['message_type'], $_SESSION['message']);
	unset($_SESSION['message_type']);
	unset($_SESSION['message']);
}

if(isset($_SESSION['logged'])) {
	$t->assign('logged', true);
}


if(isset($_SESSION['loginadmin'])) {
	$t->assign('loginadmin', true);
}


$errors = array();
$content = '';
$pagefile='';
switch($page) {
		case 'delete_message':
		if(isset($_GET['id'])){
			$id = intval($_GET['id']);
			if($id > 0) {
			$result = mysqli_query($db, "DELETE FROM messages WHERE id = ".$id);
	if(!$result) {
		echo "greshka";
	} else {
		header("Location: index.php?page=messages");
		
	}
	$result=mysqli_query($db, $query);
	$message=mysql_fetch_assoc($result);
	$t->assign('MESSAGE',$message);
	$content = $t->fetch('posts.html');
	break;
			}
		}





	case 'messages':
		$query = "SELECT * FROM messages";
		$result = mysqli_query($db, $query);
		$posts = array();
	
		while($tmp = mysqli_fetch_assoc($result)) {
			$messages[] = $tmp;
		}
		$t->assign('MESSAGES', $messages);
		$content = $t->fetch('posts.html');
	break;



case 'users':
		$query = "SELECT * FROM users";
		$result = mysqli_query($db, $query);
		$users = array();
		while($tmp = mysqli_fetch_assoc($result)) {
			$users[] = $tmp;
		}
		$t->assign('USERS', $users);
		$content = $t->fetch('users.html');
	break;


	case 'edit_user':
		if(isset($_GET['id'])) {
			$id = intval($_GET['id']);
			if(isset($_POST['update'])) {
				$query = "UPDATE users SET username = '".mysqli_real_escape_string($db, $_POST['username'])."' WHERE id = ".$id;
				if(mysqli_query($db, $query)) {
					$_SESSION['message_type'] = 'success';
					$_SESSION['message'] = 'Успешна редакция.';
					header("Location: index.php?page=users");
					exit;
				} else {
					$errors[] = 'Имаше грешка при изпълнение на заявката за редактиране.';
				}
			}
		} else {
			die("Nqma identifikator");
		}
		$query = "
			SELECT username
			FROM users
			WHERE id = '".$id."'
		";
		$result = mysqli_query($db, $query);
		$user = mysqli_fetch_assoc($result);
		$t->assign('USER', $user);

		$content = $t->fetch('edit_user.html');
	break;

	
case 'edit_messages':
		if(isset($_GET['id'])) {
			$id = intval($_GET['id']);
			if(isset($_POST['update'])) {
				$query = "UPDATE users SET message = '".mysqli_real_escape_string($db, $_POST['message'])."' WHERE id = ".$id;
				if(mysqli_query($db, $query)) {
					$_SESSION['message_type'] = 'success';
					$_SESSION['message'] = 'Успешна редакция.';
					header("Location: index.php?page=messages");
					exit;
				} else {
					$errors[] = 'Имаше грешка при изпълнение на заявката за редактиране.';
				}
			}
		} else {
			die("Nqma identifikator");
		}
		$query = "
			SELECT username
			FROM users
			WHERE id = '".$id."'
		";
		$result = mysqli_query($db, $query);
		$user = mysqli_fetch_assoc($result);
		$t->assign('Message', $message);

		$content = $t->fetch('edit_messages.html');
	break;



	case 'register':
		if(isset($_POST['register'])) {
			if(strlen($_POST['email']) < 5) {
				$errors[] = 'Имейлът не е достатъчно дълъг.';
			}
			if(strlen($_POST['password']) < 5) {
				$errors[] = 'Паролата не е достатъчно силна';
			}
			if($_POST['password'] != $_POST['password2']) {
				$errors[] = 'Въведените пароли не съвпадат.';
			}
			if(count($errors) == 0) {
				$hash = password_hash($_POST['password'], PASSWORD_ARGON2I);

				$query = "
					INSERT INTO users (
						username
						,password
					)
					VALUES (
						'".mysqli_real_escape_string($db, $_POST['email'])."'
						,'".$hash."'
					)
				";
				if(mysqli_query($db, $query)) {
					$_SESSION['message_type'] = 'success';
					$_SESSION['message'] = 'Успешно се регистрирахте.';
					header("Location: index.php");
					exit;
				} else {
					$errors[] = 'Вече има такъв потребител. Моля свържете се с администратор ако смятате, че не е така.';
				}
			}
		}
		$content = $t->fetch('register.html');
	break;


case 'send':
		if(isset($_POST['send'])) {
			if(strlen($_POST['name']) < 1) {
				$errors[] = 'Попълнете валидно име на автор.';
			}
			if(count($errors) == 0) {
				$query = "
					INSERT INTO messages (
						name
						,email
						,subject
						,message
					)
					VALUES (
						'".mysqli_real_escape_string($db, $_POST['name'])."',
						'".mysqli_real_escape_string($db, $_POST['email'])."',
						'".mysqli_real_escape_string($db, $_POST['subject'])."',
						'".mysqli_real_escape_string($db, $_POST['message'])."'

					)
				";
				if(mysqli_query($db, $query)) {
					$_SESSION['message_type'] = 'success';
					$_SESSION['message'] = 'Успешно изпратихте съобщение.';
					header("Location: index.php");
					exit;
				} else {
					$errors[] = 'Вече този потребител е изпратил съобщение, очаквайте отговор! Благодаря за разбирането!';
				}
			}
		}
		$content = $t->fetch('home.html');
	break;


	case 'login':
		if(isset($_POST['login'])) {
			$query = "
				SELECT id, password
				FROM users
				WHERE username = '".mysqli_real_escape_string($db, $_POST['username'])."'
			";
			if($result = mysqli_query($db, $query)) {
				$tmp = mysqli_fetch_assoc($result);
				if(password_verify($_POST['password'], $tmp['password'])) {
					if($_POST['username'] == 'admin@abv.bg') {
						$_SESSION['loginadmin'] = true;
					}
					$_SESSION['logged'] = true;
					$_SESSION['message_type'] = 'success';
					$_SESSION['message'] = 'Успешно влязохте в акаунта си.';
					header("Location: index.php");
					exit;
				} else {
					$errors[] = 'Грешна парола.';
				}
			} else {
				$errors[] = 'Грешка при изпълнение на заявка.';
			}
		}
		$content = $t->fetch('login.html');
	break;


	case 'logout':
		unset($_SESSION['logged']);
		$_SESSION['message_type'] = 'success';
		$_SESSION['message'] = 'Успешно излязохте от акаунта си.';
		header("Location: index.php");
		exit;
	break;

	default:
	case 'home':
		$content = $t->fetch('home.html');
	break;







}

$t->assign('errors', $errors);
$t->assign('content', $content);
$t->display('index.html');