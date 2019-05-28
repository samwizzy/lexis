<div id="Form-advance" class="card card card-default scrollspy">
  <div class="card-content">
    <h4 class="card-title">Create Stock Category</h4>

    <div class="card-alert card gradient-45deg-green-teal hide" id="log">
       <div class="card-content white-text">
       <p></p>
       </div>
       <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
       </button>
    </div>

    <form class="col s12 stock-form">
      <div class="row">
        <div class="input-field col m10 s10">

          <p>
            <?php
            $category = Helpers::all_category();
            foreach ($category as $key => $cat) {
              echo '<label class="mr-3">
                      <input class="with-gap" name="category" value="' . $cat->cat_id . '" type="radio" ';
              echo  (strtolower($cat->category) == 'drinks')?'checked':'';
              echo '/><span>' . ucfirst($cat->category) . '</span>
                    </label>';
            }
            ?>
          </p>

        </div>
      </div>
      <div class="row">
        <div class="input-field col m10 s10">
          <input id="stock" type="text" name="stock[]">
          <label for="stock">Stock</label>
        </div>
        <div class="input-field col m2 s2">
          <a class="btn-floating mb-1 btn-large waves-effect waves-light right add-stock">
            <i class="material-icons">add</i>
          </a>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <button class="btn cyan waves-effect waves-light right" type="submit" name="submit">Create
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>



<div class="section section-data-tables">

  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h4 class="card-title">Stock Category List</h4>
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th class="width-40">Main Category</th>
                    <th class="width-40">Category</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $subcats = Helpers::subcategory();
                  foreach ($subcats as $subcat) {
                    
                    foreach($subcat->stocksubcategory as $category){
                       
                        echo "<tr>
                            <td>" . ucfirst($subcat->category) ."</td>
                            <td>{$category->category} {$category->subcat_id}</td>
                            <td><a class='modal-trigger edit' data-category='{$subcat->cat_id}' data-subcat_id='{$category->subcat_id}' data-subcategory='{$category->category}' href='#modal1'>edit</a></td>
                            <td><a href='' class='dropdown-trigger' data-target='dropdown1'>
                              <i class='material-icons'>more_horiz</i></a>
                              <ul id='dropdown1' class='dropdown-content'>
                                <li><a class='modal-trigger _hide' data-subcat_id='{$category->subcat_id}' href='#modal2'>hide {$category->subcat_id}</a></li>
                                <li><a class='modal-trigger _delete' data-subcat_id='{$category->subcat_id}' href='#modal3'>delete {$category->subcat_id}</a></li>
                              </ul>
                            </td>
                          </tr>";
                    }
                    // category without subcategories
                    /*if(count($subcat->stocksubcategory) == 0){
                      echo "<tr>
                              <td>" . ucfirst($subcat->category) ."</td>
                              <td>--</td>
                              <td><a class='modal-trigger' data-toggle='modal1' data-code='code' data-company='company name'  data-target='#exampleModal' href='#modal1'>edit</a></td>
                              <td><a href='' class='dropdown-trigger' data-target='dropdown1'>
                                <i class='material-icons'>more_horiz</i></a>
                                <ul id='dropdown1' class='dropdown-content'>
                                  <li><a href=''>hide</a></li>
                                  <li><a href=''>delete</a></li>
                                </ul>
                              </td>
                            </tr>"; 
                    }*/
                  }
                  ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th>Main Category</th>
                    <th>Category</th>
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
  </div>

</div>




<!-- Modal Structure -->
<div id="modal1" class="modal fade">
  <form class="col s12 subcat-form">
    <div class="modal-content">
      <div class="modal-body">
      <!-- <h4>Edit</h4> -->
      <div class="row">
      
        <div class="row">
          <div class="input-field col s6">
            <select name="category" id="category" class="browser-default">
              <option selected value=""></option>
              <?php
              $category = Helpers::all_category();
              foreach ($category as $key => $cat) {
                echo '<option value="' . (int)$cat->cat_id . '">' . $cat->category . '</option>';
              }
              
              ?>
            </select>
          </div>
          <div class="input-field col s6">
            <input id="subcat_id" name="subcat_id" type="hidden">
            <input  id="subcategory" name="subcategory" type="text" class="validate">
            <label for="subcategory">Subcategory</label>
          </div>
        </div>
       
      </div>  
      </div>
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="input-field col s12">
          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>



<!-- Modal Structure -->
<div id="modal2" class="modal fade">
  <form method="POST" id="hide-category-form">
    <div class="modal-content">
      <div class="modal-body">
        <h6>Are you sure you want to carry out this action?</h6>
        <p>Hiding a category means that it won't be visible by other staffs.</p>
        <input type="text" id="subcat_id" name="subcat_id">
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
<div id="modal3" class="modal fade">
  <form method="POST" id="delete-category-form">
    <div class="modal-content">
      <div class="modal-body">
        <h6>Are you sure you want to carry out this action?</h6>
        <p>You might want to rethink before deleting a category.</p>
        <input type="text" id="subcat_id" name="subcat_id">
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