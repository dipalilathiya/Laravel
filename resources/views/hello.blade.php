<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
     <input type="text" name="number1" placeholder="Enter number1">
     <input type="text" name="number2" placeholder="Enter number2">
     <input type="text" name="oprator" placeholder="Enter Oprator" value="{{$ans}}">
     <input type="text" name="oprator" placeholder="Enter Oprator" value="{{$ans2}}">

     <input type="submit" name="submit">
    </form>
</body>
</html>