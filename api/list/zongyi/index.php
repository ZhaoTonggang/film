<?php

if (!isset($_GET["condition"])) {
	$_GET['condition'] = "";
}
if (!isset($_GET["page"]) || !is_numeric($_GET["page"]) || $_GET["page"] < 1) {
	$_GET["page"] = 1;
}
require __DIR__ . "/../../data/index.php";
require __DIR__ . "/../../config.php";
$data = data(array("act" => "list", "type" => "zongyi", "filter" => $_GET["condition"], "page" => $_GET["page"]));

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta name="referrer" content="no-referrer">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<title>最新好看的综艺推荐_热门综艺大全排行榜_第<?php echo $_GET["page"] . '页_' . $CONFIG['title']; ?></title>
	<meta name="keywords" content="最新综艺,好看的综艺,热门综艺">
	<meta name="description" content="<?php echo $CONFIG['title']; ?>的综艺栏目为广大综艺爱好者提供了各类最新好看的综艺，收集了最新热门综艺排行榜，是一家优质的综艺分享网站，我们诚挚的欢迎所有喜欢看综艺大全的朋友的到来。">
	<link rel="stylesheet" type="text/css" href="../../../static/css/jquery.mobile.min.css">
	<link rel="stylesheet" type="text/css" href="../../../static/css/common.css">
</head>

<body class="body" ltype="zongyi">

	<div class="header">
		<a class="logo" href="./" style="background-image:url(<?php echo $CONFIG['logo']; ?>"></a>
		<div class="search">
			<a id="searchDo"></a>
			<input type="text" placeholder="输入你想看的" id="search" />
		</div>
		<div class="navigate">
			<a href="../../">精选</a>
			<a href="../dianshi/">电视剧</a>
			<a href="../dianying/">电影</a>
			<a href="../zongyi/" class="current">综艺</a>
			<a href="../dongman/">动漫</a>
		</div>

		<div class="clear" style="height:0.2rem"></div>

		<div class="condition" id="conditionBox">
			<?php foreach ($data['filter'] as $condition) { ?>
				<div class="s-slide-menu">
					<div>
						<?php foreach ($condition as $k => $v) { ?>
							<a href="./?condition=<?php echo urlencode($v) ?>" <?php echo $v === $_GET['condition'] ? ' class="now"' : '' ?>><?php echo  htmlspecialchars(substr($k, 1)) ?></a>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</div>

		<div class="list">

			<?php if (!isset($data['list']) || count($data['list']) === 0) { ?>
				<div class="no-data" id="noDataBox" style="margin-top:1rem;background:none">没有找到相关影片，请尝试其他分类！</div>

			<?php } else { ?>
				<div class="items" id="listList">
					<?php foreach ($data['list'] as $v) { ?>
						<a href="../../play/?vid=<?php echo urlencode($v['id']) ?>">
							<i style="background-image:url(<?php echo $v['pic'] ?>)"><b><?php echo $v['hint'] ?></b></i>
							<span><?php echo htmlspecialchars($v['title']) ?></span>
						</a>
					<?php } ?>
					<span class="clear"></span>
				</div>

				<div class="more">
					<a class="prev" href="./?condition=<?php echo urlencode($_GET['condition']) ?>&page=<?php echo $_GET['page'] - 1 ?>" <?php echo $_GET['page'] <= 1 ? ' style="display:none"' : '' ?>><img src="../../templets/<?php echo $CONFIG['templets']; ?>/images/more.png" />上一页</a>
					<a class="next" href="./?condition=<?php echo urlencode($_GET['condition']) ?>&page=<?php echo $_GET['page'] + 1 ?>" <?php echo !$data['hasmore'] ? ' style="display:none"' : '' ?>>下一页<img src="../../templets/<?php echo $CONFIG['templets']; ?>/images/more.png" /></a>
				</div>
			<?php } ?>
		</div>

		<div class="clear" style="height:2rem"></div>

		<div class="copyright">
			<?php echo $CONFIG['copyright']; ?>
		</div>

		<a class="scroll-to-top" id="scrollToTop"></a>

		<script src="../../../static/js/jquery.min.js"></script>
		<script src="../../../static/js/common.js"></script>
		<script src="../../../static/js/list.js"></script>
</body>

</html>