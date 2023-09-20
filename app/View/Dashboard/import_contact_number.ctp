	
<?php echo $this->element('header');

echo $this->element('sidebar');
?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Import Contact Number</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <?php echo $this->Form->create('dashboard',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Import Contact Number'); ?></legend>
	<table>
    <tr><td><input type="file" name="file" /></td></tr>

	<tr><td><?php echo $this->Form->end(__('Submit')); ?></td></tr>
	</fieldset> 

</div>
<?php echo $this->element('footer'); ?>

