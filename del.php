<?php
/* -------------------------------------------------------------------------
del�@�\
del.php 20120602 by Yakuba
----------------------------------------------------------------------------
��del.php�ɂ���
�^�ӂ��΂Ɏ�������Ă�DEL�@�\���܂˂����̂ł��B
�폜�˗����o�����ƁA�Ǘ��҂փ��[�����͂��܂��B
�I�ɂ���Ă�PHP����̃��[�����M�@�\����������Ă��鎖������܂��B
���̏ꍇ�͂��̋@�\���g���܂���̂ł������������B

���]�k
���̃X�N���v�g�́ufutaba.php v0.8 lot.041107 Yakuba�� 20110108�Łv�ȍ~��
�o�[�W�����ƘA�����Ă܂����A���ۂɂ̓R���P�̂œ����Ă��܂��̂ŁA
<?php $dat.="<a href=\"./del.php?res=$no\">del</a>&nbsp;"; ?>
���̂悤��futaba.php�ɑg�ݍ��ނƂ���del�@�\�ƘA���o���܂��B
�A���g�ݍ��ޏꏊ�́u$no�v�Ƀ��X�ԍ����������Ă���ꏊ�Ɍ���܂��B
����ȊO�̏ꏊ�ɑg�ݍ��ނƎg���܂���B

���̃X�N���v�g�͂����܂ł��Ǘ��҂ւ̃��[���ʒm�����ł��B
�ݐϓ_�������ɂ�鎩���폜�X�N���v�g�Ƃ������_��\�ł����A���ɂ͂���ȃX�L���͂���܂���B

���]�ځE����ɂ���
��{�I�ɂ͑��̃X�N���v�g�ɑg�ݍ���ł��������Ă��\���܂���B
���������̏ꍇ�͉����ӏ��̕\�L�ƁA����҂ł���Yakuba�̖��O���c���Ă��������B
���쌠�͕������Ă��܂���B

���X�V����
��20110118��    ����
��20110510��    ���[�����M���Ƀz�X�g��������悤�ɂ���
��20110517��    �ׂ��ȃo�O�C���Ɛ���ҕ\�L
��20120602��    PHP�̈ꕔ�o�[�W�����ŃG���[���������Ă����ׁA�C��
------------------------------------------------------------------------- */

// �S�ʐݒ�-----------------------------------------------------------------
define("TITLE", '�摜�f����');                  // �f���̖��O
define("PHP_SELF", 'futaba.php');               // �f���̃X�N���v�g��(�{�̂ɍ��킹�鎖)
define("PHP_SELF2", 'index.html');              // ������t�@�C����(�{�̂ɍ��킹�鎖)
define("MASTERMAIL", 'hoge@hoge.hoge');         // ���M��(�Ǘ���)���[���A�h���X(�K���ύX���邱�ƁI)
define("FROMMAIL", 'hoge@hoge.hoge');           // ���M�����[���A�h���X(�K���ύX���邱�ƁI)
define("MAILOK", 0);                            // �A�h���X���ύX�̂܂ܑ��M���Ȃ����߂̕ی��B�ݒ肪�I�������1�ɂ���Ƒ��M���o���܂��B
// -------------------------------------------------------------------------

if (!isset($dat)){$dat = "";}
if (!isset($no)){$no = "";}
if (!isset($subject)){$subject = "";}
if (!isset($_POST['logno'])){$_POST['logno'] = "";}
if (!isset($_GET["res"])){$_GET["res"]="";} else {$no = $_GET["res"];}
date_default_timezone_set('Asia/Tokyo');        // ��Yakuba �W�����̐ݒ�(date�ŕK�{)

// �w�b�_-------------------------------
$dat.='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja-JP">
<head>
  <meta name="robots" content="noindex,nofollow">
  <meta name="Berry" content="no">
  <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <title>�폜�˗��t�H�[��</title>
  <meta name="description" content="del�@�\">
  <meta name="keywords" content="�ӂ���,�����˂�,�摜,�񎟌�">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="cache-control" content="no-cache">
  <!--<meta http-equiv="expires" content="-1">-->
  <!-- <link rel="shortcut icon" href="http://�A�h���X/favicon.ico" type="image/vnd.microsoft.icon"> -->
  <!-- <link rel="icon" href="http://�A�h���X/favicon.ico" type="image/vnd.microsoft.icon"> -->
</head>
<body>
';

// ���M����-----------------------------
if($_POST['logno']){
//  $IP = getenv("REMOTE_ADDR");
  $IP = $_SERVER["REMOTE_ADDR"];
  $HOST = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
  $datetime = date("Y-n-j H:i:s");

  $from = FROMMAIL;
  $to = MASTERMAIL;
  $subject = "�폜�˗� [".TITLE."]";
  $message = TITLE." �ɂĎ��̍폜�˗����o����܂����B\n\n���ONo�F".$_POST['logno']."\n���R�F".$_POST['reason']."\n�\����IP�F$IP\n�\����HOST�F$HOST\n�\�������F$datetime\n\n�ȏ�ł��B";

  if(MAILOK){
    mb_language("Japanese");
    mb_internal_encoding ("SJIS");
    mb_send_mail($to, $subject, $message, "From: ".$from);
    $dat .= '
<h1>�폜�˗��̃t�H�[��</h1>
<hr>
�폜�˗����󂯕t���܂����B<br>
�A���A�K����������]�ɓY�������ł͂���܂���̂�<br>
���̓_�͂������������B<br>
<br>
<a href="javascript:void(0);" onclick="history.go(-2);return(false);">�߂�</a><br>
(�g�т̏ꍇ�͖߂�{�^���������Č��̉�ʂɖ߂��Ă�������)<br>
<hr>
';

  } else {
    $dat .= '
<h1>�폜�˗��̃t�H�[��</h1>
<hr>
�\���󂠂�܂��񂪌��݂����炩��폜�˗����ł��Ȃ���Ԃł��B<br>
<br>
���萔�ł������������[���t�H�[�����Ǘ��l��<br>
�G���[���e(���[���s��)�ƍ폜����]���郌�X�ԍ��Ƃ��̗��R�����m�点�������B<br>
<br>
<a href="./'.PHP_SELF2.'">�߂�</a><br>
<hr>
';
  }

}

// �{��---------------------------------
if(!$no && !$_POST['logno']){
  $dat .= '
<h1>�폜�˗��̃t�H�[��</h1>
<hr>
�\���󂠂�܂��񂪕K�v�ȏ�񂪎擾�ł��܂���ł����B<br>
�ēx�f�����del�������Ă݂Ă��������B<br>
<br>
����ł����̕\�����o��ꍇ��<br>
���萔�ł������������[���t�H�[�����Ǘ��l��<br>
�G���[���e(��񖢎擾)�ƍ폜����]���郌�X�ԍ��Ƃ��̗��R�����m�点�������B<br>
<br>
<a href="./'.PHP_SELF2.'">�߂�</a><br>
<hr>
';
}

if($no && !$subject){
  $dat .= '
<h1>�폜�˗��̃t�H�[��</h1>
<hr>
�폜���˗�������́A�폜���R��I���<br>
[�폜�˗�������]�������Ă�������<br>
<br>
<a href="javascript:void(0);" onclick="history.go(-1);return(false);">�߂�</a>
(�g�т̏ꍇ�͖߂�{�^���������Č��̉�ʂɖ߂��Ă�������)<br>
<hr>
<form action="del.php" method="post">
<table border="1"><tr><td>�����E�摜<br>
<input type="radio" name="reason" value="101-�����E���J�E���_�ʑ�">�����E���J�E���_�ʑ�<br>
<input type="radio" name="reason" value="102-�����E���E">�����E���E<br>
<input type="radio" name="reason" value="103-�l���E�v���C�o�V�[">�l���E�v���C�o�V�[<br>
<input type="radio" name="reason" value="104-���܂Ƃ��E�X�g�[�J�[">���܂Ƃ��E�X�g�[�J�[<br>
<input type="radio" name="reason" value="105-�A���E���ב���E���Ӗ��ȗ���">�A���E���ב���E���Ӗ��ȗ���<br>
<input type="radio" name="reason" value="106-�L���Espam">�L���Espam<br>
<input type="radio" name="reason" value="107-���t�E����">���t�E����<br>
<input type="radio" name="reason" value="108-�N�Q�E�W�Q">�N�Q�E�W�Q<br>
<input type="radio" name="reason" value="109-�Ⴂ">�Ⴂ<br>
<input type="radio" name="reason" value="110-�r�炵�E�����点�E�����̌�">�r�炵�E�����点�E�����̌�<br>
<input type="radio" name="reason" value="111-�����E�@���E����">�����E�@���E����<br>
</td></tr><tr><td>�Q���摜<br>
<input type="radio" name="reason" value="201-�O���摜(�Q��)">�O���摜(�Q��)<br>
</td></tr><tr><td>�R���摜<br>
<input type="radio" name="reason" value="301-�O���摜(�R��)">�O���摜(�R��)<br>
<input type="radio" name="reason" value="302-�G���摜(�R��)">�G���摜(�R��)<br>
<input type="radio" name="reason" value="303-�����|���m�摜(�R��)">�����|���m�摜(�R��)<br>
<input type="radio" name="reason" value="304-�����摜�E���C���摜(�R��)">�����摜�E���C���摜(�R��)<br>
</td></tr></table>
<input type="hidden" name="logno" value="'.$no.'">
<!--<input type="hidden" name="b" value="30">-->
<input type="submit" value="�폜�˗�������">
</form>
����͎������g�̋L�����폜����t�H�[���ł͂���܂���.<br>
�������g�̋L�����폜����ꍇ��,�L���̍����̃`�F�b�N��<input type="checkbox">�Ƀ`�F�b�N������<input type="checkbox" checked="checked"><br>
��ʉ��[�̉E���ɂ���[�폜]�{�^���������ĉ�����.<br>
<hr>
';
}

// �t�b�^-------------------------------
$dat .= '
<center><small>- <a href="http://t-jun.kemoren.com" target="_blank">Yakuba</a> -</small></center><br>
</body>
</html>
';

echo $dat;

?>
