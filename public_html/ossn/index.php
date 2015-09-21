<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
require_once('system/start.php');
//page handler
$handler = input('h');
//page name
$page = input('p');

//check if there is no handler then load index page handler
if (empty($handler)) {
    $handler = 'index';
}
echo ossn_load_page($handler, $page);
