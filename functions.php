<?php

session_start();

//Connection to the database

$conn = mysqli_connect("localhost","root","wildthoughts10","multi_login");

//Declaring variables
$username ="";
$password = "";
$error = array();

//Call the register button

if(isset($_POST["register_btn"])){

}

//Register 
function Register(){


    global $error, $conn, $username, $password;

    //

    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $password_1 = e($_POST['password_1']);
    $password_2 = e($_POST['password_2']);

    //Check for empty
    if(empty($username)){
    array_push($error, "Username is required");
    }
    if(empty($email)){
        array_push($error, "Email is required");
        }
        if(empty($password_1)){
            array_push($error, "A password is required");
            }   
        if(empty($password_1 != $password_2)){
            array_push($error, "PASSWORDS DOES NOT MATCH");
 
       }
    //register user if no error
       if(count($error)==0){
        
        //encrypt the password
        $password = md5($password_1);

        //form
        $user_type = e($_POST['user_type']);
        $query = "INSERT INTO users(username, email, user_type, password) VALUES('$username','$email','$user_type', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['success']="New user created successfully";
        header("location: home.php");
}else{
    
    $query = "INSERT INTO users(username, email, user_type, password) VALUES('$username','$email','$user_type', '$password')";
    
    mysqli_query($conn, $query);
    
    $logged_in_user_id = mysqli_insert_id($conn);
    $_SESSION["user"] = getUserById($logged_in_user_id);
    $_SESSION["success"]= "You are now Logged in";
    header("location:index.php");

}
function getUserById(){
    global $conn;
    $query="SELECT * FROM users WHERE id=".$id;
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

//escape the string
function e($val)
}