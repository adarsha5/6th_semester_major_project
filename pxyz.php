<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      body{
        background-color: #6f9287;
      }
      .input-container {
        margin-top: 20vh;
        display: flex;
        flex-wrap: wrap;
      }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #f8f8f8;
      color: #333;
      width: 80%;
      box-shadow: 0 8px 15px 0 rgba(0,0,0,0.7);
    }

    input[type="submit"] {
      background-color: #128C7E;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
      box-shadow: 0 8px 15px 0 rgba(0,0,0,0.7);
    }

    input[type="submit"]:hover {
      background-color: #0C6B58;
      box-shadow: 0 8px 15px 0 rgba(0,0,0,0.7);
    }
    form {
      width: 100%;
      /* border: 2px solid red; */
      margin-bottom: 20vh;
      display: flex;
    }
    button {
      background-color: #128C7E;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      margin: auto;
      transition: background-color 0.3s ease;
      box-shadow: 0 8px 15px 0 rgba(0,0,0,0.7);
    }
    a{
      color: white;
      text-decoration : none;
    }
    button:hover {
      background-color: #0C6B58;
    }
    </style>
</head>
<body>





<div class="input-container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <input type="text" name="message" id="user-input" placeholder="Type your message here..." />
      <input type="submit" value="Send" onclick="callPhpFunction()"/>
      </form>
      <button><a href="http://localhost/project1/another1.php"> See the answer</a></button>
    </div>
  </div>
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $message = $_POST['message'];
        // echo $message;
        $filePath = 'Brain\pqr.txt';

        // Open the file in append mode and write the message
        $file = fopen($filePath, 'w');
        if ($file) {
            fwrite($file, $message); // Write the message and a new line
            fclose($file);
            // echo 'File has been written successfully.';
        } else {
            echo 'Error opening file.';
        }
    }
    ?>
    
    <script>
      function callPhpFunction() {
        $.ajax({
          url: "http://localhost/project1/AIcall.php",  
          type: "POST",  // Use POST method
          success: function(response) {
            console.log("PHP function executed successfully");
            console.log("Response:", response);
          },
          error: function(xhr, status, error) {
            console.log("An error occurred while calling PHP function");
            console.log("Error:", error);
          }
        });
      }
    </script>
</body>
</html>