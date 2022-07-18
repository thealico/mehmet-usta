<?php 
	
	$set = array(
		'title' => 'Kebapçı Mehmet Usta',
		'class' => 'home',
		'cat'   => '',
		'sub' 	=> '',
		'mod' 	=> 'home'
	);
?>

<?php include('inc/header.php') ?>

	
	<figure>
		<a href="#">
			<img src="<?php echo path('img/mehmet-usta.png')  ?>">
		</a>
	</figure>

	<ul>
		<li><div class="con"><a href="/tr"><i class="flag tr"></i><h3>Türkçe</h3><p>Türkçe menü için tıklayınız</p></a></div></li>
		<li><div class="con"><a href="/en"><i class="flag en"></i><h3>English</h3><p>Plase clcik for the english menu</p></a></div></li>
		<li><div class="con"><a href="/ar"><i class="flag ar"></i><h3>عربي</h3><p>انقر للحصول على القائمة التركية</p></a></div></li>
	</ul>

<?php include('inc/footer.php') ?>