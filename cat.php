<?php
/* -------------------------------------------------------------------------
 Catalog Mode
futaba.php & gazou.php & thumbnail.php
----------------------------------------------------------------------------
���̃X�N���v�g�̓��b�cPHP!<http://php.s3.to/>��gazou.php�������������̂�
�X�ɉ��������ӂ��΁������˂�<http://www.2chan.net/script/>��futaba.php��
�\�������𔲂�������ĕt����futaba.php��p�̃J�^���O�ł��B

�ݒu�@�F�i�I���W�i����futaba.php���ғ����Ă��鎖��O��Ƃ��Đ������܂��j
1) thumbs�f�B���N�g�������A�p�[�~�b�V������777(707)�ɂ��܂�
2) ���cat.php�t�@�C����ftp�]�����Acat.php�ɃA�N�Z�X���邾���ł��B

  public_html (�z�[���f�B���N�g��)
      |
      +-- futaba [777(707)] �X�N���v�g�t�H���_
             |  futaba.php [644(604)] �{�̃X�N���v�g
             |  cat.php    [644(604)] Catalog Mode <<**
             |  repng2jpeg [755(705)] �K�v�̏ꍇ�̂ݓ��� <<**
             |
             +-- src       [777(707)] ���摜�p�t�H���_
             |
             +-- thumb     [777(707)] �{�̃T���l�C���t�H���_
             |
             +-- thumbs    [777(707)] Catalog Mode�p�T���l�C���t�H���_ <<**


�y��򃂁[�h�z�Fcat.php �̖����Ɂu?clean�v�ƕt���ČĂяo��
�@�@�@�@�@�@�@�@��@http://�`�`/futaba/cat.php?clean
�@�@�@�@�@�@�@�@��򃂁[�h������Ȃ�΁A�s�p�T���l�C���������Ă��� cat.php �ɖ߂�܂��B
�@�@�@�@�@�@�@�@�u�s�p�T���l�C�������������ȁH�v�Ǝv��ꂽ���ɐ�򂵂ĉ������B

�y���������\���ɂ��āz
   �������O�l���Z�o���Ă��܂��̂ŁA
     �ڂɌ����錩������e����Ă��郍�O�l�Ƃ͈Ⴂ�܂��B

���̃C���`�L�L�������X�N���v�g���g�p���������Ȃ鑹�Q�ɑ΂��č�҂͈�؂̐ӔC�𕉂��܂���B
�@���ȐӔC�X�N���v�g�ł��B�T�|�[�g�͖����Ǝv���ĉ������B
�@���ȉ����o���Ȃ���΁A���̖��ۏ؃X�N���v�g�͒��߂ĉ������B
�@�@�@��΂ɃI���W�i���z�z���̃T�C�g�Ŏ���Ȃǂ��Ȃ��悤�ɁI
�@�@�@�������Ɋւ��Ă̎���Ȃǂ̓h���f�ƂȂ�܂��B
 
1. ����cat.php�̓]�ڔz�z���֎~�Ƃ����Ē����܂��B
�@�@�@�A���A�X�ɉ�������P���ǂ��ꂽ���Ɋւ��Ă͉ł��B
�@�@�@�i�����z�z�̏ꍇ�́A�X�N���v�g��c�����Ė��f�ɂȂ�Ȃ��悤�ɂ��ĉ������B�j
2. ���ӔC�z�z�Ȃ̂ŉ������쌠�\���͋L�q���Ă��܂��񂪁A
�@�@�@�X�ɉ����y�у��[�`���̈ꕔ�̈ڐA��cat.php�̒��쌠�\�����K�v�Ǝv���ꍇ��
�@�@�@�e���ŋL�����ĉ������B�i�X�N���v�g���ɃR�����g�A�E�g�L�q�ł��\���܂���B�j
3. cat.php�Ɋւ��Ă̋K��́A�e�I���W�i���z�z���ɏ����܂��B
4. ���p�̑O�ɁA�K���e�����O�z�z���̋K��ɖڂ�ʂ��Ď�鎖�B


���Ă��Ƃ��������ۂ��d�l by Yakuba
�E�J�^���O�\���ŃT���l�C���L�̏ꍇ�͖{���Ȃ�
�E�J�^���O�\���ŃT���l�C�����̏ꍇ�͖{���S��
�E���X���t��
�ȏ�̗l���ɂ��邽�߁A�ȉ��̓_�𒍈ӂ��邱�ƁB
�E72�s�ڕt�߂�"�{����}��"�̒l��1�̂܂܂ɂ���(0�̏ꍇ�̓o�O����)
�E��L�ɔ�����268�s�ڂ��������邱��(������)
------------------------------------------------------------------------- */

// ��{�ݒ�-----------------------------------------------------------------
define("LOGFILE", 'img.cgi');                   //���O�t�@�C����
define("TREEFILE", 'tree.cgi');                 //���O�t�@�C����
define("TITLE", '�摜�f����');                  //�^�C�g��
define("HOME",  '../index.html');               //�u�z�[���v�ւ̃����N
define("PHP_SELF", 'futaba.php');               //�{�̃X�N���v�g��
define("PHP_SELF2", 'index.html');              //������t�@�C����
define("LIMIT", 50);                            //�X���{��
define("REGZCUN", 10);                          //�J�^���O���[�h���̉摜�s��
define("MESSAGE", 1);                           //�{����}�� (n=0 y=1)
define("SYNTHETIC_COUNT", 0);                   //�����ɃJ�E���g���o�� (n=0 y=1)

// �J���[�ݒ�---------------------------------------------------------------
define("COL_BODY", '<body bgcolor="#ffffee" text="#800000" link="#0000ee" vlink="#0000ee" alink="#0000ee">'); //�{�f�B�J���[

// �X�^�C���V�[�g-----------------------------------------------------------
$css_collis='<style type="text/css">
<!--
body,tr,td,th { font-size:12pt; }
a:hover { color:#dd0000; }
span { font-size:20pt; }
small { font-size:10pt; }
-->
</style>';

// �T���l�C���ݒ�-----------------------------------------------------------
define("IMGDIR", 'src/');                       //�摜�̕ۑ����Ă���t�H���_
define("THUMBDIR", 'thumbs/');                  //�T���l�C����ۑ�����t�H���_
define("THUMB_DIR",'thumb/');                   //�匳�̃T���l�C����ۑ����Ă���t�H���_
define("IMG_W", 50);                            //�o�͂���摜�i�T���l�C���j�̕�
define("IMG_H", 50);                            //�o�͂���摜�i�T���l�C���j�̍���
define("S_IMG_JPG" , 60);                       //�T���l�C��JPG�̈��k��
define("SCRIPT_NAME", 'cat.php');               // ���̃X�N���v�g�̃t�@�C����

//������repng2jpeg�ŃT���l�C������� (n=0 y=1)
//����: http://sugachan.dip.jp/download/
//1�ɐݒ肳��Ă� exec �R�}���h���g���Ȃ��T�[�o�̏ꍇ�A�����I��GD�ŏ�������܂��B
//���A���ʂ͊m�����͂���܂���B�T�[�o���̕ϑ��I�Ȑݒ�ŁA
//  ��������̃G���[��T���l�C���������Ȃ��ꍇ��0�Ƃ��ĉ^�c���ĉ������B
define("SUGA_DOCORO", 0);
// -------------------------------------------------------------------------

/* �L���\�� */
$path = realpath("./").'/'.IMGDIR;
$buf = Washing($_SERVER{'QUERY_STRING'});
$natural=FALSE;
$re_meta='<html><META HTTP-EQUIV="refresh" content="0;'.
         'URL='.SCRIPT_NAME.'"><body>��ʂ�؂芷���܂�...</body></html>';
switch($buf){
  case '': updatelog(); exit;
  case 'natural': $natural=TRUE; updatelog(); exit;
  case 'clean': Clean(); echo $re_meta; exit;
  default: echo $re_meta; exit;
}

/* �w�b�_ */
function head(&$dat){
  global $css_collis;
  $dat.='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=Shift_JIS">
<meta name="robots" content="noindex,nofollow,noarchive">
<!-- meta HTTP-EQUIV="pragma" CONTENT="no-cache" -->
'.$css_collis.'
<title>'.TITLE.'</title>
</head>
'.COL_BODY.'
<!--���A�i���C�Y�Ȃ�-->
';
}

/* �L������ */
function updatelog($resno=0){
  global $path,$natural;$p=0;

  $tree = file(TREEFILE);
  $find = false;
  if($resno){
    $counttree=count($tree);
    for($i=0; $i<$counttree; $i++){
      list($artno,)=explode(",", rtrim($tree[$i]));
      if($artno==$resno){ $st=$i;$find=true;break; } //���X�挟��
    }
    if(!$find){echo"<html><body><hr>�Y���L�����݂���܂���<hr></body></html>";exit;}
  }
  $line = file(LOGFILE);
  $countline=count($line);
  for($i=0; $i<$countline; $i++){
    list($no,) = explode(",", $line[$i]);
    $lineindex[$no]=$i + 1; //�t�ϊ��e�[�u���쐬
  }

  $counttree = count($tree);

      if($natural){
        for($i=0; $i<$counttree; $i++){
          if(empty($tree[$i])) continue;
          $tree_sort = explode(",", rtrim($tree[$i]));
          $disp_sort[] = $tree_sort[0];
        }
        natsort($disp_sort);
        $disp_sort = array_reverse($disp_sort);
      }

  for($page=0; $page<$counttree; $page+=LIMIT){
    $dat='';
    head($dat);
    if(!$resno){
      $st = $page;

      if($natural){
        $nsw = '���e��';
        $rnsw = '���~��';
        $nlink = SCRIPT_NAME;
        $ntd = '#e04066';
          }else{
        $nsw = '���~��';
        $rnsw = '���e��';
        $nlink = SCRIPT_NAME.'?natural';
        $ntd = '#0040e0';
      }

      $dat.='<font color="#800000" size="5">
<b><div style="font-size: 20pt;text-align: center;">'.TITLE.'</div></b></font>
<hr>
[<a href="'.PHP_SELF2.'">�f���ɖ߂�</a>]
[<a href="'.HOME.'" target="_top">�z�[��</a>]
[<a href="javascript:location.reload()">�ēǍ�</a>]
<!--[<a href="'.$nlink.'">'.$rnsw.'</a>]-->
<table width="100%"><tr><th bgcolor="'.$ntd.'">
<font color="#FFFFFF">�J�^���O���[�h<!-- ('.$nsw.')--></font>
</th></tr></table>
';

      $dat.="<table border=1 align=center><tr>\n\n";
      for($i=0; $i<$counttree; $i++){
        if($natural){
          $sortline = explode(",", rtrim($disp_sort[$i]));
          $disptree = $sortline[0];
            }else{
          if(empty($tree[$i])) continue;
          $treeline = explode(",", rtrim($tree[$i]));
          $disptree = $treeline[0];
        }
        $j=$lineindex[$disptree] - 1;    //�Y���L����T����$j�ɃZ�b�g
        if(empty($line[$j])) continue;   //$j���͈͊O�Ȃ玟�̍s
        list($no,,,,,$com,,,,$ext,$w,$h,$time,) = explode(",", $line[$j]);

        if($natural){
          for($x=0; $x<$counttree; $x++){
            $ar=explode(",", rtrim($tree[$x]));
            if($ar[0]==$disptree) $treeline = $ar;
          }
        }

        $jlc=count($treeline)-1;
        // �摜�t�@�C����
        $img = $path.$time.$ext;
        $src = IMGDIR.$time.$ext;
        //�T���l�C������w��
        if(is_file($src) && !is_file(THUMBDIR.$time.'s.jpg')){
          if(!is_file(THUMB_DIR.$time.'s.jpg')){
            MakeHakusi($time);
              }else{
            MakeThumbnail($src, $time);
          }
        }

        // <img�^�O�쐬
        $imgsrc = "";
        if($ext && is_file($img)){
          $whpx=GetImageSize(THUMBDIR.$time.'s.jpg');
          $whpixs=$whpx[3];
          if($w && $h){ //�T�C�Y�����鎞
            if(@is_file(THUMBDIR.$time.'s.jpg')){
              $imgsrc = "<a href=\"".PHP_SELF."?res=$no\" target=_blank>".
                "<img src=".THUMBDIR.$time.'s.jpg'." border=0 $whpixs></a>";
                }else{
              $imgsrc = "<a href=\"".PHP_SELF."?res=$no\" target=_blank>".
                "<img src=".$src." border=0 $whpixs></a>";
            }
              }else{ //����ȊO
            $imgsrc = "<a href=\"".$src."\" target=_blank><img src=".$src.
              " border=0></a>";
          }
        }

        $com = preg_replace("/<[^>]*>/","",$com);
        $com = preg_replace("/(�@| )/","",$com);
        if(MESSAGE){
          if(function_exists("mb_substr") && function_exists("mb_strlen") && function_exists("mb_internal_encoding")){
            mb_internal_encoding("SJIS"); $mbline = TRUE;
              }else{
            $mbline = FALSE;
          }
          if($mbline){
            if(function_exists("mb_convert_kana")) $com = mb_convert_kana($com, "KV");
            if(mb_strlen($com) > 4) $com = mb_substr($com,0,4);
              }else{
            if(strlen($com) > 8) $com = substr($com,0,8).".";
          }
        }
        if($i>=LIMIT) break;

        if(!isset($gzim)){$gzim = "";}
        $gzim++;$gzcom = ($gzim % REGZCUN) ? "" : "</tr>\n<tr>";
        if($imgsrc){
          if(MESSAGE) $mes="$com<br>"; else $mes="";
//���s�������ӏ�          $imgsrc = "<td nowrap>$imgsrc<br><small>$mes$jlc</small></td>$gzcom\n";
          $imgsrc = "<td nowrap>$imgsrc<br><small>$jlc</small></td>$gzcom\n";
          if(LIMIT==$gzim) $imgsrc = preg_replace("/</tr>\n<tr>\n$/","",$imgsrc);
          $dat.="$imgsrc";
            } else {
          $commz = "<td nowrap><small><a href=\"".PHP_SELF.
            "?res=$no\" target=_blank>$com</a><br>$jlc</small></td>$gzcom\n";
          if(LIMIT==$gzim) $commz = preg_replace("/</tr>\n<tr>\n$/","",$commz);
          $dat.="$commz";
        }
      }
      $dat.="\n</tr></table>\n";
      clearstatcache(); //�t�@�C����stat���N���A
      if($resno) break; //res����tree1�s����
    }

    if(SYNTHETIC_COUNT){
      $gcnt=0;$tct=count($tree);$tcl=count($line);
      $dir = opendir(IMGDIR);
      while(false !== ($file=readdir($dir))){
        if(preg_match("/\.(jpe?g|gif|png)$/i", $file)) $gcnt++;
      }
      closedir($dir);
      clearstatcache();
      $dat.='<center><table border="1" cellspacing="0" cellpadding="3"><tr>
<td bgcolor="#d6d6f6" nowrap>�摜����</td><td bgcolor="#f6f6f6" nowrap>'.$gcnt.'</td>
<td bgcolor="#d6d6f6" nowrap>�X���{��</td><td bgcolor="#f6f6f6" nowrap>'.$tct.'</td>
<td bgcolor="#d6d6f6" nowrap>�L������</td><td bgcolor="#f6f6f6" nowrap>'.$tcl.'</td>
</tr></table></center>';
    }

    $dat.='<hr>
<center>
<!-- ���L���Ȃ� -->
<small>- <a href="http://php.s3.to/" target="_top">GazouBBS</a>+<a href="http://www.2chan.net/" target="_top">futaba</a>+<a href="http://t-jun.kemoren.com" target="_top">Yakuba</a> -</small><br>
</center>';
    $dat.='</body></html>';
    echo $dat;break;
  }
}

/* �T���l�C���T�C�Y�擾 */
function MakeThumbnail($src, $f){
  $fthumb = THUMBDIR.$f.'s.jpg';
  $size = getimagesize($src); //�T�C�Y�擾
  if($size[0] > IMG_W || $size[1] > IMG_H) { //�A�X�y�N�g��
    $W = IMG_W / $size[0];
    $H = IMG_H / $size[1];
    $key = ($W < $H) ? $W : $H;
    $resize[0] = $size[0] * $key;
    $resize[1] = $size[1] * $key;
      }else{
    $resize[0] = $size[0];
    $resize[1] = $size[1];
  }

  if(SUGA_DOCORO &&
    ((stristr(PHP_OS, "WIN") &&
      file_exists(realpath("./repng2jpeg.exe"))) ||
     (file_exists(realpath("./repng2jpeg")) &&
      is_executable(realpath("./repng2jpeg"))))){
    // png2jpeg�T���l�C���摜��ۑ�
    if(file_exists(realpath("./repng2jpeg"))){
      $suga_path = realpath("./repng2jpeg");
        }else{
      $suga_path = realpath("./repng2jpeg.exe");
    }
    @exec($suga_path." $src $fthumb $resize[0] $resize[1] ".S_IMG_J);
      }else{
    //GD�̃o�[�W�������Ƃɏ���
    $thu = (function_exists("ImageCreateTrueColor") && get_gd_ver()=="2") ? TRUE : FALSE;
    if($thu){
      $img_t = ImageCreateTrueColor($resize[0],$resize[1]);	
        }else{
      $img_t = ImageCreate($resize[0],$resize[1]);
    }
    switch($size[2]){
      case 1: $img_i = ImageCreateFromGIF($src);  break;
      case 2: $img_i = ImageCreateFromJPEG($src); break;
      case 3: $img_i = ImageCreateFromPNG($src);  break;
    }

    if($thu){
      ImageCopyResampled($img_t,$img_i,0,0,0,0,$resize[0],$resize[1],$size[0],$size[1]);
        }else{
      ImageCopyResized($img_t,$img_i,0,0,0,0,$resize[0],$resize[1],$size[0],$size[1]);
    }
    //�T���l�C���͑S��jpg�ɂȂ�܂��E�E�E
    ImageJpeg($img_t, $fthumb, S_IMG_JPG);
    //�j��
    ImageDestroy($img_i);
    ImageDestroy($img_t);
  }
}

//���\�[�X�I�[�o�[�̃t�H���[�p (�_�~�[�摜����)
function MakeHakusi($f) {
  //GD�̃o�[�W�������Ƃɏ���
  if(function_exists("ImageCreateTrueColor") && get_gd_ver()=="2"){
    $img = ImageCreateTruecolor(50,50);
      }else{
    $img = ImageCreate(50,50);
  }
  $white = ImageColorAllocate($img, 255, 255, 255);
  $black = ImageColorAllocate($img, 0, 0, 0);
  ImageFill($img, 0, 0, $white);
  ImageString($img, 3, 1, 17, 'NoImage', $black);
  ImageJpeg($img, THUMBDIR.$f.'s.jpg',S_IMG_JPG);
  ImageDestroy($img);
}

//gd�̃o�[�W�����𒲂ׂ�
function get_gd_ver(){
  if(function_exists("gd_info")){
    $gdver=gd_info();
    $phpinfo=$gdver["GD Version"];
      }else{ //php4.3.0�����p
    ob_start();
    phpinfo(8);
    $phpinfo=ob_get_contents();
    ob_end_clean();
    $phpinfo=strip_tags($phpinfo);
    $phpinfo=stristr($phpinfo,"gd version");
    $phpinfo=stristr($phpinfo,"version");
  }
  $end=strpos($phpinfo,".");
  $phpinfo=substr($phpinfo,0,$end);
  $length = strlen($phpinfo)-1;
  $phpinfo=substr($phpinfo,$length);
  return $phpinfo;
}

//���
function Washing($clean){
  $clean = trim($clean);
  $clean = htmlspecialchars($clean, ENT_QUOTES);
  $clean = str_replace("\0", "", $clean);
  $clean = str_replace("\t", "", $clean);
  $clean = str_replace("\r", "", $clean);
  $clean = str_replace("\n", "", $clean);
  return $clean;
}

//�t�@�C�����򂷂�
function Clean() {
  $dir = realpath("./").'/'.IMGDIR;
  $thu = realpath("./").'/'.THUMBDIR;
  $fp=opendir($thu);
  while(FALSE !== ($file = readdir($fp))){
    $un = preg_replace("/([0-9]+)s\.jpg$/", "\\1", $file);
    if($file != "." && $file != ".."){
      if(preg_match("/\.jpg$/", $file)){
        if((!file_exists($dir.$un.'.jpg') &&
          !file_exists($dir.$un.'.gif') &&
          !file_exists($dir.$un.'.png')) &&
           file_exists($thu.$file)) unlink($thu.$file);
      }
    }
  }
  closedir($fp);
  clearstatcache();
}

?>
