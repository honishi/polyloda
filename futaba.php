<?php
/* -------------------------------------------------------------------------
 �摜�f����(�ӂ��΁E��������n)
futaba.php v0.8 lot.041107 Yakuba�� 20121120��
----------------------------------------------------------------------------
��futaba.php�ɂ���
���̃X�N���v�g�̓��b�cPHP!<http://php.s3.to/>��gazou.php�������������̂ł��B
�z�z�����̓��b�cPHP!�ɏ����܂��B�����A�Ĕz�z�͎��R�ɂǂ����B
���̃X�N���v�g�Ɋւ��鎿��̓��b�cPHP!�ɂ��Ȃ��悤�ɂ��肢���܂��B
�ŐV�ł�<http://www.2chan.net/script/>�Ŕz�z���Ă��܂��B
������͏������ӂ���<http://www.2chan.net/junbi/index2.html>�܂łǂ����B

��Yakuba���ɂ���
���̃X�N���v�g�͏�L����������siokara.php������ɉ����������̂ł��B
�����p�ɍۂ��Ă͖��ۏؖ��T�|�[�g�ł��̂ŁA��������m�̏�ł����p�������B
�����ӏ��ɂ��܂��Ă̓��b�cPHP�l�E�ӂ��Ηl�E��������l�ւ͐�Ζ₢���킹�Ȃ��ł��������B

���ݒu�@
���]�̃f�B���N�g���̃p�[�~�b�V������777(707)�ɂ��܂��B
src�f�B���N�g����thumb�f�B���N�g�������A�p�[�~�b�V������777(707)�ɂ��܂��B
futaba.php��u���A�u���E�U����ďo���܂�(�K�v�ȃt�@�C���������ݒ肳��܂�)�B
gif2png<http://www.tuxedo.org/~esr/gif2png/>������ꍇ�́A
gif�ł��T���l�C�������܂��B�t���̃o�C�i����linux-i386�p�ł��B

������
�Eimg.log�̃t�@�C�����̓f�t�H���g����ς��Ă��g�p���������B
�@define(LOGFILE, 'img.log'); // ���O�t�@�C����
�E�ݒu�T�[�o�ɂ���Ă�index.htm�������Ɖ摜�f���ݒu�t�H���_���������Ă��܂��ꍇ������܂��B
�@���index.htm��u�����A�X�N���v�g�̓�����t�@�C�����w���index.htm�ɕύX���Ă��������B
�@define("PHP_SELF2", 'futaba.htm'); // ������t�@�C����
�E�����Ńf�B���N�g�������Ȃ��I������܂��̂ŁA�ی��̂��߂�<ref><src><thumb><thumbs>��u���Ă����܂��B(Yakuba)

���Ƃ�����������������X�N���v�g
��Ver.1.0.0 2004/04/21 ���J�J�n
futaba.php v0.8 lot.031015����̎�ȕύX�_
bmp/swf�̖����I�ȋ֎~�Agif�\�����@�����A�T���l�掿����A�X���勭��sage�@�\�A�ȉ��ȗ��ݒ�
gif2png�̓���Ɗ�{�I�Ȑݒu���@�͏�L�ӂ��Ώ����X���Ɣz�z�����Q�Ƃ̂��ƁB
�m�b�Ə����������Ă��ꂽ�Ƃ������B�ɑ���Ȃ銴�ӂƌ����B

��Ver.1.0.1 2004/05/09
�ݒ�\���ڂɒǉ�
�������������N�̉�/���ԕ\���ɕb���܂߂邩/��������sage�}���ŏ펞sage/�ݒ莞�Ԍ�ɋ���sage
�ȉ��ȗ����w��

��Ver.1.0.2 2004/05/19
�Ǘ���ʂɃT���l�C�������ւ��@�\��ǉ�/�Ǘ���ʂɋ����X��sage���@�\��ǉ�

��Ver.1.0.3 2004/05/22
�����̃T���l�C���摜�I���@�\�ǉ�/�摜�̎擾��html���o�R�@�\�ǉ�/���e���ɃA�jGIF�̃T���l���I���\��
/�����ւ�������ꕔ�C��/�u���X�ȗ��v�̐ݒ�l��萔��

��Ver.1.0.3a 2004/05/23
���X�ɉ摜�Y�t�\�o�[�W�����A�J�����x�[�^��

��Ver.1.0.4 2004/08/01
����̃z�X�g��o�^����ID(�z�X�g�����Í�������������)�A�܂��̓z�X�g����\������@�\��ǉ�

��Ver.1.0.4a 2004/08/01
���X�ɉ摜�Y�t�\�o�[�W������ID�A�z�X�g���\���@�\��ǉ�
���ς�炸�x�[�^�ł̂܂�(����A�x�[�^�ňȑO�ɖ��������ł̊�K�X���)

��Ver.1.0.4a + �� 2005/03/17
�o�[�W�����������ƁA�S�`���S�`���Ȃ����Ⴄ�\��������̂ŁA�����Ă܂���B
�v�́A���������ł��B�����ƕ�����Ղ������΁A���ł��Ǝv��
�E�폜�L�[�_�薼�_�{���_���O �K�{�I��
�E���X���A���̃X���ɖ߂�@�\�ǉ�
�E�X���傪�����̃X���̋����h�c���ۂ�����
�E�X���傪�X�����Ď��ɖ��O�L�����L��������
�E���e���ɃN�b�L�[�ɕۑ�����Ă�����͓̂ǂݍ��܂Ȃ��悤�ύX
�E�T���l�C���쐬���[�`����ǉ�
�E�Ԃ����Ă݂�e�X�g�B�e�L�g�[�ł��B
�E�X���X�g�����������B
�ŁA���ǂ̂Ƃ���̈ʒu�t���́A���Łd�H����A���ł��d�B���[��A�A�A�l���ł��ȁd�H
�Ȃ�Ă䂤���A���p�Ҋe���̔��f�ɂ��C�����܂��I�@��������Ȃ艘���Ȃ��Ă��܂��̂ł����ӂ��B
�����񑩁��@�ݒu�͎��ȐӔC�łˁI

�����͖{��̖�������X�N���v�g
��sc0137(Ver104a Firefox���O�������Ή� SC121base)��  by Yakuba 20090915��
�EYakuba���������ɂ́uYakuba�v�̃R�����g�������Ă��܂��B
�E�ȈՔF�؃L�[��ǉ�
�E�{���ɊȈՓI�Ȃ��̂ł����A���I�ȓ��삵�����Ȃ��X�p���c�[���ɂ͌��ʂ����邩���c
�E�l�דI�ȃX�p�������ɂ͌��ʂ�������������܂��񂪁A�]���҂ɂ͕�����Ȃ��L�[��t������΃X�p���͌���ł��傤�B
�E���܂�ɂ��}�C�i�[�ȃL�[�ɂ���ƐV�K���e�҂����r�����鎖�ɂȂ�̂Œ��ӂ��B
�E���삪��������������K�x�ɒ����ĉ������܂��B
��Yakuba 20090921��
�E�A�h���X�����ɃX���b�V�����Ȃ��ꍇ�A�����A�N�Z�X�Ɋׂ�ꍇ������o�O���C���B
(���傤�Ǎ�N�ɂ��������l����X�N���v�g�̏C�����������Ă��������Ă��܂������A�����g�ݍ��ނ̂�Y��Ă��܂����B���l�т��đg�ݍ��݂܂����B���肪�Ƃ��������܂��B)
�Ecat.php��ipcount.php�𗘗p�����Ă��������A�J�^���O�ƃJ�E���^��g�ݍ��݂܂����B���ӁI
��Yakuba 20100130��
�E�ȈՔF�؃L�[���A�X���������X���A�܂��̓X�������݂̂Ɏg�p�ł���l�ɕύX���܂����B
��Yakuba 20100203��
�E�ȈՔF�؃L�[�����[�h�Q�ɂ��ă��X������ƔF�؃L�[�G���[�ƂȂ�~�X���C�����܂����B
�ELF���s�ɓ���B�Ɉꕔ�̊��ŉ��s�R�[�h���������Ă��鎖�ŃG���[���o��Ƃ������񍐂𒸂��܂��āA���ꂳ���Ă݂܂����B
��Yakuba 20100305��
�EUNIX�I���ɕ����R�[�h��ς����獡�x��Win�I���ᛂ��N�����ĕ����������Ƃ��c���[��c(0303�Ƃ茾)
�E���X�C�����܂������A�w�b�_�̕����R�[�h�ݒ�Ǝ��ۂ̕����R�[�h������Ă���A����ᕶ���������܂���ȁc
�E�ƌ������ƂŁuSJIS-CRLF�v�ɓ��ꂵ�܂��B��͓K���ɂ������Ă݂Ă��������B
�E����html4.01Transitional�֏����V�t�g���Ă܂��B
��Yakuba 20101213��
�E�X�����ă��[�h�̎��́u�X���b�h�𗧂Ă�v�A���X���[�h�̎��́u�ԐM����v�Ƀ{�^����ύX�B���̂ӂ��΂ɋ߂Â��Ă܂��B
�E���Ɓc�ق�����Ƃɍ��ׂȃo�O�t�B�N�X�B
�E�Όώ��n�ɑ΂��镶�������΍���{���܂���(���ʂ����邩������܂��񂪁c)�B
��Yakuba 20110104��
�E����ɍ��ׂȃo�O�t�B�N�X�B����html4.01Transitional�ւ���ɃV�t�g�B
��Yakuba 20110108��
�E�Ǘ��l����sage�ɂ��Ă��Ă��J�L�R�����畂�シ��o�O���C���B
��Yakuba 20110119��
�E�����������������del�@�\�𓋍ځB
��Yakuba 20110527��
�E�ufutaba.php v0.81 lot.070929�v�̏�����\�����Ԃ𓋍ځB��җl�Ɋ��ӂ������܂��B
��Yakuba 20110904�� �{���c
�E���������X���X�g�@�\�𓋍ځB���Ȃ藐�\���s�e�؂Ȏd�l�ł��̂ň������炸�c
�E�ꕔ�\���ύX�ƃo�O�t�B�N�X�c(20110906��)
��Yakuba 20110923��
�E���X�������X���X�g�@�\�𓋍ځB�p���h���̙��̒��̂ʂ��l�̃X�N���v�g�����Ȃ�Q�l�ɂ����Ă��������܂����B
�@���̏�����؂肵�Ă���\���グ�܂��B
��Yakuba 20120206��
�EPHP5.3.0���uereg�v��uereg_replace�v�Ȃǂ��񐄏��ƂȂ�x����f���܂���܂��̂ŁA�upreg_match�v��upreg_replace�v�֒u�������܂����B
��Yakuba 20120602��
�Epreg�n�ňꕔ�x�����o�܂��錻�ۂ��m�F���܂����̂ŁA���̏C�������܂����B
��20121120��
�EPHP5.4�Ŋ֐��R�[�����ɎQ�Ƃň�����n���Ȃ��Ȃ������ƁAhtmlspecialchars�̕W�����삪�ύX�ɂȂ������ɑΉ�(�Ђ�l���ӁI)�B

�y���̃X�N���v�g��"�ӂ��΁������˂�"�Ɏ����Ă��邽�߁A�������C�A�E�g���Ǝ��ɂȂ��Ă��܂��z
------------------------------------------------------------------------- */

// �ȉ�2�s�͒����p���
ignore_user_abort(0);
//error_reporting(E_ALL);
error_reporting(E_ALL & ~E_NOTICE);
// �O���[�o���ϐ��̃Z�b�g
extract($_POST);
extract($_GET);
extract($_COOKIE);
date_default_timezone_set('Asia/Tokyo');        // ��Yakuba �W�����̐ݒ�(date�ŕK�{)
$upfile_name = isset($_FILES["upfile"]["name"]) ? $_FILES["upfile"]["name"] : "";
$upfile = isset($_FILES["upfile"]["tmp_name"]) ? $_FILES["upfile"]["tmp_name"] : "";

if(!defined('PHP_VERSION_ID')) {                // ��Yakuba PHP5.2.7������PHP_VERSION_ID��݂���
  $v = explode('.',PHP_VERSION);
  define('PHP_VERSION_ID', ($v[0] * 10000 + $v[1] * 100 + $v[2]));
}

// �S�ʐݒ�---------------------------------------------------------------------
define("LOGFILE", 'img.cgi');                   // ���O�t�@�C����(�{��)
define("TREEFILE", 'tree.cgi');                 // ���O�t�@�C����(�c���[)
define("IMG_DIR", 'src/');                      // �摜�ۑ��f�B���N�g���Bfutaba.php���猩��
define("THUMB_DIR", 'thumb/');                  // �T���l�C���ۑ��f�B���N�g��
define("TITLE", '�摜�f����');                  // �^�C�g���i<title>��TOP
define("HOME", '');                             // �u�z�[���v�ւ̃����N
define("MAX_KB", 500);                          // ���e�e�ʐ��� KB�iphp�̐ݒ�ɂ��2M�܂�
define("MAX_W", 250);                           // ���e�T�C�Y���i����ȏ��width���k��
define("MAX_H", 250);                           // ���e�T�C�Y����
define("PAGE_DEF", 10);                         // ��y�[�W�ɕ\������L��
define("FOLL_ADD", 110);                        // �ȉ��ȗ��i��y�[�W�ɕ\������L���~�w��Ő����ݒ萔
define("LOG_MAX", 1000);                        // ���O�ő�s��
define("ADMIN_PASS", 'admin');                  // �Ǘ��҃p�X
define("RE_COL", '789922');                     // �����t�������̐F
define("PHP_SELF", 'futaba.php');               // ���̃X�N���v�g��
define("PHP_SELF2", 'index.html');              // ������t�@�C����
define("PHP_EXT", '.htm');                      // 1�y�[�W�ȍ~�̊g���q
define("RENZOKU", 2);                           // �A�����e�b��
define("RENZOKU2", 2);                          // �摜�A�����e�b��
define("RENOYA", 1800);                         // �A���X�����ĊԊu
define("MAX_RES", 100);                         // ����sage�ɂȂ郌�X��
define("USE_THUMB", 1);                         // �T���l�C������� ����:1 ���Ȃ�:0
define("PROXY_CHECK", 0);                       // proxy�̏����݂𐧌����� y:1 n:0
define("DISP_ID", 2);                           // ID��\������ ����:2 ����:1 ���Ȃ�:0
define("BR_CHECK", 0);                          // ���s��}������s�� ���Ȃ�:0
define("PASS_CHECK", 0);                        // �폜�L�[�̓��͂��`�F�b�N���� ����:1 ���Ȃ�:0
define("EN_AUTOLINK", 0);                       // URL���������N���s�� ����:1 ���Ȃ�:0
define("EN_SEC", 1);                            // ���ԕ\���Ɂu�b�v���܂߂� �܂߂�:1 �܂߂Ȃ�:0
define("EN_SAGE_START", 1);                     // �X���勭��sage�@�\���g�p���� ����:1 ���Ȃ�:0
define("MAX_PASSED_HOUR", 0);                   // ����sage�܂ł̎��� 0�ŋ���sage�Ȃ�(���F�X�����Ǘ��Ҋ֌W�����̎��Ԃɂ�鋭��sage)
define("ADMIN_SAGE", 1);                        // �Ǘ��ҋ���sage���� ����:1 ���Ȃ�:0
define("NOTICE_SAGE", 0);                       // ����sage�����m���� ����:1 ���Ȃ�:0
define("DEF_SUB", '���O');                      // �ȗ����̑薼
define("DEF_NAME", '�Ƃ�����');                 // �ȗ����̖��O
define("DEF_COM", '��������(߁��)������!!');    // �ȗ����̖{��
define("SUB_CHECK", 0);                         // �薼�ȗ������₷�� ����:1 ���Ȃ�:0
define("NAME_CHECK", 0);                        // ���O�ȗ������₷�� ����:1 ���Ȃ�:0
define("COM_CHECK", 0);                         // �{���ȗ������₷�� ����:1 ���Ȃ�:0
// �����A�L���ɂ����ꍇ�A���ӏ������������Ƃ������߂��܂��B

define("RES_MARK", '�c');                       // ���X�̓��ɕt���镶����
define("OMIT_RES", 6);                          // �u���X�ȗ��v��\�����郌�X�̐�

// ���X�摜�Y�t�@�\-------------------------------------------------------------
define("RES_IMG", 1);                           // ���X�ɂ��摜��Y�t�ł���悤�ɂ��� �Y�t�\:1 �Y�t�s��:0

// �A�j���[�V�����f�h�e�ݒ�-----------------------------------------------------
// �T���l�C�����g�p���Ȃ��ꍇ�AGIF�����̂܂ܕ\�����邽�߁A�A�j���[�V����GIF�������܂��B
define("USE_GIF_THUMB", 1);                     // GIF�\���ɃT���l�C�����g�p���� ����:1 ���Ȃ�:0
define("CHECK_ANI", 1);                         // �A�j���[�V����GIF���ǂ����`�F�b�N���� ����:1 ���Ȃ�:0
// ���m�͂��܂���.���ŃR�\�[���Ǝ擾�������܂�.

// �c�[������html�o�R�֌W-------------------------------------------------------
define("IMG_REFER", 1);                         // �c�[�������ɉ摜�����N��html�o�R�ɂ��� ����:1 ���Ȃ�:0
define("IMG_REF_DIR", 'ref/');                  // �o�R��html�i�[�f�B���N�g��

// �T���l�C���Ǘ��ҍ������@�\---------------------------------------------------
// �����ւ��T���l(1)[replace_n.jpg]�L�ō������L���A�����Ŗ���
define("REPLACE_EXT", '.replaced');             // �����ւ��̍ہA���X�̃T���l�C���t�@�C���̂��K�ɕt���镶��
define("NOTICE_THUMB", 0);                      // �T���l�����ւ������m���� ����:1 ���Ȃ�:0

// ���ڂ𑝂₷�ꍇ�͒萔�錾�����t�@�C�����A�^�C�g����$rep_thumb�z��ɒǉ����܂��B
// �������萔�錾���Ȃ��Œ��ڔz��ɒǉ����Ă�OK
define("R_THUM1", 'replace_n.jpg');             // �����ւ��T���l(1) �t�@�C����
define("R_TITL1", '�ӂ�');                    // �����ւ��T���l(1) �^�C�g��
define("R_THUM2", 'replace_g.jpg');             // �����ւ��T���l(2) �t�@�C����
define("R_TITL2", '����');                      // �����ւ��T���l(2) �^�C�g��
define("R_THUM3", 'replace_l.jpg');             // �����ւ��T���l(3) �t�@�C����
define("R_TITL3", '���');                      // �����ւ��T���l(3) �^�C�g��
define("R_THUM4", 'replace_3.jpg');             // �����ւ��T���l(4) �t�@�C����
define("R_TITL4", '����');                    // �����ւ��T���l(4) �^�C�g��

$rep_thumb = array(R_TITL1=>R_THUM1,R_TITL2=>R_THUM2,R_TITL3=>R_THUM3,R_TITL4=>R_THUM4);
$default_thumb = R_THUM1;                       // �f�t�H���g�̃T���l�t�@�C����

// hage �ǉ� 2004.8.1
// �Ԏ��\���@�\�ǉ�------------------------------------------------------------
define("HOSTFILE", 'host.lst');                 // �N���z�X�g�̋L�^�t�@�C��
define("IDHOSTFILE", 'idhost.lst');             // �N��ID�̋L�^�t�@�C��
// hage �ǉ������܂�

// hiro �ǉ� 2005.03.17
// �T���l�C���쐬�@�\�I��------------------------------------------------------
define("QUALITY_THUMB", 75);                    // �T���l�C���̕i�� 0�`100 �܂Őݒ�\ default:75
define("SELECT_THUMB", 0);                      // �T���l�C���쐬 GD��:0 repng2jpeg��:1
// hiro �ǉ� �����܂�

// hiro �ǉ� 2005.03.24
// �X���b�h�X�g�b�p�[�@�\------------------------------------------------------
define("THREAD_STOP", 1);                               // �X���b�h�X�g�b�p�[�@�\���g�p���� ����:1 ���Ȃ�:0 (��Yakuba�� �X���X�g�@�\�͖������ŗL���ɂȂ��Ă���ۂ��ł��c)
//define("NOTICE_STOP", 1);                             // �X���X�g�����m���� ����:1 ���Ȃ�:0
// hiro �ǉ� �����܂�

// hiro �ǉ� 2005.03.18
// �����`���Ȃ�ȁ`��B�o����ƃs���`�I�I�i�ł��Ȃ�������d
// �u'tomato' => '�Ǘ��l'�v�ƂȂ��Ă���Ȃ�΃������Ɂutomato�v�Ə������ƂŐԂ��Ȃ�܂�
// ���K�\���͎g�p���Ă��Ȃ��̂ŁA���S�}�b�`�ł��B�Ȃ̂ŁA�]�v�Ȃ��̂͏����Ȃ����ƁI
// �ύX�̗]�n����܂���Ȏd�l�ł��B�����̂��V�т��Ǝv���˂��B
// ���̋@�\�Ɋւ��邲�v�]��������܂�����A�f���ɂ��肢���܂��B
define("JOY_TOMATO", 1);                                // �Ԏ��@�\ �g��Ȃ�:0 �g��:1
$tomato = array('tomato' => '�Ǘ��l', 'tomato2' => '���Ǘ��l', 'tomato3' => '�폜�l');
// hiro �ǉ� �����܂�

// ���ېݒ�--------------------------------------------------------------------
$badstring = array("dummy_string","dummy_string2","wwww","����","��������","�����摜","�F�B��W");      // ���₷�镶����
$badfile = array("dummy","dummy2");                     // ���₷��t�@�C����md5
$badip = array("addr.dummy.com","addr.dummy2.comt");    // ���₷��z�X�g

// �g���ݒ�--------------------------------------------------------------------
$addinfo = '';                                          // ���e�����ӏ����̒ǋL����

// ��Yakuba�ǉ�
$koukoku = '';                                          // �L���Ȃ�
define("NINSYOU", 2);                                   // �ȈՔF�؃L�[(�g�p���Ȃ��F0�A�X���������X�Ɏg�p�F1�A�X�����݂̂Ɏg�p�F2)
define("NINSYOU_MAS", '����');                          // �ȈՔF�؃L�[(�L�[���[�h)
define("NINSYOU_Q", '��y�́�������I[�����Q��]');      // �ȈՔF�؃L�[(����B���C�A�E�g�̓s����A�����͏��ȖڂɁB)
define("DELON", 1);                                     // DEL�@�\(�g�p���Ȃ��F0�A�g�p����F1�B����DIR��del.php���K�v)
define("EN_DELTIME", 1);                                // ������\������(�g�p���Ȃ��F0�A�g�p����F1)
define("THREAD_STOP_TIME", 0);                          // ���������X���X�g�@�\���g�p����(�g�p���Ȃ��F0�A�g�p����F1)
define("THREAD_STOP_HOUR", 48);                         // �����X���X�g�ɂȂ鎞��(n���Ԍ�)
define("THREAD_STOP_RES", 0);                           // ���X�������X���X�g�@�\���g�p����(�g�p���Ȃ��F0�A�g�p����F1)
define("THREAD_STOP_MAX", 100);                         // �����X���X�g�ɂȂ郌�X��(���O�ő�s�����K�����������鎖)
// ��Yakuba�ǉ�
//=============================================================================

init();         // �������ݒ��͕s�v�Ȃ̂ō폜��
$path = realpath("./").'/'.IMG_DIR;

/* �w�b�_�@�����ȐӔC�̌��A�e���ݒ��K���ɕύX���鎖�������߂��܂� */
function head(&$dat){
  $dat.='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja-JP">
<head>
  <meta name="robots" content="index,follow">
  <meta name="Berry" content="no">
  <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <title>'.TITLE.'</title>
  <meta name="description" content="�ӂ��΁������˂�^�C�v�̉摜�f���ł��B">
  <meta name="keywords" content="�ӂ���,�����˂�,�摜,�񎟌�">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="cache-control" content="no-cache">
  <!--<meta http-equiv="expires" content="-1">-->
  <!-- <link rel="shortcut icon" href="http://�A�h���X/favicon.ico" type="image/vnd.microsoft.icon"> -->
  <!-- <link rel="icon" href="http://�A�h���X/favicon.ico" type="image/vnd.microsoft.icon"> -->
  <style type="text/css">
    <!--
    body,tr,td,th { font-size:12pt }
    a:hover       { color:#dd0000; }
    span          { font-size:20pt }
    small         { font-size:10pt }
    -->
  </style>
  <script language="JavaScript">
  <!--
    function l(e){var P=getCookie("pwdc"),N=getCookie("namec"),i;with(document){for(i=0;i<forms.length;i++){if(forms[i].pwd)with(forms[i]){pwd.value=P;}if(forms[i].name)with(forms[i]){name.value=N;}}}};onload=l;function getCookie(key, tmp1, tmp2, xx1, xx2, xx3) {tmp1 = " " + document.cookie + ";";xx1 = xx2 = 0;len = tmp1.length;  while (xx1 < len) {xx2 = tmp1.indexOf(";", xx1);tmp2 = tmp1.substring(xx1 + 1, xx2);xx3 = tmp2.indexOf("=");if (tmp2.substring(0, xx3) == key) {return(unescape(tmp2.substring(xx3 + 1, xx2 - xx1 - 1)));}xx1 = xx2 + 1;}return("");}
    if(self!=top){top.location=self.location;}
  //-->
  </script>
</head>

<body bgcolor="#ffffee" text="#800000" link="#0000ee" vlink="#0000ee">
<p align="right">
<!-- ��������ӂɃA�i���C�U������Ƃ������� -->
[<a href="'.HOME.'" target="_top">�z�[��</a>]
[<a href="'.PHP_SELF.'?mode=admin">�Ǘ��p</a>]
<p align="center">
<font color="#800000" size="5">
<b><span>'.TITLE.'</span></b></font>
<hr width="90%" size="1">
';
}

/* ���e�t�H�[�� */
function form(&$dat,$resno,$admin="",$name_flag=FALSE){
  global $addinfo, $koukoku;
  $msg=""; $hidden="";
  $maxbyte = MAX_KB * 1024;
  $no = $resno;
  if($resno){
    $msg .= "[<a href=\"".PHP_SELF2."\">�f���ɖ߂�</a>]\n";
    $msg .= "<table width=\"100%\"><tr><th bgcolor=\"#e04000\">\n";
    $msg .= "<font color=\"#ffffff\">���X���M���[�h</font>\n";
    $msg .= "</th></tr></table>\n";
  }
  if($admin){
    $hidden = "<input type=\"hidden\" name=\"admin\" value=\"".ADMIN_PASS."\">";
    $msg = "<h4>�^�O�������܂�</h4>";
  }
  $dat .= $msg.'<center>'.
          '<form action="'.PHP_SELF.'" method="POST" enctype="multipart/form-data">'.
          '<input type="hidden" name="mode" value="regist">'.$hidden.
          '<input type="hidden" name="MAX_FILE_SIZE" value="'.$maxbyte.'">';
  if($no){ $dat .= '<input type="hidden" name="resto" value="'.$no.'">'; }

  // hiro �ύX 2005.03.17
  $dat .= '<table cellpadding="1" cellspacing="1">';
  if(!$name_flag) $dat .= '<tr><td bgcolor="#eeaa88"><b>���Ȃ܂�</b></td><td><input type="text" name="name" size="28"></td></tr>';
  // hiro �ύX �����܂�

  // ��Yakuba�ǉ�
  if (!$resno){
    $dat .= '<tr><td bgcolor="#eeaa88"><b>E-mail</b></td><td><input type="text" name="email" size="28"></td></tr>'.
            '<tr><td bgcolor="#eeaa88"><b>��@�@��</b></td><td><input type="text" name="sub" size="35">'.
            '<input type="submit" value="�X���b�h�𗧂Ă�"></td></tr>'.
            '<tr><td bgcolor="#eeaa88"><b>�R�����g</b></td>'.
            '<td><textarea name="com" cols="48" rows="4" wrap="soft"></textarea></td></tr>';
  } else {
    $dat .= '<tr><td bgcolor="#eeaa88"><b>E-mail</b></td><td><input type="text" name="email" size="28"></td></tr>'.
            '<tr><td bgcolor="#eeaa88"><b>��@�@��</b></td><td><input type="text" name="sub" size="35">'.
            '<input type="submit" value="�ԐM����"></td></tr>'.
            '<tr><td bgcolor="#eeaa88"><b>�R�����g</b></td>'.
            '<td><textarea name="com" cols="48" rows="4" wrap="soft"></textarea></td></tr>';
  }
  // ��Yakuba�ǉ�

  if(!$resno || RES_IMG){
    // hage �ύX 2004.8.1
    // ���e����GIF��~�ł���悤�Ƀ��x����ǉ�(USE_GIF_THUMB�ɂ�锻�ʒǉ�)
    $add_str = "";
    if($resno) { $add_str = " <font color=\"#FF0000\">�����X�ɉ摜�Y�t��</font>"; }
    $dat .= "<tr><td bgcolor=\"#eeaa88\"><b>�Y�tFile</b></td>".
            "<td><input type=\"file\" name=\"upfile\" size=\"35\">".$add_str."</td></tr>";
    // hiro �ύX 2005.03.16
    // ���C�̂Ȃ��ύX�ł��d
    $dat .= "\n<tr><td bgcolor=\"#eeaa88\"><b>�I�v�V����</b></td>\n<td>";
    if(!USE_GIF_THUMB){
      $dat .= ' [<label><input type="checkbox" name="noanime" value="on" checked>GIF�A�j����~</label>] ';
    }
    if(!$resno) {
      $dat .= ' [<label><input type="checkbox" name="chkname" value="on">���O���Ȃ�</label>] ';
      $dat .= ' [<label><input type="checkbox" name="chkid" value="on">����ID�\��</label>] ';
      $dat .= ' [<label><input type="checkbox" name="textonly" value="on">�摜�Ȃ�</label>] ';
    }
    if($resno) $dat .= '  [<label><input type="checkbox" name="bakres" value="on" checked>�X���ɖ߂�</label>] ';
    $dat .= "</td></tr>\n";
    // hiro �ύX �����܂�
    // hage �ύX�����܂�
  }
  $dat .= '<tr><td bgcolor="#eeaa88"><b>�폜�L�[</b></td>'.
          '<td><input type="password" name="pwd" size="8" maxlength="8" value="">'.
          '<small>';
  // hiro �ǉ� 2005.03.15
  if(PASS_CHECK) { $dat .= ' <font color="#FF0099">�K�{</font> '; }
  // hiro �ǉ� �����܂�
  $dat .= '(�L���̍폜�p�B�p������8�����ȓ�)</small></td></tr>';

  // ��Yakuba�ǉ�
  if (NINSYOU==1){
    $dat .= '<tr><td bgcolor="#eeaa88"><b>�F�؃L�[</b></td>'.
            '<td><input type="text" name="ninsyou_key" size="8">'.
            '<small>';
    $dat .= ' <font color="#ff0099">�K�{</font> ';
    $dat .= '('.NINSYOU_Q.')</small></td></tr>';
  }
  if (NINSYOU==2 && !$resno){
    $dat .= '<tr><td bgcolor="#eeaa88"><b>�F�؃L�[</b></td>'.
            '<td><input type="text" name="ninsyou_key" size="8">'.
            '<small>';
    $dat .= ' <font color="#ff0099">�K�{</font> ';
    $dat .= '('.NINSYOU_Q.')</small></td></tr>';
  }
  // ��Yakuba�ǉ�

  $dat .= '<tr><td colspan="2" style="font-size:small;">
<ul style="margin:0px;"><small>
';
  // hage �ύX 2004.8.1
  if(RES_IMG){
    $dat .= '<li>���X�ɉ摜�Y�t��.</li>';
  }
  $dat .= '<li>�Y�t�\�FGIF, JPG, PNG. �u���E�U�ɂ���Ă͐���ɓY�t�ł��Ȃ����Ƃ�����܂�.</li>'.
          '<li>�摜�͉� '.MAX_W.'�s�N�Z���A�c '.MAX_H.'�s�N�Z���ȏ�͏k���\������܂�.</li>';
  if(!USE_GIF_THUMB){
    $dat .= '<li>GIF�͓����܂�. �������������͓��e����[GIF�A�j����~]�̃`�F�b�N������.</li>';
  }
  // hage �ύX�����܂�

  // ��Yakuba�ύX
  $dat .= '<li>�ő哊�e�f�[�^�ʂ�'.MAX_KB.'KB �܂�. sage�@�\�t��.</li>'."\n";
  if(EN_SAGE_START){$dat .= '<li>�X���傳��ڗ�sage�L���ŋ���sage.</li>'."\n";}
  if(THREAD_STOP_TIME){$dat .= '<li>�X���𗧂ĂĖ� '.THREAD_STOP_HOUR.'���Ԍ�ɂ��̃X���ɏ������݂��o���Ȃ��Ȃ�܂�.</li>'."\n";}       // ��Yakuba�ǉ�
  $dat .= '<li>����<script type="text/javascript" src="ipcount.php"></script>�l���炢�����Ă܂�. <a href="cat.php">�J�^���O</a>.</li>'."\n";
  $dat .= '<li>���̔̕ۑ�����'.LOG_MAX.'���ł�.</li>'."\n";
  if($addinfo){$dat .= '<li>'.$addinfo.'</li>'."\n";}
  $dat .= '</small></ul>'."\n";
  if($koukoku){$dat .= '<br><center>'.$koukoku.'</center>'."\n";}
  $dat .= '</td></tr></table>'."\n".'</form></center><hr>'."\n";
  // ��Yakuba�ύX
}

/* �L������ */
function updatelog($resno=0){
  global $path; $p=0;
  global $tomato;                       // hiro �ǉ� 2004.03.18

  // hage �ǉ� 2004.8.1
  $hostdat = array('dummy');
  if(is_file(HOSTFILE)){
    $hostdat = file(HOSTFILE);
    $counthost = count($hostdat);
    for($i=0;$i<$counthost;++$i){ $hostdat[$i] = trim($hostdat[$i],"\n"); }
  }
  $idhostdat = array('dummy');
  if(is_file(IDHOSTFILE)){
    $idhostdat = file(IDHOSTFILE);
    $counthost = count($idhostdat);
    for($i=0;$i<$counthost;++$i){ $idhostdat[$i] = trim($idhostdat[$i],"\n"); }
  }
  // hage �ǉ������܂�

  // hiro �ύX 2005.03.17
  // �n�Q��������̏C���_���ڐA���܂���
/*
  $tree = file(TREEFILE);
  $find = false;
  if($resno){
    $counttree=count($tree);
    for($i = 0;$i<$counttree;$i++){
      list($artno,)=explode(",",rtrim($tree[$i]));
      if($artno==$resno){$st=$i;$find=true;break;} //���X�挟��
    }
    if(!$find) error("�Y���L�����݂���܂���");
  }
  $line = file(LOGFILE);
  $countline=count($line);
  for($i = 0; $i < $countline; $i++){
    list($no,) = explode(",", $line[$i]);
    $lineindex[$no]=$i + 1; //�t�ϊ��e�[�u���쐬
  }
*/

  $tree = file(TREEFILE);
  $find = FALSE;
  if($resno) {
    $counttree = count($tree);
    for($i = 0; $i < $counttree; $i++) {
      $tline = explode(",", rtrim($tree[$i]));
      if($resno == $tline[0] || array_search($resno,$tline)) { //���X�挟��
        $resno = $tline[0];
        $st = $i;
        $find = TRUE;
        break;
      }
    }
    if(!$find) { error("�Y���L�����݂���܂���@".$resno); }
  }

  $line = file(LOGFILE);
  $countline = count($line);
  $dispid_flag = FALSE; $name_flag = FALSE;
  for($i = 0; $i < $countline; $i++) {
    list($no,,,,,,$url,,,,,,,) = explode(",", $line[$i]);
    if($no == $resno){
      if(stristr($url, "_vid_")) { $dispid_flag = TRUE; }
      if(stristr($url, "_noname_")) { $name_flag = TRUE; }
    }
    $lineindex[$no] = $i + 1; //�t�ϊ��e�[�u���쐬
  }
  // hiro �ύX �����܂�

  $counttree = count($tree);
  for($page=0;$page<$counttree;$page+=PAGE_DEF){
    $dat='';
    head($dat);
    // hiro �ύX 2005.03.17 �����ǉ�
    form($dat,$resno,FALSE,$name_flag);
    // hiro �ύX �����܂�
    if(!$resno){
      $st = $page;
    }
    $dat.='<form action="'.PHP_SELF.'" method=POST>';

  for($i = $st; $i < $st+PAGE_DEF; $i++){
    if(empty($tree[$i])) { continue; }
    $treeline = explode(",", rtrim($tree[$i]));
    $disptree = $treeline[0];
    $j=$lineindex[$disptree] - 1; //�Y���L����T����$j�ɃZ�b�g
    if(empty($line[$j])) { continue; } //$j���͈͊O�Ȃ玟�̍s
    list($no,$now,$name,$email,$sub,$com,$url,
         $host,$pwd,$ext,$w,$h,$time,$chk) = explode(",", $line[$j]);

    // hiro �ǉ� 2005.03.16
    if(!$resno){
      $dispid_flag = (stristr($url, "_vid_")) ? TRUE : FALSE;
      $name_flag = (stristr($url, "_noname_")) ? TRUE : FALSE;
    }
    // hiro �ǉ� �����܂�

    // hiro �ǉ� 2005.03.18
    // �Ԏ��@�\
    if (JOY_TOMATO) {
      foreach($tomato as $keys => $v){
        if (!strcmp($email, $keys)) {
          $com = "[<font color=#FF0000>".$v."</font>]<br>".$com;
          $email = str_replace($keys, "", $email);
          break;
        }
      }
    }
    // hiro �ǉ� �����܂�

    // URL�ƃ��[���Ƀ����N
    // hiro �ǉ� 2005.03.16
    if($name_flag && $email) $now = '<a href="mailto:'.$email.'">'.$now.'</a>';
    // hiro �ǉ� �����܂�
    if($email) $name = "<a href=\"mailto:$email\">$name</a>";
    $com = auto_link($com);
    $com = preg_replace("#(^|>)(&gt;[^<]*)#i", "\\1<font color=".RE_COL.">\\2</font>", $com);

    // �摜�t�@�C����
    $img = $path.$time.$ext;
    $src = IMG_DIR.$time.$ext;

    // �o�R��html�t�@�C���쐬
    if (IMG_REFER && is_file($img) && !is_file(IMG_REF_DIR.$time.".htm")){
      $fp=fopen(IMG_REF_DIR.$time.".htm","w");
      flock($fp, LOCK_EX);
      rewind($fp);
      fputs($fp, "<META HTTP-EQUIV=\"refresh\" content=\"0;URL=../$src\">");
      fclose($fp);
    }

    // <img�^�O�쐬
    $imgsrc = "";
    $dat_img="";
    if($ext && is_file($img)){
      $size = filesize($img);//alt�ɃT�C�Y�\��
      if($w && $h){//�T�C�Y�����鎞
        if(@is_file(THUMB_DIR.$time.'s.jpg') &&
          (USE_GIF_THUMB||$ext!='.gif'||stristr($url,'noanime')||@is_file(THUMB_DIR.$time.'s.jpg'.REPLACE_EXT))){
          $imgsrc = "<small>�T���l�C����\�����Ă��܂�.�N���b�N����ƌ��̃T�C�Y��\�����܂�.</small><br>";
          if (IMG_REFER) {$imgsrc .= "<a href=\"".IMG_REF_DIR.$time.".htm\" target=_blank>";}
          else{$imgsrc .= "<a href=\"".$src."\" target=_blank>";}
          if ( @is_file(THUMB_DIR.$time.'s.jpg'.REPLACE_EXT)){
            $imgsrc .= "<img src=".THUMB_DIR.$time.'s.jpg'.REPLACE_EXT;
          }
          else{
            $imgsrc .= "<img src=".THUMB_DIR.$time.'s.jpg';
          }
          $imgsrc .= " border=0 align=left width=$w height=$h hspace=20 alt=\"".$size." B\"></a>";
        }else{
          if (IMG_REFER) {$imgsrc = "<a href=\"".IMG_REF_DIR.$time.".htm\" target=_blank>";}
          else{$imgsrc = "<a href=\"".$src."\" target=_blank>";}
          $imgsrc .= "<img src=".$src." border=0 align=left width=$w height=$h hspace=20 alt=\"".$size." B\"></a>";
        }
      }else{//����ȊO
        if (IMG_REFER) {$imgsrc = "<a href=\"".IMG_REF_DIR.$time.".htm\" target=_blank>";}
        else{$imgsrc = "<a href=\"".$src."\" target=_blank>";}
        $imgsrc .= "<img src=".$src." border=0 align=left hspace=20 alt=\"".$size." B\"></a>";
      }
      if (IMG_REFER) {
        // �X�����e�[�u���^�ɂ��邽�߂ɉ摜�֌W�^�O��ʕϐ���
        $dat_img="�摜�^�C�g���F<a href=\"".IMG_REF_DIR.$time.".htm\" target=_blank>$time$ext</a>-($size B)<br>$imgsrc";
      } else {
        $dat_img="�摜�^�C�g���F<a href=\"$src\" target=_blank>$time$ext</a>-($size B)<br>$imgsrc";
      }
    }
    // ���C���쐬
    $dat .= $dat_img; //�摜�֌W������������Ɉړ�
    $dat .= "<input type=checkbox name=\"$no\" value=delete><font color=#cc1105 size=\"+1\"><b>$sub</b></font> \n";
    // hage �ǉ� 2004.8.1
    // $dat .= " <font color=#117743><b>$name</b></font> $now No.$no &nbsp; \n";
    // hiro �ύX 2005.03.16
    // $dat .= " <font color=#117743><b>$name</b></font> $now";
    if($name_flag) { $dat .= " $now"; }
    else { $dat .= " <font color=\"#117743\"><b>$name</b></font> $now"; }
    // if(!DISP_ID && in_array($host,$idhostdat) && !stristr($now,"ID:")){
    if(!DISP_ID && in_array($host,$idhostdat) && !stristr($now,"ID:") || $dispid_flag){
    // hiro �ύX �����܂�
      $idtemp = " ID:".substr(crypt(md5($host),'id'),-8);
      $dat .= $idtemp;
    }
    $dat .= " No.$no \n";
    if(DELON){ $dat.="<a href=\"./del.php?res=$no\">del</a>&nbsp;"; }       // ��Yakuba�ǉ�
    // ��Yakuba�ǉ�
    if(EN_DELTIME){
      list( ,,,,,,,,,,,, $dtimenew, ) = explode( ",", $line[ 0 ] );
      list( ,,,,,,,,,,,, $dtimeold, ) = explode( ",", $line[ $countline - 1 ] );
      $dtimenew = intval( substr( $dtimenew, 0, 10 ) );
      $dtimeold = intval( substr( $dtimeold, 0, 10 ) );
      $dtime = intval( substr( $time, 0, 10 ) );
      $dat.= "<small>".date( "H:i", $dtimenew - $dtimeold + $dtime)."�������܂�&nbsp;</small>";
    }
    // ��Yakuba�ǉ�
    // hage �ǉ������܂�
    if(!$resno){ $dat.="[<a href=".PHP_SELF."?res=$no>�ԐM</a>]<br>"; }
    // hage �ǉ� 2004.8.1
    // $dat.="\n<blockquote>$com</blockquote>";
    if(in_array($host,$hostdat)){
      $dat .= "\n<blockquote>[<font color=#ff0000>$host</font>]<br>$com</blockquote>";
    }else{
      $dat .= "\n<blockquote>$com</blockquote>";
    }
    // hage �ǉ������܂�

    $stop_flag = (stristr($url, '_tstop_')) ? TRUE : FALSE;     // hiro �ǉ� 2005.03.24

    // ���낻�������B
    if($lineindex[$no]-1 >= LOG_MAX*0.95){
      $dat.="<font color=\"#f00000\"><b>���̃X���͌Â��̂ŁA�������������܂��B</b></font><br>\n";
    }

    // �Ǘ��҃T���l�����ւ����m
    if(NOTICE_THUMB && @is_file(THUMB_DIR.$time.'s.jpg'.REPLACE_EXT)){
      $dat.="<font color=\"#f00000\"><small><b>".
            "���̃X���͊Ǘ��҂ɂ��T���l�C���������ւ����Ă��܂��B���R�͂��@�����������B<br>".
            "�T���l�C�����N���b�N����ƌ��̉摜��\�����܂��B".
            "</b></small></font><br>\n";
    }

    // �Ǘ���sage���m
    if(NOTICE_SAGE && stristr($url,'sage')){
      $dat.="<font color=\"#f00000\"><small><b>".
            "���̃X���͊Ǘ��҂ɂ��sage�w�肳��Ă��܂��B���R�͂��@�����������B".
            "</b></small></font><br>\n";
    }

    //���X�쐬

    $countres = count($treeline);

    // ��Yakuba�ǉ�
    if(THREAD_STOP_RES){
      $ts_nokori = THREAD_STOP_MAX - $countres;
      if($ts_nokori > 0){
        if(THREAD_STOP_MAX*0.5 > $ts_nokori){$dat .= "<font color=\"#707070\">���X�\���͂���".($ts_nokori)."�ł��B</font><br>\n";}
      } else {
        $dat .= "<font color=\"#707070\">�X���b�h�X�g�b�v�ł��B</font><br>\n";
        $stop_flag = TRUE;
      }
    }
    // ��Yakuba�ǉ�

    if(!$resno) {
      $s = $countres - OMIT_RES;
      if($s < 1) { $s = 1; }
      elseif($s > 1) {
       $dat .= "<font color=\"#707070\">���X".
               ($s - 1)."���ȗ��B�S�ēǂނɂ͕ԐM�{�^���������Ă��������B</font><br>\n";
      }
    } else { $s = 1; }

    for($k = $s; $k < $countres; $k++){
      $disptree = $treeline[$k];
      $j=$lineindex[$disptree] - 1;
      if(empty($line[$j])) { continue; }
      list($no,$now,$name,$email,$sub,$com,$url,
           $host,$pwd,$ext,$w,$h,$time,$chk) = explode(",", $line[$j]);

      // hiro �ǉ� 2005.03.18
      // �Ԏ��@�\
      if (JOY_TOMATO) {
        foreach($tomato as $keys => $v){
          if (!strcmp($email, $keys)) {
            $com = "[<font color=#ff0000>".$v."</font>]<br>".$com;
            $email = str_replace($keys, "", $email);
            break;
          }
        }
      }
      // hiro �ǉ� �����܂�

      // URL�ƃ��[���Ƀ����N
      // hiro �ǉ� 2005.03.16
      if($name_flag && $email) $now = '<a href="mailto:'.$email.'">'.$now.'</a>';
      // hiro �ǉ� �����܂�
      if($email) $name = "<a href=\"mailto:$email\">$name</a>";
      $com = auto_link($com);
      $com = preg_replace("#(^|>)(&gt;[^<]*)#i", "\\1<font color=".RE_COL.">\\2</font>", $com);

      // �摜�t�@�C����
      $img = $path.$time.$ext;
      $src = IMG_DIR.$time.$ext;
      // �o�R��html�t�@�C���쐬
      if (IMG_REFER && is_file($img) && !is_file(IMG_REF_DIR.$time.".htm")){
        $fp=fopen(IMG_REF_DIR.$time.".htm","w");
        flock($fp, LOCK_EX);
        rewind($fp);
        fputs($fp, "<META HTTP-EQUIV=\"refresh\" content=\"0;URL=../$src\">");
        fclose($fp);
      }
      // <img�^�O�쐬
      $imgsrc = "";
      $dat_img="";
      if($ext && is_file($img)){
        $size = filesize($img);//alt�ɃT�C�Y�\��
        if($w && $h){//�T�C�Y�����鎞
          // �X����A�j���[�V������~�w���ǉ�
          if(@is_file(THUMB_DIR.$time.'s.jpg') &&
            (USE_GIF_THUMB||$ext!='.gif'||stristr($url,'noanime')||@is_file(THUMB_DIR.$time.'s.jpg'.REPLACE_EXT))){
            // �c�[������html�Q�Ƃ�ǉ�
            $imgsrc = "<small>�T���l�C����\�����Ă��܂�.�N���b�N����ƌ��̃T�C�Y��\�����܂�.</small><br>";
            if (IMG_REFER) {$imgsrc .= "<a href=\"".IMG_REF_DIR.$time.".htm\" target=_blank>";}
            else{$imgsrc .= "<a href=\"".$src."\" target=_blank>";}
            if ( @is_file(THUMB_DIR.$time.'s.jpg'.REPLACE_EXT)){
              $imgsrc .= "<img src=".THUMB_DIR.$time.'s.jpg'.REPLACE_EXT;
            }
            else{
              $imgsrc .= "<img src=".THUMB_DIR.$time.'s.jpg';
            }
            $imgsrc .= " border=0 align=left width=$w height=$h hspace=20 alt=\"".$size." B\"></a>";
          }else{
            if (IMG_REFER) {$imgsrc = "<a href=\"".IMG_REF_DIR.$time.".htm\" target=_blank>";}
            else{$imgsrc = "<a href=\"".$src."\" target=_blank>";}
            $imgsrc .= "<img src=".$src." border=0 align=left width=$w height=$h hspace=20 alt=\"".$size." B\"></a>";
          }
        }else{//����ȊO
          if (IMG_REFER) {$imgsrc = "<a href=\"".IMG_REF_DIR.$time.".htm\" target=_blank>";}
          else{$imgsrc = "<a href=\"".$src."\" target=_blank>";}
          $imgsrc .= "<img src=".$src." border=0 align=left hspace=20 alt=\"".$size." B\"></a>";
        }
        if (IMG_REFER) {
          $dat_img = "<br>�摜�^�C�g���F<a href=\"".IMG_REF_DIR.$time.
                     ".htm\" target=_blank>$time$ext</a>-($size B)<br>$imgsrc";
        }
        else{
          $dat_img="<br>�摜�^�C�g���F<a href=\"$src\" target=_blank>$time$ext</a>-($size B)<br>$imgsrc";
        }
      }

      // �ʕϐ��ɓ��ꂽ�摜�p�^�O��������e�[�u���̒��ɔz�u
      // ���C���쐬
      $dat.="<table border=\"0\"><tr><td nowrap align=\"right\" valign=\"top\">".RES_MARK."</td><td bgcolor=\"#f0e0d6\">\n";
      $dat.="<input type=\"checkbox\" name=\"$no\" value=\"delete\"><font color=\"#cc1105\" size=\"+1\"><b>$sub</b></font> \n";
      // hage �ǉ� 2004.8.1
      // $dat.=" <font color=#117743><b><b>$name</b></b></font> $now No.$no &nbsp;";
      // hiro �ύX 2005.03.16
      // $dat .= " <font color=#117743><b>$name</b></font> $now";
      if($name_flag) { $dat .= " $now"; }
      else { $dat .= " <font color=\"#117743\"><b>$name</b></font> $now"; }
      // if(!DISP_ID && in_array($host,$idhostdat) && !stristr($now,"ID:")){
      if(!DISP_ID && in_array($host,$idhostdat) && !stristr($now,"ID:") || $dispid_flag){
      // hiro �ύX �����܂�
        $idtemp = " ID:".substr(crypt(md5($host),'id'),-8);
        $dat .= $idtemp;
      }
      $dat .= " No.$no \n";
      if(DELON){ $dat.="<a href=\"./del.php?res=$no\">del</a>&nbsp;"; }         // ��Yakuba�ǉ�
      // $dat.="$dat_img<blockquote>$com</blockquote>";
      $dat .= "$dat_img<blockquote>";
      if(in_array($host,$hostdat)){ $dat .= "[<font color=#ff0000>$host</font>]<br>"; }
      $dat .= "$com</blockquote>";
      // hage �ǉ������܂�
      $dat.="</td></tr></table>\n";
    }

    // hiro �ǉ� 2005.03.24
    if($stop_flag) {
    $marktext = RES_MARK;
      $dat .= <<<__STOP__
<table border=0><tr><td align="right" valign="top" nowrap>$marktext</td><td bgcolor="#F0E0D6">
<input type="checkbox" name="" value=""><font color="#cc1105" size="+1"><b>�X���X�g</b></font> <font color="#117743"><b>�X���b�h�X�g�b�p�[</b></font> 38/01/19(��)03:14:07 No.��
<blockquote>�����A�������߂܂����B<br><br>��~���܂����B�B�B<br>�X���b�h�X�g�b�p�[�B�B�B(�P�[�P)��د</blockquote></td></tr></table>
__STOP__;
    }
    // hiro �ǉ� �����܂�

    $dat.="<br clear=left><hr>\n";
    clearstatcache();//�t�@�C����stat���N���A
    $p++;
    if($resno){break;} //res����tree1�s����
  }

  $dat .= '<table align="right"><tr><td nowrap align="center">'.
          '<input type="hidden" name="mode" value="usrdel">�y�L���폜�z'.
          '[<input type="checkbox" name="onlyimgdel" value="on">�摜��������]<br>'.
          '�폜�L�[<input type="password" name="pwd" size="8" maxlength="8" value="">'.
          '<input type="submit" value="�폜"></form></td></tr></table>';

    if(!$resno){ //res���͕\�����Ȃ�
      $prev = $st - PAGE_DEF;
      $next = $st + PAGE_DEF;
    // ���y�[�W����
      $dat.="<table align=\"left\" border=\"1\"><tr>";
      if($prev >= 0){
        if($prev==0){
          $dat.="<form action=\"".PHP_SELF2."\" method=\"get\"><td>";
        }else{
          $dat.="<form action=\"".$prev/PAGE_DEF.PHP_EXT."\" method=\"get\"><td>";
        }
        $dat.="<input type=\"submit\" value=\"�O�̃y�[�W\">";
        $dat.="</td></form>";
      }else{$dat.="<td>�ŏ��̃y�[�W</td>";}

      $dat.="<td>";
      for($i = 0; $i < count($tree) ; $i+=PAGE_DEF){
        if($i >= FOLL_ADD){ $dat.="[�ȉ��ȗ�]";break; }
        if($st==$i){$dat.="[<b>".($i/PAGE_DEF)."</b>] ";}
        else{
          if($i==0){$dat.="[<a href=\"".PHP_SELF2."\">0</a>] ";}
          else{$dat.="[<a href=\"".($i/PAGE_DEF).PHP_EXT."\">".($i/PAGE_DEF)."</a>] ";}
        }
      }
      $dat.="</td>";

      if($p >= PAGE_DEF && count($tree) > $next && $next < FOLL_ADD){
        $dat.="<form action=\"".$next/PAGE_DEF.PHP_EXT."\" method=\"get\"><td>";
        $dat.="<input type=\"submit\" value=\"���̃y�[�W\">";
        $dat.="</td></form>";
      }else{$dat.="<td>�Ō�̃y�[�W</td>";}
        $dat.="</tr></table><br clear=\"all\">\n";
    }
    foot($dat);
    if($resno){echo $dat;break;}
    if($page==0){$logfilename=PHP_SELF2;}
        else{$logfilename=$page/PAGE_DEF.PHP_EXT;}
    // hage �ǉ� 2004.8.1
    ignore_user_abort(1);
    // hage �ǉ������܂�
    $fp = fopen($logfilename, "w");
    flock($fp, LOCK_EX);
    set_file_buffer($fp, 0);
    rewind($fp);
    fputs($fp, $dat);
    fclose($fp);
    chmod($logfilename,0666);
    // hage �ǉ� 2004.8.1
    ignore_user_abort(0);
    // hage �ǉ������܂�
    if($page >= FOLL_ADD){ break; }
  }
  if(!$resno&&is_file(($page/PAGE_DEF+1).PHP_EXT)){unlink(($page/PAGE_DEF+1).PHP_EXT);}
}

/* �t�b�^ */
function foot(&$dat){
  $dat.='
<center>
<small><!-- GazouBBS v3.0 --><!-- �ӂ��Ή�0.8 --><!-- ���������1.0.4 -->
- <a href="http://php.s3.to" target=_top>GazouBBS</a> + <a href="http://www.2chan.net/" target=_top>futaba</a> + <a href="http://siokara.que.jp/" target=_top>siokara</a> + <a href="http://t-jun.kemoren.com/" target="_top">yakuba</a> -
</small>
</center>
</body></html>';
}

/* �I�[�g�����N */
function auto_link($proto){
  if(EN_AUTOLINK){
    $proto = preg_replace("#(https?|ftp|news)(://[[:alnum:]\+\$\;\?\.%,!#~*/:@&=_-]+)#","<a href=\"\\1\\2\" target=\"_blank\">\\1\\2</a>",$proto);
  }
  return $proto;
}

/* �G���[��� */
function error($mes, $dest=''){
  global $upfile_name,$path;
  if(is_file($dest)) unlink($dest);
  head($dat);
  echo $dat;
  echo "<br><br><hr size=1><br><br>",
       "<center><font color=red size=5><b>$mes<br><br><a href=".PHP_SELF2.">�����[�h</a></b></font></center>",
       "<br><br><hr size=1>";
  die("</body></html>");
}

/* �v���N�V�ڑ��`�F�b�N */
function  proxy_connect($port) {
  $a="";$b="";
  $fp = @fsockopen ($_SERVER["REMOTE_ADDR"], $port,$a,$b,2);
  if(!$fp){return 0;}else{return 1;}
}

/* �L���������� */
function regist($name,$email,$sub,$com,$url,$pwd,$upfile,$upfile_name,$resto){
  global $path,$badstring,$badfile,$badip,$pwdc,$textonly;
  global $noanime,$chkname,$chkid,$bakres;      // hiro �ύX 2005.03.16
  $dest=""; $mes=""; $ext="";

  // ����
  $time = time();
  $tim = $time.substr(microtime(),2,3);

  if($resto && !RES_IMG && $upfile) { error("����A�摜���X�֎~�����B"); }      // hiro �ǉ� 2005.03.18

  // ��Yakuba�ǉ�
  if(NINSYOU==1){
    $ninsyou_key2 = ($_POST['ninsyou_key']);
    if (!(NINSYOU_MAS==$ninsyou_key2)) {
      error("�F�؃L�[���Ⴂ�܂�<br>�ēx�m�F���Ă�������"); 
    }
  }
  if(NINSYOU==2 && !$resto){
    $ninsyou_key2 = ($_POST['ninsyou_key']);
    if (!(NINSYOU_MAS==$ninsyou_key2)) {
      error("�F�؃L�[���Ⴂ�܂�<br>�ēx�m�F���Ă�������"); 
    }
  }
  // ��Yakuba�ǉ�

  // �A�b�v���[�h����
  if($upfile&&file_exists($upfile)){
    $dest = $path.$tim.'.tmp';
    move_uploaded_file($upfile, $dest);
    //���ŃG���[�Ȃ火�ɕύX
    //copy($upfile, $dest);
    $upfile_name = CleanStr($upfile_name);
    if(!is_file($dest)) error("�A�b�v���[�h�Ɏ��s���܂���<br>�T�[�o���T�|�[�g���Ă��Ȃ��\��������܂�", $dest);
    $size = getimagesize($dest);
    if(!is_array($size)) error("�A�b�v���[�h�Ɏ��s���܂���<br>�摜�t�@�C���ȊO�͎󂯕t���܂���", $dest);
    $chk = md5_of_file($dest);
    foreach($badfile as $value){if(preg_match("#^$value#",$chk)){
      error("�A�b�v���[�h�Ɏ��s���܂���<br>�����摜������܂���", $dest); //����摜
    }}
    chmod($dest,0666);
    $W = $size[0];
    $H = $size[1];

    switch ($size[2]) {
      case 2 : $ext=".jpg";break;
      case 3 : $ext=".png";break;
      case 1 : $ext=".gif";break;
      default : $ext=".xxx";error("�A�b�v���[�h�Ɏ��s���܂���<br>GIF,JPG,PNG�ȊO�̉摜�t�@�C���͎󂯕t���܂���", $dest);break;
    }

    // �摜�\���k��
    if($W > MAX_W || $H > MAX_H){
      $W2 = MAX_W / $W;
      $H2 = MAX_H / $H;
      ($W2 < $H2) ? $key = $W2 : $key = $H2;
      $W = ceil($W * $key);
      $H = ceil($H * $key);
    }
    $mes = "�摜 $upfile_name �̃A�b�v���[�h���������܂���<br><br>";
  }

  foreach($badstring as $value){if(preg_match("#$value#",$com)||preg_match("#$value#",$sub)||preg_match("#$value#",$name)||preg_match("#$value#",$email)){
  error("���₳��܂���(str)", $dest);};}
  if($_SERVER["REQUEST_METHOD"] != "POST") error("�s���ȓ��e�����Ȃ��ŉ�����(post)", $dest);
  // �t�H�[�����e���`�F�b�N
  if(!$name||preg_match("#^[ |�@|]*$#",$name)) $name="";
  if(!$com||preg_match("#^[ |�@|\t]*$#",$com)) $com="";
  if(!$sub||preg_match("#^[ |�@|]*$#",$sub))   $sub=""; 

  if(!$resto&&!$textonly&&!is_file($dest)) error("�摜������܂���", $dest);
  if(!$com&&!is_file($dest)) error("���������ĉ�����", $dest);

  $name=str_replace("�Ǘ�","\"�Ǘ�\"",$name);
  $name=str_replace("�폜","\"�폜\"",$name);

  if(strlen($com) > 1000) error("�{�����������܂�", $dest);
  if(strlen($name) > 100) error("���O���������܂�", $dest);
  if(strlen($email) > 100) error("���[�������������܂�", $dest);
  if(strlen($sub) > 100) error("�薼���������܂�", $dest);
  if(strlen($resto) > 10) error("���X�ԍ��̎w�肪�������܂�", $dest);
  if(strlen($url) > 100) error("URL�����������܂�", $dest);

  //�z�X�g�擾
  $host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);

  foreach($badip as $value){ //����host
   if(preg_match("#$value$#i",$host)){
    error("���₳��܂���(host)", $dest);
  }}
  if(preg_match("#^mail#i",$host)
    || preg_match("#^ns#i",$host)
    || preg_match("#^dns#i",$host)
    || preg_match("#^ftp#i",$host)
    || preg_match("#^prox#i",$host)
    || preg_match("#^pc#i",$host)
    || preg_match("#^[^\.]\.[^\.]$#i",$host)){
    $pxck = "on";
  }
  if(preg_match("#ne\\.jp$#i",$host)||
    preg_match("#ad\\.jp$#i",$host)||
    preg_match("#bbtec\\.net$#i",$host)||
    preg_match("#aol\\.com$#i",$host)||
    preg_match("#uu\\.net$#i",$host)||
    preg_match("#asahi-net\\.or\\.jp$#i",$host)||
    preg_match("#rim\\.or\\.jp$#i",$host)
    ){$pxck = "off";}
  else{$pxck = "on";}

  if($pxck=="on" && PROXY_CHECK){
    if(proxy_connect('80') == 1){
      error("�d�q�q�n�q�I�@���J�o�q�n�w�x�K�����I�I(80)", $dest);
    } elseif(proxy_connect('8080') == 1){
      error("�d�q�q�n�q�I�@���J�o�q�n�w�x�K�����I�I(8080)", $dest);
    }
  }

  // hiro �ύX 2005.03.15
/*
  // No.�ƃp�X�Ǝ��Ԃ�URL�t�H�[�}�b�g
  srand((double)microtime()*1000000);
  if($pwd==""){
    if($pwdc==""){
      $pwd=rand();$pwd=substr($pwd,0,8);
    }else{
      $pwd=$pwdc;
    }
  }
*/
  // No.�ƃp�X�Ǝ��Ԃ�URL�t�H�[�}�b�g
  srand((double)microtime()*1000000);
  if($pwd==""){
    if(PASS_CHECK) { error("�폜�L�[�������͂ł�",  $dest); }
    $pwd=rand();$pwd=substr($pwd,0,8);
  }
  // hiro �ύX �����܂�

  $c_pass = $pwd;
  $pass = ($pwd) ? substr(md5($pwd),2,8) : "*";
  $youbi = array('��','��','��','��','��','��','�y');
  $yd = $youbi[gmdate("w", $time+9*60*60)];
  if(EN_SEC){
      $now = gmdate("y/m/d",$time+9*60*60)."(".(string)$yd.")".gmdate("H:i:s",$time+9*60*60);
  } else {
      $now = gmdate("y/m/d",$time+9*60*60)."(".(string)$yd.")".gmdate("H:i",$time+9*60*60);
  }

  if(DISP_ID){
    if($email&&DISP_ID==1){
      $now .= " ID:???";
    } else {
      $now .= " ID:".substr(crypt(md5($_SERVER["REMOTE_ADDR"].'id�̎�'.gmdate("Ymd", $time+9*60*60)),'id'),-8);
    }
  }
  //�e�L�X�g���`
  $email= CleanStr($email);  $email=preg_replace("#[\r\n]#","",$email);
  $sub  = CleanStr($sub);    $sub  =preg_replace("#[\r\n]#","",$sub);
  $url  = CleanStr($url);    $url  =preg_replace("#[\r\n]#","",$url);
  $resto= CleanStr($resto);  $resto=preg_replace("#[\r\n]#","",$resto);
  if(!$resto)$url .='_thre';
  $com  = CleanStr($com);
  // ���s�����̓���B 
  $com = str_replace( "\r\n",  "\n", $com); 
  $com = str_replace( "\r",  "\n", $com);
  // �A�������s����s
  $com = preg_replace("#\n((�@| )*\n){3,}#","\n",$com);
  if(!BR_CHECK || substr_count($com,"\n")<BR_CHECK){
    $com = nl2br($com);         //���s�����̑O��<br>��������
  }
  $com = str_replace("\n",  "", $com);  //\n�𕶎��񂩂�����B

  $name=str_replace("��","��",$name);
  $name=preg_replace("#[\r\n]#","",$name);
  $names=$name;
  $name = CleanStr($name);
  if(preg_match("/(#|��)(.*)/",$names,$regs)){
    $cap = $regs[2];
    $cap=strtr($cap,"&amp;", "&");
    $cap=strtr($cap,"&#44;", ",");
    $name=preg_replace("/(#|��)(.*)/","",$name);
    $salt=substr($cap."H.",1,2);
    $salt=preg_replace("#[^\.-z]#",".",$salt);
    $salt=strtr($salt,":;<=>?@[\\]^_`","ABCDEFGabcdef"); 
    $name.="</b>��".substr(crypt($cap,$salt),-10)."<b>";
  }

  // �G���A����̃X�N���v�g���Q�l�ɁA�ȗ����������萔��
  // hiro �ύX 2005.03.15  
  if(!$name) {
    if(NAME_CHECK) error("���O������܂���",  $dest);
    $name = DEF_NAME;
  }
  if(!$com) {
    if(COM_CHECK) error("�{��������܂���",  $dest);
    $com = DEF_COM;
  }
  if(!$sub) {
    if(SUB_CHECK) error("�薼������܂���",  $dest);
    $sub = DEF_SUB;
  }
  // hiro �ύX �����܂�

  // �X����̃A�j���[�V������~�w���ǉ�
  if ($ext == '.gif' && $noanime == 'on') { $url .= 'noanime'; }

  // �A�j���[�V����GIF���ǂ������f
  if(CHECK_ANI && !strcmp($ext, ".gif")) {
    $a=array(); $rtn=0;
    // �`�F�b�N�p�O���R�}���h�Ăяo��
    if(stristr(PHP_OS,"WIN")) {
      if(file_exists(realpath("./gif2png.exe"))) {
        @exec(realpath("./gif2png.exe")." -c $dest",$a,$rtn);
      }
    } else {
      if(is_executable(realpath("./gif2png"))) {
        @exec(realpath("./gif2png")." -c $dest",$a,$rtn);
      }
    }
    // �R�}���h�߂�l���`�F�b�N����2�ȏ�(2�t���[���ȏ�)�̂Ƃ��͈������
    if($rtn > 1) { $url .= '_ugo_'; }
  }

  // hiro �ǉ� 2005.03.16
  // �w����ǉ�
  if (!strcmp($chkname, 'on')) { $url .= '_noname_'; }
  if (!strcmp($chkid, 'on')) { $url .= '_vid_'; }
  // hiro �ǉ� �����܂�

  // ���O�ǂݍ���
  $fp = fopen(LOGFILE, "r+") or error("ERROR! load log", $dest);
  set_file_buffer($fp, 0);
  flock($fp, LOCK_EX);
  rewind($fp);
  $buf = fread($fp, 1000000);
  if($buf == '') { error("error load log", $dest); }
  $line = explode("\n", $buf);
  $countline = count($line) - 1; // �S�~������� -1 �ǉ�
  for($i = 0; $i < $countline; $i++) {
//    if(empty($line[$i])) { continue; }
    list($artno,) = explode(",", rtrim($line[$i])); // �t�ϊ��e�[�u���쐬
//    $lineindex[$artno] = $i + 1;
    $lineindex[$artno] = $i;
    $line[$i] .= "\n";
  }

  // sage����(�X��sage�X�^�[�g�A���Ԍo��sage�A�Ǘ���sage)
  $flgsage = FALSE;
  if($resto) {
//    if(empty($line[$lineindex[$resto]-1])) { continue; }
//    list(,,,$chkemail,,,$chkurl,,,,,,$ltime,) = explode(",", rtrim($line[$lineindex[$resto]-1]));
    list(,,,$chkemail,,,$chkurl,,,,,,$ltime,) = explode(",", rtrim($line[$lineindex[$resto]]));
    if(strlen($ltime) > 10) { $ltime = substr($ltime, 0, -3); }
    if(EN_SAGE_START && stristr($chkemail, 'sage')) { $flgsage = TRUE; }
    if(MAX_PASSED_HOUR && (($time - $ltime) >= (MAX_PASSED_HOUR*60*60))) { $flgsage = TRUE; }
    if(ADMIN_SAGE && stristr($chkurl, 'sage')) { $flgsage = TRUE; }
    // hiro �ǉ� 2005.03.24
    if(stristr($chkurl, '_tstop_')) { error("�X���b�h�X�g�b�p�[�B�B�B(�P�[�P)��د", $dest); }
    // hiro �ǉ� �����܂�
    if($stop_flag) { error("�X���b�h�X�g�b�v�ł��B�͂��B", $dest); }
    if(THREAD_STOP_TIME && (($time - $ltime) >= (THREAD_STOP_HOUR*60*60))) { $stop_flag = TRUE; error("�������Ԃ��z���܂����̂ŏ������݂��o���܂���", $dest); }         // ��Yakuba�ǉ�
  }

  // ��d���e�`�F�b�N
  $imax = ($countline > 20) ? 20 : $countline;
  for($i = 0; $i < $imax; $i++) {
//   if(empty($line[$i])) { continue; }
   list($lastno,,$lname,,,$lcom,,$lhost,$lpwd,,,,$ltime,) = explode(",", $line[$i]);
   if(strlen($ltime) > 10) { $ltime = substr($ltime, 0, -3); }
   if($host==$lhost || substr(md5($pwd),2,8)==$lpwd || substr(md5($pwdc),2,8)==$lpwd) { $pchk=1; }else{ $pchk=0; }
   if(RENZOKU && $pchk && $time - $ltime < RENZOKU)
    error("�A�����e�͂������΂炭���Ԃ�u���Ă��炨�肢�v���܂�", $dest);
   if(RENZOKU && $pchk && $time - $ltime < RENZOKU2 && $upfile_name)
    error("�摜�A�����e�͂������΂炭���Ԃ�u���Ă��炨�肢�v���܂�", $dest);
   if(RENZOKU && $pchk && $com == $lcom && !$upfile_name)
    error("�{�����O��̓��e�̓��e�Ɠ����ł�", $dest);
  }

  // �A���X�����ă`�F�b�N
  if($dest && file_exists($dest)) {
    $imax = ($countline > 30) ? 30 : $countline;
    for($i = 0; $i < $imax; $i++) { // �e�L���Ahost�A���e���ԃ`�F�b�N
      // if(empty($line[$i])) { continue; }
      list(,,,,,,$chkurl,$chkhost,,,,,$ltime,,) = explode(",", $line[$i]);
      if(strlen($ltime) > 10) { $ltime = substr($ltime, 0, -3); }
      if($host==$chkhost && strpos($chkurl, 'thre') && strpos($url, 'thre')) { $purl=1; }else{ $purl=0; }
      if(RENOYA && $purl && $time - $ltime < RENOYA)
      error("�X�����Ă͂������΂炭���Ԃ�u���Ă��炨�肢�v���܂�", $dest);
    }
  }

  // ��Yakuba�ǉ�(�p���h���̙��̒��̂ʂ��l�Ɋ��ӂł�)
  // �X���b�h�X�g�b�v
  if(THREAD_STOP_RES){
    $fq = fopen(TREEFILE, "r");
    $trbuf = fread($fq,1000000);
    fclose($fq);        // ������Ńc���[�t�@�C�������Ă�
    if($trbuf=='') error("�c���[�t�@�C�������Ă���\��������܂��B",$dest);
    $trline = explode("\n",$trbuf);
    $trcount = count($trline);
    if($resto){
      for($i=0; $i<$trcount; $i++){
        $trno = explode(",", rtrim($trline[$i]));
        if($trno[0]==$resto){
          $trline[$i]=rtrim($trline[$i]).",1\n";
          $trj=explode(",", rtrim($trline[$i]));
          if(count($trj) > THREAD_STOP_MAX) error("�X���b�h�X�g�b�v�ł��B",$dest);
          break;
        }
      }
    }
  }
  // ��Yakuba�ǉ�

  // ���O�s���I�[�o�[
  if($countline > LOG_MAX) {
    for($d = $countline-1; $d >= LOG_MAX-1; $d--) {
//      if(empty($line[$d])) { continue; }
      list($dno,,,,,,,,,$dext,,,$dtime,) = explode(",", $line[$d]);
      if(is_file($path.$dtime.$dext)) unlink($path.$dtime.$dext);
      if(is_file(THUMB_DIR.$dtime.'s.jpg')) unlink(THUMB_DIR.$dtime.'s.jpg');
      if(is_file(THUMB_DIR.$dtime.'s.jpg'.REPLACE_EXT)) unlink(THUMB_DIR.$dtime.'s.jpg'.REPLACE_EXT);
      if(is_file(IMG_REF_DIR.$dtime.'.htm')) unlink(IMG_REF_DIR.$dtime.'.htm');
      $line[$d] = "";
      treedel($dno,TRUE);
    }
  }

  // �A�b�v���[�h����
  if($dest && file_exists($dest)) {
    $imax = ($countline > 2000) ? 2000 : $countline;
    for($i = 0; $i < $imax; $i++) { // �摜�d���`�F�b�N
//     if(empty($line[$i])) { continue; }
     list(,,,,,,,,,$extp,,,$timep,$chkp,) = explode(",", $line[$i]);
     if($chkp == $chk && file_exists($path.$timep.$extp)) {
      error("�A�b�v���[�h�Ɏ��s���܂���<br>�����摜������܂�", $dest);
    }}
  }

  list($lastno,) = explode(",", $line[0]);
  $no = $lastno + 1;
  isset($ext)?0:$ext="";
  isset($W)?0:$W="";
  isset($H)?0:$H="";
  isset($chk)?0:$chk="";
  $newline = "$no,$now,$name,$email,$sub,$com,$url,$host,$pass,$ext,$W,$H,$tim,$chk,\n";
  $newline .= implode('', $line);
//  set_file_buffer($fp, 0);
//  ftruncate($fp, 0);
  rewind($fp);
  fputs($fp, $newline);
  ftruncate($fp, ftell($fp));
  flock($fp, LOCK_UN);
  fclose($fp);

  // �c���[�X�V
  $find = FALSE;
  $newline = '';
  $tp = fopen(TREEFILE, "r+") or error("ERROR! load tree", $dest);
  set_file_buffer($tp, 0);
  flock($tp, LOCK_EX);
  rewind($tp);
  $buf = fread($tp, 1000000);
  if($buf == '') { error("error tree update", $dest); }
  $line = explode("\n", $buf);
  $countline = count($line) - 1; // �S�~������� -1 �ǉ�
  for($i = 0; $i < $countline; $i++) {
//  if(empty($line[$i])) { continue; }
    $line[$i] .= "\n";
    $j = explode(",", rtrim($line[$i]));
  }
  if($resto) {
    for($i = 0; $i < $countline; $i++) {
      $rtno = explode(",", rtrim($line[$i]));
      if($rtno[0] == $resto) {
        $find = TRUE;
        $line[$i] = rtrim($line[$i]).','.$no."\n";
        $j = explode(",", rtrim($line[$i]));
        if(count($j) > MAX_RES || ((EN_SAGE_START || MAX_PASSED_HOUR || ADMIN_SAGE) && $flgsage)) { $email .= 'sage'; }         //��Yakuba��(�Ǘ��ҋ���sage���o���Ȃ��s����C��)
        if(!stristr($email, 'sage')) {
          $newline = $line[$i];
          $line[$i] = '';
        }
        break;
  } } }
  if(!$find) {
    if(!$resto) { $newline = "$no\n"; }else{ error("�X���b�h������܂���", $dest); }
  }
  $newline .= implode('', $line);
//  set_file_buffer($tp, 0);
//  ftruncate($tp, 0);
  rewind($tp);
  fputs($tp, $newline);
  ftruncate($tp, ftell($tp));
  flock($tp, LOCK_UN);
  fclose($tp);

  //�N�b�L�[�ۑ�
  setcookie ("pwdc", $c_pass,time()+7*24*3600);  /* 1�T�ԂŊ����؂� */
  if(function_exists("mb_internal_encoding")&&function_exists("mb_convert_encoding")
      &&function_exists("mb_substr")){
    if(preg_match("#MSIE|Opera|Firefox|Safari#",$_SERVER["HTTP_USER_AGENT"])){  // ��Yakuba�� �Όώ��ɑΉ�(���M�Ȃ�)
      $i=0;$c_name='';
      mb_internal_encoding("SJIS");
      while($j=mb_substr($names,$i,1)){
        $j = mb_convert_encoding($j, "UTF-16", "SJIS");
        $c_name.="%u".bin2hex($j);
        $i++;
      }
      header("Set-Cookie: namec=$c_name; expires=".gmdate("D, d-M-Y H:i:s",time()+7*24*3600)." GMT",false);
    }else{
      $c_name=$names;
      setcookie ("namec", $c_name,time()+7*24*3600);  /* 1�T�ԂŊ����؂� */
    }
  }

  if($dest&&file_exists($dest)){
    rename($dest,$path.$tim.$ext);
    // hiro �ύX 2005.03.17
    if(USE_THUMB){
      if(SELECT_THUMB) { thumb_other($path,$tim,$ext); }
      else { thumb($path,$tim,$ext); }
    }
    // hiro �ύX �����܂�
  }
  updatelog();

  // hiro �ǉ� 2005.03.16
  if(!strcmp($bakres, 'on')) { $chgdisp = PHP_SELF."?res=".$resto; }
  else { $chgdisp = PHP_SELF2; }
  echo "<html><head><META HTTP-EQUIV=\"refresh\" content=\"1;URL=".$chgdisp."\"></head>";
  // hiro �ǉ� �����܂�
  echo "<body>$mes ��ʂ�؂�ւ��܂�</body></html>";
}

// hiro �ǉ� 2007/01/17
/* �ŐV�̃X���b�h�ԍ����擾����֐� */
function getLastThread() {
  $fp = fopen(TREEFILE, "r") or error("ERROR! load tree");
  flock($fp, LOCK_SH);
  $buf = fread($fp, 1000000);
  fclose($fp);

  if ($buf == '') { error("error tree loading"); }
  $line = explode("\n", $buf);

  $thrs = array();
  foreach ($line as $v) {
    list($a,) = explode(",", $v);
    array_push($thrs, $a);
  }
  rsort($thrs);

  return $thrs[0];
}
// hiro �ǉ� �����܂�

//�T���l�C���쐬
function thumb($path,$tim,$ext){
  if(!function_exists("ImageCreate")||!function_exists("ImageCreateFromJPEG"))return;
  $fname=$path.$tim.$ext;
  $thumb_dir = THUMB_DIR;     //�T���l�C���ۑ��f�B���N�g��
  $width     = MAX_W;         //�o�͉摜��
  $height    = MAX_H;         //�o�͉摜����
  // �摜�̕��ƍ����ƃ^�C�v���擾
  $size = GetImageSize($fname);
  switch ($size[2]) {
    case 1 :
      if(function_exists("ImageCreateFromGIF")){
        $im_in = @ImageCreateFromGIF($fname);
        if($im_in){break;}
      }
      if(!function_exists("ImageCreateFromPNG"))return;
      if(stristr(PHP_OS,"WIN")){
        if(!file_exists(realpath("./gif2png.exe")))return;
        @exec(realpath("./gif2png.exe")." -z $fname",$a);}
      else{
        if(!is_executable(realpath("./gif2png")))return
        @exec(realpath("./gif2png")." $fname",$a);}
      if(!file_exists($path.$tim.'.png'))return;
      $im_in = @ImageCreateFromPNG($path.$tim.'.png');
      unlink($path.$tim.'.png');
      if(!$im_in)return;
      break;
    case 2 : $im_in = @ImageCreateFromJPEG($fname);
      if(!$im_in){return;}
       break;
    case 3 :
      if(!function_exists("ImageCreateFromPNG"))return;
      $im_in = @ImageCreateFromPNG($fname);
      if(!$im_in){return;}
      break;
    default : return;
  }
  // ���T�C�Y
  if ($size[0] > $width || $size[1] >$height) {
    $key_w = $width / $size[0];
    $key_h = $height / $size[1];
    ($key_w < $key_h) ? $keys = $key_w : $keys = $key_h;
    $out_w = ceil($size[0] * $keys);
    $out_h = ceil($size[1] * $keys);
  } else {
    $out_w = $size[0];
    $out_h = $size[1];
  }
  // �o�͉摜�i�T���l�C���j�̃C���[�W���쐬   ���摜���c���Ƃ� �R�s�[ ���܂��B
  if(function_exists("ImageCreateTrueColor") && get_gd_ver() == "2") {
    $im_out = ImageCreateTrueColor($out_w, $out_h);
    ImageCopyResampled($im_out, $im_in, 0, 0, 0, 0, $out_w, $out_h, $size[0], $size[1]);
  } else {
    $im_out = ImageCreate($out_w, $out_h);
    ImageCopyResized($im_out, $im_in, 0, 0, 0, 0, $out_w, $out_h, $size[0], $size[1]);
  }
  // �T���l�C���摜��ۑ�
  ImageJPEG($im_out, $thumb_dir.$tim.'s.jpg', QUALITY_THUMB);
  chmod($thumb_dir.$tim.'s.jpg',0666);
  // �쐬�����C���[�W��j��
  ImageDestroy($im_in);
  ImageDestroy($im_out);
}

// hiro �ǉ� 2005.03.17
/* �T���l�C���쐬 */
function thumb_other($path,$tim,$ext) {

  $fname  = $path.$tim.$ext; //�t�@�C����
  $fthumb = THUMB_DIR.$tim.'s.jpg'; //�T���l�C����
  $width  = MAX_W; //�o�͉摜��
  $height = MAX_H; //�o�͉摜����

  // repng2jpeg�����邩�ǂ�������
  if (stristr(PHP_OS,"WIN") && file_exists(realpath("./repng2jpeg.exe"))) {
    $png2jpeg_path = realpath("./repng2jpeg.exe");
  } elseif (is_executable(realpath("./repng2jpeg"))) {
    $png2jpeg_path = realpath("./repng2jpeg");
  } else {
    return;
  }

  // �摜�̕��ƍ����ƃ^�C�v���擾
  $size = GetImageSize($fname);
  // ���T�C�Y
  if ($size[0] > $width || $size[1] >$height) {
    $key_w = $width / $size[0];
    $key_h = $height / $size[1];
    ($key_w < $key_h) ? $keys = $key_w : $keys = $key_h;
    $out_w = ceil($size[0] * $keys);
    $out_h = ceil($size[1] * $keys);
  } else {
    $out_w = $size[0];
    $out_h = $size[1];
  }
  // �T���l�C���摜��ۑ�
  @exec($png2jpeg_path." $fname $fthumb $out_w $out_h ".QUALITY_THUMB);
  @chmod($fthumb, 0666);
  return;
}
// hiro �ǉ� �����܂�

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
//�t�@�C��md5�v�Z php4.2.0�����p
function md5_of_file($inFile) {
 if (file_exists($inFile)){
  if(function_exists('md5_file')){
    return md5_file($inFile);
  }else{
    $fd = fopen($inFile, 'r');
    $fileContents = fread($fd, filesize($inFile));
    fclose ($fd);
    return md5($fileContents);
  }
 }else{
  return false;
}}
//�c���[�폜
function treedel($delno){
  $fp=fopen(TREEFILE,"r+");
  set_file_buffer($fp, 0);
  flock($fp, LOCK_EX);
  rewind($fp);
  $buf=fread($fp,1000000);
  if($buf==''){error("error tree del");}
  $line = explode("\n",$buf);
  $countline=count($line)-1;
  if($countline>1){
    for($i = 0; $i < $countline; $i++){if($line[$i]!=""){$line[$i].="\n";};}
    for($i = 0; $i < $countline; $i++){
      $treeline = explode(",", rtrim($line[$i]));
      $counttreeline=count($treeline);
      for($j = 0; $j < $counttreeline; $j++){
        if($treeline[$j] == $delno){
          $treeline[$j]='';
          if($j==0){$line[$i]='';}
          else{$line[$i]=implode(',', $treeline);
            $line[$i]=preg_replace("#,,#",",",$line[$i]);
            $line[$i]=preg_replace("#,$#","",$line[$i]);
            $line[$i].="\n";
          }
          break 2;
    } } }
    ftruncate($fp,0);
    set_file_buffer($fp, 0);
    rewind($fp);
    fputs($fp, implode('', $line));
  }
  fclose($fp);
}
/* �e�L�X�g���` */
function CleanStr($str){
  global $admin;
  $str = trim($str);//�擪�Ɩ����̋󔒏���
  if (get_magic_quotes_gpc()) {//�����폜
    $str = stripslashes($str);
  }
  if($admin!=ADMIN_PASS){//�Ǘ��҂̓^�O�\
    if(PHP_VERSION_ID >= 50400){$str = htmlspecialchars($str, ENT_COMPAT | ENT_HTML401, 'SJIS');} else {$str = htmlspecialchars($str);}     //�^�O���֎~ ��Yakuba PHP5.4.0�ȍ~�Ή�
    $str = str_replace("&amp;", "&", $str);//���ꕶ��
  }
  return str_replace(",", "&#44;", $str);//�J���}��ϊ�
}
/* ���[�U�[�폜 */
function usrdel($no,$pwd){
  global $path,$pwdc,$onlyimgdel;
  $host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
  $delno = array("dummy");
  $delflag = FALSE;
  reset($_POST);
    while ($item = each($_POST)){
     if($item[1]=='delete'){array_push($delno,$item[0]);$delflag=TRUE;}
    }
  if($pwd=="" && $pwdc!="") $pwd=$pwdc;
  $line = @file(LOGFILE);
  $countline=count($line);
  for($i = 0; $i < $countline; $i++){if($line[$i]!=""){$line[$i].="\n";};}
  $flag = FALSE;
  for($i = 0; $i<$countline; $i++){
    list($dno,,,,,,,$dhost,$pass,$dext,,,$dtim,) = explode(",", $line[$i]);
    if(array_search($dno,$delno) && (substr(md5($pwd),2,8) == $pass || $dhost == $host||ADMIN_PASS==$pwd)){
      $flag = TRUE;
      $line[$i] = "";                   //�p�X���[�h���}�b�`�����s�͋��
      $delfile = $path.$dtim.$dext;     //�폜�t�@�C��
      if(!$onlyimgdel){
        treedel($dno);
      }
      if(is_file($delfile)) unlink($delfile);//�폜
      if(is_file(THUMB_DIR.$dtim.'s.jpg')) unlink(THUMB_DIR.$dtim.'s.jpg');//�폜
      if(is_file(THUMB_DIR.$dtim.'s.jpg'.REPLACE_EXT)) unlink(THUMB_DIR.$dtim.'s.jpg'.REPLACE_EXT);//�폜
      // �Q�Ɛ�html�t�@�C�����폜�Ώۂ�
      if(is_file(IMG_REF_DIR.$dtim.'.htm')) unlink(IMG_REF_DIR.$dtim.'.htm');
    }
  }
  if(!$flag) error("�Y���L����������Ȃ����p�X���[�h���Ԉ���Ă��܂�");
}
/* �p�X�F�� */
function valid($pass){
  global $default_thumb;
  if($pass && $pass != ADMIN_PASS) error("�p�X���[�h���Ⴂ�܂�");

  head($dat);
  echo $dat;
  echo "[<a href=\"".PHP_SELF2."\">�f���ɖ߂�</a>]\n";
  echo "[<a href=\"".PHP_SELF."\">���O���X�V����</a>]\n";
  echo "<table width='100%'><tr><th bgcolor=#E08000>\n";
  echo "<font color=#FFFFFF>�Ǘ����[�h</font>\n";
  echo "</th></tr></table>\n";
  echo "<p><form action=\"".PHP_SELF."\" method=POST>\n";
  // ���O�C���t�H�[��
  if(!$pass){
    echo "<center><table border=0><tr><td>";
    echo "<input type=radio name=admin value=del checked>�L���폜<BR>";
    echo "<input type=radio name=admin value=post>�Ǘ��l���e<BR>";
    if (is_file($default_thumb)) echo "<input type=radio name=admin value=thumb>�T���l�C�������ւ�<BR>";
    if (ADMIN_SAGE) echo "<input type=radio name=admin value=sage>����sage����<br>";
    // hage �ǉ� 2004.8.1
    echo "<input type=radio name=admin value=reghost>�z�X�g/ID�\�����X�g�ɓo�^<br>";
    echo "<input type=radio name=admin value=delhost>�z�X�g/ID�\�����X�g����폜<br>";
    echo "<input type=radio name=admin value=stop>�X���X�g����<br>";
    // hage �ǉ������܂�
    echo "<input type=hidden name=mode value=admin>\n";
    echo "</td></tr></TABLE>";
    echo "<input type=password name=pass size=8>";
    echo "<input type=submit value=\" �F�� \"></form></center>\n";
    die("</body></html>");
  }
}
/* �Ǘ��ҍ폜 */
function admindel($pass){
  global $path,$onlyimgdel;
  $all=0; $msg="";
  $delno = array("dummy");
  $delflag = FALSE;
  reset($_POST);
  while ($item = each($_POST)){
   if($item[1]=='delete'){array_push($delno,$item[0]);$delflag=TRUE;}
  }
  if($delflag){
    // hage �ǉ� 2004.8.1
    ignore_user_abort(1);
    // hage �ǉ������܂�
    $fp = fopen(LOGFILE, "r+") or error("ERROR! load log");
    set_file_buffer($fp, 0);
    flock($fp, LOCK_EX);
    rewind($fp);
    $buf = fread($fp, 1000000);
    if($buf == '') { error("error admin del"); }
    $line = explode("\n", $buf);
    $countline = count($line) - 1; // �S�~������� -1 �ǉ�

    for($i = 0; $i < $countline; $i++) {
//      if(empty($line[$i])) { continue; }
      $line[$i] .= "\n";
    }
    $find = FALSE;
    for($i = 0; $i < $countline; $i++){
      list($no,$now,$name,$email,$sub,$com,$url,$host,$pw,$ext,$w,$h,$tim,$chk) = explode(",",$line[$i]);
      if($onlyimgdel=="on"){
        if(array_search($no,$delno)){//�摜�����폜
          $delfile = $path.$tim.$ext;   //�폜�t�@�C��
          if(is_file($delfile)) unlink($delfile);//�폜
          if(is_file(THUMB_DIR.$tim.'s.jpg')) unlink(THUMB_DIR.$tim.'s.jpg');//�폜
          if(is_file(THUMB_DIR.$tim.'s.jpg'.REPLACE_EXT)) unlink(THUMB_DIR.$tim.'s.jpg'.REPLACE_EXT);//�폜
          // �Q�Ɛ�html�t�@�C�����폜�Ώۂ�
          if(is_file(IMG_REF_DIR.$tim.'.htm')) unlink(IMG_REF_DIR.$tim.'.htm');
        }
      }else{
        if(array_search($no,$delno)){//�폜�̎��͋��
          $find = TRUE;
          $line[$i] = "";
          $delfile = $path.$tim.$ext;   //�폜�t�@�C��
          if(is_file($delfile)) unlink($delfile);//�폜
          if(is_file(THUMB_DIR.$tim.'s.jpg')) unlink(THUMB_DIR.$tim.'s.jpg');//�폜
          if(is_file(THUMB_DIR.$tim.'s.jpg'.REPLACE_EXT)) unlink(THUMB_DIR.$tim.'s.jpg'.REPLACE_EXT);//�폜
          // �Q�Ɛ�html�t�@�C�����폜�Ώۂ�
          if(is_file(IMG_REF_DIR.$tim.'.htm')) unlink(IMG_REF_DIR.$tim.'.htm');
          treedel($no);
        }
      }
    }
    if($find){//���O�X�V
      ftruncate($fp,0);
      set_file_buffer($fp, 0);
      rewind($fp);
      fputs($fp, implode('', $line));
    }
    fclose($fp);
    // hage �ǉ� 2004.8.1
    ignore_user_abort(0);
    // hage �ǉ������܂�
  }
  // �폜��ʂ�\��
  echo "<input type=hidden name=mode value=admin>\n";
  echo "<input type=hidden name=admin value=del>\n";
  echo "<input type=hidden name=pass value=\"$pass\">\n";
  echo "<center><P>�폜�������L���̃`�F�b�N�{�b�N�X�Ƀ`�F�b�N�����A�폜�{�^���������ĉ������B\n";
  echo "<p><input type=submit value=\"�폜����\">";
  echo "<input type=reset value=\"���Z�b�g\">";
  echo "[<input type=checkbox name=onlyimgdel value=on checked>�摜��������]";
  echo "<P><table border=1 cellspacing=0>\n";
  echo "<tr bgcolor=6080f6><th>�폜</th><th>�L��No</th><th>���e��</th><th>�薼</th>";
  echo "<th>���e��</th><th>�R�����g</th><th>�z�X�g��</th><th>�Y�t<br>(Bytes)</th><th>md5</th>";
  echo "</tr>\n";
  $line = file(LOGFILE);

  for($j = 0; $j < count($line); $j++){
    $img_flag = FALSE;
    list($no,$now,$name,$email,$sub,$com,$url,
         $host,$pw,$ext,$w,$h,$time,$chk) = explode(",",$line[$j]);
    // �t�H�[�}�b�g
    $now=preg_replace('#.{2}/(.*)$#','\1',$now);
    $now=preg_replace('#\(.*\)#',' ',$now);
    if(strlen($name) > 10) $name = substr($name,0,9).".";
    if(strlen($sub) > 10) $sub = substr($sub,0,9).".";
    if($email) $name="<a href=\"mailto:$email\">$name</a>";
    $com = str_replace("<br>"," ",$com);
    if(PHP_VERSION_ID >= 50400){$com = htmlspecialchars($com, ENT_COMPAT | ENT_HTML401, 'SJIS');} else {$com = htmlspecialchars($com);}     // ��Yakuba PHP5.4.0�ȍ~�Ή�
    if(strlen($com) > 20) $com = substr($com,0,18) . ".";
    // �摜������Ƃ��̓����N
    if($ext && is_file($path.$time.$ext)){
      $img_flag = TRUE;
      $clip = "<a href=\"".IMG_DIR.$time.$ext."\" target=_blank>".$time.$ext."</a><br>";
      $size = filesize($path.$time.$ext);
      $all += $size;                    //���v�v�Z
      $chk= substr($chk,0,10);
    }else{
      $clip = "";
      $size = 0;
      $chk= "";
    }
    $bg = ($j % 2) ? "d6d6f6" : "f6f6f6";//�w�i�F

    echo "<tr bgcolor=$bg><th><input type=checkbox name=\"$no\" value=delete></th>";
    echo "<th>$no</th><td><small>$now</small></td><td>$sub</td>";
    echo "<td><b>$name</b></td><td><small>$com</small></td>";
    echo "<td>$host</td><td align=center>$clip($size)</td><td>$chk</td>\n";
    echo "</tr>\n";
  }

  echo "</table><p><input type=submit value=\"�폜����$msg\">";
  echo "<input type=reset value=\"���Z�b�g\"></form>";

  $all = (int)($all / 1024);
  echo "�y �摜�f�[�^���v : <b>$all</b> KB �z";
  die("</center></body></html>");
}

/* �Ǘ��҃T���l�����ւ� */
// �قƂ�ǊǗ��ҍ폜�ƈꏏ����������������ǥ��
function admin_chgthumb($pass){
  global $path,$stillGIF;
  global $rep_thumb,$default_thumb;
  $thum_name = $default_thumb;
  foreach($rep_thumb as $chkthumb){
    if (!is_file($chkthumb)){error("��փT���l�C���t�@�C��".$chkthumb."��������܂���");}
  }

  $chgno = array('dummy');
  $chgflag = FALSE;
  reset($_POST);
  while ($item = each($_POST)){
   if($item[1]=='chgthumb'){array_push($chgno,$item[0]);$chgflag=TRUE;}
   // �����ւ��T���l�t�@�C�����擾
   if($item[0]=='thumb'){$thumb_name=$item[1];}
  }
  if($chgflag){
    // hage �ǉ� 2004.8.1
    ignore_user_abort(1);
    // hage �ǉ������܂�
    $fp = fopen(LOGFILE, "r+") or error("ERROR! load log");
    set_file_buffer($fp, 0);
    flock($fp, LOCK_EX);
    rewind($fp);
    $buf = fread($fp, 1000000);
    if($buf == '') { error("error admin change thumbnail"); }
    $line = explode("\n", $buf);
    $countline = count($line) - 1; // �S�~������� -1 �ǉ�

    for($i = 0; $i < $countline; $i++) {
//      if(empty($line[$i])) { continue; }
      $line[$i] .= "\n";
    }
    $find = FALSE;
    for($i = 0; $i < $countline; $i++){
      list($no,$now,$name,$email,$sub,$com,$url,$host,$pw,$ext,$w,$h,$tim,$chk) = explode(",",$line[$i]);
      if(array_search($no,$chgno)){
        $find = TRUE;
        // �T���l�C�������ւ�
        $tpath = THUMB_DIR.$tim.'s.jpg';
        $tpathorg = $tpath.REPLACE_EXT;
        if (!is_file($tpathorg)){
          if(!is_file($tpath) && is_file($path.$tim.$ext)) { if(SELECT_THUMB){ thumb_other($path,$tim,$ext); }else{ thumb($path,$tim,$ext); }} // �T���l���Ȃ�������V�K�쐬
          // �T���l���ύX&�����ւ��d�l�ύX
          if( is_file($thumb_name) && is_file($tpath)){
            if ((!USE_GIF_THUMB && $ext=='.gif' && $stillGIF=='on')) {copy($tpath,$tpathorg);}
            else {copy($thumb_name,$tpathorg);}
            // �T���l�T�C�Y�������ւ���摜�̃T�C�Y�ɂ���
            $tsize = GetImageSize($tpathorg);
            $w = $tsize[0];
            $h = $tsize[1];
          }
        }
        else{
          unlink($tpathorg);
          $tsize = GetImageSize($tpath);
          $w = $tsize[0];
          $h = $tsize[1];
        }
        $line[$i] = "$no,$now,$name,$email,$sub,$com,$url,$host,$pw,$ext,$w,$h,$tim,$chk,\n";
      }
    }
    if($find) { // ���O�X�V
      $renewline = implode('', $line);
//      set_file_buffer($fp, 0);
//      ftruncate($fp, 0);
      rewind($fp);
      fputs($fp, $renewline);
      ftruncate($fp, ftell($fp));
    }
    flock($fp, LOCK_UN);
    fclose($fp);
    updatelog();
    // hage �ǉ� 2004.8.1
    ignore_user_abort(0);
    // hage �ǉ������܂�
  }

  // �����ւ��L���I����ʂ�\��
  echo "<input type=hidden name=mode value=admin>\n";
  echo "<input type=hidden name=admin value=thumb>\n";
  echo "<input type=hidden name=pass value=\"$pass\">\n";
  echo "<center><P>�T���l�C���������ւ������L���̃`�F�b�N�{�b�N�X�Ƀ`�F�b�N�����A�����ւ��{�^���������ĉ������B\n";
  echo "<center>�u���ցv�Ɓu���։����v���؂�ւ��܂��B\n";
  echo "<p><input type=submit value=\"�����ւ�\">";
  echo "<input type=reset value=\"���Z�b�g\">";
  if(!USE_GIF_THUMB){echo "[<input type=checkbox name=stillGIF value=on>GIF���T���l�C�������邾��]";}

  echo "<center><BR>";
  $i=0;
  foreach ($rep_thumb as $rtitl => $rname){
    echo "<input type=radio name=thumb value=$rname ";
    if (!$i++) echo "checked";
    echo ">$rtitl";
  }

  echo "<P><table border=1 cellspacing=0>\n";
  echo "<tr bgcolor=6080f6><th>�I��</th><th>�L��No</th><th>���</th><th>���e��</th><th>�薼</th>";
  echo "<th>���e��</th><th>�R�����g</th><th>�z�X�g��</th><th>�Y�t<br>(Bytes)</th>";
  echo "</tr>\n";

  // ���O�t�@�C���ǂݏo��
  $line = file(LOGFILE);
  $bgcol = 0; $all = 0;
  for($j = 0; $j < count($line); $j++){
    $img_flag = FALSE;
    list($no,$now,$name,$email,$sub,$com,$url,
         $host,$pw,$ext,$w,$h,$time,$chk) = explode(",",$line[$j]);
    if($ext && is_file($path.$time.$ext)){
      // �t�H�[�}�b�g
      $now=preg_replace('#.{2}/(.*)$#','\1',$now);
      $now=preg_replace('#\(.*\)#',' ',$now);
      if(strlen($name) > 10) $name = substr($name,0,9).".";
      if(strlen($sub) > 10) $sub = substr($sub,0,9).".";
      if($email) $name="<a href=\"mailto:$email\">$name</a>";
      $com = str_replace("<br>"," ",$com);
      if(PHP_VERSION_ID >= 50400){$com = htmlspecialchars($com, ENT_COMPAT | ENT_HTML401, 'SJIS');} else {$com = htmlspecialchars($com);}     // ��Yakuba PHP5.4.0�ȍ~�Ή�
      if(strlen($com) > 20) $com = substr($com,0,18) . ".";
      $img_flag = TRUE;
      $clip = "<a href=\"".IMG_DIR.$time.$ext."\" target=_blank>".$time.$ext."</a><br>";
      $size = filesize($path.$time.$ext);
      $all += $size;                       //���v�v�Z
      $chk= substr($chk,0,10);
      $bg = ($bgcol++ % 2) ? "d6d6f6" : "f6f6f6";//�w�i�F

      if (is_file(THUMB_DIR.$time.'s.jpg'.REPLACE_EXT)) {$tstat = "����";}
      else{
        $tstat = (stristr($url,'noanime')) ? "�X����" : "�@";
      }
      echo "<tr bgcolor=$bg><th><input type=checkbox name=\"$no\" value=chgthumb></th>";
      echo "<th>$no</th><th>$tstat</th><td><small>$now</small></td><td>$sub</td>";
      echo "<td><b>$name</b></td><td><small>$com</small></td>";
      echo "<td>$host</td><td align=center>$clip($size)</td>\n";
      echo "</tr>\n";
    }
  }
  echo "</table><p><input type=submit value=\"�����ւ�\">";
  echo "<input type=reset value=\"���Z�b�g\"></form>";

  $all = (int)($all / 1024);
  echo "�y �摜�f�[�^���v : <b>$all</b> KB �z";
  die("</center></body></html>");
}

/* �Ǘ���sage���� */
// �������A�قƂ�ǊǗ��ҍ폜��(ry
function admin_sage($pass){
  global $path;

  $chgno = array('dummy');
  $chgflag = FALSE;
  reset($_POST);
  while($item = each($_POST)) {
    if($item[1]=='sage') { array_push($chgno,$item[0]); $chgflag = TRUE; }
  }

  if($chgflag) {
    // hage �ǉ� 2004.8.1
    ignore_user_abort(1);
    // hage �ǉ������܂�
    $fp = fopen(LOGFILE, "r+") or error("ERROR! load log");
    set_file_buffer($fp, 0);
    flock($fp, LOCK_EX);
    rewind($fp);
    $buf = fread($fp, 1000000);
    if($buf == '') { error("error admin sage"); }
    $line = explode("\n", $buf);
    $countline = count($line) - 1; // �S�~������� -1 �ǉ�

    for($i = 0; $i < $countline; $i++) {
//      if(empty($line[$i])) { continue; }
      $line[$i] .= "\n";
    }
    $find = FALSE;
    for($i = 0; $i < $countline; $i++) {
      list($no,$now,$name,$email,$sub,$com,$url,$host,$pw,$ext,$w,$h,$tim,$chk) = explode(",",$line[$i]);
      if(array_search($no,$chgno)) {
        $find = TRUE;
        // URI�g��'sage'�����؂�ւ�
        if(stristr($url, 'sage')) { $url = str_replace('sage', '', $url); }
        else { $url .= 'sage'; }
        $line[$i] = "$no,$now,$name,$email,$sub,$com,$url,$host,$pw,$ext,$w,$h,$tim,$chk,\n";
      }
    }
    if($find) { // ���O�X�V
      $renewline = implode('', $line);
//      set_file_buffer($fp, 0);
//      ftruncate($fp, 0);
      rewind($fp);
      fputs($fp, $renewline);
      ftruncate($fp, ftell($fp));
    }
    flock($fp, LOCK_UN);
    fclose($fp);
    updatelog();
    // hage �ǉ� 2004.8.1
    ignore_user_abort(0);
    // hage �ǉ������܂�
  }

  // sage�L���I����ʂ�\��
  echo "<input type=hidden name=mode value=admin>\n";
  echo "<input type=hidden name=admin value=sage>\n";
  echo "<input type=hidden name=pass value=\"$pass\">\n";
  echo "<center><P>sage��Ԃ�ύX�������L���̃`�F�b�N�{�b�N�X�Ƀ`�F�b�N�����A�ύX�{�^���������ĉ������B\n";
  echo "<center>�usage�v�Ɓusage�����v���؂�ւ��܂��B\n";
  echo "<center>�usage�X�^�[�g�v��u���X��sage�v�ɂ��usage�v�͉����ł��܂���B\n";
  echo "<p><input type=submit value=\"�ύX\">";
  echo "<input type=reset value=\"���Z�b�g\">";
  echo "<P><table border=1 cellspacing=0>\n";
  echo "<tr bgcolor=6080f6><th>�I��</th><th>�L��No</th><th>���</th><th>���e��</th><th>�薼</th>";
  echo "<th>���e��</th><th>�R�����g</th><th>�z�X�g��</th><th>�Y�t<br>(Bytes)</th>";
  echo "</tr>\n";

  //�c���[�t�@�C������X�����̋L��No.���擾
  $ttree = file(TREEFILE);
  $tno = array('dummy');
  $tfind = false;
  $tcounttree=count($ttree);
  for($i = 0;$i<$tcounttree;$i++){
    list($tartno,)=explode(",",rtrim($ttree[$i]));
    array_push($tno,$tartno);
  }

  //���O�t�@�C���ǂݏo��
  $line = file(LOGFILE);
  $bgcol = 0; $all = 0;
  for($j = 0; $j < count($line); $j++){
    $img_flag = FALSE;
    list($no,$now,$name,$email,$sub,$com,$url,
         $host,$pw,$ext,$w,$h,$time,$chk) = explode(",",$line[$j]);
    if(array_search($no,$tno)){
      // �t�H�[�}�b�g
      $now=preg_replace('#.{2}/(.*)$#','\1',$now);
      $now=preg_replace('#\(.*\)#',' ',$now);
      if(strlen($name) > 10) $name = substr($name,0,9).".";
      if(strlen($sub) > 10) $sub = substr($sub,0,9).".";
      if($email) $name="<a href=\"mailto:$email\">$name</a>";
      $com = str_replace("<br>"," ",$com);
      if(PHP_VERSION_ID >= 50400){$com = htmlspecialchars($com, ENT_COMPAT | ENT_HTML401, 'SJIS');} else {$com = htmlspecialchars($com);}     // ��Yakuba PHP5.4.0�ȍ~�Ή�
      if(strlen($com) > 20) $com = substr($com,0,18) . ".";
      $url = (stristr($url,'sage')) ? 'sage' : '�@';
      // �摜������Ƃ��̓����N
      if($ext && is_file($path.$time.$ext)){
        $img_flag = TRUE;
        $clip = "<a href=\"".IMG_DIR.$time.$ext."\" target=_blank>".$time.$ext."</a><br>";
        $size = filesize($path.$time.$ext);
        $all += $size;                    //���v�v�Z
        $chk= substr($chk,0,10);
      }else{
        $clip = "";
        $size = 0;
        $chk= "";
      }
      $bg = ($bgcol++ % 2) ? "d6d6f6" : "f6f6f6";//�w�i�F

      echo "<tr bgcolor=$bg><th><input type=checkbox name=\"$no\" value=sage></th>";
      echo "<th>$no</th><th>$url</th><td><small>$now</small></td><td>$sub</td>";
      echo "<td><b>$name</b></td><td><small>$com</small></td>";
      echo "<td>$host</td><td align=center>$clip($size)</td>\n";
      echo "</tr>\n";
    }
  }
  echo "</table><p><input type=submit value=\"�ύX\">";
  echo "<input type=reset value=\"���Z�b�g\"></form>";

  $all = (int)($all / 1024);
  echo "�y �摜�f�[�^���v : <b>$all</b> KB �z";
  die("</center></body></html>");
}

// hage �ǉ� 2004.8.1

/* �Ǘ��ҐԎ��z�X�g�o�^ */
function regist_host($pass){
  global $path;

  // IP�\���I�v�V�����̃`�F�b�N
  $ipflag = (isset($_POST['ipdisp']) && $_POST['ipdisp'] == 'on') ? TRUE : FALSE ;

  // �N���z�X�g���X�g�t�@�C���̎擾
  $hostdat = array('dummy');
  if(is_file(HOSTFILE)){
    $hostdat = file(HOSTFILE);
    $counthost = count($hostdat);
    for($i=0;$i<$counthost;++$i){ $hostdat[$i] = trim($hostdat[$i],"\n"); }
  }
  // �N��ID���X�g�t�@�C���̎擾
  $idhostdat = array('dummy');
  if(is_file(IDHOSTFILE)){
    $idhostdat = file(IDHOSTFILE);
    $counthost = count($idhostdat);
    for($i=0;$i<$counthost;++$i){ $idhostdat[$i] = trim($idhostdat[$i],"\n"); }
  }
  // �`�F�b�N�̕t�����L���ԍ��̎擾
  $chgno = array('dummy');
  $chgflag = FALSE;
  reset($_POST);
  while ($item = each($_POST)){
    if($item[1]=='regist'){array_push($chgno,$item[0]);$chgflag=TRUE;}
  }

  // �`�F�b�N�̕t�������ڂ�����΁A�X�V
  $setflag = FALSE;
  $idsetflag = FALSE;
  if($chgflag){
    $logdat = file(LOGFILE);
    foreach($logdat as $line){
      list($no,,,,,,,$host,,,,,,) = explode(",",$line);
      if(in_array($no,$chgno) && $host){
        if($ipflag){
          if(!in_array($host,$hostdat)){
            $setflag = TRUE;
            array_push($hostdat,$host);
          }
        }else{
          if(!in_array($host,$idhostdat)){
            $idsetflag = TRUE;
            array_push($idhostdat,$host);
          }
        }
      }
    }

    if($setflag){
      $fp=fopen(HOSTFILE,"w");
      set_file_buffer($fp, 0);
      flock($fp, LOCK_EX);
      fputs($fp, implode("\n", $hostdat));
      fclose($fp);
    }
    if($idsetflag){
      $fp=fopen(IDHOSTFILE,"w");
      set_file_buffer($fp, 0);
      flock($fp, LOCK_EX);
      fputs($fp, implode("\n", $idhostdat));
      fclose($fp);
    }
    if($setflag || $idsetflag){ updatelog(); }
  }

  // �����L���I����ʂ�\��
  echo "<input type=hidden name=mode value=admin>\n";
  echo "<input type=hidden name=admin value=reghost>\n";
  echo "<input type=hidden name=pass value=\"$pass\">\n";
  echo "<center><P>�Ώۃz�X�g�̋L���`�F�b�N�{�b�N�X�Ƀ`�F�b�N�����A�ύX�{�^���������ĉ������B<br>\n";
  echo "�\���z�X�g�̃��X�g�ɓo�^����܂��B<br>\n";
  echo "[�z�X�g����\��������]�Ƀ`�F�b�N����ƃz�X�g�����A���Ȃ���ID��\�����܂��B<br>\n";
  echo "<p><input type=submit value=\"�ύX\">";
  echo "<input type=reset value=\"���Z�b�g\">";
  echo "<p>[<input type=checkbox name=ipdisp value=on>�z�X�g����\��������]";
  echo "<P><table border=1 cellspacing=0>\n";
  echo "<tr bgcolor=6080f6><th>�I��</th><th>�L��No</th><th>���</th><th>���e��</th><th>�薼</th>";
  echo "<th>���e��</th><th>�R�����g</th><th>�z�X�g��</th>";
  echo "</tr>\n";

  //���O�t�@�C���ǂݏo��
  $line = file(LOGFILE);
  $bgcol = 0;
  for($j = 0; $j < count($line); $j++){
    $img_flag = FALSE;
    list($no,$now,$name,$email,$sub,$com,$url,
         $host,$pw,$ext,$w,$h,$time,$chk) = explode(",",$line[$j]);
    // �t�H�[�}�b�g
    $now=preg_replace('#.{2}/(.*)$#','\1',$now);
    $now=preg_replace('#\(.*\)#',' ',$now);
    if(strlen($name) > 10) $name = substr($name,0,9).".";
    if(strlen($sub) > 10) $sub = substr($sub,0,9).".";
    if($email) $name="<a href=\"mailto:$email\">$name</a>";
    $com = str_replace("<br>"," ",$com);
    if(PHP_VERSION_ID >= 50400){$com = htmlspecialchars($com, ENT_COMPAT | ENT_HTML401, 'SJIS');} else {$com = htmlspecialchars($com);}     // ��Yakuba PHP5.4.0�ȍ~�Ή�
    if(strlen($com) > 20) $com = substr($com,0,18) . ".";
    $url = '�@�@�@';
    if(in_array($host,$idhostdat)){ $url = 'ID'; }
    if(in_array($host,$hostdat)){ $url = '�z�X�g'; }

    $bg = ($bgcol++ % 2) ? "d6d6f6" : "f6f6f6";//�w�i�F

    echo "<tr bgcolor=\"$bg\"><th><input type=\"checkbox\" name=\"$no\" value=\"regist\"></th>";
    echo "<th>$no</th><th>$url</th><td><small>$now</small></td><td>$sub</td>";
    echo "<td><b>$name</b></td><td><small>$com</small></td><td>$host</td>\n";
    echo "</tr>\n";
  }
  echo "</table><p><input type=submit value=\"�ύX\">";
  echo "<input type=reset value=\"���Z�b�g\"></form>";
  die("</center></body></html>");
}

/* �Ǘ��ҐԎ��z�X�g�폜 */
function delete_host($pass){
  global $path;

  // �N���z�X�g���X�g�t�@�C���̎擾
  $hostdat = array('dummy');
  if(is_file(HOSTFILE)){
    $hostdat = file(HOSTFILE);
    $counthost = count($hostdat);
    for($i=0;$i<$counthost;++$i){ $hostdat[$i] = trim($hostdat[$i],"\n"); }
    $temp = array_shift($hostdat);
  }

  // �N��ID���X�g�t�@�C���̎擾
  $idhostdat = array('dummy');
  if(is_file(IDHOSTFILE)){
    $idhostdat = file(IDHOSTFILE);
    $counthost = count($idhostdat);
    for($i=0;$i<$counthost;++$i){ $idhostdat[$i] = trim($idhostdat[$i],"\n"); }
    $temp = array_shift($idhostdat);
  }

  // �`�F�b�N�̕t�����L���ԍ��̎擾
  $chgno = array('dummy');
  $chgflag = FALSE;
  $idchgno = array('dummy');
  $idchgflag = FALSE;
  reset($_POST);
  while ($item = each($_POST)){
    if($item[1]=='delete'){array_push($chgno,$item[0]);$chgflag=TRUE;}
    if($item[1]=='id_delete'){array_push($idchgno,$item[0]);$idchgflag=TRUE;}
  }

  $setflag = FALSE;
  $newdat = array('dummy');
  if($chgflag){
    foreach($hostdat as $line){
      $temp = str_replace('.','_',$line);	// php�ł�POST������"."��"_"�ɕϊ�����̂ť��
      if(in_array($temp,$chgno)){
        $setflag = TRUE;
      }elseif($line != 'dummy'){
        array_push($newdat,$line);
      }
    }
    if($setflag){
      $hostdat = $newdat;
      $fp=fopen(HOSTFILE,"w");
      set_file_buffer($fp, 0);
      flock($fp, LOCK_EX);
      fputs($fp, implode("\n", $hostdat));
      fclose($fp);
    }
  }
  $idsetflag = FALSE;
  $idnewdat = array('dummy');
  if($idchgflag){
    foreach($idhostdat as $line){
      $temp = str_replace('.','_',$line);	// php�ł�POST������"."��"_"�ɕϊ�����̂ť��
      if(in_array($temp,$idchgno)){
        $idsetflag = TRUE;
      }elseif($line != 'dummy'){
        array_push($idnewdat,$line);
      }
    }
    if($idsetflag){
      $idhostdat = $idnewdat;
      $fp=fopen(IDHOSTFILE,"w");
      set_file_buffer($fp, 0);
      flock($fp, LOCK_EX);
      fputs($fp, implode("\n", $idhostdat));
      fclose($fp);
    }
  }
  if($setflag || $idsetflag){ updatelog(); }

  // �����L���I����ʂ�\��
  echo "<input type=hidden name=mode value=admin>\n";
  echo "<input type=hidden name=admin value=delhost>\n";
  echo "<input type=hidden name=pass value=\"$pass\">\n";
  echo "<center><P>���X�g����폜�������z�X�g�̃`�F�b�N�{�b�N�X�Ƀ`�F�b�N�����A�ύX�{�^���������ĉ������B<br>\n";
  echo "�\���z�X�g�̃��X�g����폜����܂��B\n";
  echo "<p><input type=submit value=\"�폜\">";
  echo "<input type=reset value=\"���Z�b�g\">";
  echo "<P>�z�X�g�\�����X�g<br><table border=1 cellspacing=0>\n";
  echo "<tr bgcolor=6080f6><th>�I��</th><th>�z�X�g��</th></tr>\n";

  $bgcol = 0;
  foreach($hostdat as $line){
    if($line != 'dummy'){
      $bg = ($bgcol++ % 2) ? "d6d6f6" : "f6f6f6";//�w�i�F
      echo "<tr bgcolor=$bg><th><input type=checkbox name=\"$line\" value=delete></th>";
      echo "<td>$line</td></tr>\n";
    }
  }
  echo "</table>";
  echo "<P>ID�\�����X�g<br><table border=1 cellspacing=0>\n";
  echo "<tr bgcolor=6080f6><th>�I��</th><th>�z�X�g��</th></tr>\n";

  $bgcol = 0;
  foreach($idhostdat as $line){
    if($line != 'dummy'){
      $bg = ($bgcol++ % 2) ? "d6d6f6" : "f6f6f6";//�w�i�F
      echo "<tr bgcolor=$bg><th><input type=checkbox name=\"$line\" value=id_delete></th>";
      echo "<td>$line</td></tr>\n";
    }
  }
  echo "</table>";
  echo "<p><input type=submit value=\"�폜\">";
  echo "<input type=reset value=\"���Z�b�g\"></form>";
  die("</center></body></html>");
}

// hage �ǉ������܂�

// hiro �ǉ� 2005.03.24
// �قƂ�ǊǗ���sage�����ƈꏏ�c
/* �Ǘ��҃X���X�g���� */
function admin_threadstop($pass){
  global $path;

  // �`�F�b�N�̕t�����L���ԍ��̎擾
  $chgno = array('dummy');
  $chgflag = FALSE;
  reset($_POST);
  while($item = each($_POST)) {
    if(!strcmp($item[1], 'chgmod')) { array_push($chgno, $item[0]); $chgflag = TRUE; }
  }

  // �`�F�b�N�̕t�������ڂ�����΁A�X�V
  if($chgflag) {
    copy(LOGFILE, LOGFILE.'.bak'); // �R�s�[
// hage �ǉ� 2004.7.27
    ignore_user_abort(1);
// hage �ǉ������܂�
    $fp = fopen(LOGFILE, "r+") or error("ERROR! load log");
    set_file_buffer($fp, 0);
    flock($fp, LOCK_EX);
    rewind($fp);
    $buf = fread($fp, 1000000);
    if($buf == '') { error("error admin thread stop..."); }
    $line = explode("\n", $buf);
    $countline = count($line) - 1; // �S�~������� -1 �ǉ�

    for($i = 0; $i < $countline; $i++) {
//      if(empty($line[$i])) { continue; }
      $line[$i] .= "\n";
    }
    $find = FALSE;
    for($i = 0; $i < $countline; $i++) {
      list($no,$now,$name,$email,$sub,$com,$url,
           $host,$pw,$ext,$w,$h,$tim,$chk) = explode(",",$line[$i]);
      if(array_search($no, $chgno)) {
        $find = TRUE;
        // URI�g��'_tstop_'�����؂�ւ�
        if(stristr($url, '_tstop_')) { $url = str_replace('_tstop_', '', $url); }
        else { $url .= '_tstop_'; }
        $line[$i] = "$no,$now,$name,$email,$sub,$com,$url,$host,$pw,$ext,$w,$h,$tim,$chk,\n";
      }
    }
    if($find) { // ���O�X�V
      $renewline = implode('', $line);
//      set_file_buffer($fp, 0);
//      ftruncate($fp, 0);
      rewind($fp);
      fputs($fp, $renewline);
      ftruncate($fp, ftell($fp));
    }
    flock($fp, LOCK_UN);
    fclose($fp);
// hage �ǉ� 2004.7.27
    ignore_user_abort(0);
// hage �ǉ������܂�
    updatelog();
  }

  // �L���I����ʂ�\��
  echo <<<__EOD__
<input type="hidden" name="mode" value="admin">
<input type="hidden" name="admin" value="stop">
<input type="hidden" name="pass" value="$pass">
<center>
�X���X�g��Ԃ�ύX�������L���̃`�F�b�N�{�b�N�X�Ƀ`�F�b�N�����A�ύX�{�^���������ĉ������B<br>
�u�X���X�g�v�Ɓu�X���X�g�����v���؂�ւ��܂��B<br>
<p><input type="submit" value="�ύX"> <input type="reset" value="���Z�b�g"></p>\n
__EOD__;

  echo "<table border=1 cellspacing=0>\n",
       "<tr bgcolor=\"6080f6\"><th>�I��</th><th>�L��No</th><th>���</th><th>���e��</th><th>�薼</th>",
       "<th>���e��</th><th>�R�����g</th><th>�z�X�g��</th><th>�Y�t<br>(Bytes)</th></tr>\n";

  // �c���[�t�@�C������X�����̋L��No.���擾
  $ttree = file(TREEFILE);
  $tno = array('dummy');
  $tcounttree = count($ttree);
  for($i = 0; $i < $tcounttree; $i++) {
    list($tartno,) = explode(",",rtrim($ttree[$i]));
    array_push($tno, $tartno);
  }

  // ���O�t�@�C���ǂݏo��
  $line = @file(LOGFILE);
  $countline = count($line);
  $bgcol = 0; $all = 0;
  for($j = 0; $j < $countline; $j++) {
    $img_flag = FALSE;
    list($no,$now,$name,$email,$sub,$com,$url,
         $host,$pw,$ext,$w,$h,$time,$chk) = explode(",",$line[$j]);

    if(array_search($no, $tno)) {
      // �t�H�[�}�b�g
      $now = preg_replace('#.{2}/(.*)$#', '\1', $now);
      $now = preg_replace('#\(.*\)#', ' ', $now);
      if(strlen($name) > 10) $name = substr($name, 0, 9).".";
      if(strlen($sub) > 10)  $sub  = substr($sub, 0, 9).".";
      if($email) $name = "<a href=\"mailto:".$email."\">".$name."</a>";
      $com = str_replace("<br>", " ", $com);
      if(PHP_VERSION_ID >= 50400){$com = htmlspecialchars($com, ENT_COMPAT | ENT_HTML401, 'SJIS');} else {$com = htmlspecialchars($com);}     // ��Yakuba PHP5.4.0�ȍ~�Ή�
      if(strlen($com) > 20) $com = substr($com, 0, 18).".";

      $url = (stristr($url, '_tstop_')) ? '�X���X�g' : '�@';
      // �摜������Ƃ��̓����N
      if($ext && is_file($path.$time.$ext)) {
        $img_flag = TRUE;
        $clip = "<a href=\"".IMG_DIR.$time.$ext."\" target=\"_blank\">".$time.$ext."</a><br>";
        $size = filesize($path.$time.$ext);
      } else {
        $clip = "";
        $size = 0;
      }
      $bg = ($bgcol++ % 2) ? "d6d6f6" : "f6f6f6"; // �w�i�F

      echo "<tr bgcolor=\"",$bg,"\">\n",
           "<th><input type=\"checkbox\" name=\"",$no,"\" value=\"chgmod\"></th>",
           "<th>",$no,"</th><th>",$url,"</th><td><small>",$now,"</small></td>",
           "<td>",$sub,"</td><td><b>",$name,"</b></td><td><small>",$com,"</small></td>",
           "<td>",$host,"</td><td align=\"center\">",$clip,"(",$size,")</td>\n</tr>\n";
    }
  }
  $all = (int)($all / 1024);

  echo <<<__EOD__
</table>
<p><input type="submit" value="�ύX"> <input type="reset" value="���Z�b�g"></form>
</center>
</body></html>
__EOD__;
  die();
}
// hiro �ǉ� �����܂�

function init(){
  $err="";
  // hage �ǉ� 2004.8.1
  // $chkfile=array(LOGFILE,TREEFILE);
  $chkfile=array(LOGFILE,TREEFILE,HOSTFILE,IDHOSTFILE);
  // hage �ǉ������܂�
  if(!is_writable(realpath("./")))error("�J�����g�f�B���N�g���ɏ����܂���<br>");
  foreach($chkfile as $value){
    if(!file_exists(realpath($value))){
      $fp = fopen($value, "w");
      set_file_buffer($fp, 0);
      if($value==LOGFILE)fputs($fp,"1,2002/01/01(��) 00:00,������,,����,�{���Ȃ�,,,,,,,,,\n");
      if($value==TREEFILE)fputs($fp,"1\n");
      // hage �ǉ� 2004.8.1
      if($value==HOSTFILE || $value==IDHOSTFILE)fputs($fp,"dummy");
      // hage �ǉ������܂�
      fclose($fp);
      if(file_exists(realpath($value)))@chmod($value,0666);
    }
    if(!is_writable(realpath($value)))$err.=$value."�������܂���<br>";
    if(!is_readable(realpath($value)))$err.=$value."��ǂ߂܂���<br>";
  }
  @mkdir(IMG_DIR,0777);@chmod(IMG_DIR,0777);
  if(!is_dir(realpath(IMG_DIR)))$err.=IMG_DIR."������܂���<br>";
  if(!is_writable(realpath(IMG_DIR)))$err.=IMG_DIR."�������܂���<br>";
  if(!is_readable(realpath(IMG_DIR)))$err.=IMG_DIR."��ǂ߂܂���<br>";
  if(USE_THUMB){
    @mkdir(THUMB_DIR,0777);@chmod(THUMB_DIR,0777);
    if(!is_dir(realpath(THUMB_DIR)))$err.=THUMB_DIR."������܂���<br>";
    if(!is_writable(realpath(THUMB_DIR)))$err.=THUMB_DIR."�������܂���<br>";
    if(!is_readable(realpath(THUMB_DIR)))$err.=THUMB_DIR."��ǂ߂܂���<br>";
  }
  @mkdir(IMG_REF_DIR,0777);@chmod(IMG_REF_DIR,0777);
  if(!is_dir(realpath(IMG_REF_DIR)))$err.=IMG_REF_DIR."������܂���<br>";
  if(!is_writable(realpath(IMG_REF_DIR)))$err.=IMG_REF_DIR."�������܂���<br>";
  if(!is_readable(realpath(IMG_REF_DIR)))$err.=IMG_REF_DIR."��ǂ߂܂���<br>";
  if($err)error($err);
}
/*-----------Main-------------*/
$buf='';
$iniv=array('mode','name','email','sub','com','pwd','upfile','upfile_name','resto','pass','res','post','no');
foreach($iniv as $iniva){
  if(!isset($$iniva)){$$iniva="";}
}

// ��Yakuba�ǉ�(���������l�񋟁B����Ŗ����X�V�̖���������܂��B���肪�Ƃ��������܂����I)
// '/'������Ζⓚ���p�ŋ󔒂ɂ��Ă݂�
$reqcheck = substr($_SERVER['REQUEST_URI'], strlen($_SERVER['SCRIPT_NAME']));
if (FALSE !== strpos($reqcheck, '/')) {
die('');
}
// ��Yakuba�ǉ�

switch($mode){
  case 'regist':
    regist($name,$email,$sub,$com,'',$pwd,$upfile,$upfile_name,$resto);
    break;
  case 'admin':
    valid($pass);
    if($admin=="del") admindel($pass);
    if($admin=="post"){
      echo "</form>";
      form($post,$res,TRUE,FALSE);
      echo $post;
      die("</body></html>");
    }
    if(is_file($default_thumb) && $admin=="thumb") admin_chgthumb($pass);
    if(ADMIN_SAGE && $admin=="sage") admin_sage($pass);
	// hage �ǉ� 2004.8.1
    if($admin == "reghost") regist_host($pass);
    if($admin == "delhost") delete_host($pass);
	// hage �ǉ������܂�
// hiro �ǉ� 2005.03.24
    if(!strcmp($admin, "stop")) admin_threadstop($pass);
// hiro �ǉ� �����܂�
    break;
  case 'usrdel':
    usrdel($no,$pwd);
  default:
    if($res){
      updatelog($res);
    }else{
      updatelog();
      echo "<META HTTP-EQUIV=\"refresh\" content=\"0;URL=".PHP_SELF2."\">";
    }
}
?>
