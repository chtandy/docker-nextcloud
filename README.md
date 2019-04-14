# docker-nextcloud
參考資料
https://blog.wangriyu.wang/2018/05-server-nextcloud.html
https://hub.docker.com/r/wonderfall/nextcloud/



### config.conf 額外設定
- 支援redis
```
'memcache.distributed' => '\OC\Memcache\Redis',
'memcache.locking' => '\OC\Memcache\Redis',
'memcache.local' => '\OC\Memcache\APCu',
'redis' => array(
   'host' => 'redis',
   'port' => 6379,
   ),
```

- Adding a new trusted domain
```
'trusted_domains' =>
  array (
  0 => 'localhost',
  1 => 'studio',
  2 => '192.168.10.155'
  ),
```
