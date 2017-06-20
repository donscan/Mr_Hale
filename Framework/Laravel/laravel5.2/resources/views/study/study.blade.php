<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 36px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <hr>
         if 用法：<br>
		@if($data['score'] < 80)
			不及格 <br>
		@endif
		unless 用法：<br>
		@unless($data['score'] > 80)
			Not Ok <br>
		@endunless
		for 用法：<br>
		@for($i = 0; $i< $data['num'];$i++)
			Hello {{ $i }} <br>
		@endfor 
		foreach 用法：<br>		
		@foreach($data['people']  as $key => $value)
			{{ $key }}	=> {{  $value }} <br>
		@endforeach
		forelse 用法：
		@forelse($data['people'] as $key)
			{{ $key }} <br>
			@empty
				I'm Okay	
		@endforelse
		foreach + if <br> 
		@foreach($data['people'] as $key => $value)
			@if($key > 1)
				{{ $value }} <br>
			@endif
		@endforeach 
        </div>
    </body>
</html>
