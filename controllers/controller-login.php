<?php 
// INITIALIZE THE SESSION
session_start();
 
// CHECK IF USERR IS ALREADY LOGGED IN, IF YES THEN REDIRECT HIM TO INDEX.PHP
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// INCLUDE CONFIG FILE
require_once "db/config.php";
 
// DEFINE VARIABLES AND INITIALIZE WITH EMPTY VALUES
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// PROCESSING FORM DATA WHEN FORM IS SUBMITTED
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // CHECK IF USERNAME IS EMPTY
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // CHECK IF PASSWORD IS EMPTY
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // VALIDATE CREDENTIALS
    if(empty($username_err) && empty($password_err)){
        // PREPARE A SELECT STATEMENT
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // BIND VARIABLES TO THE PREPARED STATEMENT AS PARAMETERS
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // SET PARAMETERS
            $param_username = trim($_POST["username"]);
            
            // ATTEMPT TO EXECUTE THE PREPARED STATEMENT
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                // CHECK IF USERNAME EXISTS, IF YES THEN VERIFY PASSWORD
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // PASSWORD IS CORRECT SO START A NEW SESSION 
                            session_start();
                            
                            // STORE DATA IN SESSION VARIABLES
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // REDIRECT USER TO WELCOME PAGE
                            header("location: index.php");
                        } else{
                            // PASSWORD IS NOT VALID, DISPLAY A GENERIC ERROR MESSAGE
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // USERNAME DOESN'T EXIST, DISPLAY A GENERIC ERROR MESSAGE
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // CLOSE STATEMENT
            unset($stmt);
        }
    }
    
    // CLOSE CONNECTION
    unset($pdo);
}

?>