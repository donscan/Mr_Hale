	{{-- 
    	blade模版引擎 模版基础用法： 
		{{ $name or 'default' }} 
		{{ isset($name) ? $name : 'Default' }}  设置默认值
		{!! $script !!}   对JS 的防护和显示作用 
		
        <div class="container">
        <div class="content">
	
		<div class="title"> Study View </div>
		<p> {{ $data['name'] or 'Hale'}} </p>
		{{ isset($data['age']) ? $data['age'] : 23 }} 
		<p> {{ isset($data['age']) ? $data['age'] : 23 }} </p>
		{{ $script }} {!! $script !!}
        <div class="title"> Study View</div>
        <p> <?php echo $data['name'] ?>  </p>
    	</div>
        </div> 

    --}}