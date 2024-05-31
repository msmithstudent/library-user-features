<?php

class Login extends Dbh {
	
	protected function getUser($uid, $pwd) {
		$statement = $this->connect()->prepare('SELECT User_PWD FROM users WHERE User_UID = ?;');
		
		if (! $statement->execute(array($uid))) {
			$statement = null;
			header('Location: ../index.php?error=stmtfailed');
			exit();
		}
		
		if ($statement->rowCount() == 0) {
			$statement = null;
			header('Location: ../index.php?error=usernotfound');
			exit();
		}
		
		$pwdHashed = $statement->fetchAll(PDO::FETCH_ASSOC);
		$checkPwd = password_verify($pwd, $pwdHashed[0]['User_PWD']);
		
		if ($checkPwd == False) {
			$statement = null;
			header('Location: ../index.php?error=wrongpassword');
			exit();
		} elseif ($checkPwd == True) {
			$statement = $this->connect()->prepare('SELECT * FROM users WHERE User_UID = ? AND User_PWD = ?;');
			
			if (! $statement->execute(array($uid, $pwdHashed[0]['User_PWD']))) {
				$statement = null;
				header('Location: ../index.php?error=stmtfailed');
				exit();
			}
			
			if($statement->rowCount() == 0) {
				$statement = null;
				header('Location: ../index.php?error=' . $uid . 'notfound');
				exit();
			}
			
			$user = $statement->fetchAll(PDO::FETCH_ASSOC);
			
			session_start();
			$_SESSION['userid'] = $user[0]['UserID'];
			$_SESSION['useruid'] = $user[0]['User_UID'];
			$_SESSION['userpwd'] = $user[0]['User_PWD'];
			
			$statement = null;
		}
		
		
		$statement = null;
	}
}