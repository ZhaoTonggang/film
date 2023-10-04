<?php
 $CONFIG =  array (
  'title' => '风影阁',
  'templets' => 'qq',
  'logo' => 'https://movie-app.heheda.top/icon/logo.png',
  'cache' => 
  array (
    'type' => '1',
    'prefix' => 'mov_',
    'prot' => '12421',
    'ip' => 'redis-12421.c54.ap-northeast-1-2.ec2.cloud.redislabs.com',
    'pass' => 'gXFnfspDHYriWICMSDx6YtuSsLtu8QQJ',
    'time' => '30m',
  ),
  'parse' => 
  array (
    0 => 'https://jx.jsonplayer.com/player/?url=',
    1 => 'https://jx.2s0.cn/player/?url=',
    2 => 'https://jx.playerjy.com/?url=',
    3 => 'https://dmjx.m3u8.tv/?url=',
    4 => 'https://jx.m3u8.tv/jiexi/?url=',
  ),
  'keywords' => '最新电影、最新电视剧、最新动漫、最新综艺',
  'description' => '风影阁为您提供最新电影、最新电视剧、最新动漫、在线观看。',
  'playinfo' => '<div style="text-align:center">
<span  style="color:#ff0000;">温馨提示：不能播放请更换播放列表或者切换线路！</span>
<br>
 <span style="color:#1d953f">如果还是不行,请点击下方☞
 <a href="../../?v=$title" style="color:#ff0000" target="playBox">《这里》搜索</a>
 </div>',
  'footcode' => '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3670070169085381"
     crossorigin="anonymous"></script>',
  'copyright' => '<p>本站内容均来自于互联网资源实时采集</p><p>本网站仅用做学习交流</p>',
);
?>