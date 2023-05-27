<!DOCTYPE html>
<html>
<head>
  <title>AI Chat Application</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script>
  function checkForChanges() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'monitor.php', true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        var lastModified = response.lastModified;

        // Check if the last modified time has changed
        if (lastModified !== <?php echo $_SESSION['lastModified']; ?>) {
          location.reload(); // Refresh the page if changes occurred
        }
      }
    };
    xhr.send();
  }
  // Call the function every 3 seconds
  setInterval(checkForChanges, 100);
</script> -->
  <style>
    body {
      font-family: Poppins, sans-serif;
      background-color: #6EC3E8;
    }

    .chat-container {
      max-width: 600px;
      margin: 20px auto;
      /* background-color: #fff; */
      background-color: #6f9287;
      /* background-image: url("peakpx (10).jpg");
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed; */
      border-radius: 10px;
      /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); */
      box-shadow: 0 8px 15px 0 black;
      padding: 20px;
    }

    .message {
      margin-bottom: 10px;
    }

    .user-message {
      /* background-color: #dcf8c6; */
      font-family: Poppins, sans-serif;
      font-weight:900;
      background-color: #d9fdd3;
      padding: 10px;
      border-radius: 10px;
      align-self: flex-end;
      max-width: 60%;
      box-shadow: 0 8px 15px 0 #00e600;
      margin-top: 20px;
    }

    .ai-message {
      /* background-color: #f8f8f8; */
      background-color: #20282b;
      color: white;
      padding: 10px;
      border-radius: 10px;
      align-self: flex-start;
      max-width: 60%;
      box-shadow: 0 8px 15px 0 #00e6e6;
      margin-top: 20px;
    }

    .input-container {
      margin-top: 20px;
      display: flex;
    }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #f8f8f8;
      color: #333;
      width: 80%;
    }

    button {
      background-color: #128C7E;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
      
      box-shadow: 0 8px 15px 0 black;
    }
    a{
      color: white;
      text-decoration : none;
      margin : auto;
    }
    button:hover {
      background-color: #0C6B58;
    }
    form{
      width: 100%;
      /* border: 2px solid red; */
    }
  </style>
  <script>
        window.onload = function() {
            window.scrollTo(0, document.body.scrollHeight);
        };
    </script>
</head>
<body>
<?php
// Redirect to the same page after 5 seconds
header("Refresh: 5; url=$_SERVER[PHP_SELF]");
?>

<div class="chat-container">
  <div class="message user-message">Hey, how can I help you?</div>
    <div class="message ai-message">Hello! How can I assist you today?</div>
    <?php
        // echo "Hello World";
        $handle = fopen("DataBase\chat_log.txt", "r");
        $i = 0;
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                // process the line read.
                // echo $line."<br>".$i;
                if($i%2!==0){
                  echo "<div class=\"message user-message\"><i class=\"fa-solid fa-robot\"></i>&nbsp;".$line."</div>";
                }
                if($i%2==0){
                  echo "<div class=\"message ai-message\"><i class=\"fa-regular fa-face-smile\"></i>&nbsp;".$line."</div>";
                }
                $i++;
              }
            }
    ?>
    <div class="input-container">
      <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> -->
      <!-- <input type="text" name="message" id="user-input" placeholder="Type your message here..." /> -->
      <!-- <input type="submit" value="Send"/> -->
      <a href="http://localhost/project1/pxyz.php"><button> Click to write</button></a>
      <!-- </form> -->
    </div>
  </div>
  



</body>
</html>












