<?php
// PAGE TITLE
$page_title = "Dashboard - " . ($_SESSION["username"]) . "'s account";

// PAGE NAME
$pageName = "My account";

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext_explode = explode('.',$_FILES['image']['name']);
    $file_ext_end = end($file_ext_explode);
    $file_ext = strtolower($file_ext_end);
    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"uploads/".$file_name);
        $filePath = "/uploads/".$file_name;

        $query = "INSERT INTO user_info (avatar_url) VALUES (':path') WHERE id = :id";
        $query_params = array(':id' => $_SESSION["id"], ':path' => $filePath);
        try{
            $stmt = $pdo->prepare($query);
            $stmt->execute($query_params);
            // $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // $account_type = $row["account_type"];
        } catch(PDOException $e) {
            die("ERROR: Statement error. " . $e->getMessage());
        }
    }else{
        print_r($errors);
    }
}

?>