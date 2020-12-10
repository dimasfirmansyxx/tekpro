<div class="row">
    <div class="col-12 quiz-area">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <h3><?= $q_number ?>. <?= $question['question'] ?></h3>
            </div>

            <div class="text-center">
              <img src="<?= base_url() ?>assets/image/question/<?= $question['image'] ?>" height="250">
            </div>

            <div class="row text-center">
              <div class="col-md-2">
                <?php if ( $q_number > 1 ): ?>
                  <a href="<?= base_url() ?>/start/index/<?= $q_number - 1 ?>"><img src="<?= base_url() ?>assets/template/img/arrow.png" class="quiz-arrow-left"></a>
                <?php endif ?>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <?php $i = "A";
                  foreach ($options as $option): ?>
                    <div class="col-md-4">
                      <button class="btn btn-block options" id="Opt<?= $option['id_option'] ?>" data-id="<?= $option['id_option'] ?>"><?= $i++ ?>. <?= $option['option'] ?></button>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
              <div class="col-md-2">
                <a href="#" id="btnNext"><img src="<?= base_url() ?>assets/template/img/arrow.png" class="quiz-arrow-right"></a>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<script>
  $(function(){

    let answer = <?= ($_SESSION["game_detail"]['answer'][$q_number]) != "" ? $_SESSION["game_detail"]['answer'][$q_number] : 0 ?>;


    $(".options").on("click",function(){
      $(".options").removeClass("btn-default")
      $(this).addClass("btn-default")
      answer = $(this).attr("data-id");
    })

    $("#Opt" + answer).click()

    // $("#btnNext").on("click",function(e){
    //   e.preventDefault()
    //   let url = "<?= base_url() ?>start/push/<?= $q_number ?>/" + answer
    //   window.location = url;
    // })

  })
</script>