<?php

/**
 * mailer-config.php
 * This file contains your reCAPTCHA keys, and your recipients email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * This file has been gitignored!
 **/

// your Google reCAPTCHA keys here
$siteKey = '6Lfxkg0UAAAAAAJKQ4syBJZwGjcrq4FeuAf7sGkc';
$secret = '6Lfxkg0UAAAAAG_5gkUiavlkFff3fViI3P9qKDKM';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["jzwood13@hotmail.com" => "Jeremiah Z. Wood"];