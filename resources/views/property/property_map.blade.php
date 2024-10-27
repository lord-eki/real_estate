<x-app-layout>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Property Maps</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Properties Map</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <!-- <div class="col-lg-3">
                        <h6 class="card-title">Property</h6>
                    </div> -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="search-box">
                                <input type="text" class="form-control search"
                                    placeholder="Search products, price etc...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-xl col-sm-6">
                            <select class="form-control" id="idType" data-choices data-choices-search-false>
                                <option value="all">Select All Type</option>
                                <option value="Villa">Villa</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Residency">Residency</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-xl col-sm-6">
                            <select class="form-control" id="idBedroom" data-choices data-choices-search-false>
                                <option value="all">Select All</option>
                                <option value="1">1 Bedroom</option>
                                <option value="2">2 Bedroom</option>
                                <option value="3">3 Bedroom</option>
                                <option value="4">4 Bedroom</option>
                                <option value="5">5 Bedroom</option>
                            </select>
                        </div>
                        <div class="col-xl col-sm-6">
                            <select class="form-control" data-choices data-choices-search-false>
                                <option value="all">Select All</option>
                                <option value="0-$2000">0-$1000</option>
                                <option value="$1000-$2000">$1000-$2000</option>
                                <option value="$2000-$3000">$2000-$3000</option>
                                <option value="$3000-$4000">$3000-$4000</option>
                                <option value="$4000-$5000">$4000-$5000</option>
                            </select>
                        </div>
                        <div class="col-xl col-sm-6">
                            <div>
                                <input type="text" class="form-control" data-provider="flatpickr"
                                    data-date-format="d M, Y" data-range-date="true" id="demo-datepicker"
                                    placeholder="Select date">
                            </div>
                        </div>
                        {{-- <div class="col-xl col-sm-6">
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addProperty">Add Property</button>
                    </div> --}}
                    </div><!--end row-->
                </div><!--end card-body-->
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="row g-0">
                <div class="col-xl-5">

                    @foreach ($property as $property)
                        <div class="card-body border-bottom">
                            <div class="row gy-3">
                                <div class="col-lg-5">
                                    <div class="position-relative">
                                        <img src="assets/images/real-estate/img-02.jpg" alt=""
                                            class="img-fluid rounded d-block mx-auto">
                                        <div class="position-absolute bottom-0 start-0 m-2">
                                            <span class="badge bg-white text-success fs-xxs"><i
                                                    class="bi bi-buildings align-baseline me-1"></i>
                                                {{ $property->type }}</span>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-7">
                                    <div class="d-flex flex-column h-100">
                                        <div>
                                            <div class="dropdown float-end">
                                                <button class="btn btn-light btn-icon btn-sm" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#addProperty"
                                                            data-bs-toggle="modal"><i
                                                                class="bi bi-pencil-square me-1 align-baseline"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item" href="#deleteRecordModal"
                                                            data-bs-toggle="modal"><i
                                                                class="bi bi-trash3 me-1 align-baseline"></i> Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h6 class="fs-lg text-capitalize text-truncate"><a
                                                    href="apps-real-estate-property-overview.html"
                                                    class="text-reset">{{ $property->title }}</a></h6>
                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i>
                                                {{ $property->state }}, {{ $property->country }}</p>
                                        </div>
                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                            <li>
                                                <p class="text-muted mb-0"><i
                                                        class="bi bi-house align-baseline text-primary me-1"></i>
                                                    {{ $property->bedrooms }} Bedrooms</p>
                                            </li>
                                            <li>
                                                <p class="text-muted mb-0"><i
                                                        class="ph ph-bathtub align-middle text-primary me-1"></i>
                                                    {{ $property->bathrooms }} Bathrooms</p>
                                            </li>
                                            <li>
                                                <p class="text-muted mb-0"><i
                                                        class="bi bi-columns align-baseline text-primary me-1"></i>
                                                    {{ $property->size }} sqft</p>
                                            </li>
                                        </ul>
                                        <div
                                            class="border-top border-dashed mt-auto pt-3 d-flex align-items-center justify-content-between gap-3">
                                            <h5 class="mb-0">Ksh {{ number_format($property->price) }}</h5>
                                            <a href="apps-real-estate-property-overview.html" class="link-effect">Read
                                                More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    @endforeach

                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm">
                                <div class="text-muted text-center text-sm-start">
                                    Showing <span class="fw-semibold">4</span> of <span class="fw-semibold">10</span>
                                    Results
                                </div>
                            </div><!--end col-->
                            <div class="col-sm-auto mt-3 mt-sm-0">
                                <div class="pagination-wrap hstack justify-content-center gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0">
                                        <li class="active"><a class="page" href="#" data-i="1"
                                                data-page="10">1</a></li>
                                        <li><a class="page" href="#" data-i="2" data-page="10">2</a>
                                        </li>
                                        <li><a class="page" href="#" data-i="3" data-page="10">3</a>
                                        </li>
                                    </ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end col-->
                <div class="col-xl-7">
                    <div id="leaflet-map-group-control" class="leaflet-map leaflet-gray rounded"
                        style="min-height: 100%;"></div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div>


    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-5"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted mx-3 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete
                            It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /deleteRecordModal -->


</x-app-layout>
