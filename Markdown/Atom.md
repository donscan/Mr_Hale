# 文件切换

Ctrl ＋ 0 焦点移到目录输
Cmd ＋ T｜P 查找文件
Cmd ＋ B 在打开的文件之间切换
Cmd ＋ Shift ＋ B 搜索从上次git commit 后修改或新增的文件
导航

Ctrl ＋ P 前一行
Ctrl ＋ N 后一行
Ctrl ＋ F 前一个字符
Ctrl ＋ B 后一个字符 Alt ＋ B ， Alt ＋ Left 移动到单词开始
Alt ＋ F ， Alt ＋ Right 移动到单词末尾
Cmd ＋ Right 移动到一行开始
Cmd ＋ Left 移动到一行结束
Cmd ＋ UP 移动到文件开始
Cmd ＋ DOWN 移动到文件结束
Ctrl ＋ G 移动到制定行Row:Column处
Cmd ＋ R 在方法之间跳转 br

# 目录树操作

Cmd ＋ \ 显示(隐藏)目录树
Ctrl ＋ 0 焦点切换到目录树(再按一次或者ESC退出目录树)
Ctrl ＋ 0 ＋ A 添加文件
Ctrl ＋ 0 ＋ D 将当前文件另存为(Duplicate)
Ctrl ＋ 0 ＋ I 显示(隐藏)版本控制忽略的文件 br Alt ＋ Right ｜ Alt ＋ Left 展开(隐藏)所有目录
Ctrl ＋ Alt ＋ ］ ｜ Ctrl ＋ Alt ＋［ 展开(隐藏)所有目录
Ctrl ＋ ［ 和 Ctrl ＋ ］ 展开(隐藏)当前目录
Ctrl ＋ F 和 Ctrl ＋ L 展开(隐藏)当前目录
Ctrl ＋ Shift ＋ C 复制当前文件绝对路径
选取

Ctrl ＋ Shift ＋ P 选取至上一行
Ctrl ＋ Shift ＋ N 选取至下一行
Ctrl ＋ Shift ＋ B 选取至前一个字符
Ctrl ＋ Shift ＋ F 选取至后一个字符
Alt ＋ Shift ＋ B ｜ Left 选取至字符开始
Alt ＋ Shift ＋ F ｜ Right 选取至字符结束
Ctrl ＋ Shift ＋ E ｜ Cmd ＋ Shift ＋ Right 选取至本行结束
Ctrl ＋ Shift ＋ A ｜ Cmd ＋ Shift ＋ Right 选取至本行开始
Cmd ＋ Shift ＋ UP 选取至文件开始
Cmd ＋ Shift ＋ DOWN 选取至文件结尾
Cmd ＋ A 全选
Cmd ＋ L 选取一行， 继续按将选取下一行
Ctrl ＋ Shift ＋ W 选取当前单词

# 编辑和删除文本

基本操作

Ctrl ＋ T 使光标前后字符交换
Cmd ＋ J 将下一行与当前行合并
Ctrl ＋ Cmd ＋ UP ｜ DOWN 使当前行向上或者向下移动
Cmd ＋ Shift ＋ D 复制当前行到下一行
Cmd ＋ U 使当前字符答谢
Cmd ＋ L 使当前字符小写
删除与剪切

Ctrl ＋ Shift ＋ K 删除当前行
Cmd ＋ BackSpace 删除到当前行开始
Ctrl ＋ K 剪切到当前行结束
Alt ＋ BackSpace ｜ H 删除到当前单词开始  Alt ＋ Delete ｜ D 删除到当前单词结束
多光标和多处选取

Cmd ＋ 鼠标右击(Clike) 增加新光标
Cmd ＋ Shift ＋ L 将多行选取为多行光标
Cmd ＋ D 选取文档中和当前单词相同的下一处
Ctrl ＋ Shift ＋ UP ｜ DOWN 增加上｜下光标
Ctrl ＋ Cmd ＋ G 选取文档中所有和当前光标单词相同的位置

# 括号跳转

Ctrl ＋ Cmd ＋ M 括号(Tag)之间文本选取
Alt ＋ Cmd ＋ 。 关闭当前HTML／XML Tag
编码方式

Ctrl ＋ Shift ＋ U 调出切换编码选项
查找和替换

Cmd ＋ F 在Buffer中查找
Cmd ＋ Shift ＋ F 在整个工程中查找
代码片段

Alt ＋ Shift ＋ S 查看当前可用代码片段
自动补全

Ctrl ＋ Space 提示信息补全
折叠

Alt ＋ Cmd ＋ ［ 折叠
Alt ＋ Cmd ＋ ］ 展开
Alt ＋ Cmd ＋ Shift ＋ ｛ 折叠全部
Alt ＋ Cmd ＋ Shift ＋ ｝ 展开全部
Cmd ＋ K Cmd ＋ N 指定折叠层级 N 为层级数
文件语法高亮

Ctrl ＋ Shift ＋ L 选择文本类型
使用Atom进行写作

Ctrl ＋ Shift ＋ M MarkDown 预览
# Git操作

Cmd ＋ Alt ＋ Z CheckOut HEAD版本
Cmd ＋ Shift ＋ B 弹出Untracked 和 Modified文件列表
Alt ＋ G DOWN ｜ Alt ＋ G UP 在修改处跳转
Alt ＋ G D 弹出Diff 列表
Alt ＋ G G 在GitHub上打开项目地址
Alt ＋ G B 在GitHub上打开文件Blame
Alt ＋ G H 在GitHub上打开文件History
Alt ＋ G I 在GitHub上打开Issues
Alt ＋ G R 在GitHub上打开分支比较
Alt ＋ G C 拷贝当前文件在GitHub上的网址
代码美化

Ctrl ＋ Alt ＋ B 美化代码
