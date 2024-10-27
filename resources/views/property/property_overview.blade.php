<x-app-layout>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Property Overview</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Property Overview</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Swiper -->
                        <div class="swiper property-slider mb-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="position-relative ribbon-box">
                                        <div class="ribbon ribbon-danger fw-medium rounded-end mt-2"> For {{ $property->status }}</div>
                                        <div class="dropdown position-absolute top-0 end-0 m-3">
                                            <button class="btn bg-white avatar-xs p-0" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-share"></i>
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
                                        <img src="/assets/images/real-estate/overview-02.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <!--end slider-->

                        <div class="pt-1">
                            <button type="button" class="btn btn-subtle-warning custom-toggle float-end btn-icon btn-sm"
                                data-bs-toggle="button">
                                <span class="icon-on"><i class="bi bi-star"></i></span>
                                <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                            </button>
                            <h6 class="card-title">{{ $property->title }}</h6>
                            <div class="text-muted hstack gap-2 flex-wrap list-unstyled mb-3">
                                <div>
                                    <i class="bi bi-geo-alt align-baseline me-1"></i> {{ $property->address }}, {{ $property->state }}, {{ $property->country }}
                                </div>
                                <div class="vr"></div>
                                <div>
                                    <i class="bi bi-calendar-event align-baseline me-1"></i> {{ $property->created_at }}
                                </div>
                            </div>
                            <p class="text-muted mb-2">Property is <b>any item that a person or a business has legal
                                    title over</b>. Property can be tangible items, such as houses, cars, or appliances,
                                or it can refer to intangible items that carry the promise of future worth, such as
                                stock and bond certificates. There are two types of property. In legal terms, all
                                property will be classified as either <b>personal property or real property</b>. This
                                distinction between types of property comes from English common law, but our modern laws
                                continue to distinguish between the two.</p>
                            <p class="text-muted">Basic Property Unit. Definition. The basic unit of ownership that is
                                recorded in the land books, land registers or equivalent. It is defined by unique
                                ownership and homogeneous real property rights, and may consist of one or more adjacent
                                or geographically separate parcels.</p>
                        </div>

                        <div class="mb-3">
                            <h6 class="card-title mb-3">Property Overview</h6>
                            <div class="row g-3">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-dark-subtle text-dark fs-lg rounded">
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                            </div>
                                            <p class="fs-md mb-0">Ksh {{ number_format($property->price )}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-warning-subtle text-warning fs-lg rounded">
                                                    <i class="bi bi-house"></i>
                                                </div>
                                            </div>
                                            <p class="fs-md mb-0">{{ $property->bedrooms }} Bedrooms</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-danger-subtle text-danger fs-lg rounded">
                                                    <i class="ph ph-bathtub"></i>
                                                </div>
                                            </div>
                                            <p class="fs-md mb-0">{{ $property->bathrooms }} Bathroom</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-info-subtle text-info fs-lg rounded">
                                                    <i class="bi bi-p-circle"></i>
                                                </div>
                                            </div>
                                            <p class="fs-md mb-0">Parking Available</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-success-subtle text-success fs-lg rounded">
                                                    <i class="bi bi-columns"></i>
                                                </div>
                                            </div>
                                            <p class="fs-md mb-0">{{ $property->size }} SQFT</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div
                                                    class="avatar-title bg-secondary-subtle text-secondary fs-lg rounded">
                                                    <i class="bi bi-map"></i>
                                                </div>
                                            </div>
                                            <p class="fs-md mb-0">{{ $property->state }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-primary-subtle text-primary fs-lg rounded">
                                                    <i class="bi bi-buildings"></i>
                                                </div>
                                            </div>
                                            <p class="fs-md mb-0">{{ $property->type }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="card-title mb-3">Property Features</h6>
                            <ul class="list-unstyled hstack flex-wrap gap-3">
                                <li class="w-lg">
                                    Swimming pool
                                </li>
                                <li class="w-lg">
                                    Air conditioning
                                </li>
                                <li class="w-lg">
                                    Electricity
                                </li>
                                <li class="w-lg">
                                    Balcony
                                </li>
                                <li class="w-lg">
                                    Near Green Zone
                                </li>
                                <li class="w-lg">
                                    Near School
                                </li>
                                <li class="w-lg">
                                    Cable TV
                                </li>
                                <li class="w-lg">
                                    Near Shop
                                </li>
                                <li class="w-lg">
                                    Internet
                                </li>
                                <li class="w-lg">
                                    Near Shop
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title mb-0">Property Location</h6>
                    </div>
                    <div class="card-body">
                        <div id="leaflet-map-group-control" class="leaflet-map leaflet-gray" style="min-height: 100%;">
                        </div>
                         <div class="ratio ratio-21x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9552215.402325219!2d-13.426114568463726!3d54.23170485876478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2sin!4v1678784558069!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-xl-3 col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary text-center">
                            <div class="card-body">
                                <h4 class="text-reset fw-normal">Ksh 7000 - Ksh 8000</h4>
                                <p class="text-white-75 fs-md mb-0">Sale Price</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-md rounded mx-auto d-block">
                                    <h5 class="mt-3">Jerry Emard</h5>
                                    <p class="text-muted">OWNER</p>
                                    <p class="text-muted mb-4">73 Alum Rock Rd, Birmingham, West Midland, United Kingdom
                                        - s B8 1LY</p>
                                </div>
                                <ul class="list-unstyled hstack justify-content-center gap-2 mb-0">
                                    <li>
                                        <a href="#!" class="avatar-xs d-inline-block">
                                            <div class="avatar-title rounded bg-primary-subtle text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="avatar-xs d-inline-block">
                                            <div class="avatar-title bg-success-subtle text-success rounded">
                                                <i class="bi bi-whatsapp"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="avatar-xs d-inline-block">
                                            <div class="avatar-title bg-info-subtle text-info rounded">
                                                <i class="bi bi-twitter"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="avatar-xs d-inline-block">
                                            <div class="avatar-title bg-danger-subtle text-danger rounded">
                                                <i class="bi bi-instagram"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="#!" class="float-end link-effect">View More <i
                                        class="bi bi-arrow-right align-baseline ms-1"></i></a>
                                <h6 class="card-title mb-0">Agent Details</h6>
                            </div>
                            <div class="card-body">
                                <div class="d-flex gap-2 align-items-center mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fs-md">Morton Satterfield</h6>
                                        <p class="text-muted mb-0">Agent</p>
                                    </div>
                                </div>
                                <button class="btn btn-secondary w-100" id="agent-chat"><i
                                        class="bi bi-chat-text align-baseline me-1"></i> Get In Touch</button>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
</x-app-layout>
