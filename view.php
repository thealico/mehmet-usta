<?php 
	
	$set = array(
		'title' => ' Menü - Kebapçı Mehmet Usta',
		'class' => 'view',
		'cat'   => '',
		'sub' 	=> '',
		'mod' 	=> 'view'
	);

?>

<?php include('inc/header.php') ?>

	
	<section rel="kebap" class="f1 max">
		<div class="head pad txt-xs-c">
			<h2>Kebaplar</h2>
			<summary>Meşhur Kebaplarımızı senin için ocağa atıyoruz</summary>
		</div>
		<div class="body">
			<ul>
				<?php for ($i=1; $i < 5 ; $i++) : ?>
				<li class="row direct-y-xs middle-xs">
					<div class="one">
						<figure><img src="<?php path('img/urun/01.jpg') ?>" /></figure>
						<a href="#">
							<i class="ss-social ss-youtube"></i><span>Nasıl Hazırlanıyor<br> Hemen İzle</span>
						</a>
					</div>
					<div class="col two txt-xs-c">
						<h4>Urfa Kebap</h4>
						<p>Mehmet Usta'nın incisi. Sade yağ ve özel zulh ile hazırladığımız enfes urfa kebabı, yanında mezeler ve lavaş'ı' ile servis edilir.</p>
					</div>
					<div class="tre">
						<span class="price">60<s>₺</s></span>
					</div>
				</li>
				<?php endfor ?>
			</ul>
		</div>
	</section>


	<section rel="cover" class="cover-kunefe">

		<div class="max h">
			<div class="row middle between h direct-y-xs">
				<div class="col">
					<h3>Künefe ne dersin ?</h3>
					<p>Kebap sonrası nefis bir küneye<br class="shw-xs"> ne dersin ?</p>
				</div>
				<div>
					<figure><img src="<?php path('img/cover-tat.png') ?>" /></figure>
				</div>
			</div>
		</div>

	</section>



	<section rel="tatli" class="f1 max">

		<div class="head pad  txt-xs-c">
			<h2>Tatlılar</h2>
			<summary>Kebapçı Mehmet Usta'da künefe keyfi, kebap sonrası en lezzetli künefelerimiz seni bekliyor</summary>
		</div>
		<div class="body">
			<ul>
				<?php for ($i=1; $i < 5 ; $i++) : ?>
				<li class="row direct-y-xs middle-xs">
					<div class="one">
						
						<figure><img src="<?php path('img/urun/01.jpg') ?>" /></figure>
						<a href="#">
							<i class="ss-social ss-youtube"></i><span>Nasıl Hazırlanıyor<br> Hemen İzle</span>
						</a>
						
					</div>
					<div class="col two txt-xs-c">
						<h5>Künefe</h5>
						<h4>Küçük</h4>
						<p>Kebap sonrası kendie bir güzellik yap. Tek kişilik künefemiz ile lezzetini katla</p>
					</div>
					<div class="tre">
						<span class="price">30<s>₺</s></span>
					</div>
				</li>
				<?php endfor ?>
			</ul>
		</div>

	</section>

	<section rel="cover" class="cover-kalite">

		<div class="max h">
			<div class="row middle between h direct-y-xs">
				<div class="col">
					<h3>En iyi restoran</h3>
					<p>Kebap Mehemt Ustanın dünyanın en ünlü turistlik rehber sitesi TripAdvisor Marmara bölgesinde birinci sırada olduğunu biliyor muydun ?</p>
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
				<h2>İçecekler</h2>
			</div>
		</div>

		<div class="body txt-xs-c">
			
			<ul>
				
				<li class="one">
					
					<div class="max h pad">
						
						<div class="row h middle direct-y-xs middle-xs center-xs">
							<div class="col-9 tag">
								<div class="w-85 w-100-xs">
									<h3>Asitli İçecekler</h3>
									<p>Tüm asitli içecekler için geçerlidir</p>
								</div>
							</div>
							<div class="col-3 fyt">
								<ol class="prc flex">
									<li><span class="price">10<s>₺</s></span></li>
								</ol>
							</div>
						</div>

					</div>

				</li>

				<li class="two">

					<div class="max h pad">
						<div class="row h middle direct-y-xs middle-xs center-xs">
							<div class="col-9 tag">
								<div class="w-85 w-100-xs">
									<h3>Ayran</h3>
									<p>Est quidam mnesarchum ex, in vidit fuisset adipiscing nam. Eam illud porro principes ea. Stet assum aliquid ei mea</p>
								</div>
							</div>
							<div class="col-3 fyt">
								<ol class="prc flex">
									<li><span class="price">20<s>₺</s></span><sub>Küçük Boy</sub></li>
									<li><span class="price">25<s>₺</s></span><sub>Büyük Boy</sub></li>
								</ol>
							</div>
						</div>
					</div>

				</li>

				<li class="tre">

					<div class="max h pad">
						<div class="row h middle direct-y-xs middle-xs center-xs">
							<div class="col-9 tag">
								<div class="w-85 w-100-xs">
									<h3>Şalgam</h3>
									<p>Est quidam mnesarchum ex, in vidit fuisset adipiscing nam. Eam illud porro principes ea. Stet assum aliquid ei mea </p>
								</div>
							</div>
							<div class="col-3 fyt">
								<ol class="prc flex">
									<li><span class="price">20<s>₺</s></span><sub>Küçük Boy</sub></li>
									<li><span class="price">25<s>₺</s></span><sub>Büyük Boy</sub></li>
								</ol>
							</div>
						</div>
					</div>

				</li>

				<li class="for">

					<div class="max h pad">
						<div class="row h middle direct-y-xs middle-xs center-xs">
							<div class="col-9 tag">
								<div class="w-85 w-100-xs">
									<h3>Su</h3>
									<p>Est quidam mnesarchum ex, in vidit fuisset adipiscing nam.</p>
								</div>
							</div>
							<div class="col-3 fyt">
								<ol class="prc flex">
									<li><span class="price">3<s>₺</s></span></li>
								</ol>
							</div>
						</div>
					</div>

				</li>
				
			</ul>
		</div>
	</section>

	<footer>
		<div class="us max pad txt-xs-c">
			
			<div class="one row ns between direct-y-xs center-xs middle-xs">
				
				<div class="col-6 col-xs-9"  style="--pr: 3% ; --pr-xs:0">
					<h4>Bizi takip edin</h4>
					<p style="--pt:5px">Kebapçı Mehmet Ustayı sosyal medya üzerinden takip edin</p>
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
					<h4>Yöneticiye Mesaj Gönderin</h4>
					<p style="--pt:15px">Tüm soru ve görüşkleriniz için yöneticiye anlık mesaj gönderin</p>
				</div>
				<div class="sag" style="--pt:5px; --pt:25px">
					<a href="#" class="flex yc">
						<i class="icon-wtsp"></i>
						<span class="hide-xs">Mesajlarınız yöneticiye anlık olarak iletilir</span>
					</a>
				</div>
			</div>


			<div class="tre">
				<div class="row ns middle w-75 w-100-xs direct-y-xs ">
					<div class="order-xs-2"><i class="ss-pika ss-info" style="--top:9px; --top-xs:0"></i></div>
					<div class="col">
						<h4 style="--pb-xs:10px">Başka Şubemiz Yoktur</h4>
						<p>Kebaçı Mehmet Usta olarak başka şubemiz yoktur. Kebapçı Mehmet Usta ve Logomuz tescillidir. İsim benzerliğinden dolayı şubemiz olduğunu düşünen misafirlerimizin bilgisine sunarız.</p>
					</div>
				</div>
			</div>

		</div>
		<div class="as">
			<div class="in max pad txt-xs-c">
				<div class="row middle center-xs ns direct-y-xs"><h5><s>©</s>2022 Kebapçı Mehmet Usta</h5><a href="#">www.kebapcimehmetusta.com</a></div>
				<b>Sevis Bilgisi</b>
				<p>Menüde yer alan görseller temsilidir, sunumda farklılık gösterebilir. Servis süresi gün saat ve restroran yoğunluğuna göre farklılık gösterebilir. Bu menüde yer alan ürünler paket servisi kapsamamaktadır, sadece restaurant içinde geçerlidir. Porsiyon ve gramaj bilgisi için lütfen siparişiniz esnasında yetkili personele sorunuz. Servisimiz lavaş üzerinde gelmektedir. Cam bardak isteyen müşterilerimiz sipariş esnasında belirtmesi gerekmektedir. </p>
			</div>
		</div>
	</footer>

	<section></section>








<?php include('inc/footer.php') ?>