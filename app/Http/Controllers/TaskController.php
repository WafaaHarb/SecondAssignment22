<? php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller {

    public function index(){

     /*   $tasks = [

        '$task_1' => 'Make your assignment',
        '$task_2' => 'Check your phone',
        '$task_3' => 'Watch a match'

];
*/

    $tasks = DB::table('tasks') -> where ('name', 'like', 'Task 1%')/*for select*/-> get();

    return view('contact', compact('tasks'));


}

public function show($id){
    $tasks = DB::table('tasks') -> find($id);

    return view('task', compact('task'));

}



public function send_name(){

    $name = $_REQUEST['name'];
    return view('about', compact('name'));

}

public function show_name(){

    $name = 'Wafaa';
    $age = 21;
    return view('about', compact('name', 'age'));

}

}
?>
