<div class="row" style="background-color: rgba(0,0,0,.4);min-height: 720px;width: 102%;">
    <div class="col-2"></div>
    <div class="col-8 list-of-question-area">
        <div class="card">
          <div class="card-body text-center p-5">
            <div class="row">
              <div class="col-md-6 text-left">
                <button class="btn mb-3 text-white" style="background: #700bfb" data-toggle="modal" data-target="#mdlAddQuestion">+ Add Question</button>
              </div>
              <div class="col-md-6 text-right">
                <a href="#" data-toggle="modal" data-target="#mdlLogout">
                  <img src="<?= base_url("assets/template/img/logout.png")?>" height="40">
                </a>
              </div>
            </div>
            <table class="table table-bordered bg-white">
              <thead>
                <tr class="text-center">
                  <th width="5">No.</th>
                  <th>Image</th>
                  <th>Question</th>
                  <th>Correct Answer</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if ( count($questions) == 0 ): ?>
                  <tr>
                    <td colspan="5" align="center">No question added</td>
                  </tr>
                <?php else: ?>
                  <?php $i = 1;
                  foreach ($questions as $question): ?>
                    <tr>
                      <th><?= $i++ ?></th>
                      <td><img src="<?= base_url("assets/image/question/") . $question['image'] ?>" height="100"></td>
                      <td><?= $question['question'] ?></td>
                      <td><?= $this->question->get_options_data(["id_option" => $question['correct']])['option'] ?></td>
                      <td>
                        <a href="<?= base_url("admin/edit/") . $question['id_question'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Delete</button>
                      </td>
                    </tr>
                  <?php endforeach ?>
                <?php endif ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlAddQuestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <form action="" method="post" class="form-input-question" enctype="multipart/form-data">
            <div class="form-group">
                <label>Question</label>
                <input type="text" name="question" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control-file" required>
            </div>
            <div class="row">
              <div class="col-md-4 form-group">
                <label>Option A</label>
                <input type="text" name="option_a" class="form-control" required autocomplete="off">
              </div>
              <div class="col-md-4 form-group">
                <label>Option B</label>
                <input type="text" name="option_b" class="form-control" required autocomplete="off">
              </div>
              <div class="col-md-4 form-group">
                <label>Option C</label>
                <input type="text" name="option_c" class="form-control" required autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label>Correct Answer</label>
              <select class="form-control" required name="correct">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
              </select>
            </div>
            <div class="text-center">
                <input type="image" alt="Submit" name="submit" src="<?= base_url("assets/template/img/btn-confirm.png") ?>">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center p-4">
        <h2>Are you sure want to logout ?</h2>
        <button type="button" class="btn btn-secondary mt-3 mr-1 btn-lg" data-dismiss="modal">No</button>
        <a href="<?= base_url('admin/logout') ?>" class="btn btn-lg text-white mt-3 ml-1" style="background: #700bfb">Yes</a>
      </div>
    </div>
  </div>
</div>