<?php
/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: uninstall.php 20324 2011-02-21 09:35:00Z zhengqingpeng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF
DROP TABLE pre_home_userapp_plying;
EOF;

runquery($sql);

$finish = TRUE;
?>