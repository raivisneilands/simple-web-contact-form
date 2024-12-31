<?php
    $name = htmlspecialchars($_POST["name"]);
    $last_name = htmlspecialchars($_POST["last-name"]);
    $type = htmlspecialchars($_POST["type"]);
    $comment = htmlspecialchars($_POST["comment"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="check-form.php" method="post" class="m-5">
        <div class="my-3">
            <label for="name">First Name: </label>
            <input type="text" name="name" id="name" value="<?php echo $_POST["name"] ?>">
        </div>

        <div class="my-3">
            <label for="last-name">Last Name: </label>
            <input type="text" name="last-name" id="last-name" value="<?php echo $_POST["last-name"] ?>">
        </div>

        <div class="my-3">
            <label for="type">Type: </label>
            <select name="type" id="type">
                <option value="query" <?php if ($type == "query") echo "selected";?>>Query</option>
                <option value="feedback" <?php if ($type == "feedback") echo "selected" ?>>Feedback</option>
                <option value="complaint" <?php if ($type == "complaint") echo "selected" ?>>Complaint</option>
                <option value="other" <?php if ($type == "other") echo "selected" ?>>Other</option>
            </select>
        </div>

        <div class="my-3">
            <label for="comment">Comment: </label>
            <textarea name="comment" id="comment" cols="30" rows="10"><?php echo $_POST["comment"] ?></textarea>         
        </div>

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>