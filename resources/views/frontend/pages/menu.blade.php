@extends('frontend.layouts.app')
@section('title', 'Restaurant')
@section('hero_section')
<section class="page-top-info set-bg" data-setbg="{{asset('assets/img/page-top-bg/2.jpg')}}">
    <div class="ptf-center">
        <div class="container">
            <h2>The menu<span>.</span></h2>
        </div>
    </div>
</section>
@endsection
@section('main_section')
    <!-- Menu section -->
	<section class="mp-menu-section spad">
		<div class="container">
			<div class="section-title">
				<i class="flaticon-022-tray"></i>
				<h2>Our Menu</h2>
			</div>
			<ul class="mp-menu-tab-nav nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
						<i class="flaticon-005-coffee-1"></i>
						<div class="mpm-text">
							<h5>Breakfast</h5>
							<p>Weekdays  8:30a.m. — 11:30a.m.</p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
						<i class="flaticon-013-salad"></i>
						<div class="mpm-text">
							<h5>Brunch</h5>
							<p>Weekdays  8:30a.m. — 11:30a.m.</p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
						<i class="flaticon-008-soup"></i>
						<div class="mpm-text">
							<h5>Lunch</h5>
							<p>Weekdays  8:30a.m. — 11:30a.m.</p>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
						<i class="flaticon-018-lobster"></i>
						<div class="mpm-text">
							<h5>Dinner</h5>
							<p>Weekdays  8:30a.m. — 11:30a.m.</p>
						</div>
					</a>
				</li>
			</ul>
			<div class="tab-content menu-tab-content">
				<!-- single tab content -->
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<div class="row menu-dark">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
					<div class="row menu-dark">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
					<div class="row menu-dark">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
					<div class="row menu-dark">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Menu section end -->


	<!-- Menu section -->
	<section class="menu-section spad set-bg" data-setbg="{{asset('assets/img/menu-bg.jpg')}}">
		<div class="container">
			<div class="section-title text-white">
				<i class="flaticon-001-wine"></i>
				<h2>Drinks Menu</h2>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<!-- menu item -->
					<div class="menu-item">
						<h5>Scrambled Eggs with ham</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$9.00</div>
						</div>
					</div>
					<!-- menu item -->
					<div class="menu-item">
						<h5>Scrambled Eggs in Puff Pastry</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$11.00</div>
						</div>
					</div>
					<!-- menu item -->
					<div class="menu-item">
						<h5>Eggs Benedict</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$6.00</div>
						</div>
					</div>
					<!-- menu item -->
					<div class="menu-item">
						<h5>Soft-Boiled Organic Egg</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$8.00</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<!-- menu item -->
					<div class="menu-item">
						<h5>Scrambled Eggs with ham</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$9.00</div>
						</div>
					</div>
					<!-- menu item -->
					<div class="menu-item">
						<h5>Scrambled Eggs in Puff Pastry</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$11.00</div>
						</div>
					</div>
					<!-- menu item -->
					<div class="menu-item">
						<h5>Eggs Benedict</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$6.00</div>
						</div>
					</div>
					<!-- menu item -->
					<div class="menu-item">
						<h5>Soft-Boiled Organic Egg</h5>
						<div class="mi-meta">
							<p>with wild mushrooms and asparagus</p>
							<div class="menu-price">$8.00</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="site-btn">See More</a>
			</div>
		</div>
	</section>
	<!-- Menu section end -->


	<!-- Featured sectoon -->
	<section class="featured-section set-bg" data-setbg="{{asset('assets/img/featured-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 featured">
					<div class="section-title st-no-style text-left">
						<i class="flaticon-022-tray"></i>
						<h2 class="p-0">This week’s dish</h2>
					</div>
					<div class="menu-dark">
						<div class="menu-item">
								<h5>Asparagus Soup</h5>
								<div class="mi-meta">
								<p>with wild mushrooms and asparagus</p>
								<div class="menu-price">$9.00</div>
							</div>
						</div>
					</div>
					<p class="pb-3">Nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat.  Stpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium.</p>

					<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat.  Stpat sem. Vivamus rutrum dui fermentum eros hendrerit.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Featured sectoon end -->
@endsection
