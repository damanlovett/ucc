<?php 
require_once 'inc/Ncsutwitter.php';
 
$ncsutwitter = new Ncsutwitter();

$down = false;
try {
    $friends = $ncsutwitter->getFriends();
} catch (Exception $e) {
    $down = true;
}
?>
<html>
<head>
	<title>My Organization's Tweeple</title>
	<link href="css/base.css" rel="stylesheet"/>
</head>
<body>
<h2 class="tweetHeader"><?php echo (!$down) ? count($friends) . ' Organizations are Tweeting' : 'Organizations that Tweet'; ?></h2>
<?php if (!$down): ?>
    <?php $i = 0; foreach ($friends as $f): ?>
        <div class="tweet friend <?php echo ($i % 2 == 0) ? 'row1' : 'row2'; ?>">
            <div class="avatar"><img src="<?php echo $f['profile_image_url']; ?>" alt="<?php echo $f['name']; ?>" width="48" height="48" /></div>
            <div class="text">
                <span class="name"><?php echo $f['name']; ?></span>
                <br />
                <?php echo ($f['description'] != '') ? $f['description'] . '<br />' : ''; ?>
                <a class="follow" href="http://twitter.com/<?php echo $f['screen_name']; ?>">Follow @<?php echo $f['screen_name']; ?></a>
            </div>
            <div style="clear:both;"></div>
        </div>    
    <?php $i++; endforeach; ?>
<?php else: ?>
    Oops!  Twitter is currently down.
<?php endif; ?>
</body>
</html>