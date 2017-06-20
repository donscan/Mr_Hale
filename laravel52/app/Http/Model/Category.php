<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tree()
    {
    	// $categorys = Category::all();
    	// $categorys = $this -> all();
    	$categorys = $this -> orderBy('cate_order','asc') -> get();
		// 通过外部方法实现数据的分组
		return $this -> getTree($categorys,'cate_name','cate_id','cate_pid');
    }

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
	
}
