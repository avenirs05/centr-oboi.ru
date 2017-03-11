<div class="container-fluid footer">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
			<h2>Контакты</h2>
			<hr>
			<div class="maps-wrapper">
				<div>
					<h5>Ростов-на-Дону, пр. Королева 30 Д</h5>
					<p>Тел.: +7 (863) 231 10 99</p>
					<div class="visible-md-block visible-lg-block">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=mkePFSof_nngJ0DhOEnEHpnLPD8bW5J1&amp;width=390&amp;height=330&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
					</div>
					<div class="visible-xs-block visible-sm-block">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=mkePFSof_nngJ0DhOEnEHpnLPD8bW5J1&amp;width=100%25&amp;height=330&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
					</div>
				</div>
				<div>
					<h5>Ростов-на-Дону, пр. Стачки 123/1</h5>
					<p>Тел.: +7 (863) 223 90 75</p>
					<div class="visible-md-block visible-lg-block">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10841.041176922141!2d39.655662!3d47.211489!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDEyJzQxLjQiTiAzOcKwMzknMjAuNCJF!5e0!3m2!1sru!2sus!4v1488711983311"width="390" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="visible-xs-block visible-sm-block">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10841.041176922141!2d39.655662!3d47.211489!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDEyJzQxLjQiTiAzOcKwMzknMjAuNCJF!5e0!3m2!1sru!2sus!4v1488711983311"width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<p id="copyri" class="copyright text-center">&copy; Oboi-Center, 2015</p>	
		</div>
	</div>
</div>

<script>

	$(function () {

    	var location = window.location.href;  
		
 		$('.menu a').each(function () {						
        	var link = $(this).attr('href');			
        	if (location == link) { 				
            	$(this).addClass('change-color');                
        	}
    	});
			
	});

</script>

<?php wp_footer(); ?>
</body>
</html>


