<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f4f4f4;
            color: #333;
            padding-left: 350px;
        }

        h4 {
            padding: 10px;
            border-radius: 5px;
        }

        p {
            margin-bottom: 20px;
        }

        img {
            max-width: 100px;
            height: 100px;
            margin-top: 20px;
            padding-left: 100px;
        }
    </style>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $day = $_POST['day'];
        $select = $_POST['select'];
        $favourite = implode(" and ", $_POST['favourite']);
        
        // Add an image
        echo "<img src='data:image/jpeg;base64,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' alt='Your Image'>";
        echo "<h4> Thank you, $name!! </h4>"; 
        echo "<p>We received your application for the $select.</p>";
        echo "<p>You are interested in $favourite.</p>";
        echo "<p>You will be available on $day.</p>";

    ?>
</body>
</html>
