<x-app-layout>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Properties</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Properties</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Information Properties</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Property Images<span class="text-danger">*</span></label>
                            <div class="dropzone property-dropzone border border-1 border-dashed text-center">
                                <div class="fallback">
                                    <input name="image" type="file">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-download fs-1"></i>
                                    </div>

                                    <h5 class="fs-md mb-0">Drop files here or click to upload.</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="Property-title-input" class="form-label">Property title<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="title" id="Property-title-input" class="form-control"
                                        placeholder="Enter property title" required>
                                </div>
                                @error('title')
                                    <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                                @enderror
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="Property-type-input" class="form-label">Property Type<span
                                            class="text-danger">*</span></label>

                                    <select class="form-select" name="type" id="Property-type-input" data-choices
                                        data-choices-search-false>
                                        <option value="">Select Property Type</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Residency">Residency</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Others">Other</option>
                                    </select>
                                </div>
                                @error('type')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="Property-type-input" class="form-label">Status<span
                                            class="text-danger">*</span></label>

                                    <select required class="form-select" name="status" id="Property-status-input" data-choices
                                        data-choices-search-false>
                                        <option value="">Select what the Property For</option>
                                        <option value="sale">Sale</option>
                                        <option value="rent">Rent</option>

                                    </select>
                                </div>
                                @error('status')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="bedroom-input" class="form-label">Bedroom<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="bedrooms" id="bedroom-input" class="form-control"
                                        placeholder="Enter Bedroom" required>
                                </div>
                                @error('bedrooms')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="bathroom-input" class="form-label">Bathroom<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="bathrooms" class="form-control" id="bathroom-input"
                                        placeholder="Enter Bathroom" required>
                                </div>
                                @error('bathrooms')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="sqft-input" class="form-label">SQFT<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="size" class="form-control" id="sqft-input"
                                        placeholder="Enter sqft" required>
                                </div>
                                @error('size')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="Property-price-input" class="form-label">Price<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text">Ksh </span>
                                        <input type="number" name="price" class="form-control"
                                            id="Property-price-input" placeholder="Enter price" required>
                                    </div>
                                </div>
                                @error('price')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="street-address" class="form-label">Street Address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control" id="street-address"
                                        placeholder="Enter street address" required>
                                </div>
                                @error('address')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="state-input" class="form-label">State<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="state" class="form-control" id="state-input"
                                        placeholder="Enter state" required>
                                </div>
                                @error('state')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="country-input" class="form-label">Country<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="country" class="form-control" id="country-input"
                                        placeholder="Enter country" required>
                                </div>
                                @error('country')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="zipcode-input" class="form-label">Zipcode<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="zipcode" class="form-control" id="zipcode-input"
                                        placeholder="254 325" required>
                                </div>
                                @error('zipcode')
                                <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                            @enderror
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="swimming-pool" class="form-check-input"
                                        id="additionalFeatures">
                                    <label class="form-check-label" for="additionalFeatures">Swimming pool</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="air-conditioning" class="form-check-input"
                                        id="additionalFeatures2">
                                    <label class="form-check-label" for="additionalFeatures2">Air conditioning</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="electricity" class="form-check-input"
                                        id="additionalFeatures3">
                                    <label class="form-check-label" for="additionalFeatures3">Electricity</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="green-zone" class="form-check-input"
                                        id="additionalFeatures4">
                                    <label class="form-check-label" for="additionalFeatures4">Near Green Zone</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="near-shop" class="form-check-input"
                                        id="additionalFeatures5">
                                    <label class="form-check-label" for="additionalFeatures5">Near Shop</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="near-school" class="form-check-input"
                                        id="additionalFeatures6">
                                    <label class="form-check-label" for="additionalFeatures6">Near School</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="parking" class="form-check-input"
                                        id="additionalFeatures7">
                                    <label class="form-check-label" for="additionalFeatures7">Parking
                                        Available</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="internet" class="form-check-input"
                                        id="additionalFeatures8">
                                    <label class="form-check-label" for="additionalFeatures8">Internet</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="balcony" class="form-check-input"
                                        id="additionalFeatures9">
                                    <label class="form-check-label" for="additionalFeatures9">Balcony</label>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-secondary"><i
                                            class="bi bi-repeat align-baseline me-1"></i> Reset</button>
                                    <button type="submit" class="btn btn-primary"><i
                                            class="bi bi-clipboard2-check align-baseline me-1"></i> Save</button>
                                </div>
                            </div>
                        </div><!--end row-->
                    </form>
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-lg-3">
            <div class="card real-estate-grid-widgets card-animate">
                <div class="card-body p-2">
                    <img src="assets/images/real-estate/img-01.jpg" alt=""
                        class="img-fluid rounded mx-auto d-block">
                    <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm active"
                        data-bs-toggle="button">
                        <span class="icon-on"><i class="bi bi-star"></i></span>
                        <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                    </button>
                    <div class="dropdown dropdown-real-estate">
                        <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#!" data-bs-toggle="modal"><i
                                        class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                            <li><a class="dropdown-item" href="#!" data-bs-toggle="modal"><i
                                        class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-3">
                    <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i>
                        4.5</p>
                    <span class="badge bg-danger-subtle text-danger fs-xxs mb-3"><i
                            class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                    <a href="#!">
                        <h6 class="fs-lg text-capitalize text-truncate">the Country House</h6>
                    </a>
                    <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> West Midlands, United
                        Kingdom</p>
                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                        <li>
                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2
                                Bedroom</p>
                        </li>
                        <li>
                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1
                                Bathroom</p>
                        </li>
                        <li>
                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i>
                                1458 sqft</p>
                        </li>
                    </ul>
                    <div
                        class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                        <h5 class="mb-0">Ksh 2451.39</h5>
                        <a href="apps-real-estate-property-overview.html" class="link-effect">Read More <i
                                class="bi bi-chevron-right align-baseline ms-1"></i></a>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->

        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</x-app-layout>
