<?php 
	
	class Page 
	{
		private $total;		//	总记录数
		private $nums;		//	每页显示的条数
		private $pages;		//	页数	
		private $cpage;		// 	当前页数
		private $uri; 		
		public function __construct($total,$nums)
		{
			$this -> total = $total;
			$this -> nums = $nums;
			$this -> pages = $this -> getPages();
			$this -> cpage = !empty($_GET['page']) ? ($_GET['page']) : 1;
			$this -> uri = "code.php";
		}
		// 首页
		public function first()
		{
			if($this -> cpage > 1)
			{	
				$prev = $this -> cpage - 1;
				return ' <a href="'.$this -> uri.'?page=1">首页</a>  <a href="'.$this -> uri.'?page='.$prev.'">上一页 </a>';
			}else 
			{
				echo "";
			}
		}
		// 列表页
		public function flist()
		{
			$list = '';
			$num = 4;
			// 当前页之前的设置
			for($i = $num; $i >= 1; $i--)
			{
				$page = $this -> cpage - $i;
				if($page >1)
				{
					$list .= '&nbsp;<a href="'.$this -> uri.'?page='.$page.'">'.$page.'</a>&nbsp;';
				}
			}
			// 当前页的设置
			if($this -> pages > 1)
			{
				$list .= '&nbsp;' .$this -> cpage.'&nbsp;';
			}
			// 当前页之后的设置
			for($i = 1; $i <= $num; $i++)
			{
				// 列表之后
				$page = $this -> cpage + $i;
				// 如果在当前页数内显示
				if($page <= $this -> pages)
					$list .= '&nbsp;<a href="'.$this -> uri.'?page='.$page.'">'.$page.'</a>&nbsp;';
				else 
					break;
			}
			return $list;
		}
		// 末
		public function last()
		{
			if($this -> cpage < $this -> pages)
			{
				$next = $this -> cpage + 1;
				return ' <a href="'.$this -> uri.'?page='.$next.'" >下一页</a>  <a href	="'.$this -> uri.'?page='.$this -> pages.'">末页</a> ';
			}
		}

		// 获取页数
		public function getPages()
		{
			return ceil($this -> total / $this ->nums);
		}
		// 从多少条开始
		private function start()
		{
			return ($this -> cpage - 1 )* $this -> nums + 1;
		}
		// 从多少条结束  
		private function end()
		{
			return min($this -> cpage * $this -> nums,$this -> total);
		}
		// 当前显示的条数　
		public function currnum()
		{
			return $this ->  end() - $this -> start()+1;
		}
		// 调用这个方法，获取分页信息
		/*
		public function fpage()
		{
			return "共 {$this -> total} 条记录，&nbsp;&nbsp; 本页显示 {$this -> nums} 条记录 &nbsp;&nbsp; 从 {$this -> start()} - {$this -> end()} 条  &nbsp;&nbsp; {$this -> cpage } /{$this -> pages} &nbsp;&nbsp; {$this -> first()} &nbsp;&nbsp {$this -> flist()} &nbsp;&nbsp {$this -> last()} ";
		}
		*/
		public function fpage()
		{
			$arr = func_get_args();
			$fpage = '';
			$page[0] = "&nbsp;共 {$this -> total} 条记录 &nbsp";
			$page[1] = "&nbsp;本页显示 {$this -> currnum()} 条记录&nbsp;";
			$page[2] = "&nbsp; 从 " .$this -> start(). "-" .$this -> end() ."条 &nbsp;" ;
			$page[3] = "&nbsp; {$this -> cpage } / {$this -> pages} &nbsp;";
			$page[4] = "&nbsp; {$this -> first() } &nbsp;";
			$page[5] = "&nbsp; {$this -> flist() } &nbsp;";
			$page[6] = "&nbsp; {$this -> last()} &nbsp";
			if(count($arr) < 1)
				$arr = array(0,1,2,3,4,5,6);
			foreach($arr as $n)
			{
				$fpage .= $pages[$n];
			} 
			return $fpage;
		}
	}


 ?>