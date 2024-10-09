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
     <input type="text" name="number1" placeholder="Enter number1" >
     <input type="text" name="number2" placeholder="Enter number2" >
     <input type="text" name="number3" placeholder="Enter Oprator" >
     <input type="text" name="number4" placeholder="Enter Oprator" >
     <input type="submit" name="submit">
    </form>
    <table border="1" style="width:400px">
    <tr>
         <td>{{$ans}}</td>
         <td>{{$ans2}}</td>
         <td>{{$ans3}}</td>
         <td>{{$ans4}}</td>
    </tr>
     </table>
</body>
</html>