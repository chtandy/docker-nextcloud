<?php
$CONFIG = array (
  'datadirectory' => '/data',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/nextcloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/apps2',
      'url' => '/apps2',
      'writable' => true,
    ),
  ),
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'instanceid' => 'ocadc83b19e7',
  'passwordsalt' => 'g2LR/TFXSoOOKo2jcA+nGtdiT5IgGE',
  'secret' => 'CcI8jclPu45KIIeNeqAGI2yrgyrb/0RPWcTVJJsrlhP8Rkpo',
  'trusted_domains' =>
  array (
    0 => '192.168.5.252',
    1 => 'test.com',
    2 => '0.0.0.0',
  ),
  'memcache.distributed' => '\OC\Memcache\Redis',
  'memcache.locking' => '\OC\Memcache\Redis',
  'memcache.local' => '\OC\Memcache\APCu',
  'redis' => array(
     'host' => 'redis',
     'port' => 6379,
   ),
  'dbtype' => 'mysql',
  'version' => '15.0.5.3',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud-db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'supersecretpassword',
  'installed' => true,
  'mail_from_address' => 'administrator',
  'logtimezone' => 'Europe/Berlin',
  'logdateformat' => 'Y-m-d H:i:s',
);
