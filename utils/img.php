<?php
session_start();
$width=50;								//ͼ�ο��
$height=20;								//ͼ�ο��
header("Content-type:image/gif");					//��֪�����Ҫ���gif���͵�ͼ��
$randval=randStr(4);							//����randStr����������֤�����ı�
$im=imagecreatetruecolor($width,$height);			//���ɱ���ͼ��
$r=array(255,215,235,195,175);					//�ֱ����죬�̣����ɷֵ�����
$g=array(255,215,235,195,175);					//�ֱ����죬�̣����ɷֵ�����
$b=array(255,215,235,195,175);					//�ֱ����죬�̣����ɷֵ�����
$key=rand(0,4);							//����0��4֮��������
$backColor=imagecolorallocate($im,$r[$key],$g[$key],$b[$key]);	//ʹ�����������������ɫ����
$pointColor=imagecolorallocate($im,255,170,255);
imagefill($im,0,0,$backColor);					//������֤�뱳����ɫ
$stringColor=imagecolorallocate($im,0,0,0);		//������֤���ı���ɫ
for ($i=0;$i<=100;$i++){						//��֤���м������Ԫ��
	$pointX=rand(2,$width-2);
	$pointY=rand(2,$height-2);
	imagesetpixel($im,$pointX,$pointY,$pointColor);
}
imagestring($im,3,5,1,$randval,$stringColor);			//�ڱ���ͼ�м�����֤���ı�
$ImageFun='Imagegif';						//������֤��ͼ��
$ImageFun($im);
imagedestroy($im);							//���ͼ����Դ
		//����֤���ı���������SESSION
function randStr($len=10){						//���������֤���ı��ĺ���
	$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
								//��֤���ı������д�Сд��ĸ�������в���
	$string="";								//��֤���ı���ʼ��
	while (strlen($string)<$len) {					//����ָ�����ȵ���֤���ı�
		$string.=substr($chars,(rand()%strlen($chars)),1);
	}
	return $string;
}
$_SESSION['identifying']=$randval;
?>
