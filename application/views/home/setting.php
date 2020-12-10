<div class="row" style="background-color: rgba(0,0,0,.4);position: fixed;height: 100%;width: 102%;">
    <div class="col-2"></div>
    <div class="col-8 setting-area">
        <div class="card">
          <div class="card-body text-center p-5">
            <h1>SETTING</h1>
            <form action="" method="post" class="mt-5">
              <div class="form-group ">
                <label class="mr-4">Music :</label>
                <input class="form-check-input mt-3" type="radio" name="music" id="musicon" value="on" <?= ($_SESSION["setting"]['music'] == "on") ? "checked" : "" ?>>
                <label class="form-check-label mr-4" for="musicon">
                  ON
                </label>
                <input class="form-check-input mt-3" type="radio" name="music" id="musicoff" value="off" <?= ($_SESSION["setting"]['music'] == "on") ? "" : "checked" ?>>
                <label class="form-check-label" for="musicoff">
                  OFF
                </label>
              </div>
              <input type="image" alt="Submit" name="confirm" src="<?= base_url("assets/template/img/btn-confirm.png") ?>">
            </form>
          </div>
        </div>
    </div>
</div>