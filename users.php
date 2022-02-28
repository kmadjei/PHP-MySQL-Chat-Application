<?php 
    session_start();
    if (!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "template/header.php"; ?>

<body>
    <div class="wrapper">
        <section class="users ">
           <header>

                <?php 
                    //
                ?>

               <div class="content">
                   <img src="img.png" alt="">
                   <div class="details">
                        <span>Coding Nepal</span>
                        <p>Active now</p>
                   </div>                   
               </div>
               <a href="#" class="logout">Logout</a>
           </header>
           <div class="search">
               <span class="text">Select a user to chat with</span>
               <input type="text" name="" id="" placeholder="Enter name to search">
               <button><i class="fas fa-search"></i></button>
           </div>
           <div class="users-list">
               <a href="#">
                   <div class="content">
                       <img src="img.png" alt="">
                       <div class="details">
                           <span>coding Nepal</span>
                           <p>This is test message</p>
                       </div>                       
                   </div>
                   <div class="status-dot"><i class="fas fa-circle"></i></div>
               </a>   
               <a href="#">
                <div class="content">
                    <img src="img.png" alt="">
                    <div class="details">
                        <span>coding Nepal</span>
                        <p>This is test message</p>
                    </div>                       
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>   
            <a href="#">
                <div class="content">
                    <img src="img.png" alt="">
                    <div class="details">
                        <span>coding Nepal</span>
                        <p>This is test message</p>
                    </div>                       
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>   
            <a href="#">
                <div class="content">
                    <img src="img.png" alt="">
                    <div class="details">
                        <span>coding Nepal</span>
                        <p>This is test message</p>
                    </div>                       
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>   
            <a href="#">
                <div class="content">
                    <img src="img.png" alt="">
                    <div class="details">
                        <span>coding Nepal</span>
                        <p>This is test message</p>
                    </div>                       
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.png" alt="">
                    <div class="details">
                        <span>coding Nepal</span>
                        <p>This is test message</p>
                    </div>                       
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>                   
           </div>           
        </section>

    </div>

    <!-- JS Scripts -->
    <script src="javascript/users.js"></script>

</body>
</html>