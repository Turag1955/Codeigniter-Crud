<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="<?php echo base_url()?>dashboard">Dashboard</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0)">Create</a></li>
</ul>
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Admin Create</h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Name</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="name">
						</div>
					</div>
		        <div class="control-group">
						<label class="control-label" for="fileInput">File</label>
						<div class="controls">
							<div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on"
									id="fileInput" type="file"><span class="filename" style="user-select: none;">No file
									selected</span><span class="action" style="user-select: none;">Choose File</span>
							</div>
						</div>
					</div>
				
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</fieldset>
			</form>

		</div>
	</div>
	<!--/span-->

</div>
