<?php

return array(
 
    'driver' => 'smtp',
 
    'host' => 'smtp.gmail.com',
 
    'port' => 587,
 
    'from' => array('address' => 'nerginer@gmail.com', 'name' => 'Nuri Erginer'),
 
    'encryption' => 'tls',
 
    'username' => 'nerginer@gmail.com',
 
    'password' => 'Mylove123',
 
    'sendmail' => '/usr/sbin/sendmail -bs',
 
    'pretend' => false,
 
);