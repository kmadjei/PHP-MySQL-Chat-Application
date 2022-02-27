<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Realtime Chat App</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" placeholder="Enter new password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
                <div class="link">
                    Already signed up? <a href="login.html">Login Now</a>
                </div>
            </form>
        </section>

    </div>

    <!-- JS Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>