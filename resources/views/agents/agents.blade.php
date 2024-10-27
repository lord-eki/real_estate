<x-app-layout>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Agent List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Agent List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="agentList">
                <div class="card-header">
                    <div class="row align-items-center gy-3">
                        <div class="col-lg-3 col-md-6 order-last order-md-first me-auto">
                            <div class="search-box">
                                <input type="text" class="form-control search"
                                    placeholder="Search for agent, email, address or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-auto col-6 text-end">
                            <div class="d-flex flex-wrap align-items-start gap-2">
                                <button class="btn btn-subtle-danger d-none" id="remove-actions"
                                    onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addAgent"><i
                                        class="bi bi-person-plus align-baseline me-1"></i> Add Agent</button>
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
                                            <input class="form-check-input" type="checkbox" value="option"
                                                id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="agent_id">#</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="joining_date">Date</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="agent_Name">Agent Name</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="address">Address</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="email">Email</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="contact">Contacts</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                @foreach ($agent as  $agent)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td class="agent_id"><a href="{{ route('agents.overview') }}"
                                            class="fw-medium link-primary">#IPMSA1</a></td>
                                    <td class="joining_date">{{ $agent->created_at }}</td>
                                    <td class="agent_Name">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/avatar-2.jpg" alt=""
                                                class="avatar-xs rounded">
                                            <a href="apps-real-estate-agent-overview.html"
                                                class="text-reset text-capitalize">{{ $agent->name }}</a>
                                        </div>
                                    </td>
                                    <td class="address">{{ $agent->address }}</td>
                                    <td class="email">{{ $agent->email }}</td>
                                    <td class="contact">{{ $agent->contact }}</td>
                                    <td class="status"><span class="badge bg-success-subtle text-success">{{ $agent->status }}</span>
                                    </td>
                                    <td>
                                        <ul class="d-flex gap-2 list-unstyled mb-0">
                                            <li>
                                                <a href="apps-real-estate-agent-overview.html"
                                                    class="btn btn-subtle-primary btn-icon btn-sm "><i
                                                        class="ph-eye"></i></a>
                                            </li>
                                            <li>
                                                <a href="#addAgent" data-bs-toggle="modal"
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
                        <div class="noresult" style="display: none">
                            <div class="text-center py-4">
                                <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ agent We did not find any agent
                                    for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 align-items-center" id="pagination-element">
                        <div class="col-sm">
                            <div class="text-muted text-center text-sm-start">
                                Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span>
                                Results
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-sm-auto mt-3 mt-sm-0">
                            <div class="pagination-wrap justify-content-center hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="javascript:void(0)">
                                    Next
                                </a>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addAgent" tabindex="-1" aria-labelledby="addAgentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAgentModalLabel">Add Agent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addAgentModal"></button>
                </div>

                <form class="tablelist-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field"  >

                        <div class="mb-3">
                            <label class="form-label">Agent Image<span class="text-danger">*</span></label>
                            <div class="dropzone border border-1 border-dashed text-center" style="min-height: 100px;">
                                <div class="fallback">
                                    <input name="file" type="file">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-download fs-1"></i>
                                    </div>

                                    <h5 class="fs-md mb-0">Drop Image here or click to upload.</h5>
                                </div>
                            </div>


                        </div>

                        <div class="mb-3">
                            <label for="agent-name-input" class="form-label">Agent Name<span class="text-danger">*</span></label>
                            <input name="name" type="text" id="agent-name-input" class="form-control" placeholder="Enter agent name" required >
                        </div>
                        <div class="mb-3">
                            <label for="agency-name-input" class="form-label">Agency<span class="text-danger">*</span></label>
                            <input name="agency" type="text" id="agency-name-input" class="form-control" placeholder="Enter agency name" required >
                        </div>

                        <div class="mb-3">
                            <label for="email-input" class="form-label">Email<span class="text-danger">*</span></label>
                            <input name="email" type="email" class="form-control" id="email-input" placeholder="Enter email" required >
                        </div>

                        <div class="mb-3">
                            <label for="contact-input" class="form-label">Contact Number<span class="text-danger">*</span></label>
                            <input name="contact" type="text" class="form-control" id="contact-input" placeholder="Enter contact number" required >
                        </div>

                        <div class="mb-3">
                            <label for="status-type-input" class="form-label">Status<span class="text-danger">*</span></label>
                            <select class="form-select" id="status-type-input" name="status">
                                <option value="Active">Active</option>
                                <option value="Unactive">Inactive</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="address-input" class="form-label">Address<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="address-input" name="address" rows="3" placeholder="PO BOX 135-100, Machakos" required></textarea>
                        </div>
                        <input type="hidden" id="date-input">
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                            <button type="submit" class="btn btn-primary" id="add-btn">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- modal-content -->
        </div>
    </div><!--end add Property modal-->

        <!-- deleteRecordModal -->
        <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-5"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted fs-md mx-3 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /deleteRecordModal -->



</x-app-layout>
