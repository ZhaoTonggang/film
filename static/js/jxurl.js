/**
* 接口配置文件
*
* ！！!视频能否正常播放和播放有无广告的关键在于使用稳定有效的解析接口
*
* 如何获取解析接口请自行百度,开放使用的很多,也可以看下其他影视网站使用什么接口
* 如希望播放时不呈现广告请自行寻找并使用无广告解析接口
*
* 接口不配置时会前往视频源站播放,如腾讯视频、爱奇艺等
下方链接是解析接口从上往下依次排列失效可以更换，自助添加接口！
**/
jsApiConfig([
   'https://jx.jsonplayer.com/player/?url=',
    'https://jx.2s0.cn/player/?url=',
    'https://jx.playerjy.com/?url=',
    'https://dmjx.m3u8.tv/?url=',
    'https://jx.m3u8.tv/jiexi/?url='
]);