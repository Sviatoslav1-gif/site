<?php
/**
* Чистый Шаблон для разработки
* Шаблон футера
* @package WordPress
* @subpackage clean
*/
	wp_footer(); // Необходимо для нормальной работы плагинов
?>
	</div>
	<footer class="footer-divs">
		<div class="container">
			<div class="d-flex justify-content-center row">
				<div class="col-sm-12 col-md-6 footer-menu d-flex flex-column justify-content-center align-items-center">
					<h2>Навигация</h2>
					<?php
						$args = array( // Выводим верхнее меню
							'theme_location'=>'max_mega_menu_1',
							'container'=>'',
							'depth'=> 0);
						wp_nav_menu($args);
					?>
				</div>
				<div class="col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
					<h2>Соц. сети</h2>
					<div class="d-flex align-items-center">
						<a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Instagram-512.png" alt="instagram" width="40" height="40"></a>
						<p class="h4 ml-1">@fregat_odessa_</p>
					</div>
					<div class="d-flex align-items-center">
						<a href="#"><img src="https://image.flaticon.com/icons/png/512/174/174848.png" alt="facebook" width="40" height="40"></a>
						<p class="h4 ml-1">@Fregat2020</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
<a id="toTop" href="#">^</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>