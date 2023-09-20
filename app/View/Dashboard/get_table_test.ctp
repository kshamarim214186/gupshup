
<?php echo $this->element('header');

echo $this->element('sidebar');

$countries = $this->requestAction('/dashboard/GetAllCountry');

$profession = $this->requestAction('/dashboard/GetMasterProfession');
//echo "<pre>";
//print_r($countries);dfdgfdg

$success = CakeSession::read('success');
//print_r($this->Session->flash());die;
?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Advance Search</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Members</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <?php if($success == 'yes'){ ?>
	    <div class="alert alert-success alert-dismissible">
		  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		  	<h5><i class="icon fas fa-check"></i> Alert!</h5>
		  	Success alert preview. This alert is dismissable.
		</div>
	<?php } ?>
	<form id="mastersearch" mathod="get" action="<?=ROOT_PATH ?>dashboard/get_all_users">
		<div class="row">
			<div class="col-sm-3">
				<input type="text" name="search_key" placeholder="By Name, Email, Phone" value="<? if(isset($this->params->query['search_key'])){ echo trim($this->params->query['search_key']); }?>" class="form-control">
			</div>

			<div class="col-sm-2">
				<select name="gender_search" id="gender_search" class="form-control">
					<option value="">Select Gender</option>
					<option value="Female" <? if(isset($this->params->query['gender_search']) && $this->params->query['gender_search']=='Female') { ?> selected="selected"<? } ?>>Female</option>

					<option value="Male" <? if(isset($this->params->query['gender_search']) && $this->params->query['gender_search']=='Male') { ?> selected="selected"<? } ?>>Male</option>
				</select>
			</div>

			<div class="col-sm-2">
				<select name="status_search" id="status_search" class="form-control">
					<option value="">Select Status</option>
					<option value="inactive" <? if(isset($this->params->query['status_search']) && $this->params->query['status_search']=='inactive') { ?> selected="selected"<? } ?>>Inactive</option>

					<option value="active" <? if(isset($this->params->query['status_search']) && $this->params->query['status_search']=='active') { ?> selected="selected"<? } ?>>Active</option>
				</select>
			</div>

			<div class="col-sm-2">
				<select name="keyperson" id="keyperson" class="form-control">
					<option value="">Select KeyPerson</option>
					<option value="keyperson" <? if(isset($this->params->query['keyperson']) && $this->params->query['keyperson']=='keyperson') { ?> selected="selected"<? } ?>>KeyPerson</option>
				</select>
			</div>

			<div class="col-sm-2">
				<select name="select_country" id="select_country" class="form-control" onchange="countrycode(this.options[this.selectedIndex].value)">
					<option value="">Select Country</option>
					<option value="101" <? if(isset($this->params->query['select_country']) && $this->params->query['select_country'] == 101) { ?> selected="selected"<? } ?>>India</option>
					<?php foreach ($countries as $singlecountry) { ?>
						<option value="<?php echo $singlecountry['countries']['id']  ?>" <? if(isset($this->params->query['select_country']) && $this->params->query['select_country'] == $singlecountry['countries']['id']) { ?> selected="selected"<? } ?>><?php echo $singlecountry['countries']['name']  ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="col-sm-2">
                <select class="form-control" name="statename" id="Your-state" onchange="statecode(this.options[this.selectedIndex].id)">
                  <option value="" >Select State</option>
                  
                </select>
            </div>

            <div class="col-sm-2">
                <select class="form-control" name="cityname" id="Your-city">
                  <option value="" >Select City</option>
                  
                </select>
            </div>

            <div class="col-sm-2">
				<select name="select_profession" id="select_profession" class="form-control">
					<option value="">Select Profession</option>
					
					<?php foreach ($profession as $singleprofession) { ?>
						<option value="<?php echo $singleprofession['profession']['name']  ?>" <? if(isset($this->params->query['select_profession']) && $this->params->query['select_profession'] == $singleprofession['profession']['name']) { ?> selected="selected"<? } ?>><?php echo $singleprofession['profession']['name']  ?></option>
					<?php } ?>
					<option value="Others-Profession" <? if(isset($this->params->query['select_country']) && $this->params->query['select_country'] == 'Others-Profession') { ?> selected="selected"<? } ?>>Other</option>
				</select>
			</div>

	      	<div class="col-sm-2">
	      		<input type="submit" name="confirm" class="btn btn-success" value="search" class="searchbtn" data-id='1' style=" background: green; color: white; width: 100%;"/>
	      	</div>
	      	
	      	<div class="col-sm-1">
	      		<button type="button" class="btn btn-block btn-info"><a href="<?=ROOT_PATH ?>dashboard/get_all_users" style=" color: white; ">Reset</a></button>
	      	</div>

	      	<div class="col-sm-1">
	      		<button type="button" class="btn btn-block btn-warning"><a href="JavaScript:void(0);" onclick="window.open('<?=ROOT_PATH?>dashboard/export/?<?=$_SERVER['QUERY_STRING']?>','kshama','scrollbars=1,width=1400,height=650,left=100,top=50')" style=" color: black; ">Export</a></button>
	      	</div>

	      	<div class="col-sm-1">
	      		<button type="button" class="btn btn-block btn-warning"><a href="<?=ROOT_PATH ?>dashboard/import_users" style=" color: black; ">Import</a></button>
	      	</div>
	    </div>
    </form>
    <section class="content">
      	<div class="container-fluid">
	        <div class="row">
		        <div class="col-md-12">
		            <div class="card">
		              	<div class="card-header border-transparent">
			                <h3 class="card-title">All Users</h3>
			                <div class="card-tools">
			                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
			                    <i class="fas fa-minus"></i>
			                  </button>
			                  <button type="button" class="btn btn-tool" data-card-widget="remove">
			                    <i class="fas fa-times"></i>
			                  </button>
			                </div>
		              	</div>
		              	<div class="card-body p-0">
			                <div class="table-responsive">
			                  <table class="table m-0 table table-bordered table-striped" id="example1">
			                    <thead>
			                    <tr>
			                      <th>Name</th>
			                      <th>Email</th>
			                      <th>Phone</th>
			                      <?php /*<th>Age</th>
			                      <th>Gender</th>*/ ?>
			                      <th>Verify Status</th>
			                      <th>Country</th>
			                      <th>Action</th>
			                    </tr>
			                    </thead>
			                    <tbody>
			                    <?php foreach ($users as $SingleUsers) { 

			                    	$CountryName = $this->requestAction('/dashboard/GetAllCountry/'.$SingleUsers['User']['country']);
			                    	
			                    	if($SingleUsers['User']['verified_status']=='active'){
			                    		$class="badge badge-success";
			                    	}else{
			                    		$class="badge badge-warning";
			                    	} ?>
			                    
			                    <tr>
			                      	<td><?php echo $SingleUsers['User']['name']; ?></td>
			                      	<td><?php echo $SingleUsers['User']['email']; ?></td>
			                      	<td><?php echo $SingleUsers['User']['phone']; ?></td>
			                      	<?php /*<td><?php echo $SingleUsers['User']['age']; ?></td>
			                      	<td><?php echo $SingleUsers['User']['gender']; ?></td>*/ ?>
			                      	<td><span class="<?php echo $class ?>"><?php echo $SingleUsers['User']['verified_status']; ?></span></td>
			                      	<td><?php echo $CountryName[0]['countries']['name']; ?></td>
			                      	<td>
			                      		<button type="button" class="btn btn-block btn-info"><a href="<?=ROOT_PATH ?>dashboard/Edit/<?= $SingleUsers['User']['id']; ?>" style=" color: white; ">Edit</a></button>
			                      	</td>
			                    </tr>

			                    <?php } ?>

			                    <tr>
									<td colspan="13"><?php
									echo $this->Paginator->counter(array(
									'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
									)); ?>
										
									</td>
								</tr>
								<tr>
									<td colspan="13">
										<div class="paging">
											<?php
											echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
											echo $this->Paginator->numbers(array('separator' => ''));
											echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
											
											?>
										</div>
									</td>
									
								</tr>
			                    
			                    </tbody>
			                  </table>
			                </div>
		              	</div>
		            </div>
		        </div>
	        </div>
      	</div>
    </section>
</div>

<?php echo $this->element('footer'); ?>
<!--<script src="http://crmtech.co.in/js/jquery.js"></script>-->

<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>


<script type="text/javascript">
	function countrycode(val){

        $.ajax({
            url: '<?=ROOT_PATH ?>dashboard/get_country_state/'+val,
            type: 'POST',
            contentType:false,
            processData: false,
            success: function (result) {
                
                $("#Your-state").html(result);
                
            },error: function(XMLHttpRequest, textStatus, errorThrown) {
              
              //$("#contact-form-btn").attr('disabled', false);
            }
        });
    }

    var country = '<?php echo $this->params->query['select_country'] ?>';

    var stateName = '<?php echo $this->params->query['statename'] ?>';

    if(country>0){

    	$.ajax({
            url: '<?=ROOT_PATH ?>dashboard/get_country_state/'+country+'/'+stateName,
            type: 'POST',
            contentType:false,
            processData: false,
            success: function (result) {
                
                $("#Your-state").html(result);
                
            },error: function(XMLHttpRequest, textStatus, errorThrown) {
              
              //$("#contact-form-btn").attr('disabled', false);
            }
        });
    }


    function statecode(val){

        $.ajax({
            url: '<?=ROOT_PATH ?>dashboard/get_state_city/'+val,
            type: 'POST',
            contentType:false,
            processData: false,
            success: function (result) {
                
                $("#Your-city").html(result);
                
            },error: function(XMLHttpRequest, textStatus, errorThrown) {
              
              
            }
        });
    }


    var cityName = '<?php echo $this->params->query['cityname'] ?>';
    if(stateName){

    	$.ajax({
            url: '<?=ROOT_PATH ?>dashboard/get_state_cityByName/'+stateName+'/'+cityName,
            type: 'POST',
            contentType:false,
            processData: false,
            success: function (result) {
                
                $("#Your-city").html(result);
                
            },error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        });
    }


    $(document).ready(function(){
    	var success = "<?php echo CakeSession::read('success') ?>";

    	$(".close").onclick(function(){
    		var opend = 'yes';
    	})

    	if(success == 'yes' || opend == 'yes'){
    		"<?php CakeSession::write('success', '') ?>";

    	}

    });

</script>