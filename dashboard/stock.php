
<div class="breadcrumbs-dark pb-0 pt-0" id="breadcrumbs-wrapper">
  <!-- Search for small screen-->
  <div class="row">
    <div class="col s2 m12 l12 mb-2">
      <a class="btn waves-effect waves-light breadcrumbs-btn right" href="new-stock">
        <i class="material-icons hide-on-med-and-up">stock</i>
        <span class="hide-on-small-onl">Add new stock</span>
      </a>
    </div>
  </div>
</div>


<!-- Page Length Options -->
<div class="card">
  <div class="card-content">
    <h4 class="card-title">Store</h4>
    <div class="row">
      <div class="col s12">
        <table class="bordered slim">
          <thead>
            <tr>
              <th>Category</th>
              <th>SubCategory</th>
              <th>Item</th>
              <th>Stock-In</th>
              <th>Stock-Out</th>
              <th>Current</th>
              <th>Unit Cost</th>
              <th>Unit Price</th>
              <th>Total Cost</th>
              <th>Total Price</th>
              <th>Re-Order Unit</th>
              <th width="5%"></th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody>
          <?php
          $stocks = Stock::all_inventory();

          foreach ($stocks as $i => $stock) {
            
          }
          ?>
            <tr>
              <td><?= ucfirst(Stock::categoryById($stock->cat_id)->category) ?></td>
              <td><?= ucfirst(Stock::subcategoryById($stock->subcat_id)->category) ?></td>
              <td><?= $stock->item ?></td>
              <td><?= $stock->total ?></td>
              <td><?= $stock->stock_out ?></td>
              <td><?= $stock->current ?></td>
              <td>₦<?= number_format($stock->cost) ?></td>
              <td>₦<?= number_format($stock->price) ?></td>
              <td>₦<?= number_format(ceil($stock->cost * $stock->quantity)) ?></td>
              <td>₦<?= number_format(ceil($stock->price * $stock->quantity)) ?></td>
              <td><?= $stock->stock_limit ?></td>
              <td><a href="#">edit</a></td>
              <td><a href="#" class="dropdown-trigger" data-target='dropdown1'>
                <i class="material-icons">more_horiz</i></a>
                <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="#!">hide</a></li>
                  <li><a href="#!">delete</a></li>
                </ul>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Category</th>
              <th>SubCategory</th>
              <th>Item</th>
              <th>Stock-In</th>
              <th>Stock-Out</th>
              <th>Current</th>
              <th>Unit Cost</th>
              <th>Unit Price</th>
              <th>Total Cost</th>
              <th>Total Price</th>
              <th>Re-Order Unit</th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>

