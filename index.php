<?php
include "./back end/Libary/timecheck.php";
timecheck();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>spamer69</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./front end/style.css" />
    <script type="module" src="./front end/script.js"></script>
</head>

<body>
    <div>
        <b>SPAMER 69</b>
        <hr />
        <form action="http://localhost/" method="post">
            <label for="data">Number Spam:</label>
            <input type="number" name="number" id="number" min="0" max="9999" />
            <br />
            <label for="text">text Spam:</label>
            <input type="text" name="text" id="text" placeholder="I LOVE YOU" />
            <input type="text" readonly name="emoji_left" id="input" placeholder='❤️' />
            <div class="icon-container">
                <div class="icon hidden">&#128151;</div>
                <div class="icon hidden">&#128525;</div>
                <div class="icon hidden">&#128516;</div>
                <div class="icon hidden">&#128512;</div>
            </div>
            <input type="submit" value="Sent" />
        </form>
        <textarea readonly><?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                include "./back end/Libary/function.php";
                                echo spamer69($_POST['number'], $_POST['text'], $_POST['emoji_left']);
                            }
                            ?></textarea>
    </div>
    <a href="Https://t.me/SAS3PAIN3" target="self">My Telegram</a>
</body>

</html>