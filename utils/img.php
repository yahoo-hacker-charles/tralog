<?php
session_start();
$width=50;								//图形宽度
$height=20;								//图形宽度
header("Content-type:image/gif");					//告知浏览器要输出gif类型的图像
$randval=randStr(4);							//调用randStr函数生成验证码中文本
$im=imagecreatetruecolor($width,$height);			//生成背景图像
$r=array(255,215,235,195,175);					//分别代表红，绿，蓝成分的数组
$g=array(255,215,235,195,175);					//分别代表红，绿，蓝成分的数组
$b=array(255,215,235,195,175);					//分别代表红，绿，蓝成分的数组
$key=rand(0,4);							//生成0到4之间的随机数
$backColor=imagecolorallocate($im,$r[$key],$g[$key],$b[$key]);	//使用上述随机数生成颜色变量
$pointColor=imagecolorallocate($im,255,170,255);
imagefill($im,0,0,$backColor);					//设置验证码背景颜色
$stringColor=imagecolorallocate($im,0,0,0);		//设置验证码文本颜色
for ($i=0;$i<=100;$i++){						//验证码中加入干扰元素
	$pointX=rand(2,$width-2);
	$pointY=rand(2,$height-2);
	imagesetpixel($im,$pointX,$pointY,$pointColor);
}
imagestring($im,3,5,1,$randval,$stringColor);			//在背景图中加入验证码文本
$ImageFun='Imagegif';						//创建验证码图形
$ImageFun($im);
imagedestroy($im);							//清除图像资源
		//将验证码文本内容做成SESSION
function randStr($len=10){						//随机生成验证码文本的函数
	$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
								//验证码文本从所有大小写字母和数字中产生
	$string="";								//验证码文本初始化
	while (strlen($string)<$len) {					//生成指定长度的验证码文本
		$string.=substr($chars,(rand()%strlen($chars)),1);
	}
	return $string;
}
$_SESSION['identifying']=$randval;
?>
