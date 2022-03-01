<?php 
    session_start();
    if (isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "templates/header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>

                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    <div class="link">
                        Not yet signed up? <a href="index.php">Signup Now!</a>
                    </div>

            </form>
        </section>

    </div>
    
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>