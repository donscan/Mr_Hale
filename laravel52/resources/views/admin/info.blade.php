@extends('layouts.admin')
	<!--面包屑导航 开始-->
    @section('content')
	<div class="crumb_warp">
		<!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
		<i class="fa fa-home"></i> <a href="{{ url('admin/info') }} ">首页</a> &raquo; 系统基本信息
	</div>
	<!--面包屑导航 结束-->
	
	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系统</label><span>{{ PHP_OS }}</span>
                </li>
                <li>
                    <label>运行环境</label><span>{{ $_SERVER['SERVER_SOFTWARE'] }} </span>
                </li>
                <li>
                    <label>主机地址</label><span>{{ $_SERVER['HTTP_USER_AGENT'] }}</span>
                </li>
                <li>
                    <label>设计版本</label><span>v-1.0</span>
                </li>
                <li>
                    <label>上传附件限制</label><span>2M</span>
                </li>
                <li>
                    <label>北京时间</label><span>{{ date('Y 年 m 月 d 日  H 时 s 分 i 秒') }}</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span>localhost [ 127.0.0.1 ]</span>
                </li>
                <li>
                    <label>Host</label><span>127.0.0.1</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>个人网站：</label><span><a href="#">http://www.Mr.hale.lv.com</a></span>
                </li>
                <li>
                    <label>个人 QQ：</label><span><a href="#"><b>1470924789</b><img border="0" src=""></a></span>
                </li>
            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->
@endsection