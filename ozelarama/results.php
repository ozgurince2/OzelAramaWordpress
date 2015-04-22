<div id="content">
<div class="break"></div>
	<h1>Sonuçlar</h1>
<?php 
	$flag = false;
	while ($post = mysqli_fetch_array($result)) {  
		if ($post['post_type'] != "post") 
			continue;
		$flag = true;
?>
<!-- yazi başlangıcı -->         
	<div class="post">
		<div class="l">
	   		<p><strong>Tarih: </strong> <?php echo $post['post_date']; ?></p>        
		</div>
		<div class="r">
	  		<h2> <?php echo $post['post_title']; ?> </h2>
	  		<p> <?php echo $post['post_content']; ?> </p>
	  		
	  		<button>READ MORE</button>
		</div>
	</div>
<!-- yazı sonu -->
<?php } ?>
<?php if (!$flag): ?>
	<p> Sonuç bulunamadı</p>
<?php endif ?>

<div class="break"></div>
	<h1>Yorum Sonuçları</h1>
<?php if ($commentResult->num_rows == 0): ?>
		<p> Sonuç bulunamadı</p>
<?php endif ?>
<?php if ($commentResult != ""): ?>
	<?php while ($comment = mysqli_fetch_array($commentResult)) {  
		/*echo "<pre>";
		print_r($comment);*/?>
	<!-- comment başlangıcı -->         
	<div class="post">
		<div class="l">
	   		<p><strong>Yazı Başlığı: </strong> <?php echo $comment['post_title']; ?></p>
	   		<p><strong>Tarih: </strong> <?php echo $comment['comment_date']; ?></p>        
	   		<p><strong>Yazar: </strong> <?php echo $comment['comment_author']; ?></p>        
		</div>
		<div class="r">
	  		<p> <?php echo $comment['comment_content']; ?> </p>
		</div>
	</div>
	<!-- comment sonu -->
	<?php } ?>
<?php endif ?>
</div>
