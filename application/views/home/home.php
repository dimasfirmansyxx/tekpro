<div class="row">
    <div class="col-4"></div>
    <div class="col-4 menu-area text-center">
        <div class="app-title">
            <img src="img/L-ENGLISH.png" class="img-fluid">
        </div>
        <div class="menu-button">
          <a href="#" class="btn-start"><img src="img/btn-start.png" class="img-fluid mb-4"></a>
          <a href="#"><img src="img/btn-leaderboard.png" class="img-fluid mb-4"></a>
          <a href="#"><img src="img/btn-exit.png" class="img-fluid mb-4"></a>
        </div>
    </div>
</div>


<div class="modal fade" id="mdlInputBox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-5">
      <div class="modal-body">
        <form action="" method="post" class="form-input-name">
            <div class="form-group">
                <input type="text" name="name" class="form-control" required placeholder="Enter your name" autocomplete="off">
            </div>
            <div class="text-center">
                <input type="image" alt="Submit" src="img/btn-confirm.png">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlAdminLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-5">
      <div class="modal-body">
        <form action="" method="post" class="form-input-name">
            <div class="form-group">
                <input type="password" name="password" class="form-control" required placeholder="Enter password" autocomplete="off">
            </div>
            <div class="text-center">
                <input type="image" name="adminlogin" alt="Submit" src="img/btn-confirm.png">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $(function(){
        $(".btn-start").on("click",function(){
            $("#mdlInputBox").modal("show")
        })

        $("body").keydown(function(e){
             e.preventDefault()
             let keyCode = e.keyCode || e.which
             if ( keyCode == 119 ) {
                $("#mdlAdminLogin").modal("show")
             }       
        })  
    })
</script>

