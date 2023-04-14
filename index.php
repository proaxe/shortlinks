<?php include 'request.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShortLinks</title>

    <style>
        body{
            margin: 0px;
        }
        .container_links {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
            gap: 56px;
            background-image: url(bg.jpg);
            background-position: center;
        }
        input{
            width: 400px;
            height: 32px;
            padding: 5px;
            border: 1px solid #00000061;
            border-radius: 7px;
            box-shadow: 0px 3px 13px 5px #00000024;
        }
        button:hover {
            box-shadow: 0px 1px 12px 5px #ffffff75;
        }
        button{
            transition: 1s;
            color: #343030;
            height: 41px;
            padding: 5px 30px;
            background: linear-gradient( 208deg, rgba(255,161,7,1) 0%, rgba(255,193,7,1) 34%, rgba(255,240,7,1) 73%);
            border-radius: 7px;
            border: 0px;
            box-shadow: 0px 1px 12px 5px #00000038;
            font-weight: 600;
            font-size: 14px;
            margin-left: 20px;
            width: 155px;
        }
        button:disabled {
            color: #f5f5f575;
            background: linear-gradient( 208deg, rgb(255 189 87) 0%, rgb(189 147 21) 34%, rgb(149 141 20) 73%);

        }
        h1{
            color: white;
            font-size: 46px;
            margin: 0px;
        }
        .title{
            display: flex;
            width: 500px;
            justify-content: space-around;
            align-items: center;
        }
        a{
            background: linear-gradient( 208deg, rgba(255,161,7,1) 0%, rgba(255,193,7,1) 34%, rgba(255,240,7,1) 73%);
            padding: 7px;
            color: black;
            border-radius: 22%;
            display: flex;
            transition: 1s;
        }
        a:hover {
            box-shadow: 0px 1px 12px 5px #ffffff75;
        }
    </style>
</head>
<body>
    <div class="container_links">
            <div class="title">
                <h1>ShortLinks</h1>
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                    </svg>
                </a>
            </div>
            <form action="" method="GET">
                <div class="row_generate">
                    <input type="text" value="" name="cut_link"  placeholder="Вставьте ссылку" aria-describedby="button-addon2" onkeyup="checkInputLength()">
                    <button class="btn_submit" type="submit" id="button-addon2" disabled>Генерировать</button>
                </div>
            </form>
            <div class="row_after">
                <input placeholder="Полученая ссылка" id="inputField" value="<?=$_GET['cut_link'];?>">
                <button onclick="copyInputValue()">Скопировать</button>
            </div>

    </div>
    <script>
        function checkInputLength() {
            const input = document.querySelector('input[name="cut_link"]');
            const button = document.querySelector('#button-addon2');
            if (input.value.length >= 5) {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        }

        function copyInputValue() {
            var inputField = document.getElementById("inputField");
            inputField.select();
            document.execCommand("copy");
            alert("Значение скопировано в буфер обмена: " + inputField.value);
        }
    </script>
</body>
</html>