<div class="container" style="margin-bottom: 100px;">
  <div class="row">
      <div class="col-12 quiz-area">
          <div class="card">
            <div class="card-body">
              
              <div class="row">
                <div class="col-3"></div>
                <div class="col-md-3">
                  <a href="<?= base_url("start") ?>" class="btn btn-secondary">Back to first question</a>
                </div>
                <div class="col-md-3 text-right">
                  <a href="?allset=" class="btn text-white" style="background: #700bfb">FINISH!</a>
                </div>
                <div class="col-3"></div>

                <div class="col-3"></div>
                <div class="col-6 mt-4">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th width="50">No.</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($answers as $key => $value): ?>
                        <tr>
                          <td><?= $key ?></td>
                          <td><?= ($value != "") ? "Answer saved" : "Not answered" ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
      </div>
  </div>
</div>

<script>
  $(function(){

    

  })
</script>