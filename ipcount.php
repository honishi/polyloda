<?php
/*
    �����Ă��邨���悻�̐l�����o�͂���
    javascript����Ăяo��
    for namamono bbs (http://namamono.pandora.nu/)
    2005/07 PCjingle
    2005/10 Ver.2
    2006/01 Ver.2.1
    2006/02 Ver.2.1.1
*/

define("IPFILE",'ipcount.log');         //�A�N�Z�X����IP�����ԕۑ�(�p�[�~�b�V�����F0666)
define("TIMELIMIT",3);                  //IP�̕ێ����ԁi�f�t�H���g�T���j
$ipdat="";
$hostname=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
$countip=0;
$ipdat=array('dummy',0);
if(is_file(IPFILE)){
  $ipdat=file(IPFILE);
  $countip=count($ipdat);
  for($i=0; $i<$countip; ++$i){
    $ipdat[$i]=trim($ipdat[$i],"\n");
  }
}
//���Ԑ؂��IP���폜�i��`�������ԁu���v�X�V�j
$flg=0;
for($i=$countip-1; $i>=0; $i-=2){
  if(time()-$ipdat[$i]>60*TIMELIMIT){
    array_pop($ipdat);
    array_pop($ipdat);
    $flg=2;
  }
  if(!isset($ipdat[$i-1])){$ipdat[$i-1]="";}            // ��Yakuba �G���[��f�����ߎb��[�u�c
  if($ipdat[$i-1]==$hostname){
    $flg++;
    $countip/=2;
    break;
  }
}
//�V����IP��ǉ�
if(($flg==0)||($flg==2)) array_unshift($ipdat,$hostname,time());
if($flg!=1){
  $countip=(int)(count($ipdat)/2);
  $ipdat2=implode("\n",$ipdat);
  $fp=fopen(IPFILE,"r+");
  if($fp){
    if(flock($fp,LOCK_EX)){
      set_file_buffer($fp,0);
      fputs($fp,$ipdat2);
	  ftruncate($fp,strlen($ipdat2));
      flock($fp,LOCK_UN);
    }
    fclose($fp);
    @chmod(IPFILE,0666);
  }
}
echo "document.write(\"".$countip."\");";
?>
