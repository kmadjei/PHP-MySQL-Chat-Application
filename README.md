# PHP-MySQL-Chat-Application

A live chat application with authentication, built with PHP, MySQL and Ajax.

👉[View Deployed Project]()🚀
 
## UX

**Site Owner's Goal** 
    
    In a project like this, the site owner's goal will be to provide a space where user's can network with like minded individuals.

**User's Goal** 
    
    User's may be interested in using the Chat application for networking with like minded individuals, seeking future career propects, making new friends and so on.

## Features
    In this section, you should go over the different parts of your project, and describe each in a sentence or so.


 
### Existing Features
- Feature 1 - allows users X to achieve Y, by having them fill out Z
- ...

For some/all of your features, you may choose to reference the specific project files that implement them, although this is entirely optional.

In addition, you may also use this section to discuss plans for additional features to be implemented in the future:

### Features Left to Implement
- Must improve login

## Technologies Used

In this section, you should mention all of the languages, frameworks, libraries, and any other tools that you have used to construct this project. For each, provide its name, a link to its official site and a short sentence of why it was used.

- [JQuery](https://jquery.com)
    - The project uses **JQuery** to simplify DOM manipulation.


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

In this section, you need to convince the assessor that you have conducted enough testing to legitimately believe that the site works well. Essentially, in this part you will want to go over all of your user stories from the UX section and ensure that they all work as intended, with the project providing an easy and straightforward way for the users to achieve their goals.

Whenever it is feasible, prefer to automate your tests, and if you've done so, provide a brief explanation of your approach, link to the test file(s) and explain how to run them.

For any scenarios that have not been automated, test the user stories manually and provide as much detail as is relevant. A particularly useful form for describing your testing process is via scenarios, such as:

1. Contact form:
    1. Go to the "Contact Us" page
    2. Try to submit the empty form and verify that an error message about the required fields appears
    3. Try to submit the form with an invalid email address and verify that a relevant error message appears
    4. Try to submit the form with all inputs valid and verify that a success message appears.

In addition, you should mention in this section how your project looks and works on different browsers and screen sizes.

You should also mention in this section any interesting bugs or problems you discovered during your testing, even if you haven't addressed them yet.

If this section grows too long, you may want to split it off into a separate file and link to it from here.

## Deployment

This section should describe the process you went through to deploy the project to a hosting platform (e.g. GitHub Pages or Heroku).

In particular, you should provide all details of the differences between the deployed version and the development version, if any, including:
- Different values for environment variables (Heroku Config Vars)?
- Different configuration files?
- Separate git branch?

In addition, if it is not obvious, you should also describe how to run your code locally.


## Credits

### Content
- The  entire content for building the [PHP Live Chat Application](https://youtu.be/VnvzxGWiK54) was provided and led by [CodingNepal](https://www.youtube.com/channel/UCk7xIEmd3MeyhIu2StLX5yA) Youtube channel.


### Acknowledgements

- Through this one project alone I was able to learn MySQL queries, PHP authentication, JavaScript-PHP Ajax, and File submission, along with new knowledge on Javascript functions and CSS selectors.
    - I am grateful for the valuable lesson and will recommend any PHP full-stack developer to give it a go.

