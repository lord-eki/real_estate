<x-app-layout>
      <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Real Estate</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">IPMS</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xxl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="d-flex flex-column h-100">
                                <p class="fs-md text-muted mb-4">Properties for sale</p>
                                <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="3652">0</span> <small
                                        class="text-success fs-xs mb-0 ms-1"><i class="bi bi-arrow-up me-1"></i>
                                        06.19%</small></h3>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div id="property_sale" data-colors='["--tb-primary"]' dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="d-flex flex-column h-100">
                                <p class="fs-md text-muted mb-4">Properties for rent</p>
                                <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="1524">0</span> <small
                                        class="text-success fs-xs mb-0 ms-1"><i class="bi bi-arrow-up me-1"></i>
                                        02.33%</small></h3>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div id="property_rent" data-colors='["--tb-warning"]' dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="d-flex flex-column h-100">
                                <p class="fs-md text-muted mb-4">Visitors</p>
                                <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="149.36">0</span>k
                                    <small class="text-success fs-xs mb-0 ms-1"><i class="bi bi-arrow-up me-1"></i>
                                        12.33%</small>
                                </h3>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div id="visitors_chart" data-colors='["--tb-secondary"]' dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="d-flex flex-column h-100">
                                <p class="fs-md text-muted mb-4">Residency Property</p>
                                <h3 class="mb-0 mt-auto"><span class="counter-value" data-target="2376">0</span> <small
                                        class="text-danger fs-xs mb-0 ms-1"><i class="bi bi-arrow-down me-1"></i>
                                        09.57%</small></h3>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div id="residency_property" data-colors='["--tb-success"]' dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-xxl-4 order-last order-xxl-first">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Properties Type</h4>
                    <div class="dropdown card-header-dropdown float-end">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Current Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="property_type"
                        data-colors='["--tb-primary", "--tb-secondary", "--tb-light","--tb-danger", "--tb-success"]'
                        class="e-charts shadow-none" style="height: 336px;"></div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-8">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title flex-grow-1 mb-0">Revenue Overview</h5>
                    <div class="flex-shrink-0">
                        <input type="text" class="form-control form-control-sm" id="exampleInputPassword1"
                            data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y"
                            data-default-date="01 Feb 2023 to 28 Feb 2023">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="nav flex-column nav-light nav-pills gap-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link d-flex p-2 gap-3 active" id="revenue-tab" data-bs-toggle="pill"
                                    href="#revenue" role="tab" aria-controls="revenue" aria-selected="true">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title rounded bg-warning-subtle text-warning fs-2xl">
                                            <i class="bi bi-coin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="text-reset">Ksh <span class="counter-value" data-target="2478">0</span>
                                        </h5>
                                        <p class="mb-0">Total Revenue</p>
                                    </div>
                                </a>
                                <a class="nav-link d-flex p-2 gap-3" id="income-tab" data-bs-toggle="pill"
                                    href="#income" role="tab" aria-controls="income" aria-selected="false">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title rounded bg-success-subtle text-success fs-2xl">
                                            <i class="bi bi-coin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="text-reset">Ksh <span class="counter-value"
                                                data-target="14587.37">0</span></h5>
                                        <p class="mb-0">Total Income</p>
                                    </div>
                                </a>
                                <a class="nav-link d-flex p-2 gap-3" id="property-sale-tab" data-bs-toggle="pill"
                                    href="#property-sale" role="tab" aria-controls="property-sale"
                                    aria-selected="false">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title rounded bg-danger-subtle text-danger fs-2xl">
                                            <i class="bi bi-coin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="text-reset"><span class="counter-value" data-target="2365">0</span>
                                        </h5>
                                        <p class="mb-0">Property Sell</p>
                                    </div>
                                </a>
                                <a class="nav-link d-flex p-2 gap-3" id="_-tab" data-bs-toggle="pill"
                                    href="#propetry-rent" role="tab" aria-controls="propetry-rent"
                                    aria-selected="false">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title rounded bg-primary-subtle text-primary fs-2xl">
                                            <i class="bi bi-coin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="text-reset"><span class="counter-value" data-target="3456">0</span>
                                        </h5>
                                        <p class="mb-0">Property Rent</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-9">
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="revenue" role="tabpanel">
                                    <div id="total_revenue" data-colors='["--tb-primary"]'
                                        class="apex-charts effect-chart" dir="ltr"></div>
                                </div>
                                <!--end tab-->
                                <div class="tab-pane" id="income" role="tabpanel">
                                    <div id="total_income" data-colors='["--tb-success"]' class="apex-charts" dir="ltr">
                                    </div>
                                </div>
                                <div class="tab-pane" id="property-sale" role="tabpanel">
                                    <div id="property_sale_chart" data-colors='["--tb-danger"]' class="apex-charts"
                                        dir="ltr"></div>
                                </div>
                                <div class="tab-pane" id="propetry-rent" role="tabpanel">
                                    <div id="propetry_rent" data-colors='["--tb-info"]' class="apex-charts" dir="ltr">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->


     <div class="row">
                        <div class="col-xxl-9">
                            <div class="card" id="propertyList">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Recently Added Property</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown sortble-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                </span><span class="text-muted dropdown-title">Property Name</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <button class="dropdown-item sort" data-sort="propert_name">Property Name</button>
                                                <button class="dropdown-item sort" data-sort="price">Price</button>
                                                <button class="dropdown-item sort" data-sort="agent_name">Agent Name</button>
                                                <button class="dropdown-item sort" data-sort="status">Status</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="propert_id">#</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="propert_type">Property Type</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="propert_name">Property Name</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="address">Address</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="agent_name">Agent Name</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="price">Price</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                                    <th scope="col" class="sort cursor-pointer">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                @foreach ($property as $property )
                                                <tr>
                                                    <td class="propert_id">
                                                        <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS01</a>
                                                    </td>
                                                    <td class="propert_type">
                                                        Villa
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2 position-relative">
                                                            <img src="assets/images/real-estate/img-01.jpg" alt="" height="35" class="rounded">
                                                            <a href="apps-real-estate-property-overview.html" class="propert_name text-reset stretched-link">{{ $property->title }}</a>
                                                        </div>
                                                    </td>
                                                    <td class="address">
                                                        {{ $property->address }}
                                                    </td>
                                                    <td class="agent_name">{{ $property->agent ? $property->agent : ' - ' }}</td>
                                                    <td class="price">
                                                        <span class="fw-medium">Ksh {{ number_format( $property->price) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-subtle text-danger status">{{ $property->status }}</span>
                                                    </td>
                                                    <td>
                                                        <ul class="d-flex gap-2 list-unstyled mb-0">
                                                            <li>
                                                                <a href="apps-real-estate-property-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#!" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#!" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                @endforeach

                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h4 class="card-title mb-0 flex-grow-1">Customer Feedback</h4>
                                    <div class="flex-shrink-0">
                                        <a href="#!" class="text-muted">View All <i class="bi bi-chevron-right align-baseline"></i></a>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div data-simplebar style="max-height: 400px;">
                                        <div class="card border-bottom rounded-0 border-0 shadow-none mb-0">
                                            <div class="card-body pt-0">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-2.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">04:47 PM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Josefa Weissnat</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 border-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-3.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">11:24 AM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Ophelia Steuber</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" Thank you for this awesome admin panel. I'm very happy with it, it's a pleasure to work with it! "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 border-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-4.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">03:19 PM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Dianna Bogan</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" High theme quality. Very good support, they spent almost an hour remotely to fix a problem. I hope this theme will have a long term support. "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 border-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-5.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">06:39 AM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Jerry Emard</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" There is as lot packed in this template. The savings in time and energy is so worth it. "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 border-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/users/48/avatar-6.jpg" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">09:18 AM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Axel Kozey</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" Works like a component library, a crazy amount of design elements already built and given. "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h4 class="card-title mb-0 flex-grow-1">Popular Property</h4>
                                    <div class="flex-shrink-0">
                                        <div class="nav nav-pills gap-1" id="popularProperty" role="tablist" aria-orientation="vertical">
                                            <button class="btn btn-ghost-danger btn-sm active" id="saleProperty" data-bs-toggle="pill" data-bs-target="#salePropertyTabs" type="button" role="tab" aria-controls="salePropertyTabs" aria-selected="true">Sale</button>
                                            <button class="btn btn-ghost-info btn-sm" id="rentProperty" data-bs-toggle="pill" data-bs-target="#rentPropertyTabs" type="button" role="tab" aria-controls="rentPropertyTabs" aria-selected="false" tabindex="-1">Rent</button>
                                        </div>
                                    </div>
                                </div><!--end header-->
                                <div class="card-body">
                                    <div data-simplebar class="mb-2 mx-n3 px-3" style="height: 406px;">
                                        <div class="tab-content" id="popularPropertyContent">
                                            <div class="tab-pane show active" id="salePropertyTabs" role="tabpanel" aria-labelledby="saleProperty" tabindex="0">
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-08.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Crystal House</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1039 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.5</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-07.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Whitespace Vintage Villa</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1145 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-05.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Northlight Residency</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1859 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.7</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-08.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Park Side Colonial</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 5 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 5643 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.7</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-04.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Marina Hill Vintage</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1963 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.8</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-07.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Grand Cub Hotel</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1543 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.4</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-03.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Evergreen Villa with Residency</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 5 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 3652 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.5</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="rentPropertyTabs" role="tabpanel" aria-labelledby="rentProperty" tabindex="0">
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-01.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Liberty Property</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 1 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 958 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.3</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-02.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Duplex Square Valley</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 2659 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 3.8</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-03.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Small house on an autumn’s</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 2230 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.3</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-07.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>New Grand Hotel Room</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 2785 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-08.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Park Side Colonial</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 5 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 5643 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.7</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-07.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Whitespace Vintage Villa</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1145 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center position-relative">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/real-estate/img-05.jpg" alt="" height="44" class="object-fit-cover rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="apps-real-estate-property-overview.html" class="stretched-link">
                                                            <h6>Nightlight Residency</h6>
                                                        </a>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1324 sqft</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="apps-real-estate-list.html" class="icon-link">View All <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div><!--end card-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-xxl-8">
                            <div class="d-flex flex-column h-100">
                                <div class="row h-100 justify-content-between">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <div class="col-xxl-3 col-md-6 border-end-md border-dashed">
                                                        <div class="text-center">
                                                            <p class="text-muted">Project On Hold</p>
                                                            <div class="mx-3 mb-3 pb-1">
                                                                <div id="mini-chart-6" data-colors='["--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                                            </div>
                                                            <h5 class="mb-0">2451 <small class="badge fs-2xs bg-danger-subtle text-danger ms-1"><i class="ph-arrow-down align-baseline"></i> 1.02%</small></h5>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-xxl-3 col-md-6 border-end-xxl border-dashed">
                                                        <div class="text-center">
                                                            <p class="text-muted">Ongoing Properties</p>
                                                            <div class="mx-3 mb-3 pb-1">
                                                                <div id="mini-chart-7" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                                                            </div>
                                                            <h5 class="mb-0">Ksh 750.36M <small class="badge fs-2xs bg-success-subtle text-success ms-1"><i class="ph-arrow-up align-baseline"></i> 2.17%</small></h5>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-xxl-3 col-md-6 border-end-md border-dashed">
                                                        <div class="text-center">
                                                            <p class="text-muted">Pending Properties</p>
                                                            <div class="mx-3 mb-3 pb-1">
                                                                <div id="mini-chart-8" data-colors='["--tb-warning"]' class="apex-charts" dir="ltr"></div>
                                                            </div>
                                                            <h5 class="mb-0">Ksh 750.36M <small class="badge fs-2xs bg-success-subtle text-success ms-1"><i class="ph-arrow-up align-baseline"></i> 07.26%</small></h5>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted">Completed Project</p>
                                                            <div class="mx-3 mb-3 pb-1">
                                                                <div id="mini-chart-9" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                                                            </div>
                                                            <h5 class="mb-0">4689 <small class="badge fs-2xs bg-success-subtle text-success ms-1"><i class="ph-arrow-up align-baseline"></i> 3.62%</small></h5>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div>
                                        </div><!--end card-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header d-flex align-items-center">
                                                <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                                                <div class="flex-shrink-0">
                                                    <a href="pages-timeline.html" class="text-muted">View All <i class="bi bi-chevron-right align-baseline"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-body px-0">
                                                <div class="px-3" data-simplebar style="height: 255px">
                                                    <div class="acitivity-timeline acitivity-main">
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/32/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1 lh-base">Purchased by James Price</h6>
                                                                <p class="text-muted mb-2">Product noise evolve smartwatch </p>
                                                                <small class="mb-0 text-muted">05:57 AM Today</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/32/avatar-1.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                                                                <p class="text-muted mb-2">Allow users to like products in your WooCommerce store.</p>
                                                                <small class="mb-0 text-muted">25 Dec, 2022</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/32/avatar-3.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1 lh-base">Today offers by <a href="apps-ecommerce-seller-details.html" class="link-secondary">Digitech Galaxy</a></h6>
                                                                <p class="text-muted mb-2">Offer is valid on orders of Ksh 230 Or above for selected products only.</p>
                                                                <small class="mb-0 text-muted">12 Dec, 2022</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/32/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1 lh-base">Favorites Product</h6>
                                                                <p class="text-muted mb-2">Esther James have favorites product.</p>
                                                                <small class="mb-0 text-muted">25 Nov, 2022</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/32/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span></h6>
                                                                <p class="text-muted mb-2">Flash sale by <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                                                <small class="mb-0 text-muted">22 Oct, 2022</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/32/avatar-5.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                                <p class="text-muted mb-2"><span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a></p>
                                                                <small class="mb-0 text-muted">15 Oct, 2022</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header d-flex align-items-center">
                                                <h4 class="card-title mb-0 flex-grow-1">Agent List</h4>
                                                <div class="flex-shrink-0">
                                                    <a href="apps-real-estate-agent-list.html" class="text-muted">View All <i class="bi bi-chevron-right align-baseline"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-body pt-4">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                        </div>
                                                                        <div class="flex-grow-1">Dianna Bogan</div>
                                                                    </div>
                                                                </td>
                                                                <td>United Kingdom</td>
                                                                <td>
                                                                    +(86) 9985-9220
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                        </div>
                                                                        <div class="flex-grow-1">Jansh Brown</div>
                                                                    </div>
                                                                </td>
                                                                <td>Germany</td>
                                                                <td>
                                                                    +(27) 3041-1766
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                        </div>
                                                                        <div class="flex-grow-1">Ayaan Bowen</div>
                                                                    </div>
                                                                </td>
                                                                <td>Brazil</td>
                                                                <td>
                                                                    +(51) 3233-7909
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                        </div>
                                                                        <div class="flex-grow-1">Prezy Mark</div>
                                                                    </div>
                                                                </td>
                                                                <td>Spain</td>
                                                                <td>
                                                                    +(48) 3877-9000
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                        </div>
                                                                        <div class="flex-grow-1">Vihan Hudda</div>
                                                                    </div>
                                                                </td>
                                                                <td>Brazil</td>
                                                                <td>
                                                                    +(11) 3885-1022
                                                                </td>
                                                            </tr><!-- end tr -->
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                        </div>
                                                                        <div class="flex-grow-1">Uriel King</div>
                                                                    </div>
                                                                </td>
                                                                <td>USA</td>
                                                                <td>
                                                                    +(21) 2345-6789
                                                                </td>
                                                            </tr><!-- end tr -->
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div><!--end card-->
                                    </div><!--end col-->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
</x-app-layout>