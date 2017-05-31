<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_baidumap
 *
 * @copyright   Copyright (C) 2017 彭杨弢, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$width = $params->get('width');
$height = $params->get('height');
$point_c = $params->get('point_c');
$level = $params->get('level');
$marker_title = $params->get('marker_title');//标记标题
$marker_content = $params->get('marker_content');//标记备注
$point_marker = $params->get('point_marker');//标记坐标
$marker_icon = $params->get('marker_icon');//图标
$marker_title_arr = explode("@", $marker_title);
$marker_content_arr = explode("@", $marker_content);
$point_marker_arr = explode("@", $point_marker);
$start = $params->get('start');
$stop = $params->get('stop');

$icon = '';
switch ($marker_icon) {
	case '11':
		$icon = 'w:21,h:21,l:0,t:0,x:6,lb:5';
		break;
	case '12':
		$icon = 'w:21,h:21,l:23,t:0,x:6,lb:5';
		break;
	case '13':
		$icon = 'w:21,h:21,l:46,t:0,x:6,lb:5';
		break;
	case '14':
		$icon = 'w:21,h:21,l:69,t:0,x:6,lb:5';
		break;
	case '15':
		$icon = 'w:21,h:21,l:92,t:0,x:6,lb:5';
		break;
	case '16':
		$icon = 'w:21,h:21,l:115,t:0,x:6,lb:5';
		break;
	case '21':
		$icon = 'w:23,h:25,l:0,t:21,x:9,lb:12';
		break;
	case '22':
		$icon = 'w:23,h:25,l:23,t:21,x:9,lb:12';
		break;
	case '23':
		$icon = 'w:23,h:25,l:46,t:21,x:9,lb:12';
		break;
	case '24':
		$icon = 'w:23,h:25,l:69,t:21,x:9,lb:12';
		break;
	case '25':
		$icon = 'w:23,h:25,l:92,t:21,x:9,lb:12';
		break;
	case '26':
		$icon = 'w:23,h:25,l:115,t:21,x:9,lb:12';
		break;
	case '31':
		$icon = 'w:21,h:21,l:0,t:46,x:1,lb:10';
		break;
	case '32':
		$icon = 'w:21,h:21,l:23,t:46,x:1,lb:10';
		break;
	case '33':
		$icon = 'w:21,h:21,l:46,t:46,x:1,lb:10';
		break;
	case '34':
		$icon = 'w:21,h:21,l:69,t:46,x:1,lb:10';
		break;
	case '35':
		$icon = 'w:21,h:21,l:92,t:46,x:1,lb:10';
		break;
	case '36':
		$icon = 'w:21,h:21,l:115,t:46,x:1,lb:10';
		break;
	default:
		$icon = 'w:23,h:25,l:46,t:21,x:9,lb:12';
		break;
}

JHTML::stylesheet('modules/' . $module->module . '/assets/css/style.css');
require JModuleHelper::getLayoutPath('mod_baidumap', $params->get('layout', 'default'));
