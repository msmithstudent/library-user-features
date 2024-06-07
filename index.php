<?php include_once 'header.php'; ?>

</header>
<section class="index-login">
	<div class="wrapper">
		<div class="index-login-signup">
			<h4>SIGN UP</h4>
			<p>Don't have an account yet? Sign up here!</p>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username"><br>
				<input type="password" name="pwd" placeholder="Password"><br>
				<input type ="password" name="pwdConfirm" placeholder="Confirm Password"><br>
				<input type="text" name="cardNumber" placeholder ="Library Card Number">
				<br>
				<button type="submit" name="submit">SIGN UP</button>
			</form>
		</div>
		<div class="index-login-login">
			<h4>LOG IN</h4>
			<form action="includes/login.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username"><br>
				<input type="password" name="pwd" placeholder="Password">
				<br>
				<button type="submit" name="submit">LOG IN</button>
			</form>
		</div>
	</div>
</section>

</body>
</html>