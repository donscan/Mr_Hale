<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Category;

class CategoryController extends Controller
{
	// 全部分类列表
	public function index()
	{
		// $categorys = Category::all();
		$categorys = (new Category) -> tree();
		// 通过外部方法实现数据的分组
		// $data = $this -> getTree($categorys,'cate_name','cate_id','cate_pid',0);

		return view('category.list') -> with('data',$categorys);
	}
/*
	public function getTree($data,$field_name,$field_id='id',$field_pid='pid',$pid='0')
	{
		// 把遍历的数据压入 $arr数组中 
		$arr = array();
		foreach($data as $key => $value)
		{
			if($value -> $field_pid == $pid)
			{
				$data[$key]['_'.$field_name] = $data[$key][$field_name];
				$arr[] = $data[$key];
				foreach($data as $keys => $values)
				{
					// 如果 pid == id， 就可以实现分组
					if($values -> $field_pid == $value -> $field_id)
					{
						$data[$keys]['_'.$field_name] = ' - - '.$data[$keys][$field_name];
						$arr[] = $data[$keys];
					}
				}
			}
		}
		// 返回数组数据到index方法中
		return $arr;
	}
	*/

	public function changeorder()
	{
		$input = Input::all();
		$cate = Category::find($input['cate_id']);
		$cate -> cate_order = $input['cate_order'];
		$result = $cate -> update();
		if($result)
		{
			$data = [
				'status' => 0,
				'message' => '分类排序更新成功!'
			];
		}else{
			$data = [
				'status' => 1,
				'message' => '分类排序更新失败!'
			];
		}

		return $data;
	}

	public function create()
	{
		$data = Category::where('cate_pid',0) -> get();

		return view('category/add',compact('data'));
	}

	// 添加文类，提交方法
	public function store()
	{
		// $input = Input::all();
		//  except 获取出什么字段外的值
		$input = Input::except('_token');
		$rules = [
			'cate_name' => 'required',
		];
		$message = [
			'cate_name.required' => '字段名称必填',
		];
		$validator = Validator::make($input,$rules,$message);
		if($validator -> passes())
		{
			$result = Category::create($input);
			if($result) 
			{
				return redirect('admin/category');
			}else{
				return back() -> with('errors','数据写入失败');
			}
		}else{
			return back() -> withErrors($validator);
		}
	}

	// 显示单个分类信息
	public function show()
	{

	}
	// 删除单个分类信息
	public function destory($cate_id)
	{	
		Category::where('cate_id',$cate_id) -> delete();
	}
	// 更新分类
	public function update($cate_id)
	{
		$input = Input::except('_token','_method');
		$result = Category::where('cate_id',$cate_id) -> update($input);
		if($result)
		{
			return redirect('admin/category');
		}else{
			return back() -> with('message','数据更新失败!');
		}
	}
	// 编辑分类
	public function edit($cate_id)
	{
		$field = Category::find($cate_id);
		$data = Category::where('cate_pid',0) -> get();
		return view('category.edit',compact('field','data'));
	}
}
