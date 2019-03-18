<h2><?php echo $title ?></h2>
<hr><hr>
<?php foreach ($applies as $apply_item): ?>
	<hr>
	<h3><?php echo $apply_item['id'] ?></h3>
	<h3><?php echo $apply_item['email'] ?></h3>
	<h3><?php echo $apply_item['name'] ?></h3>
	<h3><?php echo $apply_item['framework'] ?></h3>
<!--	<p><a href="/news/view/--><?//=$news_item['id'] ?><!--">View article</a></p>-->
<?php endforeach ?>


