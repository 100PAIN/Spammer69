<?php
include "./backend/library/timeCheck.php";
timeCheck();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>spammer69</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./frontend/style.css" />
    <script type="module" src="./frontend/script.js"></script>
</head>

<body>
    <main class="main">
        <b>SPAMMER 69</b>

        <form action="http://localhost/" method="post" class="form">
            <label for="data"> Number Spam : </label>
            <input required type="number" name="number" id="number" min="0" max="9999" />

            <label for="text">text Spam : </label>
            <input required type="text" name="text" id="text" placeholder="I LOVE YOU" />

            <label for="input">Pick your emoji : </label>
            <input required type="text" readonly name="emoji_left" id="input" placeholder='❤️' />

            <div class="icon-container">
                <div class="icon hidden"> &#128151; </div>
                <div class="icon hidden"> &#128525; </div>
                <div class="icon hidden"> &#128516; </div>
                <div class="icon hidden"> &#128512; </div>
            </div>

            <button class="submit-btn">Submit</button>
        </form>
        <textarea readonly>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    include "./backend/library/function.php";
                    echo spammer69($_POST['number'], $_POST['text'], $_POST['emoji_left']);
                }
                ?>
            </textarea>
        <a href="Https://t.me/SAS3PAIN3" target="self">My Telegram</a>
    </main>
</body>

</html>