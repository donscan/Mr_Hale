{{-- 注意： 在 blade 模版中注释 会被解析，如何注释不被解析，还在研究中 --}}

{{-- 注： 子模版继承父模版 需要使用 @extends 关键字实现 --}}
@extends('study.study.content')

{{-- 注： 父模版中使用 @yield 来设置的区块，继承的模版中可以直接用 @section  @endsection 来实现显示 --}}
@section('title','Hale')

{{-- 注： 如果在父模版中使用 @section  @show 配置的区块，在继承的模版中 需要使用 @parent 关键字来实现父模版中的内容显示，否则无法显示 --}}
@section('section')
        @parent
 @show      

@section('content')
    Index 
@endsection