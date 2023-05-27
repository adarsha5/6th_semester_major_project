<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* background-color: bisque; */
            background-image: linear-gradient(90deg,rgb(110, 205, 250),rgb(250, 121, 220));
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
        }
        .talk{
            font-size: 15px;
            color: rgb(253, 255, 255);
            display: inline-block;
            /* border: 2px solid black; */
            border-radius: 20px;
            padding: 10px 20px;
        }
        .you{
            margin-left: 50px;
            background-color: rgb(248, 63, 63);
            margin-right: 20vw;
        }
        .jarvis{
            margin-right: 50px;
            background-color: rgb(8, 170, 11);
            margin-left: 20vw;
        }
        .i{
            justify-content: flex-start;
        }
        .u{
            justify-content: flex-end;
        }
        .ex{
            /* border: 2px solid black; */
            /* margin-top: 20px; */
            padding-top: 10px;
            border-radius: 30px;
            height: 10vh;
            display: flex;
            align-items: center;
            width: 50%;
            margin: auto;
            /* top: 30vh; */
            background-color: rgba(255, 255, 255, 0.408);
        }
    </style>
    <script>
        window.onload = function() {
            window.scrollTo(0, document.body.scrollHeight);
        };
    </script>
</head>
<body>
    <!-- <div class="good">
        <div class="ex i">
            <p class="talk you">you</p>
        </div>
        <div class="ex u">
            <p class="talk jarvis">jarvis</p>
        </div>
    </div> -->
    <?php
        header("refresh: 2;");
    ?>
    <div class="good">
        
                       <div class="ex i"><p class="talk you"><i class="fa-solid fa-robot"></i>hello</p></div>;
                    <div class="ex u"><p class="talk jarvis"><i class="fa-regular fa-face-smile"></i>I am your friend</p></div>
        </div>


</body>
</html>