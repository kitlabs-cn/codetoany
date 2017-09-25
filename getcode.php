<?php
/**
 * @author: lion
 * @link: http://lionsay.com/codetoany.html
 */

require 'library/Authorize.php';

$appId = 'wx506a80282805f83c';
$authorize = new lion\weixin\library\Authorize($appId);
$redirectUrlConfig = [
    'bbs_cn' => 'http://bbs.a.cn/plugin.php?' . http_build_query($_GET),
    'bbs_net' => 'http://bbs.a.net/plugin.php?' . http_build_query($_GET),
];
$authorize->authorizeCodeToUrl($redirectUrlConfig);
