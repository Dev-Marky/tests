<div id="content-container">
  <div id="page-head">
    <div id="page-title">
      <h1 class="page-header text-overflow">Vendors</h1>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="demo-pli-home"></i></a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">Vendors</li>
    </ol>
  </div>

  <div id="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Vendors</h3>
      </div>
      <div class="panel-body">
        <div class="pad-btm form-inline">
          <div class="row">
            <div class="col-sm-6 table-toolbar-left">
              <?php echo anchor('vendors/add', '<i class="demo-pli-add"></i> Add', 'id="demo-btn-addrow" class="btn btn-purple"'); ?>
              <!-- <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
              <div class="btn-group">
                <button class="btn btn-default"><i class="demo-pli-exclamation"></i></button>
                <button class="btn btn-default"><i class="demo-pli-recycling"></i></button>
              </div> -->
            </div>
            <div class="col-sm-6 table-toolbar-right">
              <div class="form-group">
                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
              </div>
              <div class="btn-group">
                <!-- <button class="btn btn-default"><i class="demo-pli-download-from-cloud"></i></button> -->
                <div class="btn-group dropdown">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                    <i class="demo-pli-gear"></i>
                    <span class="caret"></span>
                  </button>
                  <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li><?php echo anchor('vendors/add', 'Add a vendor'); ?></li>
                    <!-- <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($vendors as $vendor): ?>
              <tr>
                <td><?php echo $vendor->name; ?></td>
                <td><?php echo $vendor->phone; ?></td>
                <td><?php echo $vendor->email; ?></td>
                <td>
                  <?php echo anchor('vendors/edit/' . $vendor->id, 'Edit'); ?>
                  <?php echo anchor('vendors/delete/' . $vendor->id, 'Delete'); ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>