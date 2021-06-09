<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./sass/reset.css">
    <link rel="stylesheet" href="./sass/style1.css">
</head>

<body>
    <h1>Contact form</h1>
    <form method="POST" action="check.php">
        <div class="input-style">
            <div class="category">
                <label for="" class="font">Title:</label>
                <label for="" class="font">Name:</label>
                <label for="" class="font">Email:</label>
                <label for="" class="font">Comment:</label>
            </div>
            <div class="input-area">
                <div class="gender text">
                    <input type="radio" name="gender" value="Mr.">Mr.
                    <input type="radio" name="gender" value="Ms.">Ms.
                </div>
                <br>
                <input type="text" name="name" value="" class="text"><br>
                <input type="text" name="email" value="" class="text"><br>
                <textarea name="comment" cols="70" rows="10"></textarea><br>
            </div>
        </div>
        <div class="submit">
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>

</html>