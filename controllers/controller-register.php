<?php 

// PAGE TITLE
$page_title = "Register";

// INCLUDE DATABASE CONFIG FILE
require_once "db/config.php";
 
// DEFINE VARIABLES AND INITIALIZE WITH EMPTY VALUES
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// PROCESSING FORM DATA WHEN FORM IS SUBMITTED
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // VALIDATE USERNAME
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // PREPARE A SELECT STATEMENT
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // BIND VARIABLES TO THE PREPARED STATEMENT AS PARAMETERS
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // SET PARAMETERS
            $param_username = trim($_POST["username"]);
            
            // ATTEMPT TO EXECUTE THE PREPARED STATEMENT
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // CLOSE STATEMENT
            unset($stmt);
        }
    }
    
    // VALIDATE PASSWORD
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // VALIDATE CONFIRM PASSWORD
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // CHECK INPUT ERRORS BEFORE INSERTING IN DATABASE
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // PREPARE AN INSERT STATEMENT
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            // BIND VARIABLES TO THE PREPARED STATEMENT AS PARAMETERS
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // SET PARAMETERS
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // ATTEMPT TO EXECUTE THE PREPARED STATEMENT
            if($stmt->execute()){
                // REDIRECT TO LOGIN PAGE
                header("location: login.php");
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