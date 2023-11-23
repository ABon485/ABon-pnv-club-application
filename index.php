<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PNV Club Applications</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            margin-left: auto;
            margin-right: auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-bottom: 10px;
        }

        .submit {
            width: 100%;
            padding: 10px;
            background-color: yellow;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #ffeb3b;
        }
    </style>
</head>
<body>
    <h2>PNV Club Applications</h2>
    <form action="result.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="select">Club you want to play:</label>
        <select class="form-select" aria-label="Default select example" id="select" name="select">
            <option selected>Swimming</option>
            <option value="1">Football</option>
            <option value="2">Volleyball</option>
            <option value="3">Badminton</option>
        </select>

        <label for="day">Preferred day:</label><br>
        <input type="radio" id="saturday-morning" name="day" value="Saturday">
        <label for="saturday-morning">Saturday Morning</label><br>
        <input type="radio" id="saturday-afternoons" name="day" value="SaturdayAfternoons">
        <label for="saturday-afternoons">Saturday Afternoons</label><br>
        <input type="radio" id="sunday-afternoons" name="day" value="Sunday">
        <label for="sunday-afternoons">Sunday Afternoons</label><br>

        <label>Your Skills:</label><br>
        <input type="checkbox" id="the-best-coder" name="favourite[]" value="the best coder"> The Best Coder
        <input type="checkbox" id="good-in-arts" name="favourite[]" value="good in arts"> Good in Arts
        <input type="checkbox" id="a-super-star" name="favourite[]" value="a super star"> A Super Star
        <input type="checkbox" id="a-crazy-dancer" name="favourite[]" value="a crazy dancer"> A Crazy Dancer
        <input type="checkbox" id="singer" name="favourite[]" value="singer"> Singer 
        <input type="checkbox" id="good-in-design" name="favourite[]" value="good in design"> Good in Design <br>
        <input type="checkbox" id="the-best-eater" name="favourite[]" value="the best eater"> The Best Eater 
        <input type="checkbox" id="Good-in-speeches" name="favourite[]" value="Good in speeches"> Good in speeches <br>

        <input type="submit" class="submit" name="submit" value="submit">
    
</body>
</html>