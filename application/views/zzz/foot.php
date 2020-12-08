
<?php if ( isset($_SESSION["flash_data"]) ): ?>
	<script>
		swal("<?= $_SESSION['flash_data']['title'] ?>","<?= $_SESSION['flash_data']['msg'] ?>","<?= $_SESSION['flash_data']['status'] ?>")
	</script>
	<?php unset($_SESSION["flash_data"]) ?>
<?php endif ?>

  </body>
</html>