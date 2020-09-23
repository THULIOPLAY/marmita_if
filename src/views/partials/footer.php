
<footer>
	<div class="container">
		
			<nav style="float: left; margin-top: 20px; ">
				<ul>
				<label>Social</label>
					<li>Instagram:</li>
					<li>asd</li>
					<li>asd</li>
				</ul>
			</nav>
		
	</div>

</footer>

<!--===============================================================================================-->
    <script src="<?=$base?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=$base?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=$base?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>/js/main.js"></script>
	<script src="https://kit.fontawesome.com/7a23f66ae7.js" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$(function(){
			$('nav.menu-mobile i').click(function(){
				var el = $(this).parent().find('ul');
				if(el.is(':visible') == false){
				 el.fadeIn();
				}else{
					el.fadeOut();
				}
			})
		})
	</script>

</body>
</html>