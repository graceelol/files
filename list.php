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

// Get the list of uploaded files from the database
$query = "SELECT * FROM files";
$result = mysqli_query($conn, $query);
?>
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
<html>
<head>
 
</head>
<body>
    <h1>Recently Uploaded Files</h1>
    <table>
        <tr>
 <th>Name </th> 
 <hr>
            <th>Link</th>
            
             
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
echo '<tr>';
 echo '<td>' . $row['name'] . '|'.'</td>';
echo '<td>' . 'https://your.website.here/' . $row['path'] . '</td>';
 
echo '</tr>';
}
?>
</table>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://media.discordapp.net/attachments/996559884617252964/1061665923968270488/favicon.png" width="227" height="227" /></p>
 <script>document.addEventListener('contextmenu', event => event.preventDefault());</script>