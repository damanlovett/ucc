<?php 

require_once 'inc/Ncsutwitter.php';

$page = 1;

if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}

$ncsutwitter = new Ncsutwitter();

$down = false;
try {
    $timeline = $ncsutwitter->getTimeline($page);
} catch (Exception $e) {
    $down = true;
}

?>
<html>
<head>
	<title>My Organization's Tweets</title>
	<link href="css/base.css" rel="stylesheet"/>
</head>
<body>
<h2 class="tweetHeader">My Organization's Tweets</h2> 
<?php if (!$down): ?>
    <?php foreach ($timeline as $t): ?>
        <div class="tweet">
            <div class="avatar"><img src="<?php echo $t['user-profile_image_url']; ?>" alt="<?php echo $t['user-name']; ?>" width="48" height="48" /></div>
            <div class="text"><a class="username" href="http://twitter.com/<?php echo $t['user-screen_name']; ?>"><?php echo $t['user-screen_name']; ?></a>
            <?php echo $t['text']; ?>
            </div>
            <div class="origination"><?php echo $t['elapsed_time']; ?> from <?php echo $t['source']; ?>
            <?php if ($t['in_reply_to_screen_name'] != ''): ?>
            <a class="user" href="http://www.twitter.com/<?php echo $t['in_reply_to_screen_name']; ?>/status/<?php echo $t['in_reply_to_status_id']; ?>">in reply to <?php echo $t['in_reply_to_screen_name']; ?></a>
            <?php endif; ?>
            </div>
            <div style="clear:both;"></div>
        </div>
    <?php endforeach; ?>
    <br /><br />
    <a class="twitterButton" href="index.php?page=<?php echo $page + 1; ?>">More...</a>
<?php else: ?>
    Oops!  Twitter is currently down.
<?php endif; ?>
</body>
</html>