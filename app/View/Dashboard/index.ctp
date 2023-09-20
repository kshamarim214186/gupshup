
<?php echo $this->element('header');

echo $this->element('sidebar');

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">

	        <div class="row">
	          <div class="col-md-12">
	            <div class="card">
	              	<!-- /.card-header -->
	              	<div class="card-body">
		                <div class="row">
		                  	<div class="col-lg-6 col-6">
		                  		<div class="row">
		                  			<div class="col-lg-6 col-6">
							            <!-- small box -->
							            <div class="small-box bg-info">
							              <div class="inner">
							                <h3></h3>

							                <p>Total Members</p>
							              </div>
							              <div class="icon">
							                <i class="ion ion-bag"></i>
							              </div>
							            </div>
						          	</div>
		                  		</div>
					        </div>    
		                  	
		                </div>
		                <!-- /.End row -->
	              	</div>
	            </div>
	            <!-- /.card -->
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->
        <!-- /. main row -->
      	</div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php echo $this->element('footer');