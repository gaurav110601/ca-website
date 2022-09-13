<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CA Website</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/Features-Small-Icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Register.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---25-After-Register.css">
    <link rel="stylesheet" href="assets/css/Register-form.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team.css">
</head>

<body style="color: rgb(154,171,188);">
    <nav class="navbar navbar-light navbar-expand-md bg-white shadow" id="home">
        <div class="container"><a class="navbar-brand" href="index"><img class="img-fluid" src="assets/img/logo.webp"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-md-start" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#service">Services</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact" style="color: var(--bs-body-color);">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="register" style="color: var(--bs-dark);">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="login" style="color: var(--bs-dark);">Login</a></li>
                    <li class="nav-item" data-bss-hover-animate="pulse"><a class="nav-link" data-bss-hover-animate="pulse" href="tel: 8237701884" style="background: rgba(65,170,120,0.97);border-radius: 25px;color: var(--bs-body-bg);">+91 8237701884<br></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="padding: 50px;">
        <div class="row">
            <div class="col" style="width: 50%;">
                <div class="p-5" style="padding: 54px;">
                    <div class="text-center" style="padding: 5px;">
                        <h4 class="text-dark mb-4">Create an Account!</h4>
                    </div>
                    <form class="user" method="post"  action="<?= base_url() ?>Ca/register">
                        <div class="row mb-3" style="padding: 5px;">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="password-1" placeholder="Name" name="name" required=""></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="email" id="email" name="email" placeholder="Email" required=""></div>
                        </div>
                        <div class="row mb-3" style="padding: 5px;">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="number" name="no" placeholder="Mobile Number" required=""></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="text" placeholder="City" name="city" required=""></div>
                        </div>
                        <div class="row mb-3" style="padding: 5px;">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="password" name="password" placeholder="Password" required=""></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="verifyPassword" name="verifyPassword" placeholder="Repeat Password" required=""></div>
                        </div>
                        <div class="row mb-3" style="padding: 5px;">
                            <p id="emailErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                            <p id="passwordErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                        </div><button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit" style="padding: 5px;">Register Account</button>
                        <hr>
                    </form>
                    <div class="text-center" style="padding: 5px;"><a class="small" href="login">Already have an account? Login!</a></div>
                </div>
            </div><script>
	let email = document.getElementById("email");
	let password = document.getElementById("password");
	let verifyPassword = document.getElementById("verifyPassword");
	let submitBtn = document.getElementById("submitBtn");
	let emailErrorMsg = document.getElementById('emailErrorMsg');
	let passwordErrorMsg = document.getElementById('passwordErrorMsg');

	function displayErrorMsg(type, msg) {
		if(type == "email") {
			emailErrorMsg.style.display = "block";
			emailErrorMsg.innerHTML = msg;
			submitBtn.disabled = true;
		}
		else {
			passwordErrorMsg.style.display = "block";
			passwordErrorMsg.innerHTML = msg;
			submitBtn.disabled = true;
		}
	}

	function hideErrorMsg(type) {
		if(type == "email") {
			emailErrorMsg.style.display = "none";
			emailErrorMsg.innerHTML = "";
			submitBtn.disabled = true;
			if(passwordErrorMsg.innerHTML == "");
				submitBtn.disabled = false;
		}
		else {
			passwordErrorMsg.style.display = "none";
			passwordErrorMsg.innerHTML = "";
			if(emailErrorMsg.innerHTML == "");
				submitBtn.disabled = false;
		}
	}
	
	// Validate password upon change
	password.addEventListener("change", function() {

		// If password has no value, then it won't be changed and no error will be displayed
		if(password.value.length == 0 && verifyPassword.value.length == 0) hideErrorMsg("password");
		
		// If password has a value, then it will be checked. In this case the passwords don't match
		else if(password.value !== verifyPassword.value) displayErrorMsg("password", "Passwords do not match");
		
		// When the passwords match, we check the length
		else {
			// Check if the password has 8 characters or more
			if(password.value.length >= 8)
				hideErrorMsg("password");
			else
				displayErrorMsg("password", "Password must be at least 8 characters long");
		}
	});
	
	verifyPassword.addEventListener("change", function() {
		if(password.value !== verifyPassword.value)
			displayErrorMsg("password", "Passwords do not match");
		else {
			// Check if the password has 8 characters or more
			if(password.value.length >= 8)
				hideErrorMsg("password");
			else
				displayErrorMsg("password", "Password must be at least 8 characters long");
		}
	});

	// Validate email upon change
	email.addEventListener("change", function() {
		// Check if the email is valid using a regular expression (string@string.string)
		if(email.value.match(/^[^@]+@[^@]+\.[^@]+$/))
			hideErrorMsg("email");
		else
			displayErrorMsg("email", "Invalid email");
	});
</script>
        </div>
    </div>
    <footer class="text-center bg-dark">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"></li>
                <li class="list-inline-item me-4"><a class="fs-5 link-light" href="#">API Financial Consultancy</a></li>
                <li class="list-inline-item"></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
            <p class="text-muted mb-0">Copyright © 2022 Brand</p>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>