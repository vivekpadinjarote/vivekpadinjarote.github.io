<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_GET["name"]?></li>
        <li><em>Email:</em> <?php echo $_GET["email"]?></li>
        <li><em>Phone:</em> <?php echo $_GET["phone"]?></li>
        <li><em>Subject:</em> <?php echo $_GET["subject"]?></li>
    </ol>
</body>
</html>
