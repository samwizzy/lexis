<!-- Page Length Options -->
<div class="card">
  <div class="card-content">

    <!-- Search for small screen-->
    <div class="row">
      <div class="col s2 m12 l12">
        <form method="POST" action="" class="multiple-form">
          <div class="input-field inline mt-0 left">
            <input type="text" name="number" id="number" class="validate">
            <label for="number">No. of stock item</label>
          </div>
          <button class="btn waves-effect waves-light left" type="submit" id="submit">
            <i class="material-icons hide-on-med-and-up">stock</i>
            <span class="hide-on-small-onl">Add multiple stock</span>
          </button>
          
        </form>

        <a class="btn waves-effect waves-light right modal-trigger" href="#modal1" data-target="modal1">
          <i class="material-icons hide-on-med-and-up">stock</i>
          <span class="hide-on-small-onl">Add new stock</span>
        </a>
      </div>
    </div>


    <div class="row mb-2">
      <div class="col s12">
        <form method="post" class="add-item-form" enctype="multipart/form-data">

          <table class="bordered slim hide">
            <caption>
              <div class="input-field inline mt-0 left">
                <select name="category" id="category" class="browser-default">
                  <option value="" disabled selected>Choose category</option>
                  <?php $category = Helpers::all_category();
                    foreach ($category as $key => $cat) {
                      echo '<option value="' . $cat->cat_id . '">' . ucfirst($cat->category) . '</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="input-field inline mt-0 left">
                <select name="subcategory" id="subcategory" class="browser-default">
                  <option disabled selected>Choose subcategory</option>
                  
                </select>
              </div>
            </caption>
            <thead>
              <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Unit Cost</th>
                <th>Price</th>
                <th>Profit</th>
                <th>Re-Order</th>
              </tr>
            </thead>
            <tbody id="multiple">
              
            </tbody>
            
          </table>
        </form>
      </div>
    </div>

    <h4 class="card-title">Store</h4>
    <div class="row">
      <div class="col s12">

        <table class="bordered slim">
          <thead>
            <tr>
              <th>Name</th>
              <th>Category</th>
              <th>SubCategory</th>
              <th>Unit Cost</th>
              <th>Price</th>
              <th>Profit</th>
              <th width="5%"></th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $stocks = Stock::all_stock();
            foreach ($stocks as $i => $stock) {
              
            ?>
            <tr>
              <td><?= ucfirst($stock->stock_item) ?></td>
              <td><?= ucfirst(Stock::categoryBySubCatId($stock->category_id)->category) ?></td>
              <td><?= ucfirst(Stock::subcategoryById($stock->category_id)->category) ?></td>
              <td>₦ <?= number_format($stock->cost) ?></td>
              <td>₦ <?= number_format($stock->price) ?></td>
              <td>₦ <?= number_format($stock->profit) ?></td>
              <td><a href="#">edit</a></td>
              <td><a href="#" class="dropdown-trigger" data-target='dropdown1'>
                <i class="material-icons">more_horiz</i></a>
                <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="#!">hide</a></li>
                  <li><a href="#!">delete</a></li>
                </ul>
              </td>
            </tr>
            <?php } ?>
            
          </tbody>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Category</th>
              <th>SubCategory</th>
              <th>Cost</th>
              <th>Price</th>
              <th>Profit</th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
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
        <div class="row">
          <div class="input-field col s12">
            <input  id="stock-item" name="stock-item" type="text" class="validate">
            <label for="stock-item">Stock Item</label>
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