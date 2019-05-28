<!-- stations section -->
<div class="card">
  <div class="card-content">
    <h4 class="card-title">Stations</h4>
    <div class="row">
      <div class="col s12">
        <table class="bordered slim">
          <thead>
            <tr>
              <th>Supplier</th>
              <th>Quantity</th>
              <th>Amount of supplies</th>
              <th width="5%"></th>
              <th width="10%"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Femi</td>
                <td>346</td>
                <td>₦ 250,000</td>
                <td><a class='modal-trigger float-right station_edit' data-id='{$station->id}' data-station='{$station->station}' href='#modal1'>edit</a></td>
                <td><a class='modal-trigger float-right station_delete' data-id='{$station->id}' href='#modal'><i class='material-icons'>delete</i></a></td>
            </tr>
            <?php
            /* $stations = Stock::all_stations();
            foreach ($stations as $i => $station) {
              echo "<tr>
                    <td>{$station->station}</td>
                    <td>Yes</td>
                    <td><a class='modal-trigger float-right station_edit' data-id='{$station->id}' data-station='{$station->station}' href='#modal1'>edit</a></td>
                    <td><a class='modal-trigger float-right station_delete' data-id='{$station->id}' href='#modal'><i class='material-icons'>delete</i></a></td>
                  </tr>";
            } */
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Supplier</th>
              <th>Quantity</th>
              <th>Amount of supplies</th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>



<!-- Modal Delete Structure -->
<div id="modal" class="modal fade">
  <form method="POST" id="delete-station-form">
    <div class="modal-content">
      <div class="modal-body">
        <h6>Are you sure you want to carry out this action?</h6>
        <p>You might want to rethink before deleting a station.</p>
        <input type="hidden" id="station_id" name="station_id">
      </div>
    </div>
    <div class="modal-footer">
      <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Continue
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>

<!-- Modal Edit Structure -->
<div id="modal1" class="modal fade">
  <form method="POST" id="edit-station-form">
    <div class="modal-content">
      <div class="modal-body">
        <h6>Are you sure you want to carry out this action?</h6>
        <p>You might want to rethink before deleting a station.</p>
        <input type="hidden" id="station_id" name="station_id">
        <div class="input-field col s12">
          <input type="text" id="station" name="station">
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Continue
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>
