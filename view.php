<?php 

	$set = array(
		'title' => 2,
		'class' => 'view',
		'cat'   => '',
		'sub' 	=> '',
		'mod' 	=> 'view'
	);

?>

<?php include('inc/header.php') ?>
	
	<section rel="kebap" class="f1 max">

		<div class="head pad txt-xs-c">
			<h2><?php lan(19) ?></h2>
			<summary><?php lan(20) ?></summary>
		</div>

		<div class="body">
			<ul>
				<?php foreach ($data['kebab'] as $k => $v):?>
				
				<li class="row direct-y-xs middle-xs">
					<div class="one">
						<figure><img src="<?php path("img/urun/k-$k.jpg") ?>" /></figure>
						<a href="#">
							<i class="ss-social ss-youtube"></i><span><?php lan(13) ?><br> <?php lan(14) ?></span>
						</a>
					</div>
					<div class="col two txt-xs-c">

						<h4><?php echo $v[$lan]['name'] ?></h4>
						<p><?php echo $v[$lan]['body']  ?></p>
					</div>
					<div class="tre">
						<span class="price"><?php echo $v['price'] ?><s>₺</s></span>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>


	<section rel="cover" class="cover-kunefe">

		<div class="max h">
			<div class="row middle between h direct-y-xs">
				<div class="col">
					<h3><?php lan(15) ?></h3>
					<p><?php lan(16) ?></p>
				</div>
				<div>
					<figure><img src="<?php path('img/cover-tat.png') ?>" /></figure>
				</div>
			</div>
		</div>

	</section>



	<section rel="tatli" class="f1 max">

		<div class="head pad  txt-xs-c">
			<h2><?php lan(21) ?></h2>
			<summary><?php lan(22) ?></summary>
		</div>
		<div class="body">
			<ul>
				
				<?php foreach ( $data['tatli'] as $k => $v) : ?>
				
				<li class="row direct-y-xs middle-xs">
					<div class="one">
						
						<figure><img src="<?php path("img/urun/t-$k.jpg") ?>" /></figure>
						<a href="#">
							<i class="ss-social ss-youtube"></i><span><?php lan(13) ?><br> <?php lan(14) ?></span>
						</a>
						
					</div>
					<div class="col two txt-xs-c">
						<h5><?php  echo $v[$lan]['sum'] ?></h5>
						<h4><?php  echo $v[$lan]['name'] ?></h4>
						<p><?php   echo $v[$lan]['body']  ?></p>
					</div>
					<div class="tre">
						<span class="price"><?php echo $v['price'] ?><s>₺</s></span>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>

	</section>

	<section rel="cover" class="cover-kalite">

		<div class="max h">
			<div class="row middle between h direct-y-xs">
				<div class="col">
					<h3><?php lan(17) ?></h3>
					<p><?php lan(18) ?></p>
				</div>
				<div>
					<figure><img src="<?php path('img/cover-trp.png') ?>" /></figure>
				</div>
			</div>
		</div>

	</section>


	<section rel="iccek" class="f2">
		
		<div class="head">
			<div class="max h row ns middle center-xs pad">
				<h2><?php lan(23) ?></h2>
			</div>
		</div>

		<div class="body txt-xs-c">
			
			<ul>
				
				<?php $i =1;foreach ( $data['icecek'] as $k => $v) : ?>
				

				<li class="f-<?php echo $i ?>">
					
					<div class="max h pad">
						
						<div class="row h middle direct-y-xs middle-xs center-xs">
							<div class="col-9 tag">
								<div class="w-85 w-100-xs">
									<h3><?php echo $v[$lan]['name'] ?></h3>
									<p><?php echo $v[$lan]['body'] ?></p>
								</div>
							</div>
							<div class="col-3 fyt">
								<ol class="prc flex">
									<?php if( count($v['price']) > 1 ): ?>
										<li><span class="price"><?php echo $v['price'][0] ?? '' ?><s>₺</s></span><sub><?php lan(24) ?></sub></li>
										<li><span class="price"><?php echo $v['price'][1] ?? '' ?><s>₺</s></span><sub><?php lan(25) ?></sub></li>
									<?php else :?>
										<li><span class="price"><?php echo $v['price'][0] ?? '' ?><s>₺</s></span></li>
									<?php endif ?>
								</ol>
							</div>
						</div>

					</div>

				</li>

				<?php $i++; endforeach ?>

			
				
			</ul>
		</div>
	</section>



	<footer>
		<div class="us max pad txt-xs-c">
			
			<div class="one row ns between direct-y-xs center-xs middle-xs">
				
				<div class="col-6 col-xs-9"  style="--pr: 3% ; --pr-xs:0">
					<h4><?php lan(3) ?></h4>
					<p style="--pt:5px"><?php lan(4) ?></p>
				</div>
				
				<div class="sag" style="--pt:15px; --pt-xs:30px">
					<ol class="row ns">
						<li><a href="#"><i class="ss-social-circle ss-youtube"></i></a></li>
						<li><a href="#"><i class="ss-social-circle ss-facebook"></i></a></li>
						<li><a href="#"><i class="ss-social-circle ss-twitter"></i></a></li>
						<li><a href="#"><i class="ss-social-circle ss-instagram"></i></a></li>
					</ol>
				</div>

			</div>


			<div class="two row ns between direct-y-xs center-xs middle-xs">
				<div class="col-6 col-xs-9" style="--pr: 3%; --pr-xs:0">
					<h4><?php lan(5) ?></h4>
					<p style="--pt:15px"><?php lan(6) ?></p>
				</div>
				<div class="sag" style="--pt:5px; --pt:25px">
					<a href="#" class="flex yc">
						<i class="icon-wtsp"></i>
						<span class="hide-xs"><?php lan(9) ?></span>
					</a>
				</div>
			</div>


			<div class="tre">
				<div class="row ns middle w-75 w-100-xs direct-y-xs ">
					<div class="order-xs-2"><i class="ss-pika ss-info" style="--top:9px; --top-xs:0"></i></div>
					<div class="col">
						<h4 style="--pb-xs:10px"><?php lan(7) ?></h4>
						<p><?php lan(8) ?></p>
					</div>
				</div>
			</div>

		</div>
		<div class="as">
			<div class="in max pad txt-xs-c">
				<div class="row middle center-xs ns direct-y-xs"><h5><s>©</s><?php lan(10) ?></h5><a href="#">www.kebapcimehmetusta.com</a></div>
				<b><?php lan(11) ?></b>
				<p><?php lan(12) ?></p>
			</div>
		</div>
	</footer>


<?php include('inc/footer.php') ?>