<!-- Form with icon prefixes -->

<div id="prefixes" class="card card card-default scrollspy">
  <div class="card-content">
    <h4 class="card-title">Create New User</h4>

    <div class="card-alert card gradient-45deg-green-teal hide" id="log">
       <div class="card-content white-text">
       <p></p>
       </div>
       <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
       </button>
    </div>

    <form class="col s12" id="register" name="register" action="#" method="POST">
      <div class="row">
        <div class="input-field col m6 s12">
            <!-- <label>Select Role</label> -->
          <i class="material-icons prefix">assignment_ind</i>
          <select class="browser-default pl-9" name="role" id="role">
            <option value="" disabled selected>Choose user role</option>
            <?php
            foreach(Helpers::all_roles() as $role){
              echo "<option value='1'>" . $role->role_name . "</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m6 s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="firstname" type="text" name="firstname">
          <label for="firstname">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m6 s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m6 s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>
        <div class="input-field col m6 s6">
          <i class="material-icons prefix">fiber_pin</i>
          <input id="pin" type="password" name="pin">
          <label for="pin">Pin</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m6 s12">
          <p>
            <label>
              <input class="with-gap" id="male" name="gender" type="radio" value="male" />
              <span>Male</span>
            </label>
            
            <label class="ml-1">
              <input class="with-gap" id="female" name="gender" type="radio" value="female" />
              <span>Female</span>
            </label>
          </p>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </div>
      <div class="progress" id="progress">
         <div class="indeterminate"></div>
      </div>
    </form>
  </div>
</div>




<!-- Page Length Options -->

<div class="section section-data-tables">      

  <div class="card">
    <div class="card-content">
      <h4 class="card-title">Existing Staffs</h4>
      <div class="row">
        <div class="col s12">

          <table id="page-length-option" class="display">
            <thead>
              <tr>
                <th>Name</th>
                <th>Login</th>
                <th>Pin</th>
                <th>Role</th>
                <th>Last Login</th>
                <th>Tables</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $staffs = Staff::staffs();
              foreach ($staffs as $i => $staff) {
                echo "<tr>
                      <td>" . ucfirst($staff->surname) . ' ' . ucfirst($staff->middlename) . "</td>
                      <td>" . strtolower($staff->firstname) . "</td>
                      <td>{$staff->pin}</td>
                      <td>{$staff->role}</td>
                      <td>{$staff->last_login}</td>
                      <td>";
                      $tables = Staff::staff_tables($staff->staff_id);
                      $tbls = array();
                      foreach ($tables as $t => $table) {
                        $tbls[] = $table->table_id;
                      }
                      echo implode(',', $tbls);
                echo "</td>
                      <td><a href='#' class='waves-effect waves-purple btn white black-text secondary-content'>edit</a></td>
                    </tr>";
              }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Login</th>
                <th>Pin</th>
                <th>Role</th>
                <th>Last Login</th>
                <th>Tables</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>


<script type="text/javascript" src="<?= getenv('APP_URL') ?>dist/register.js"></script>