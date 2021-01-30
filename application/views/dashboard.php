   <section class="content">
       <div class="container-fluid">
           <!-- Small boxes (Stat box) -->
           <div class="row">
               <div class="col-sm-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-info">
                       <div class="inner">
                           <h3><?= $this->fungsi->count_item() ?></h3>
                           <p>ITEMS</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-bag"></i>
                       </div>
                       <a href="<?= site_url('item') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
               <div class="col-sm-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-danger">
                       <div class="inner">
                           <h3><?= $this->fungsi->count_supplier() ?><sup style="font-size: 20px"></sup></h3>

                           <p>SUPPLIERS</p>
                       </div>
                       <div class="icon">
                           <i class="fas fa-truck"></i>
                       </div>
                       <a href="<?= site_url('supplier') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
               <div class="col-sm-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-warning">
                       <div class="inner">
                           <h3><?= $this->fungsi->count_user() ?></h3>

                           <p>USERS</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-person-add"></i>
                       </div>
                       <a href="<?= site_url('user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
               <div class="col-sm-3 col-6">
                   <!-- small box -->
                   <div class="small-box bg-success">
                       <div class="inner">
                           <h3><?= $this->fungsi->count_custumer() ?></h3>

                           <p>COSTUMERS</p>
                       </div>
                       <div class="icon">
                           <i class="fas fa-users"></i>
                       </div>
                       <a href="<?= site_url('custumer') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <!-- ./col -->
           </div>
       </div>
       <!-- /.content-wrapper -->
   </section>