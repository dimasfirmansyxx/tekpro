<div class="row" style="background-color: rgba(0,0,0,.4);position: fixed;height: 100%;width: 102%">
    <div class="col-2"></div>
    <div class="col-8 board-area">
        <table class="table table-bordered bg-white">
          <thead>
            <tr class="text-center">
              <th width="5">No.</th>
              <th>Name</th>
              <th width="150">Score</th>
            </tr>
          </thead>
          <tbody>
            <?php if ( count($users) > 0 ): ?>
              <?php $i = 1;
              foreach ($users as $user): ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= ucwords($user['name']) ?></td>
                  <td><?= $user['score'] ?></td>
                </tr>
              <?php endforeach ?>
            <?php else: ?>
              <td colspan="3" align="center">There are no user yet</td>
            <?php endif ?>
          </tbody>
        </table>
    </div>
</div>