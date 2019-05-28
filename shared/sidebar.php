<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="<?= getenv('APP_URL') ?>assets/images/logo/materialize-logo-color.png" alt="materialize logo"/>
      <span class="logo-text hide-on-med-and-down"><?= getenv('APP_NAME') ?></span></a>
      <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
    </h1>
  </div>
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
    <li class="active bold">
      <a class="waves-effect waves-cyan <?= ($_GET['url']=='dashboard')?'active':''; ?>" href="dashboard">
         <i class="material-icons">settings_input_svideo</i>
         <span class="menu-title" data-i18n="">Dashboard</span>
         <span class="badge badge pill orange float-right mr-10">3</span>
      </a>
    </li>
    <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="">Reports</span></a>
      <div class="collapsible-body">
        <ul class="collapsible" data-collapsible="accordion">
          <li><a class="collapsible-body <?= ($_GET['url']=='stock-report')?'active':''; ?>" href="stock-report" data-i18n=""><i class="material-icons">lens</i><span>Sales Analysis</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='customers')?'active':''; ?>" href="customers" data-i18n=""><i class="material-icons">lens</i><span>Customers</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='tables')?'active':''; ?>" href="tables" data-i18n=""><i class="material-icons">lens</i><span>Tables</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='store-report')?'active':''; ?>" href="store-report" data-i18n=""><i class="material-icons">lens</i><span>Store Report</span></a>
          </li>
        </ul>
      </div>
    </li>
    <li><a class="bold <?= ($_GET['url']=='waiters-report')?'active':''; ?>" href="waiters-report" data-i18n=""><i class="material-icons">lens</i><span>Waiters Sales Board</span></a>
    </li>
    <li><a class="bold <?= ($_GET['url']=='table-tracking')?'active':''; ?>" href="table-tracking" data-i18n=""><i class="material-icons">view_stream</i><span>Table Activity Tracking</span></a>
    </li>
    <li class="navigation-header"><a class="navigation-header-text">Access Control</a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan <?= ($_GET['url']=='staffs')?'active':''; ?>" href="staffs"><i class="material-icons">people_outline</i><span class="menu-title" data-i18n="">Staffs</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan <?= ($_GET['url']=='roles-privileges')?'active':''; ?>" href="roles-privileges"><i class="material-icons">wc</i><span class="menu-title" data-i18n="">Roles & Privileges</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan <?= ($_GET['url']=='registers')?'active':''; ?>" href="registers"><i class="material-icons">person_pin</i><span class="menu-title" data-i18n="">Registers</span></a>
    </li>
    

    <li class="navigation-header"><a class="navigation-header-text">Stock </a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan <?= ($_GET['url']=='stock')?'active':''; ?>" href="stock"><i class="material-icons">store</i><span class="menu-title" data-i18n="">Stock Items</span></a>
    </li>
    <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="#"><i class="material-icons">free_breakfast</i><span class="menu-title" data-i18n="">Cocktail</span></a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li><a class="collapsible-body <?= ($_GET['url']=='cocktail-stock')?'active':''; ?>" href="cocktail-stock" data-i18n=""><i class="material-icons">lens</i><span>Stock</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='preparation')?'active':''; ?>" href="preparation" data-i18n=""><i class="material-icons">lens</i><span>Preparation</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='waste')?'active':''; ?>" href="waste" data-i18n=""><i class="material-icons">lens</i><span>Waste</span></a>
          </li>
        </ul>
      </div>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan <?= ($_GET['url']=='stock-category')?'active':''; ?>" href="stock-category"><i class="material-icons">list</i><span class="menu-title" data-i18n="">Categories</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan <?= ($_GET['url']=='stations')?'active':''; ?>" href="stations"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="">Stations</span></a>
    </li>


    <li class="navigation-header"><a class="navigation-header-text">Finances </a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="#"><i class="material-icons">monetization_on</i><span class="menu-title" data-i18n="">Finances</span></a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li><a class="collapsible-body" href="transaction" data-i18n=""><i class="material-icons">lens</i><span>Transaction</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='cashflow')?'active':''; ?>" href="cashflow" data-i18n=""><i class="material-icons">lens</i><span>Cashflow</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='cash-shift')?'active':''; ?>" href="cash-shift" data-i18n=""><i class="material-icons">lens</i><span>Cash Shift</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='payroll')?'active':''; ?>" href="payroll" data-i18n=""><i class="material-icons">lens</i><span>Payroll</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='account')?'active':''; ?>" href="account" data-i18n=""><i class="material-icons">lens</i><span>Account</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='categories')?'active':''; ?>" href="categories" data-i18n=""><i class="material-icons">lens</i><span>Categories</span></a>
          </li>
        </ul>
      </div>
    </li>
  

    <!-- <li class="navigation-header"><a class="navigation-header-text">Marketing </a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">recent_actors</i><span class="menu-title" data-i18n="">Customer</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">mood</i><span class="menu-title" data-i18n="">Happy hour</span></a>
    </li> -->

    <li class="navigation-header"><a class="navigation-header-text">Inventory </a><i class="navigation-header-icon material-icons">dashboard</i>
    </li>

    <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">storage</i><span class="menu-title" data-i18n="">Inventory</span></a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li><a class="collapsible-body <?= ($_GET['url']=='store')?'active':''; ?>" href="store" data-i18n=""><i class="material-icons">lens</i><span>Store</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='supplies')?'active':''; ?>" href="supplies" data-i18n=""><i class="material-icons">lens</i><span>Supplies</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='suppliers')?'active':''; ?>" href="suppliers" data-i18n=""><i class="material-icons">lens</i><span>Suppliers</span></a>
          </li>
          <li><a class="collapsible-body <?= ($_GET['url']=='ordering-unit')?'active':''; ?>" href="ordering-unit" data-i18n=""><i class="material-icons">lens</i><span>Ordering Unit</span></a>
          </li>
        </ul>
      </div>
    </li>

    
    <li class="navigation-header"><a class="navigation-header-text">Company </a><i class="navigation-header-icon material-icons">domain</i>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan <?= ($_GET['url']=='settings')?'active':''; ?>" href="settings"><i class="material-icons">settings</i><span class="menu-title" data-i18n="">Settings</span></a>
    </li>
  </ul>
  <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>