
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style>
        *{
            box-sizing: border-box;
        }
    body{
    height: 100vh;
    display:flex;
    justify-content: center;
    align-items: center;
    background-image: url(password.jpg);
    background-size: cover;
}

    form{
    width: fit-content;
    height: 30vh;
    border: 1px solid black;
    background-color: white;
    padding: 50px; 
    justify-content: center;
    align-content: center;
    
          }
          input{
    height: 30px;
    border: rgb(191, 191, 191) 1px solid;
    color: gray;
}
    label{
    font-weight: bolder;
}

.form-wrap{
    display: block;
    flex-direction: column;
    justify-content: center;
}

    </style>
	<script>
        window.onload = function() {
	document.getElementById("changepassword").onsubmit = function() {
		var oldpassword = document.getElementById("oldpassword").value;
		var newpassword = document.getElementById("newpassword").value;
		var confirmpassword = document.getElementById("confirmpassword").value;

		if (newpassword != confirmpassword) {
			alert("New password and confirm password do not match!");
			return false;
		}

		// Encrypt password with SHA-256 hash function
		var sha256 = new jsSHA("SHA-256", "TEXT");
		sha256.update(oldpassword);
		var hashedOldPassword = sha256.getHash("HEX");
		sha256 = new jsSHA("SHA-256", "TEXT");
		sha256.update(newpassword);
		var hashedNewPassword = sha256.getHash("HEX");

		// Store hashed passwords in hidden input fields
		document.getElementById("oldpassword").value = hashedOldPassword;
		document.getElementById("newpassword").value = hashedNewPassword;
		document.getElementById("confirmpassword").value = hashedNewPassword;

		return true;
	};
};
    </script>
</head>
<body>
	<form id="changepass" method="post" action="changePass1.php">
		<label for="oldpassword">Old Password:</label>
		<input type="password" id="oldpassword" name="oldpassword" required><br>
		<label for="newpassword">New Password:</label>
		<input type="password" id="newpassword" name="newpassword" required><br>
		<label for="confirmpassword">Confirm New Password:</label>
		<input type="password" id="confirmpassword" name="confirmpassword" required><br>
		<input type="submit" value="ChangePassword">
        
	</form>
</body>
</html>
<!--
<html>
<head>
	<title>Change Password</title>
	<script>
        window.onload = function() {
	document.getElementById("changepassword").onsubmit = function() {
		var oldpassword = document.getElementById("oldpassword").value;
		var newpassword = document.getElementById("newpassword").value;
		var confirmpassword = document.getElementById("confirmpassword").value;

		if (newpassword != confirmpassword) {
			alert("New password and confirm password do not match!");
			return false;
		}

		// Encrypt password with SHA-256 hash function
		var sha256 = new jsSHA("SHA-256", "TEXT");
		sha256.update(oldpassword);
		var hashedOldPassword = sha256.getHash("HEX");
		sha256 = new jsSHA("SHA-256", "TEXT");
		sha256.update(newpassword);
		var hashedNewPassword = sha256.getHash("HEX");

		// Store hashed passwords in hidden input fields
		document.getElementById("oldpassword").value = hashedOldPassword;
		document.getElementById("newpassword").value = hashedNewPassword;
		document.getElementById("confirmpassword").value = hashedNewPassword;

		return true;
	};
};
    </script>
</head>
<body>
	<form id="changepassword" method="post" action="update_paswd.php">
		<label for="oldpassword">Old Password:</label>
		<input type="password" id="oldpassword" name="oldpassword" required><br>
		<label for="newpassword">New Password:</label>
		<input type="password" id="newpassword" name="newpassword" required><br>
		<label for="confirmpassword">Confirm New Password:</label>
		<input type="password" id="confirmpassword" name="confirmpassword" required><br>
		<input type="submit" value="ChangePassword">
        
	</form>
</body>
</html>-->