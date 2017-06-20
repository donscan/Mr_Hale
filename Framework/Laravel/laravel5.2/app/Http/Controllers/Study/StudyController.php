<?php 
namespace App\Http\Controllers\Study;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Model\Study;

class StudyController extends Controller
{
	public function index()
	{	
		echo "Hello ".session('user');
		return view('welcome');
	}
	public function login()
	{
		session(['user' => 'admin']);
		return view('welcome');
	}

	// public function index()
	// {
	// 	echo Route('profile');
	// 	return 'Route Controller StudyController@index';
	// }	
	public function create()
	{
		return 'Hello Resource Create ';
	}
	
	// View 在控制器中传参数给视图  有两种方法
	public function view()
	{
		// Compact 传递数据的时候，数组为变量名，在视图中需要通过 数组下标的方式 显示出控制器传递过去的变量值　
		$data = [
			// 'name' => null,
			// 'age' => 21,
			'score' => 50,
			'num' => 10,	
			'people' => [
				// 数组内部为数据
				12,21,23,32,34,43,   
				// 'age' => 12,
				// 'age' => 13,
				// 'age' => 23
			],
		];
		$script = "<script> alert('Hello Script'); </script>";
		// 传递数据的时候，如果没有值，就 or ‘’ 的方式赋值 ， 或者用系统函数 isset 三元运算符进行判断值 并设置默认值
		return view('study.study',compact('data','script')); 

		/*
		//通过数组的方式 在 view 方法中传递数据到视图 
		$data = [
			'name' => 'Hale',
			'age' => 23,
		];
		return view('study',$data);
		*/

		/*
		// 通过 With 方法 传递数据到 视图模版中
		$name = 'Hale';
		$age = 23;
		 return view('study') -> with('name',$name);
		*/
	}

	public function views()
	{
		// return view('study.study.index');	
		// 获取数据库
		// $pdo = DB::connection()-> getPdo();
		// 获取数据库的内容
		// $pdo = DB::table('study') -> where('id',1) -> get();

		// 通过 ORM 方式进行对数据库的操作
		// $orm = Study::where('id',1)->get();
		$orm = Study::find(1);
		$orm -> name = 'Admin';
		$orm -> update();
		dd($orm);
	}

}
