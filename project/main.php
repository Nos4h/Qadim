<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'test';
    
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
//     $conn->close();

   echo "hello";
    ?>
    </body>
</html>