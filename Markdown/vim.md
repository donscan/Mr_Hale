VIM快捷键: 光标移动： 四个方向 k h 0 l j 
ctrl+f, ctrl+b 向下翻页，向上翻页 
ctrl+d, ctrl+u 向下半翻页，向上半翻页 $ 移动行尾 0 移动行首 
w 移动下一个词 b 移动到上一个词 gg 跳到文档的开始处 G 跳到文档的末尾 
% 跳到匹配的括号处（"{ }""[]""()"） ctrl+i,tab 跳到下一个jump point ctrl+o 跳到上一个jump point 23gg, 23G, :23 跳到第23行 
ctrl+i, tab 跳到下一个跳点(Jump Point) ctrl+o 跳到上一个跳点 查找替换: 
# 从光标向后查找整个关键词 * 从光标向前查找整个关键词 g# 从光标向后查找关键词 g* 从光标向前查找关键词 
fx，tx，Fx，Tx 在当前行查找字符 查找替换例子： 
: s/SEARCH/REPLACE 
: s/If/Since 将下一个"If"换成"Since" : %s/If/Since 将全部"If"换成"Since" 
: 1,3 s/If/Since/g 只对1,3行有效,如无前缀,只对当前行有效 表达式: 
. 代替一个字符 
* 表示一个或多个字符的重复 /d.*an 可以匹配 dan, divan, debian 单词边界: 
指定单词边界: \ 
如: /\ 匹配以d开始,中间包含任意个小写字母,以an结束的单词 
/\$[0-9]*\.[0-9][0-9] 匹配查找 $XX...X.XX这要的数字,有且只有两位小数的 常用的编辑命令: 




          




		      void function(e,t){for(var n=t.getElementsByTagName("img"),a=+new Date,i=[],o=function(){this.removeEventListener&&this.removeEventListener("load",o,!1),i.push({img:this,time:+new Date})},s=0;s< n.length;s++)!function(){var e=n[s];e.addEventListener?!e.complete&&e.addEventListener("load",o,!1):e.attachEvent&&e.attachEvent("onreadystatechange",function(){"complete"==e.readyState&&o.call(e,o)})}();alog("speed.set",{fsItems:i,fs:a})}(window,document);




			  a, i 在光标后插入, 在光标前插入 dd 删除一行 
			  cc,S 删除一行后进入insert模式 dw 删除一个单词 
			  cw 删除一个单词后进入insert模式 x,dl 删除一个字符 
			  s,cl 删除一个字符后进入insert模式 p 粘贴 
			  xp 交换两个字符 ddp 交换两行 y 复制 
			  yy 复制一行 u 撤消 ctrl+r 重做 
			  . 重复上一次修改 ctrl+r 重做 
			  . 重复上一次修改 划分窗格: 
			  :split/vsplit 分隔一个窗口 :new/vnew 创建一个新的窗口 
			  :sf {filename} 在新窗口中打开filename :close 关闭当前窗口 
			  :only 关闭除当前窗口外所有窗口 :ctrl-w h 到左面的窗口 :ctrl-w j 到下面的窗口 :ctrl-w k 到上面的窗口 :ctrl-w l 到右面的窗口 :ctrl-w t 到顶部的窗口 :ctrl-w b 到底部的窗口 重复操作（宏操作）: 
			  q[a-z] 开始记录操作,记录到寄存器[a-z]中 q 停止记录操作 
			  @[a-z] 执行寄存器中的操作 
			  @@ 执行最近寄存器中记录的操作 例子： 一个缓冲区有两行： sys/types.h stdio.h 
			  -->要改为： #include #include 操作如下： qa #开始记录 ^ #移动行首 
			  i #进入insert模式 




			   var cpro_psid ="u2572954"; var cpro_pswidth =966; var cpro_psheight =120;







#include #输入内容 q #停止记录 移动另一行： 
@a即可执行相同的操作 Visual Mode操作: 
ctrl+v 进入基于块的可视模式 v 进入基于字符的可视模式 V 进入基于行的可视模式 c 删除选定的块 
I{string} 选定块后按大写的I，输入字符串，再按ESC，可以在块内每一行插入相同的内容 跳到声明处: 
[[ 向前跳到顶格的第一个"{" [] 向前跳到顶格的第一个"}" ][ 向后跳到顶格的第一个"{" ]] 向后跳到顶格的第一个"}" 
[{ 跳到本代码块(由{}界定)的开头 [} 跳到本代码块的结尾 Shell: 
:ctrl+z/suspend 在shell下是挂起vim; gui下是最小化窗口 :!{command} 执行shell命令 :shell 开一个新的shell 保存vim状态(挂起?)： 
:mksession session.vim 保存当前vim状态 :source session.vim 回复vim状态 
vim -S session.vim 启动vim时恢复session 高效率移动 在插入模式之外 
基本上来说，你应该尽可能少的呆在插入模式里面，因为在插入模式里面VIM就像一个“哑巴”编辑器一样。很多新手都会一直呆在插入模式里面，因为这样易于 
使用。但VIM的强大之处在于他的命令行模式！你会发现，在你越来越了解VIM之后，你就会花越来越少的时间使用插入模式了。 使用 h，j，k，l 
使用VIM高效率编辑的第一步，就是放弃使用箭头键。使用VIM，你就不用频繁的在箭头键和字母键之间移来移去了，这会节省你很多时间。当你在命令模式 
时，你可以用h，j，k，l来分别实现左，下，上，右箭头的功能。一开始可能需要适应一下，但一旦习惯这种方式，你就会发现这样操作的高效之处了。 在你编辑你的电子邮件或者其他有段落的文本时，你可能会发现使用方向键和你预期的效果不一样，有时候可能会一次跳过了很多行。这是因为你的段落在VIM看 
来是一个大的长长的行。这时你可以在按h，j，k或者l 之前键入一个g，这样VIM就会按屏幕上面的行如你所愿的移动了。 在当前行里面有效的移动光标 
很多编辑器只提供了简单的命令来控制光标的移动（比如左，上，右，下，到行首/尾等）。VIM则提供了很多强大的命令来满足你控制光标的欲望。当光标从一 
点移动到另外一点，在这两点之间的文本（包括这两个点）称作被“跨过”，这里的命令也被
