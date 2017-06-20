<?php 
	
	class Vcode 
	{
		private $width;		//验证码的宽度
		private $height;	//验证码的高度
		private $num;		//验证码的个数
		private $code;		//生成的验证码
		private $img;		//生成图像资源
		// 构造方法： 三个参数
		public function __construct($width,$height,$num)
		{
			$this -> width = $width;		//验证码的宽度等于传进来的宽度
			$this -> height = $height;		//验证码的高度等于传进来的高度
			$this -> num = $num;			//验证码的个数等于传进来的个数
			// 生成的验证码需要等于传到服务器中的验证码   == 调用自己的方法
			$this -> code = $this -> createcode();
		}	
		// 获取字符的验证码，用于保存在服务器中
		public function getcode()
		{	
			// 调用 code 
			return $this -> code;
		}

		// 输出图像
		public function outimg()
		{
			// 调用私有方法：创建背景 （颜色，大小，边框）
			$this -> createback();
			// 调用私有方法；画字（大小，字体颜色）
			$this -> outstring();
			// 调用私有方法：干扰元素（点，线条）
			$this -> setdisturbcolor();
			// 调用私有方法：输出图像
			$this -> printimg();
		}
		// 创建背景（颜色，大小，边框）
		private function createback()
		{
			// 创建资源
			$this -> img = imagecreatetruecolor($this -> width,$this -> height);
			// 设置随机的背景颜色
			$bgcolor = imagecolorallocate($this -> img,rand(200,255),rand(200,255),rand(200,255));
			// 设置背景填充
			imagefill($this -> img,0,0,$bgcolor);
			// 设置背景边框
			$bordercolor = imagecolorallocate($this -> img,0,0,0);
			// 矩形边框
			imagerectangle($this -> img,0,0, $this -> width-1, $this -> height-1, $bordercolor);

		}
		// 画字（大小，字体颜色）
		private function outstring()
		{	
			// for 循环出验证码的次数
			for($i = 0; $i < $this -> num; $i++)
			{
				$color = imagecolorallocate($this -> img, rand(0,120),rand(0,120),rand(0,120));
				// 字符串函数
				$fontsize = rand(1,2);		// 设置字体的大小
				// 设置水平的宽度为 3 个间隙
				$x = 3 + ($this -> width/$this -> num) * $i;
				// 设置随机高度
				$y = rand(0 , imagefontheight($fontsize));
				imagestring($this -> img, 5,$x,$y, $this -> code{$i}, $color);
			}
		}
		// 设置干扰元素（点，线）
		private function setdisturbcolor()
		{
			// 加点
			for($i = 0; $i < 100; $i++)
			{
				// 创建颜色
				$color = imagecolorallocate($this -> img,rand(0,255),rand(0,255),rand(0,255));
				// 为画布创建 点 像素 随机 宽度 高度 颜色
				imagesetpixel($this -> img, rand(1,$this -> width),rand(1,$this -> height),$color);
			}
			// 加线条
			for($i = 0; $i < 10; $i++)
			{
				$color = imagecolorallocate($this -> img, rand(0,255),rand(0,200),rand(0,255));
				// 画弧，参数为 画布 圆心 宽度 高度 弧度 随机颜色
				imagearc($this -> img,rand(-10,$this -> width+10),rand(-10,$this -> height + 10),rand(30,300),rand(30,300),rand(50,100),rand(10,50),$color);
			}
		}
		// 私有方法：输出图像
		private function printimg()
		{	
			if(function_exists('iamgegif'))
			{
				header('Content-Type:image/gif');
				imagegif($this -> img);
			}elseif(function_exists('imagejepg'))
			{	
				header('Content-Type:image/jpeg');
				imagepepg($this -> img);
			}elseif(imagetypes() & IMG_PNG)
			{
				header('Content-Type:image/png');
				imagepng($this -> img);
			}else 
			{
				die('不支持其它类型的格式，在PHP服务器上！');
			}
		}

		// 生成验证码字符串
		private function createcode()
		{
			$codes = "1234567890zxcvbnmasdfghjklqwertyuiopZXCVBNMASDFGHJKLQWERTYUIOP";
			$code = "";
			for($i=0; $i < $this -> num; $i++)
			{
				$code .= $codes{rand(0,strlen($codes) -1)};
			}
			return $code;
		}
		// 析构方法： 自动调用，释放资源
		public function __destruct()
		{
			imagedestroy($this -> img);
		}
	}