<x-app-layout>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Listing List</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Properties List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
            <div class="col">
                <div class="card border-bottom border-3 card-animate border-secondary">
                    <div class="card-body">
                        <span class="badge bg-success-subtle text-success float-end"><i
                                class="ph-trend-up align-middle me-1"></i> 3.8%</span>
                        <h4 class="mb-4"><span class="counter-value" data-target="21438">0</span></h4>

                        <p class="text-muted fw-medium text-uppercase mb-0">Total Property Sale</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="card border-bottom border-3 card-animate border-primary">
                    <div class="card-body">
                        <span class="badge bg-success-subtle text-success float-end"><i
                                class="ph-trend-up align-middle me-1"></i> 20.8%</span>
                        <h4 class="mb-4"><span class="counter-value" data-target="5963">0</span></h4>

                        <p class="text-muted fw-medium text-uppercase mb-0">Total Property Rent</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="card border-bottom border-3 card-animate border-warning">
                    <div class="card-body">
                        <span class="badge bg-success-subtle text-success float-end"><i
                                class="ph-trend-up align-middle me-1"></i> 12.6%</span>
                        <h4 class="mb-4"><span class="counter-value"
                                data-target="4620">{{ $property->count() }}</span></h4>

                        <p class="text-muted fw-medium text-uppercase mb-0">Sellers (Agents)</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="card border-bottom border-3 card-animate border-success">
                    <div class="card-body">
                        <span class="badge bg-success-subtle text-success float-end"><i
                                class="ph-trend-up align-middle me-1"></i> 18.7%</span>
                        <h4 class="mb-4"><span class="counter-value" data-target="8541">0</span></h4>

                        <p class="text-muted fw-medium text-uppercase mb-0">Buyers</p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="card border-bottom border-3 card-animate border-danger">
                    <div class="card-body">
                        <span class="badge bg-danger-subtle text-danger float-end"><i
                                class="ph-trend-down align-middle me-1"></i> 7.1%</span>
                        <h4 class="mb-4"><span class="counter-value" data-target="2314">0</span></h4>

                        <p class="text-muted fw-medium text-uppercase mb-0">Upcoming Project</p>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!---end row-->

        <div class="card" id="propertyList">
            <div class="card-header">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-3 col-md-6 order-last order-md-first me-auto">
                        <div class="search-box">
                            <input type="text" class="form-control search"
                                placeholder="Search for property, price or something...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-auto col-6 text-end">
                        <div class="d-flex flex-wrap align-items-start gap-2">
                            <button class="btn btn-subtle-danger d-none" id="remove-actions"
                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            <button class="btn btn-secondary add-btn" data-bs-toggle="modal"
                                data-bs-target="#addProperty"><i class="bi bi-house align-baseline me-1"></i> Add
                                Property</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th scope="col" class="sort cursor-pointer desc" data-sort="propert_id">#</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="propert_Name">Property Name
                                </th>
                                <th scope="col" class="sort cursor-pointer" data-sort="address">Address</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="bedroom">Beds</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="propert_type">Property Type
                                </th>
                                <th scope="col" class="sort cursor-pointer" data-sort="sqft">Sqft</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="agents">Agents</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="amount">Price</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="status">Sale/Rent</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list form-check-all">
                            @foreach ($property as $property)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td class="id"><a href="{{ route('properties.show' , ['property' => $property]) }}"
                                            class="fw-medium link-primary">#TBS01</a></td>
                                    <td class="propert_Name text-capitalize"><a href="{{ route('properties.show' , ['property' => $property]) }}"
                                            class="text-reset">{{ $property->title }}</a></td>
                                    <td class="address">{{ $property->state }}</td>
                                    <td class="bedroom">{{ $property->bedrooms }}</td>
                                    <td class="bathroom d-none">{{ $property->bathrooms }}</td>
                                    <td class="propert_type">{{ $property->type }}</td>
                                    <td class="sqft">{{ $property->size }}</td>
                                    <td class="agents">{{ $property->agent ? $property->agent : ' - ' }}</td>
                                    <td class="amount"><span class="fw-medium">Ksh
                                            {{ number_format($property->price) }}</span></td>
                                    <td class="status"><span
                                            class="badge bg-danger-subtle text-danger">{{ $property->status }}</span>
                                    </td>
                                    <td>
                                        <ul class="d-flex gap-2 list-unstyled mb-0">
                                            <li>
                                                <a href="{{ route('properties.show' , ['property' => $property]) }}"
                                                    class="btn btn-subtle-primary btn-icon btn-sm "><i
                                                        class="ph-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="#addProperty" data-bs-toggle="modal"
                                                    class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                        class="ph-pencil"></i></a>
                                            </li>
                                            <li>
                                                <a href="#deleteRecordModal" data-bs-toggle="modal"
                                                    class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i
                                                        class="ph-trash"></i></a>
                                            </li>
                                        </ul>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody><!-- end tbody -->

                    </table><!-- end table -->

                    {{-- <div>
                        {{ $property->links }}
                    </div> --}}

                    <div class="noresult" style="display: none">
                        <div class="text-center py-4">
                            <i class="ph-magnifying-glass fs-1 text-primary"></i>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                            <p class="text-muted mb-0">We've searched more than 150+ property We did not find any
                                property for you search.</p>
                        </div>
                    </div>

                </div>

                <div class="row align-items-center mt-3" id="pagination-element">
                    <div class="col-sm">
                        <div class="text-muted text-center text-sm-start">
                            Showing <span class="fw-semibold">8</span> of <span class="fw-semibold">15</span> Results
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-sm-auto mt-3 mt-sm-0">
                        <div class="pagination-wrap justify-content-center hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="javascript:void(0)">Previous</a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="javascript:void(0)">Next</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addProperty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Property</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-addPropertyModal"></button>
                </div>

                <form action="{{ route('properties.store') }}" method="POST" class="tablelist-form"
                    autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field">

                        <div class="mb-3">
                            <label class="form-label">Property Images<span class="text-danger">*</span></label>
                            <div class="dropzone property-dropzone border border-1 border-dashed text-center"
                                style="min-height: 100px;">
                                <div class="fallback">
                                    <input name="image" type="file" required>
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-download fs-1"></i>
                                    </div>

                                    <h5 class="fs-md mb-0">Drop files here or click to upload.</h5>
                                </div>
                            </div>
                            @error('image')
                                <p class="text-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="property-title-input" class="form-label">Property title<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Enter Property title" required>
                                </div>
                                @error('title')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="property-type-input" class="form-label">Property Type<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="type" id="type" required>
                                        <option value="Villa">Villa</option>
                                        <option value="Residency">Residency</option>
                                        <option value="Apartment" selected>Apartment</option>
                                        <option value="Others">Other</option>
                                    </select>
                                </div>
                                @error('type')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="bedroom-input" class="form-label">Bedroom<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="bedrooms" id="bedrooms" class="form-control"
                                        placeholder="Enter Bedrooms" required>
                                </div>
                                @error('bedrooms')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="bathroom-input" class="form-label">Bathroom<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="bathrooms" class="form-control" id="bathrooms"
                                        placeholder="Enter Bathroom" required>
                                </div>
                                @error('bathrooms')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="sqft-input" class="form-label">SQFT<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="size" class="form-control" id="size"
                                        placeholder="Enter sqft" required>
                                </div>
                                @error('size')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="property-price-input" class="form-label">Price<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text">Ksh </span>
                                        <input type="number" name="price" class="form-control" id="price"
                                            placeholder="Enter price" required>
                                    </div>
                                    @error('price')
                                        <p class="text-danger ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="agent-name-input" class="form-label">Agent Name<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="agent" class="form-control" id="agent"
                                        placeholder="Enter Agent Name " required>
                                </div>
                                @error('agent')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="requirement-input" class="form-label">Property Status<span
                                            class="text-danger">*</span></label>

                                    <select class="form-select" name="status" id="requirement-input" required>
                                        <option value="sale" selected>Sale</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                </div>
                                @error('status')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="state-input" class="form-label">State<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="state" id="state-input" rows="3"
                                        placeholder="Enter  State" required></textarea>
                                </div>
                                @error('state')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="zipcode-input" class="form-label">Zipcode<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="zipcode" id="zipcode-input" rows="3"
                                        placeholder="Enter  Zipcode" required />
                                </div>
                                @error('zipcode')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="country-input" class="form-label">Country<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" name="country" id="country-input" rows="3"
                                        placeholder="Enter  country" required />
                                </div>
                                @error('country')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="addressLine-input" class="form-label">Address<span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" name="address" id="addressLine-input" rows="3" placeholder="Enter  Address"
                                        required></textarea>
                                </div>
                                @error('address')
                                    <p class="text-danger ">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                    class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                            <button type="submit" class="btn btn-primary" id="add-btn">Add Property</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- modal-content -->
        </div>
    </div>
    <!--end add Property modal-->


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
