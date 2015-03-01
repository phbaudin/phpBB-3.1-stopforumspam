<?php

/**
*
* @package - stopforumspam
* @version $Id: info_acp_sfs.php
* @copyright (c) RMcGirr83 ( http://www.rmcgirr83.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(

	// ACP entries
	'SFS_ENABLED'			=> 'Enable Stop Forum Spam MOD',
	'SFS_ENABLED_EXPLAIN'	=> 'Enable or disable the mod.',
	'SFS_THRESHOLD_SCORE'	=> 'Stop Forum Spam Threshold',
	'SFS_THRESHOLD_SCORE_EXPLAIN'	=> 'The extension will check against a threshold (eg, the number of times a user name, email or IP address is found within the stop forum database). You can input any number between 1 and 99.  The lower the number the greater the possiblity of a false positive.',
	'SFS_SEND_EMAIL'			=> 'Send an Email',
	'SFS_SEND_EMAIL_EXPLAIN'	=> 'If set as yes, an email will be sent to administrators and the board founder stating that a user has been stopped.',
	'SFS_LOG_MESSAGE'			=> 'Log a message',
	'SFS_LOG_MESSAGE_EXPLAIN'	=> 'If set as yes messages will be logged in the ACP in either the admin or user logs stating who has been blocked.',
	'SFS_DOWN'				=> 'Allow if Stop Forum Spam is Down',
	'SFS_DOWN_EXPLAIN'		=> 'Should registration/posting go through if stop forum spam is down',
	'SFS_API_KEY'			=> 'Stop Forum Spam API Key',
	'SFS_API_KEY_EXPLAIN'	=> 'If you want to submit spammers to the SFS database, input your API key from <a target="_new" href="http://www.stopforumspam.com/">stop forum spam</a> here.  You must be registered on SFS to get an API key',
	// ACP message logs
	'LOG_SFS_MESSAGE'			=> '<strong>Stop Forum Spam Triggered</strong>:<br />Username: %1$s<br /> IP: %2$s<br />Email: %3$s',
	'LOG_SFS_ERROR_MESSAGE_ADMIN_REG'	=> '<strong>Stop Forum Spam no response</strong><br />The registration of:<br />Username: %1$s<br /> IP: %2$s<br />Email: %3$s<br />was stopped but the extension was not able to add the user to the stop forum spam database',
	'LOG_SFS_SUBMITTED'		=> '<strong>User added to the Stop Forum Spam database</strong>:<br />Username: %1$s<br /> IP: %2$s<br />Email: %3$s',
	'LOG_SFS_DOWN'			=> '<strong>Stop Forum Spam is down</strong>',
));

?>