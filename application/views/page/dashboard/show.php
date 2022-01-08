<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="<?php echo base_url()?>dashboard">Dashboard</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="javascript:void(0)">Show</a></li>
</ul>
<a href="<?php echo base_url()?>dashboard/create" class="btn btn-primary m-5">Admin Add</a>
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-content">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
				<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable"
					id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
					<thead>
						<tr role="row">
							<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
								rowspan="1" colspan="1" aria-sort="ascending"
								aria-label="Username: activate to sort column descending" style="width: 267px;">Username
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
								rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending"
								style="width: 192px;">Date registered</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
								rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending"
								style="width: 103px;">Role</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
								rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"
								style="width: 117px;">Status</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
								rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending"
								style="width: 238px;">Actions</th>
						</tr>
					</thead>

					<tbody role="alert" aria-live="polite" aria-relevant="all">
						<tr class="odd">
							<td class="  sorting_1">Adam Alister</td>
							<td class="center ">2012/01/21</td>
							<td class="center ">Staff</td>
							<td class="center ">
								<span class="label label-success">Active</span>
							</td>
							<td class="center ">
								<a class="btn btn-success" href="#">
									<i class="halflings-icon white zoom-in"></i>
								</a>
								<a class="btn btn-info" href="#">
									<i class="halflings-icon white edit"></i>
								</a>
								<a class="btn btn-danger" href="#">
									<i class="halflings-icon white trash"></i>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!--/span-->

</div>
