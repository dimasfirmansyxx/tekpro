<div class="container">
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
                    <a href="#"><img src="<?= base_url() ?>assets/template/img/arrow.png" class="quiz-arrow-left"></a>
                  <?php endif ?>
                </div>
                <div class="col-md-8">
                  <div class="row">
                    <?php $i = "A";
                    foreach ($options as $option): ?>
                      <div class="col-md-4">
                        <button class="btn btn-block options"><?= $i++ ?>. <?= $option['option'] ?></button>
                      </div>
                    <?php endforeach ?>
                  </div>
                </div>
                <div class="col-md-2">
                  <a href="#"><img src="<?= base_url() ?>assets/template/img/arrow.png" class="quiz-arrow-right"></a>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>

<script>
  $(function(){

    $(".options").on("click",function(){
      $(".options").removeClass("btn-default")
      $(this).addClass("btn-default")
    })

  })
</script>