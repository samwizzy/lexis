<div class="breadcrumbs-dark pb-0 pt-0" id="breadcrumbs-wrapper">
  <!-- Search for small screen-->
  <div class="row">
    <div class="col s2 m12 l12 mb-2">
      <a class="btn waves-effect waves-light breadcrumbs-btn right" href="#">
        <i class="material-icons hide-on-med-and-up">settings</i>
        <span class="hide-on-small-only">Add new role</span>
      </a>
    </div>
  </div>
</div>


<!-- Responsive Table -->
<div class="section section-data-tables">  

  <div id="responsive-table" class="card card card-default scrollspy">
    <div class="card-content">
      <h4 class="card-title">Roles & Privileges</h4>
      <p class="mb-2">Add & assign <code class=" language-markup">privileges</code> 
        to user roles 
      </p>
      <div class="row">
        <div class="col s12"></div>
        <div class="col s12">
          <form action="#" method="post" id="role-privilege-form">
            <div class="input-field col s12">
              <select class="browser-default role-change" name="role" id="role">
                <option value="" disabled selected>Choose role</option>
                <?php
                foreach(Helpers::all_roles() as $role){
                  echo "<option value='" . $role->role_id . "'>" . $role->role_name . "</option>";
                }
                ?>
              </select>
            </div>


            <table id="page-length-optio" class="responsive-table displa">
              <thead>
                <tr>
                  <th data-field="id">Role</th>
                  <th data-field="name">Privilege</th>
                  <th data-field="price">Role</th>
                  <th data-field="total">Privilege</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php
                $privileges = Staff::privileges(4, 1);
                foreach ($privileges as $k => $priv) {
                  echo
                  "<td>
                    <label>
                      <input type='checkbox' name='privilege[]' class='privilege' value='{$priv->priv_id}' />
                      <span>" . $priv->priv_desc . "</span>
                    </label>
                  </td>";
                }  
                ?>        
                </tr>
                <tr>
                <?php
                $privileges = Staff::privileges(4, 2);
                foreach ($privileges as $k => $priv) {
                  echo
                  "<td>
                    <label>
                      <input type='checkbox' name='privilege[]' class='privilege' value='{$priv->priv_id}' />
                      <span>" . $priv->priv_desc . "</span>
                    </label>
                  </td>";
                }  
                ?>
                </tr>
                <tr>
                <?php
                $privileges = Staff::privileges(4, 3);
                foreach ($privileges as $k => $priv) {
                  echo
                  "<td>
                    <label>
                      <input type='checkbox' name='privilege[]' class='privilege' value='{$priv->priv_id}' />
                      <span>" . $priv->priv_desc . "</span>
                    </label>
                  </td>";
                }  
                ?>
                  
                </tr>
                <tr>
                <?php
                $privileges = Staff::privileges(4, 4);
                foreach ($privileges as $k => $priv) {
                  echo
                  "<td>
                    <label>
                      <input type='checkbox' name='privilege[]' class='privilege' value='{$priv->priv_id}' />
                      <span>" . $priv->priv_desc . "</span>
                    </label>
                  </td>";
                }  
                ?>
                  
                </tr>
                <tr>
                <?php
                $privileges = Staff::privileges(4, 5);
                foreach ($privileges as $k => $priv) {
                  echo
                  "<td>
                    <label>
                      <input type='checkbox' name='privilege[]' class='privilege' value='{$priv->priv_id}' />
                      <span>" . $priv->priv_desc . "</span>
                    </label>
                  </td>";
                }  
                ?>
                </tr>
                <tr>
                <?php
                $privileges = Staff::privileges(4, 6);
                foreach ($privileges as $k => $priv) {
                  echo
                  "<td>
                    <label>
                      <input type='checkbox' name='privilege[]' class='privilege' value='{$priv->priv_id}' />
                      <span>" . $priv->priv_desc . "</span>
                    </label>
                  </td>";
                }  
                ?>
                </tr>
              </tbody>

              <tfoot>
                <tr>
                  <th>Role</th>
                  <th>Privilege</th>
                  <th>Role</th>
                  <th>Privilege</th>
                </tr>
              </tfoot>

            </table>

            <div class="row">
              <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>