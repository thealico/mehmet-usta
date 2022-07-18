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
		<li><div><a href="/tr"><i class="flag tr"><s></s></i><div><h3>Türkçe</h3><p>Türkçe menü için tıklayınız</p></div></a></div></li>
		<li><div><a href="/en"><i class="flag en"><s></s></i><div><h3>English</h3><p>Plase clcik for the english menu</p></div></a></div></li>
		<li><div><a href="/ar"><i class="flag ar"><s></s></i><div><h3>عربي</h3><p>انقر للحصول على القائمة التركية</p></div></a></div></li>
	</ul>

<?php include('inc/footer.php') ?>