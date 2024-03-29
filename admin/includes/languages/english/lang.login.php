<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Admin Login',
    'HEADING_TITLE_EXPIRED' => 'Admin Login - Password Expired',
    'TEXT_SUBMIT' => 'Submit',
    'TEXT_ADMIN_PASS' => 'Admin Password',
    'TEXT_ADMIN_OLD_PASSWORD' => 'Old Password',
    'TEXT_ADMIN_NEW_PASSWORD' => 'New Password',
    'TEXT_ADMIN_CONFIRM_PASSWORD' => 'Confirm Password',
    'ERROR_WRONG_LOGIN' => 'You entered the wrong username or password.',
    'ERROR_SECURITY_ERROR' => 'There was a security error when trying to login.',
    'TEXT_PASSWORD_FORGOTTEN' => 'Forgot Password?',
    'LOGIN_EXPIRY_NOTICE' => '',
    'ERROR_PASSWORD_EXPIRED' => 'NOTE: Your password has expired. Please select a new password. Your password <strong>must contain both NUMBERS and LETTERS and minimum 7 characters.</strong>',
    'TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED' => 'For security reasons, your temporary password needs to be changed. Please select a new password.<br>Your password <strong>must contain both NUMBERS and LETTERS and minimum 7 characters.</strong>',
    'SUCCESS_PASSWORD_UPDATED' => 'Password updated',
    'TEXT_EMAIL_SUBJECT_LOGIN_FAILURES' => 'Admin login failure notice',
    'TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES' => 'Important Notice: There have been multiple unsuccessful login attempts to your administrative account. For your protection and for system security, after 6 attempts the account will be locked for a minimum of 30 minutes, during which you will be unable to login even if you remember your password. Continued attempts to login will continue to lock the account for another 30 minutes. You will not be able to do password resets during this time. Apologies for the inconvenience.' . "\n\nThe last login attempt was from this IP address: %s.\n\n\n",
    'EXPIRED_DUE_TO_SSL' => 'Note: Your password has expired because your site has changed from non-SSL (less secure) to being SSL-protected (more secure). Changing your password under SSL is an important step to greater security. Sorry for any inconvenience. Standard password expiry rules apply.',
];

return $define;
