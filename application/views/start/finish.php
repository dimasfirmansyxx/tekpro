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
                  <a href="#" class="btn text-white btn-finish" style="background: #700bfb">FINISH!</a>
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

<div class="modal fade" id="mdlFinish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center p-4">
        <h2>Are you sure want to finish ?</h2>
        <button type="button" class="btn btn-secondary mt-3 mr-1 btn-lg" data-dismiss="modal">No</button>
        <a href="<?= base_url('start/finish?allset=') ?>" class="btn btn-lg text-white mt-3 ml-1" style="background: #700bfb">Yes</a>
      </div>
    </div>
  </div>
</div>

<script>
  $(function(){

    $(".btn-finish").on("click",function(e){
      e.preventDefault()
      $("#mdlFinish").modal("show")
    })

  })
</script>