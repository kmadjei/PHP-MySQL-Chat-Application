# PHP-MySQL-Chat-Application

A live chat application with authentication, built with PHP, MySQL and Ajax.

👉[View Deployed Project](https://php-mysql-chat-app.herokuapp.com/)🚀
 
## UX

### Site Owner's Goal
In a project like this, the site owner's goal will be to provide a space where user's can network with like minded individuals.

### User's Goal
User's may be interested in using the Chat application for networking with like minded individuals, seeking future career prospects, making new friends and so on.

## Features
 
### Existing Features
- Registration Form - allows users to register their ID for access to the Chat application.
    - Form includes profile image upload for other users to know better whom they are chatting with.
- Login Form - allows users to access the site whenever they want tto chat with other users.
- Logout Button - allows users to exit the site and updates other users if he/she is online.


### Features Left to Implement
- Must improve login

## Technologies Used

- [HTML](https://www.w3schools.com/html/default.asp)
    - The project uses **HTML** to produce the layout of the chat application.

- [CSS](https://www.w3schools.com/CSS/default.asp)
    - The project uses **CSS** to style the UI/and enrich th.

- [JavaScript](https://www.w3schools.com/js/default.asp)
    - The project uses **JavaScript** to handle the DOM manipulation of the application.

- [AJAX](https://www.w3schools.com/js/js_ajax_intro.asp)
    - **AJAX** is utilized in injecting dynamic data requested from server side to client side.

- [PHP](https://www.php.net/)
    - **PHP** is used to handle server-side logic/request.

- [MySQL](https://www.mysql.com/)
    - The project uses **MySQL**, via PHPMyAdmin, to manage the database, accessed by Heroku remotely.

## Testing


### Bugs During development

- Validation error messages not showing up on the client side browser
    - Code for injecting error messages was un-commented
    - changed
- users page only show current user logged in without listing the status of other users
    -   changed the **php/users.php** script to contain the following code
    
    ```php
        <?php 
            session_start();
            include_once "config.php";
            $outgoing_id = $_SESSION['unique_id'];
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC");
            $output = "";

            if (mysqli_num_rows($sql) == 0) {
                $output .= "No users are available to chat with!";
            } elseif (mysqli_num_rows($sql) > 0) {
                include "data.php";
            }
            echo $output;
        ?>
    ```

- logging in does not redirect user to chat page
    - changed `echo "Success";` to `echo "success";` in **php/login.php**

- chat message not being sent and received from database
    - resolution steps:
        - Corrected `$SESSION[]` to `$_SESSION[]` for **insert-chat.php and get-chat.php** files
        - included the `name=message` attribute for the input-field element in the **chat.php** file
        - Corrected 
        
        ```php 
            $message = mysqli_real_escape_string($conn, $_POST['outgoing_id']); 
            To 
            $message = mysqli_real_escape_string($conn, $_POST['message']); 
        ```

        for **php/insert.php** file

- Warning: Undefined array key "outgoig_msg_id" in C:\xampp\htdocs\PHP-Projects\chat app\php\data.php on line 18
    - Resolution:

    Changed
    ```php
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
    ```

    To this 
    ```php 
    if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = ""; 
    ```

## Credits

### Content
- The  entire content for building the [PHP Live Chat Application](https://youtu.be/VnvzxGWiK54) was provided and led by [CodingNepal](https://www.youtube.com/channel/UCk7xIEmd3MeyhIu2StLX5yA) Youtube channel.


### Acknowledgements

- Through this one project alone I was able to learn MySQL queries, PHP authentication, JavaScript-PHP Ajax, and File submission, along with new knowledge on Javascript functions and CSS selectors.
    - I am grateful for the valuable lesson and will recommend any PHP full-stack developer to give it a go.

