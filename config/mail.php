<?php

return array(
 
  'driver' => env('MAIL_DRIVER', 'mailgun'),
  'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
  'port' => env('MAIL_PORT', 587),
  'from' => ['address' => 'newDP@makerstorage.com', 'name' =>'dp.makerstorage'],
  'encryption' => env('MAIL_ENCRYPTION', 'tls'),
  'username' => env('postmaster@makerstorage.com'),
  'password' => env('abfd3df6739f421fec72b93646d1346a'),
  'sendmail' => '/usr/sbin/sendmail -bs',
  'pretend' => env('MAIL_PRETEND', false),
 

 
);