<div class="container data-area">

</div>
<?php if ( $_SESSION["setting"]['music'] == "on" ): ?>
	<audio src="<?= base_url("assets/backsound.mp3") ?>" autoplay="autoplay"></audio>
<?php endif ?>
<script>
	$(function(){

		const base_url = "<?= base_url() ?>"
		let answer = 0;
		let q_number = 1;

		$(".data-area").load(base_url + "start/question/1")

		$(".data-area").on("click",".options",function(e){
			e.preventDefault()
			answer = $(this).attr("data-id")
		})

		$(".data-area").on("click","#btnNext",function(e){
			e.preventDefault()
			$.ajax({
				url : base_url + "start/push",
				data : { q_number : q_number, answer : answer },
				type : "post",
				success : function() {
					q_number++;
					if ( q_number > 10 ) {
						window.location = base_url + "start/finish"
					} else {
						$(".data-area").load(base_url + "start/question/" + q_number)
					}
				}
			})
		})

	})
</script>