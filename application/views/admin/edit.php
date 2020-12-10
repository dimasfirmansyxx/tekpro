<div class="row" style="background-color: rgba(0,0,0,.4);min-height: 720px;width: 102%;">
    <div class="col-2"></div>
    <div class="col-8 list-of-question-area">
        <div class="card">
          <div class="card-body text-center p-5">
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