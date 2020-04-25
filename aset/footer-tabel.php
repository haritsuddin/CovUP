<!--===============================================================================================-->	
	<script src="../vendor-t/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor-t/bootstrap/js/popper.js"></script>
	<script src="../vendor-t/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor-t/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor-t/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="../js-t/main.js"></script>