<x-app-layout>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Earnings</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Earnings</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
    <div class="col">
        <div class="card border-bottom border-2 card-animate border-secondary">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 9.3%</span>
                <h4 class="mb-4">Ksh <span class="counter-value" data-target="798.97">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Total Revenue</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-2 card-animate border-primary">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 20.8%</span>
                <h4 class="mb-4">Ksh <span class="counter-value" data-target="2356">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Daily Earning</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-2 card-animate border-warning">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 12.6%</span>
                <h4 class="mb-4">Ksh <span class="counter-value" data-target="337.32">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Total Balance</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-2 card-animate border-success">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 18.7%</span>
                <h4 class="mb-4">Ksh <span class="counter-value" data-target="365.32">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">On hold</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-2 card-animate border-danger">
            <div class="card-body">
                <span class="badge bg-danger-subtle text-danger float-end"><i class="ph-trend-down align-middle me-1"></i> 7.1%</span>
                <h4 class="mb-4">Ksh <span class="counter-value" data-target="247.19">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Expenses</p>
            </div>
        </div>
    </div>
</div><!---end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body pb-0 mb-n4">
                <div class="d-flex z-1 position-relative">
                    <div class="flex-shrink-0">
                        <div data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-default-date="01 June 2024 to 31 July 2024">01 June 2024 to 1 July 2024 <i class="ph-caret-down align-middle ms-1"></i></div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0 mt-4 mt-md-0">
                <div id="line_chart_basic" data-colors='["--tb-primary", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card" id="agenciesList">
            <div class="card-header">
                <div class="row align-items-center gy-3">
                    <div class="col-xl-3 col-lg-4 col-md-6 order-last order-md-first me-auto">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Search for transaction, date or something...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div><!--end col-->
                    <div class="col-xl-auto col-lg-3 col-md-5">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted flex-shrink-0">Sort by: </span>
                            <div class="flex-grow-1">
                                <select class="form-control" id="select-category" data-choices data-choices-search-false>
                                    <option value="All Select">All Select</option>
                                    <option value="Email">Email</option>
                                    <option value="Agencies Name">Agencies</option>
                                    <option value="Address">Address</option>
                                    <option value="Total Property">Total Property</option>
                                    <option value="Employee">Employee</option>
                                </select>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-all">
                                        <label class="form-check-label" for="checkbox-all"></label>
                                    </div>
                                </th>
                                <th scope="col" class="sort cursor-pointer" data-sort="in_out">#</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="transactionID">Transaction ID</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="timestamp">Timestamp</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="details">Details</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="type">Type</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-1">
                                        <label class="form-check-label" for="checkbox-1"></label>
                                    </div>
                                </td>
                                <td class="in_out text-danger fs-md"><i class="ph ph-trend-up"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852369012</a></td>
                                <td class="timestamp">14 Nov, 2022 <small class="text-muted">12:38PM</small></td>
                                <td class="details">Membership Fees</td>
                                <td class="type">
                                    Debit
                                </td>
                                <td class="amount">Ksh 236.41</td>
                                <td class="status"><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-2">
                                        <label class="form-check-label" for="checkbox-2"></label>
                                    </div>
                                </td>
                                <td class="in_out text-success fs-md"><i class="ph ph-trend-down"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852363645</a></td>
                                <td class="timestamp">02 Jan, 2023 <small class="text-muted">11:22PM</small></td>
                                <td class="details">British Pound Sterling Block</td>
                                <td class="type">
                                    Credit
                                </td>
                                <td class="amount">Ksh 875.32</td>
                                <td class="status"><span class="badge bg-success-subtle text-success">Successful</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-3">
                                        <label class="form-check-label" for="checkbox-3"></label>
                                    </div>
                                </td>
                                <td class="in_out text-success fs-md"><i class="ph ph-trend-down"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852362451</a></td>
                                <td class="timestamp">27 Jan, 2023 <small class="text-muted">03:19AM</small></td>
                                <td class="details">Fashion T-Shirts Purchase</td>
                                <td class="type">
                                    Credit
                                </td>
                                <td class="amount">Ksh 214.00</td>
                                <td class="status"><span class="badge bg-success-subtle text-success">Successful</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-4">
                                        <label class="form-check-label" for="checkbox-4"></label>
                                    </div>
                                </td>
                                <td class="in_out text-success fs-md"><i class="ph ph-trend-down"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852315960</a></td>
                                <td class="timestamp">28 Jan, 2023 <small class="text-muted">05:36AM</small></td>
                                <td class="details">The Country House</td>
                                <td class="type">
                                    Credit
                                </td>
                                <td class="amount">Ksh 1470.50</td>
                                <td class="status"><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-5">
                                        <label class="form-check-label" for="checkbox-5"></label>
                                    </div>
                                </td>
                                <td class="in_out text-danger fs-md"><i class="ph ph-trend-up"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852319632</a></td>
                                <td class="timestamp">01 Feb, 2023 <small class="text-muted">07:19PM</small></td>
                                <td class="details">Vintage Apartment</td>
                                <td class="type">
                                    Debit
                                </td>
                                <td class="amount">Ksh 3526.00</td>
                                <td class="status"><span class="badge bg-success-subtle text-success">Successful</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-6">
                                        <label class="form-check-label" for="checkbox-6"></label>
                                    </div>
                                </td>
                                <td class="in_out text-danger fs-md"><i class="ph ph-trend-up"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852310391</a></td>
                                <td class="timestamp">04 Feb, 2023 <small class="text-muted">07:19PM</small></td>
                                <td class="details">Duplex Square Valley</td>
                                <td class="type">
                                    Debit
                                </td>
                                <td class="amount">Ksh 215.00</td>
                                <td class="status"><span class="badge bg-success-subtle text-success">Successful</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-7">
                                        <label class="form-check-label" for="checkbox-7"></label>
                                    </div>
                                </td>
                                <td class="in_out text-success fs-md"><i class="ph ph-trend-down"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852310298</a></td>
                                <td class="timestamp">22 Feb, 2023 <small class="text-muted">07:19PM</small></td>
                                <td class="details">Crystal House</td>
                                <td class="type">
                                    Credit
                                </td>
                                <td class="amount">Ksh 678.00</td>
                                <td class="status"><span class="badge bg-danger-subtle text-danger">Cancelled</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-8">
                                        <label class="form-check-label" for="checkbox-8"></label>
                                    </div>
                                </td>
                                <td class="in_out text-danger fs-md"><i class="ph ph-trend-up"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852310341</a></td>
                                <td class="timestamp">12 Dec, 2022 <small class="text-muted">01:57PM</small></td>
                                <td class="details">Swimming pool side of the residential Ascot home.</td>
                                <td class="type">
                                    Debit
                                </td>
                                <td class="amount">Ksh 1024.00</td>
                                <td class="status"><span class="badge bg-success-subtle text-success">Successful</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-9">
                                        <label class="form-check-label" for="checkbox-9"></label>
                                    </div>
                                </td>
                                <td class="in_out text-success fs-md"><i class="ph ph-trend-down"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852310003</a></td>
                                <td class="timestamp">19 Dec, 2022 <small class="text-muted">10:33AM</small></td>
                                <td class="details">Small house on an autumn’s day</td>
                                <td class="type">
                                    Credit
                                </td>
                                <td class="amount">Ksh 1024.00</td>
                                <td class="status"><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkbox-10">
                                        <label class="form-check-label" for="checkbox-10"></label>
                                    </div>
                                </td>
                                <td class="in_out text-success fs-md"><i class="ph ph-trend-down"></i></td>
                                <td class="transactionID"><a href="apps-real-estate-agencies-overview.html" class="fw-medium link-primary">#147852310298</a></td>
                                <td class="timestamp">22 Feb, 2023 <small class="text-muted">07:19PM</small></td>
                                <td class="details">Crystal House</td>
                                <td class="type">
                                    Credit
                                </td>
                                <td class="amount">Ksh 678.00</td>
                                <td class="status"><span class="badge bg-danger-subtle text-danger">Cancelled</span></td>
                            </tr>
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                    <div class="noresult" style="display: none">
                        <div class="text-center py-4">
                            <i class="ph-magnifying-glass fs-1 text-primary"></i>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                            <p class="text-muted mb-0">We've searched more than 150+ agencies We did not find any agencies for you search.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center text-center text-sm-start mt-3">
                    <div class="col-sm">
                        <div class="text-muted text-center text-sm-start">
                            Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                        </div>
                    </div><!--end col-->
                    <div class="col-sm-auto mt-3 mt-sm-0">
                        <div class="pagination-wrap hstack justify-content-center gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0">
                                <li class="active"><a class="page" href="#" data-i="1" data-page="10">1</a></li>
                                <li><a class="page" href="#" data-i="2" data-page="10">2</a></li>
                            </ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
</x-app-layout>