<div class="container" style="margin-bottom: 100px;">
  <div class="row">
      <div class="col-12 quiz-area">
          <div class="card">
            <div class="card-body text-center">
              <h3 class="mt-4">Hello <?= ucwords($_SESSION["game_detail"]['player_name']) ?>, your score is <b class="<?= ($_SESSION["game_detail"]['score'] >= 70) ? 'text-success' : 'text-danger' ?>"><?= $_SESSION["game_detail"]['score'] ?></b></h3>
              <a href="<?= base_url() ?>" class="btn text-white" style="background: #700bfb">To main menu</a>

              <table class="table table-bordered mt-4">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Correct Answer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($questions as $question): ?>
                    <?php 
                      $player_answer = $this->question->get_options_data(["id_option" => $answers[$i]]);
                      $correct_answer = $this->question->get_options_data(["id_option" => $question['correct']]);
                    ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><img src="<?= base_url("assets/image/question/") . $question['image'] ?>" height="100"></td>
                      <td><?= $question['question'] ?></td>
                      <?php if ( $question['correct'] == $answers[$i] ): ?>
                        <td class="bg-success text-white"><?= $player_answer['option'] ?></td>
                      <?php else: ?>
                        <td class="bg-danger text-white"><?= $player_answer['option'] ?></td>
                      <?php endif ?>
                      <td><?= $correct_answer['option'] ?></td>
                      <?php $i++; ?>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
</div>
<?php session_destroy() ?>