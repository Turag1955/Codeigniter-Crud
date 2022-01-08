<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="<?php echo base_url()?>student">Student</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0)">Create</a></li>
</ul>
<div class="box span12">
	<div class="box-content">
		<form action="student/store" class="form-horizontal">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="name">Name</label>
					<div class="controls">
						<input class="input-xlarge focused" id="name" type="text" value="" placeholder="Name">
					</div>
				</div>
                <div class="control-group">
					<label class="control-label" for="phone">Phone</label>
					<div class="controls">
						<input class="input-xlarge focused" id="phone" type="text" value="" placeholder="Phone">
					</div>
				</div>
                <div class="control-group">
					<label class="control-label" for="roll">Roll</label>
					<div class="controls">
						<input class="input-xlarge focused" id="roll" type="text" value="" placeholder="Roll">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save</button>

				</div>
			</fieldset>
		</form>

	</div>
</div>
