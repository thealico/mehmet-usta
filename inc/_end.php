

	<?php  // include('../common/inc/client/modal/modal-ajax.php'); ?>
	<?php  // include('../common/inc/client/modal/modal-login.php'); ?>
	<?php  // include('../common/inc/client/modal/modal-kayit.php'); ?>
	<?php  // include('../common/inc/client/photoswipe.php'); ?>
	<?php  // include('../common/inc/client/mobil-menu.php'); ?>



	<code id="code-builds">
		<div class="ovrly one" id="ovrly-one"></div>
		<div class="ovrly two" id="ovrly-two"></div>
	</code>


	<code id="code-script">
		
		 
		<script src="<?php path('set.js') ?>"></script>	
		<script>
			
			set.page.url = '<?php echo $url?>';
		  	
		  	<?php 
			  	/* 
				  	set.page.current    		= '{{ current_url}}';
					set.page.url       			= '{{ site_url() }}';
					set.page.theme     			= "{{ theme_url('') }}";
					set.page.cat 				= "{{ cat }}";
					set.page.sub 				= "{{ sub }}";
					set.page.mod 				= "{{ mod }}";
					set.user.login 				=  {{ user ? 'true' : 'false' }}; 
				*/
			?>

		</script>

		<script src="<?php path('all.js') ?>"></script>
		
		 
		<?php if(isset($set['js'])) : foreach ($set['js'] as $key => $value):?>
		   <script src="<?php path($value) ?>"></script>
		<?php endforeach; endif ?>


		<script src="<?php path('app.js') ?>"></script>
		
	</code>

</body>




</html>
