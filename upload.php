<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the file details
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    
    // Generate a unique file name
    $file_name = time() . '_' . $name;
    
    // Set the file path
    $file_path = 'files/' . $file_name;
    
    // Move the uploaded file to the designated folder
    move_uploaded_file($tmp_name, $file_path);
    
    // Add the file to the database
    $query = "INSERT INTO files (name, path) VALUES ('$name', '$file_path')";
    mysqli_query($conn, $query);
    
    // Redirect to the list of uploaded files
    header('Location: list.php');
    exit;
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
 <style>
     body{
         color:white;
     }
 </style>
 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>files.gracee.ga ৹ Temporary file hosting</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="https://media.discordapp.net/attachments/996559884617252964/1061665923968270488/favicon.png">
<style>
    body{
        font-family: monospace;

background-color:black;
    }
</style>  
<style>
    button{
        background-color:black;
        border: 2px white solid;
        color:white;
        font-size:large;
        cursor:pointer;
    }
</style>
<style>
    input{
            background-color:black;
        border: 2px white solid;
        color:white;
        font-size:large;
        cursor:pointer;
        
    }
</style>
<html>
<head>
    
</head>
<body>
    <h1>Upload a File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://media.discordapp.net/attachments/996559884617252964/1061665923968270488/favicon.png" width="227" height="227" /></p>
 <script>document.addEventListener('contextmenu', event => event.preventDefault());</script>