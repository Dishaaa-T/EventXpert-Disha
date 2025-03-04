<!-- signup.php -->
<?php
    include 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO admins (email, password) VALUES ('$email', '$password')";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login_signup.css">
    <script src="login_signup.js" defer></script>


    <form method="post" class="container">
    <h1 class="title">Signup</h1>
    
    <section class="input-box">
        <input type="text" name="name" placeholder="Full Name" required>
        <i class='bx bxs-user'></i>
    </section>
    
    <section class="input-box">
        <input type="text" name="email" placeholder="Email Id/Mobile No." required>
        <i class='bx bxs-envelope-open'></i>
    </section>

    <section class="input-box">
        <input type="password" id="create-password" name="password" placeholder="Create password" required>
        <span class="toggle-password bx bx-hide" data-target="create-password"></span>
        <i class='bx bxs-lock-alt'></i>
    </section> 

    <section class="input-box">
        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm password" required>
        <i class='bx bxs-lock-alt'></i>
        <span class="toggle-password bx bx-hide" data-target="confirm-password"></span>
    </section>

    <button class="submit-btn" type="submit">Sign up</button>

    <h5 class="have-an-acc">
        Already have an account?
        <a href="login.php">Login</a>
    </h5>
    

    <h5 class="Back-to">
            <a href="#">Back to Home page</a>
        </h5>

        </form>

        <style>*{
    font-family: "Montserrat",sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

body{
    background: url("back.jpg");
    width:100%;
    height: 100dvh;
    display:flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
}

/* Blurred overlay */
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay */
    backdrop-filter: blur(3px); /* Blur effect */
    z-index: 0;
}

/*.......Sample Header portion....... */

header {
    position: fixed;
    top: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(100px);
    padding: 10px 20px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.navbar {
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}


.navbar .logo img {
    width: 70px;
}

.nav {
    display: flex;
    gap: 30px;
}

.nav a {
    font-size: larger;
    color: white;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.nav a:hover {
    color: #ffdd57;
}


/*......Login Container ........*/

.container{
    /* background: rgb(0,0,0,0.1); */
    background: rgba(0, 0, 0, 0);
    width: 320px;
    padding: 24px;
    border-radius: 16px;
    border: solid 0.1px rgb(255,255,255,0.1);
    backdrop-filter: blur(7px);
    box-shadow: 0px 0px 30px 20px rgb(0, 0, 0, 0.1);
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 1;
}

.title{
    margin-bottom: 16px;
}

.input-box{
    display: flex;
    width: 100%;
    position: relative;
    margin-top: 20px;

}

.input-box input {
    width: 100%;
    padding: 10px 16px 10px 38px;
    border-radius: 99px;
    border: solid 3px transparent;
    background: rgb(255, 255, 255, 0.1);
    outline: none;
    caret-color: white;
    color: white;
    font-weight: 500;
    transition: 0.25s;
}

.input-box input:focus{
    border: solid 3px rgb(255, 255, 255, 0.25)
}

.input-box input::placeholder{
    color: rgb(255, 255, 255, 0.75);

}

.input-box input::-ms-reveal{
    filter: invert(100%);
}

.input-box i{
    position: absolute;
    top:50%;
    transform: translateY(-50%);
    left: 14px;
    color: rgb(255, 255, 255, 0.75);
    font-size: 18px;
    transition: 0.25s;
}



.input-box input:focus + i{
    color: white;
}

/* .remember-forget-box{
    display: flex;
    width: 100%;
    margin-top: 16px;
    justify-content: space-between;

}     
.remember-forget-box h5{
    font: normal;

}
.remember-me{
    display: flex;
    gap: 8px;

}
.remember-me input[type="checkbox"] {
    accent-color: brown;
    cursor: pointer;
}
.forget-password{
    color: white;
    text-decoration: none;
    font-weight: lighter;

}
.forget-password:hover{
    text-decoration: underline;
} */

.toggle-password {

    position: absolute;
    right: 14px; /* Adjust position as needed */
    top:31%;
    cursor: pointer;

}

.submit-btn{
    width: 100%;
    margin-top: 24px;
    padding: 10px;
    background: rgb(107, 107, 107);
    border: none;
    border-radius: 99px;
    color: white;
    font-weight: bold;
    font-size: 15px;
    cursor: pointer;
    outline: 3px transparent solid;
    transition: 0.1s;
}

.submit-btn:focus{
    outline: 3px solid #ffdd57;
}

.have-an-acc{
    font-weight: normal;
    margin-top: 12px;
}

.have-an-acc a{
    text-decoration: none;
    color: white;
    font-weight: bold;

}

.have-an-acc a:hover{
    text-decoration: underline;
}

.Back-to a{
    text-decoration: none;
    color: white;
}

.Back-to a:hover{
    text-decoration: underline;
}

</style>