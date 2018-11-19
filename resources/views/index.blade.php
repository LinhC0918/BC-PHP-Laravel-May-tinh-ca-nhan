<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <h2>Calculator</h2>
</head>
<body>
<form action="/result" method="post">
    @csrf
    <input type="number" name="number1" placeholder="number1"><br>
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br/>
    <input type="number" name="number2" placeholder="number2"><br>
    <input type="submit" name="result" value="Result">
</form>
</body>
</html>