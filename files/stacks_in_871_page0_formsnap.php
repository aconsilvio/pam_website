<?php
//=====================================================//
//
// ! YABDAB - FORMSNAP VERSION 2.0.9
// - AUTHOR: Mike Yrabedra
// - MODIFIED: 2014-07-28 14:08:26
// - (c)2014 Yabdab Inc. All rights reserved.
//
//=====================================================//

//=============================================================//
// ! - CONFIGURE SETTINGS
//=============================================================//

// ! -- GENERAL
$ydfs_settings['debug'] 			= false; // true or false
$ydfs_settings['base_id'] 			= 'stacks_in_871_page0'; // stacks id for this base
$ydfs_settings['from_email'] 		= 'savexapp@gmail.com';
$ydfs_settings['from_name'] 		= html_entity_decode('savexapplaunchpage');
$ydfs_settings['reply_to_item'] 	= str_replace('#', '', 'email'); // must be field name
$subject_key 						= str_replace('#', '', 'Signup');
$ydfs_settings['subject'] 			= (isset($_POST['form'][$subject_key]) ? $_POST['form'][$subject_key] : 'Web Form Submission');


// ! -- RECIPIENTS // comma delimited
$ydfs_settings['to'] 						= 'savexapp@gmail.com'; // To
$ydfs_settings['cc'] 						= ''; // Cc
$ydfs_settings['bcc'] 						= ''; // Bcc
$ydfs_settings['date'] 						= date('r');
$ydfs_settings['encoding_method'] 			= 'quoted-printable'; // base64, 7bit, 8bit
$ydfs_settings['encoding_charset'] 			= 'utf-8';
$ydfs_settings['word_wrap'] = "50";
$ydfs_settings['success_redirect']			= false; // true or false
$ydfs_settings['success_url'] 				= '';
$ydfs_settings['error_redirect'] 			= false; // true or false
$ydfs_settings['error_url'] 				= '';

// ! -- RECEIPT
$ydfs_settings['send_receipt'] 				= true; // true or false
$ydfs_settings['receipt_prefix'] 			= html_entity_decode('Re: '); // precedes the receipt email subject
$ydfs_settings['receipt_attachments'] 		= false; // true or false
$ydfs_settings['receipt_attach_file'] 		= false; // true or false


// ! --SECURITY 	
$ydfs_settings['allowed_file_types'] 		= "doc|xls|pdf|jpg|jpeg|png|gif|zip|rar|gz";
$ydfs_settings['use_captcha'] 				= ""; // true or false
$ydfs_settings['recaptcha_public_key'] 		= (('' != '') ? '' : '6LcJG8ESAAAAAH8FTVf0Sq8ePv8ienj8iGW7woC2' );
$ydfs_settings['recaptcha_private_key'] 	= (('' != '') ? '' : '6LcJG8ESAAAAAOt0toc-1mWqvlj7uTn9KkWkSVjp');
$ydfs_settings['max_attachment_size'] 		= 10;
$ydfs_settings['max_attachment_size_bytes'] = $ydfs_settings['max_attachment_size'] * 1024; // Covert KB to bytes value
$ydfs_settings['email_filter_regexp'] 		= 'to:|cc:|bcc:';
$ydfs_settings['email_block_list'] 			= '';
$ydfs_settings['blocked_message'] 			= 'You Have Been Blocked.';

// ! -- MySQL PREFS
$ydfs_settings['save_to_mysql'] 			=  false; // true or false
$ydfs_settings['do_not_send'] 				=  false; // true or false
$ydfs_settings['mysql_host'] 				= '';
$ydfs_settings['mysql_db'] 					= '';
$ydfs_settings['mysql_user'] 				= '';
$ydfs_settings['mysql_password'] 			= '';
$ydfs_settings['mysql_table'] 				= '';
$ydfs_settings['save_ip'] 					=  false; // true or false
$ydfs_settings['save_date'] 				=  false; // true or false
$ydfs_settings['save_browser'] 				=  false; // true or false
$ydfs_settings['save_browser_field'] 		= '';
$ydfs_settings['save_ip_field'] 			= '';
$ydfs_settings['save_date_field'] 			= '';

// ! -- SMTP
$ydfs_settings['use_smtp']					=  false;
$ydfs_settings['smtp_host'] 				= 'smtp.chandler4senate.com';
$ydfs_settings['smtp_port'] 				= '465';
$ydfs_settings['smtp_auth'] 				= true; // (bool)
$ydfs_settings['smtp_username'] 			= 'info@chandler4senate.com';
$ydfs_settings['smtp_password'] 			= 'HC14-victory';
$ydfs_settings['smtp_debug'] 				= '1';
$ydfs_settings['smtp_secure'] 				= false; // (bool)
$ydfs_settings['smtp_secure_prefix'] 		= 'SSL';

// ! -- MESSAGE STRINGS
$ydfs_settings['error_title'] 				= 'Error!';
$ydfs_settings['error_message'] 			= 'Oops! An Error Occurred';
$ydfs_settings['success_title'] 			= 'Success!';
$ydfs_settings['success_message'] 			= 'Message Sent Successfully!';
$ydfs_settings['captcha_failed'] 			= 'Security Test Failed';
$ydfs_settings['file_too_big'] 				= 'Maximum File Size Exceeded.';
$ydfs_settings['file_not_allowed'] 			= 'File Type Not Allowed.';
$ydfs_settings['required_field_alert'] 		= 'One or More Required Field(s) are Missing.';
$ydfs_settings['invalid_email'] 			= 'Invalid Email.';
$ydfs_settings['ok_button'] 				= 'OK';
$ydfs_settings['redirect_message'] 			= 'Redirecting...';
?>
