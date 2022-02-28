<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PHP Realtime Chat App</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>

                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter your password">
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
</body>
</html>