<div class="section-header">
	<h1>Orders</h1>
	<div class="section-header-button">
		<a href="features-post-create.html" class="btn btn-primary btn-sm">Add New</a>
	</div>
	<?php include('./partials/breadcrumb.php'); ?>
</div>
<div class="section-body">
	<div class="row">
		<div class="col-12">
			<div class="card mb-0">
				<div class="card-body">
					<ul class="nav nav-pills small">
						<li class="nav-item">
							<a class="nav-link p-1 active" href="#">All <span class="badge badge-white">5</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-1" href="#">Draft <span class="badge badge-primary">1</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-1" href="#">Pending <span class="badge badge-primary">1</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-1" href="#">Trash <span class="badge badge-primary">0</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-12">
			<div class="card">
				<div class="card-body p-3">
					<div class="table-responsive">
						<table class="table table-striped mb-0">
							<tr>
								<th>
									<div class="custom-checkbox custom-control">
										<input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
										<label for="checkbox-all" class="custom-control-label">&nbsp;</label>
									</div>
								</th>
								<th>Invoice</th>
								<th>Date</th>
								<th>Total</th>
								<th>Warehouse</th>
								<th>Billing</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							<tr>
								<td>
									<div class="custom-checkbox custom-control">
										<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
										<label for="checkbox-1" class="custom-control-label">&nbsp;</label>
									</div>
								</td>
								<td>#O101</td>
								<td>2018-01-20</td>
								<td>$1500.00</td>
								<td>Dhaka</td>
								<td>153, Bagbari Uttarpara, Gabtoli, Mirpur, Dhaka - 1216<em class="d-block text-dark small mt-1">via Credit Card(Stripe)</em></td>
								<td><div class="badge badge-success">Completed</div></td>
								<td>
									<div class="d-flex" style="gap: 5px">
										<button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-check"></i></button>
										<button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-ellipsis-h"></i></button>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-checkbox custom-control">
										<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
										<label for="checkbox-1" class="custom-control-label">&nbsp;</label>
									</div>
								</td>
								<td>#O101</td>
								<td>2018-01-20</td>
								<td>$1500.00</td>
								<td>Dhaka</td>
								<td>153, Bagbari Uttarpara, Gabtoli, Mirpur, Dhaka - 1216<em class="d-block text-dark small mt-1">via Credit Card(Stripe)</em></td>
								<td><div class="badge badge-success">Completed</div></td>
								<td>
									<div class="d-flex" style="gap: 5px">
										<button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-check"></i></button>
										<button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-ellipsis-h"></i></button>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<ul class="pagination mb-0 mt-3">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>