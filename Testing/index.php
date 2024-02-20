<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple PHP Files Presentation</title>
</head>
<body>
    <h1>Content from test.php</h1>
    <?php include 'test.php'; ?>

    <h1>Content from e-commerce.php</h1>
    <?php include 'e-commerce.php'; ?>

    <?php include 'Tutorial.php'; ?>
</body>
</html>