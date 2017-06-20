<?php 
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
	// 设置表名，默认为复数
	protected $table = 'study';

	// 设置主键
	protected $primaryKey = 'id';

	// 设置时间格式为 false
	public $timestamps = false;	
}