<!-- Form with icon prefixes -->
  <div id="prefixes" class="card card card-default scrollspy">
    <div class="card-content">
      <!-- <h4 class="card-title">Staff Registry</h4> -->
      <form class="col s12">
        <div class="row">
          <div class="input-field col m3 s3">
            <i class="material-icons prefix">search</i>
            <input id="search" type="text">
            <label for="password3">search</label>
          </div>
          <div class="input-field col m2 s2">
            <select class="browser-default">
              <option value="" disabled selected>Roles</option>
              <?php
              foreach(Helpers::all_roles() as $role){
                echo "<option value='1'>" . $role->role_name . "</option>";
              }
              ?>
            </select>
          </div>
          <div class="input-field col m2 s2">
            <select class="browser-default">
              <option value="" disabled selected>Stations</option>
              <?php
              foreach(Helpers::all_roles() as $role){
                echo "<option value='1'>" . $role->role_name . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
      </form>
    </div>
  </div>


<!-- Page Length Options -->
<div class="section section-data-tables">      

  <div class="card">
    <div class="card-content">
      <h4 class="card-title">Registers</h4>
      <div class="row">
        <div class="col s12">
          <table id="page-length-option" class="display">
            <thead>
              <tr>
                <th width="2%">#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Login</th>
                <th>Last Login</th>
                <th>Role</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <?php
              $staffs = Staff::active_staffs();
              foreach ($staffs as $i => $sf) {
              ?>
              <tr>
                <td><?= $i = $i + 1 ?></td>
                <td><?= ucfirst($sf->firstname) .' '. ucfirst($sf->surname) ?></td>
                <td><?= ucfirst(Helpers::concise($sf->address)) ?></td>
                <td><?= $sf->email ?></td>
                <td><?= $sf->last_login ?></td>
                <td><?= Staff::roleById($sf->role)->role_name; ?></td>
                <td><a class='modal-trigger staff_logout' data-id='<?= $sf->staff_id ?>' href="#modal">logout</a></td>
                <td><a class='modal-trigger staff_edit' data-id='<?= $sf->staff_id ?>' data-email='<?= $sf->email ?>' data-fname='<?= $sf->firstname ?>' data-lname='<?= $sf->surname ?>' data-role='<?= $sf->role ?>' href="#modal1">edit</a></td>
              </tr>
              <?php } ?>
              
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Login</th>
                <th>Password</th>
                <th>Role</th>
                <th></th>
                <th></th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>




<!-- Modal Structure -->
<div id="modal" class="modal fade">
  <form method="POST" id="logout-staff-form">
    <div class="modal-content">
      <div class="modal-body">
        <h6>Are you sure you want to log this staff out?</h6>
        <p>Logging out this acount might alter staff activity processes.</p>
        <div class="row">
          <div class="input-field col s6">
            <input type="hidden" id="staff_id" name="staff_id">
          </div>
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


<!-- Modal Structure -->
<div id="modal1" class="modal fade">
  <form method="POST" id="update-staff-form">
    <div class="modal-content">
      <div class="modal-body">
        <h6>Are you sure you want to update this staff account?</h6>
        <p>Updating this acount might revoke staff access.</p>
        <div class="row">
          <div class="input-field col s6">
            <select name="role" id="role" class="browser-default">
              <option selected value=""></option>
              <?php
              $roles = Helpers::all_roles();
              foreach ($roles as $i => $role) {
                echo '<option value="' . (int)$role->role_id . '">' . $role->role_name . '</option>';
              }
              
              ?>
            </select>
          </div>
          <div class="input-field col s6">
            <input type="hidden" id="staff_id" name="staff_id">
            <input  id="email" name="email" type="email" class="validate">
            <label for="email">Email Address</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input  id="firstname" name="firstname" type="text" class="validate">
            <label for="firstname">Firstname</label>
          </div>
          <div class="input-field col s6">
            <input  id="lastname" name="lastname" type="text" class="validate">
            <label for="lastname">Lastname</label>
          </div>
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