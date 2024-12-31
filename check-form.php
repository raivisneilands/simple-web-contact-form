<?php
    $name = htmlspecialchars($_POST["name"]);
    $last_name = htmlspecialchars($_POST["last-name"]);
    $type = htmlspecialchars($_POST["type"]);
    $comment = htmlspecialchars($_POST["comment"]);
    echo "<strong>First name:</strong> $name <br><strong>Last name:</strong> $last_name <br><strong>Post type:</strong> $type <br><strong>Comment:</strong> $comment <br>";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check Input</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <a href="index.php">Back to main screen</a>
        <form action="edit-form.php" method="post">
            <input type="text" name="name" id="name" hidden="true" value="<?php echo $name ?>">
            <input type="text" name="last-name" hidden="true" value="<?php echo $last_name ?>">
            <input type="text" name="type" id="type" hidden="true" value="<?php echo $type ?>">
            <textarea name="comment" id="comment" hidden="true"><?php echo $comment ?></textarea>
            <input type="submit" value="Edit" class="my-3">
        </form>
    </body>
    </html>