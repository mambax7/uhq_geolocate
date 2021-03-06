<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright    XOOPS Project (https://xoops.org)
 * @license      GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package
 * @since
 * @author       XOOPS Development Team
 */

$path = dirname(dirname(dirname(__DIR__)));
require_once $path . '/include/cp_header.php';

global $xoopsModule;

$moduleDirName = $GLOBALS['xoopsModule']->getVar('dirname');

/** @var Xmf\Module\Admin $adminObject */
$adminObject = \Xmf\Module\Admin::getInstance();

//if functions.php file exist
//require_once __DIR__ . '/../include/functions.php';

// Load language files
xoops_loadLanguage('admin', $moduleDirName);
xoops_loadLanguage('modinfo', $moduleDirName);
xoops_loadLanguage('main', $moduleDirName);

$pathIcon16      = \Xmf\Module\Admin::iconUrl('', 16);
$pathIcon16      = \Xmf\Module\Admin::iconUrl('', 32);
//$pathModuleAdmin = $xoopsModule->getInfo('dirmoduleadmin');

//require_once $GLOBALS['xoops']->path($pathModuleAdmin . '/moduleadmin.php');
require_once XOOPS_ROOT_PATH . '/Frameworks/moduleclasses/moduleadmin/moduleadmin.php';
