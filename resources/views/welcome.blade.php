<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     .form{
        width: 500px;
        /* border: 1px solid  black; */
        background-color: thistle;
        box-shadow: 0px 0px 15px 0px black;
        border-radius:30px;
        margin: auto;
        height: auto;
     }
     .form1{
        width: 400px;
        padding: 20px;
        /* border: 1px solid  black; */
        margin: auto;
     }
     .form1 input{
     padding: 10px 20px;
     } 
     .submit{
        background-color: purple ;
        width: 150px;
        margin-left: 100px;
        color: white;
        border: none;
     }
</style>
<body>
    
<div class="form">
<div class="form1">
<form method="post">
    @csrf
    <p>Name</p>
    <input type="text" name="name"  placeholder="Name">
    <p>Email</p>
    <input type="email" name="mail" placeholder="Email">
    <p>Password</p>
    <input type="password" name="password" placeholder="Password">
    <p>Contact</p>
    <input type="text" name="contact" placeholder="Contact">
    <p>Salary</p>
    <input type="text" name="salary" placeholder="Salary">
    <p>Userid</p>
    <input type="number" name="userid" placeholder="Userid">
    <p>Date of Birth</p>
    <input type="datetime-local" name="date" placeholder="Date of Birth">

    <p>Age</p>
   <select name="age">
    <option value="1 - 30">1 - 30</option>
    <option value="31 - 60">31 - 60</option>
    <option value="61 - 80">61  - 80</option>
    <option value="81 - 100">81 - 100</option>
  </select>
  <br><br>

    <p >Subject</p>
    <input type="checkbox" name="subject" value="Gujarati">
    <label> Gujarati</label><br>
    <input type="checkbox" name="subject" value="English">
    <label> English</label><br>
    <input type="checkbox" name="subject" value="Hindi">
    <label>Hindi</label><br>
    
    <p>Gender</p>
    <input type="radio" name="gendar" value="Male">
    <label >Male</label><br>
    <input type="radio" name="gendar" value="Female">
    <label>Female</label><br>
    
    <input type="submit" class="submit">
</form>
</div>
</div>
</body>
</html>