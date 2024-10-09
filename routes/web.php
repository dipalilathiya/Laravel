<?php
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome'); 
// });
// Route::get('/select', );

// Route::get('/select1',function(){
//     return view('demo');
// });

Route::get('/',[usercontroller::class,'setd']);
Route::post('/',[usercontroller::class,'getd']);
// Route::get('/text',[usercontroller::class,'get1']);

Route::any('/text',[usercontroller::class,'text']);
Route::any('/text1',[usercontroller::class,'text1']);

// Route::get('/user/{id}',function($id){
//     $name=getuser();
//     $users = $name[$id];

//     return view('data',['users'=>$users,'id'=>$id]);
// })->name('data');
function getuser(){
   return [
    1=>['name'=>'mahi' ,  'city'=>'surat'], 
    2=>['name'=>'helly' , 'city'=>'surat'],
    3=>['name'=>'lakhi' , 'city'=>'surat'],
    4=>['name'=>'armi' , 'city'=>'surat'], 
  ];
}
Route::get('/user' , function(){
    $name1 = getuser();
    return view('users')->with('name',$name1);
}) ;

Route::get('/user/{id}',function($id){
  $name =getuser();
  $users= $name[$id];
  return view('data' ,['users1'=>$users,'id'=>$id]);
})->name('data');
          