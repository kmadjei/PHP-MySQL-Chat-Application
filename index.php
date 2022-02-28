<?php include_once "templates/header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" >
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" >
                    </div>
                </div>
                
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" >
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter new password" >
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Select Image</label>
                    <input type="file" name="image" >
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
                <div class="link">
                    Already signed up? <a href="login.php">Login Now</a>
                </div>
            </form>
        </section>

    </div>

    <!-- JS Scripts -->
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>