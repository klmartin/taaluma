@extends('admin.layout.layout')

@section('content')

	<!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="card bg-teal text-white">
										<div class="card-body">
											<div class="d-flex">
												<h3 class="mb-0">3,450</h3>
												<span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">+53,6%</span>
						                	</div>
						                	
						                	<div>
												Members online
												<div class="fs-sm opacity-75">489 avg</div>
											</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->

								</div>

								<div class="col-lg-4">

									<!-- Current server load -->
									<div class="card bg-pink text-white">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<h3 class="mb-0">49.4%</h3>
												<div class="dropdown d-inline-flex ms-auto">
													<a href="#" class="text-white d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
														<i class="ph-gear"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-end">
														<a href="#" class="dropdown-item">
															<i class="ph-arrows-clockwise me-2"></i>
															Update data
														</a>
														<a href="#" class="dropdown-item">
															<i class="ph-list-dashes me-2"></i>
															Detailed log
														</a>
														<a href="#" class="dropdown-item">
															<i class="ph-chart-line me-2"></i>
															Statistics
														</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">
															<i class="ph-eraser me-2"></i>
															Clear list
														</a>
													</div>
						                		</div>
						                	</div>
						                	
						                	<div>
												Current server load
												<div class="fs-sm opacity-75">34.6% avg</div>
											</div>
										</div>

										<div class="rounded-bottom overflow-hidden" id="server-load"></div>
									</div>
									<!-- /current server load -->

								</div>

								<div class="col-lg-4">

									<!-- Today's revenue -->
									<div class="card bg-primary text-white">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<h3 class="mb-0">$18,390</h3>
												<div class="ms-auto">
							                		<a class="text-white" data-card-action="reload">
							                			<i class="ph-arrows-clockwise"></i>
							                		</a>
							                	</div>
						                	</div>
						                	
						                	<div>
												Today's revenue
												<div class="fs-sm opacity-75">$37,578 avg</div>
											</div>
										</div>

										<div class="rounded-bottom overflow-hidden" id="today-revenue"></div>
									</div>
									<!-- /today's revenue -->

								</div>
							</div>
							<!-- /quick stats boxes -->

@endsection