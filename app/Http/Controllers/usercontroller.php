<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class usercontroller extends Controller
{
    public function setd()
    {
        return view('welcome');
    }
    public function getd(Request $req)
    {
        echo "Name:-", $req->name, "<br>";
        echo "Email:-", $req->mail, "<br>";
        echo "Password:-", $req->password, "<br>";
        echo "Contact:-", $req->contact, "<br>";
        echo "Salary:-", $req->salary, "<br>";
        echo "Id:-", $req->userid, "<br>";
        echo "Date and Time:-", $req->date, "<br>";
        echo "Age:-", $req->age, "<br>";
        echo "Subject:-", $req->subject, "<br>";
        echo "Gendar:-", $req->gendar, "<br>";
        return view('welcome');
    }
 
    public function text(Request $req)
    {
        $ans='';
        $ans2='';
        if(isset($req->submit))
        {
            $v1 = $req->number1;
            $v2 = $req->number2;
            $ans = $v1 + $v2;
        }
        return view('hello',['ans'=>$ans,'ans2'=>40]);
    }

    public function text1(Request $req)
    {
        $ans='';
        $ans2='';
        $ans3='';
        $ans4='';
        
        if(isset($req->submit))
        {
            $ans = $req->number1;
            $ans2 = $req->number2;
            $ans3 = $req->number3;
            $ans4 = $req->number4;
        }
        return view('demo',['ans'=>$ans ,'ans2'=>$ans2 , 'ans3'=>$ans3 ,'ans4'=>$ans4]);
    }
}
