<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-sidebar="dark"
    data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IPMS') }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="/dashboard" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                    <a href="/dashboard" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">

                            <li class="menu-title"><span data-key="t-menu">Dashboard</span></li>
                            <li class="nav-item">
                                <a href="#sidebarProperty" class="nav-link menu-link collapsed"
                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                    aria-controls="sidebarProperty">
                                    <i class="ph-buildings"></i> <span data-key="t-property">Property</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProperty">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('properties.index') }}" class="nav-link" data-key="t-listing-grid">Property
                                                Listing </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('property.map')}}" class="nav-link" data-key="t-listing-map">Property
                                                Map</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarAgent" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarAgent"
                                                data-key="t-agent"> Agents </a>
                                            <div class="collapse menu-dropdown" id="sidebarAgent">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('agents.index')}}" class="nav-link" data-key="t-list-view"> Agents
                                                            Listing </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="{{ route('agents.overview') }}" class="nav-link" data-key="t-overview"> Overview
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('properties.create')}}" class="nav-link" data-key="t-add-property">Add
                                                Property</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/earnings" class="nav-link" data-key="t-earnings">Earnings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link collapsed" href="#sidebarUnits" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarUnits">
                                    <i class="ph-layout"></i> <span data-key="t-layouts">Units</span> <span
                                        class="badge badge-pill bg-success" data-key="t-hot">0</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarUnits">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('units.create') }}" class="nav-link" data-key="t-horizontal">Add
                                                Unit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#"  class="nav-link" data-key="t-detached">List
                                                Units</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link collapsed" href="#sidebarTenants" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarTenants">
                                    <i class="ph-address-book"></i> <span data-key="t-layouts">Tenants</span> <span
                                        class="badge badge-pill bg-success" data-key="t-hot">0</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTenants">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="l#" target="_blank" class="nav-link" data-key="t-horizontal">Add
                                                Tenant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" target="_blank" class="nav-link" data-key="t-detached">Tenants
                                                Listing</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarInvoices" class="nav-link menu-link collapsed"
                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                    aria-controls="sidebarInvoices">
                                    <i class="ph-file-text"></i> <span data-key="t-invoices">Invoices</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarInvoices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('invoices.index')}}" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="/invoice" class="nav-link" data-key="t-create-invoice">Create
                                                Invoice</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarSales" class="nav-link menu-link collapsed" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarSales">
                                    <i class="ph-line-segments"></i> <span data-key="t-invoices">Sales</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSales">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-list-view"> Sales Listing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-overview">Sales Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-create-sale">Add Sale</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarPayments" class="nav-link menu-link collapsed"
                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                    aria-controls="sidebarPayments">
                                    <i class="ph-money"></i> <span data-key="t-invoices">Payments</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPayments">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-list-view">Add Payment</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-overview">Payments Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-create-invoice">Mpesa Payments</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title"><span data-key="t-menu">Settings</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="ph-envelope"></i> <span data-key="t-faqs">Email Configuration</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="ph-chat-circle-text"></i> <span data-key="t-faqs">Configure SMS</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="ph-graph"></i> <span data-key="t-faqs">Paybill Setting</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('faqs.index') }}">
                                    <i class="ph-circle-wavy-question"></i> <span data-key="t-faqs">FAQS</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="#" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="22">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                </a>
                            </div>

                            <button type="button"
                                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                                id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <form class="app-search d-none d-md-inline-flex">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                        id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span
                                        class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                        id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar style="max-height: 320px;">
                                        <!-- item-->
                                        <div class="dropdown-header">
                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches
                                            </h6>
                                        </div>

                                        <div class="dropdown-item bg-transparent text-wrap">
                                            <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how
                                                to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                            <a href="index.html"
                                                class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i
                                                    class="mdi mdi-magnify ms-1"></i></a>
                                        </div>
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Analytics Dashboard</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Help Center</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                            <span>My account settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Angela Bernier</h6>
                                                        <span class="fs-2xs mb-0 text-muted">Manager</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-3.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">David Grasso</h6>
                                                        <span class="fs-2xs mb-0 text-muted">Web Designer</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-5.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Mike Bunch</h6>
                                                        <span class="fs-2xs mb-0 text-muted">React Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3 pb-1">
                                        <a href="#" class="btn btn-primary btn-sm">View All Results <i
                                                class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex align-items-center">

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-grid fs-2xl'></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fw-semibold fs-base"> Browse by Apps </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="btn btn-sm btn-subtle-info"> View All Apps
                                                    <i class="ri-arrow-right-s-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                    <span>Mail Chimp</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button"
                                    class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-sun align-middle fs-3xl"></i>
                                </button>
                                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                    <a href="#!" class="dropdown-item" data-mode="light"><i
                                            class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                    <a href="#!" class="dropdown-item" data-mode="dark"><i
                                            class="bi bi-moon align-middle me-2"></i> Dark</a>
                                    <a href="#!" class="dropdown-item" data-mode="auto"><i
                                            class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bell fs-2xl'></i>
                                    <span
                                        class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span
                                            class="notification-badge">4</span><span class="visually-hidden">unread
                                            messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head rounded-top">
                                        <div class="p-3 border-bottom border-bottom-dashed">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span
                                                            class="badge bg-danger-subtle text-danger fs-sm notification-badge">
                                                            4</span></h6>
                                                    <p class="fs-md text-muted mt-1 mb-0">You have <span
                                                            class="fw-semibold notification-unread">3</span> unread
                                                        messages</p>
                                                </div>
                                                <div class="col-auto dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        class="link-secondary fs-md"><i
                                                            class="bi bi-three-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                        <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <h6
                                                class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">
                                                New</h6>
                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span
                                                            class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 fs-md mb-2 lh-base">Your <b>Elite</b> author
                                                                Graphic
                                                                Optimization <span class="text-secondary">reward</span>
                                                                is ready!
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check01">
                                                            <label class="form-check-label"
                                                                for="all-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="assets/images/users/32/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span
                                                            class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-md fw-semibold">Angela Bernier</h6>
                                                        </a>
                                                        <div class="fs-sm text-muted">
                                                            <p class="mb-1">Answered to your comment on the cash flow
                                                                forecast's graph 🔔.</p>
                                                        </div>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check02">
                                                            <label class="form-check-label"
                                                                for="all-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span
                                                            class="avatar-title bg-danger-subtle text-danger rounded-circle fs-lg">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 fs-md lh-base">You have received <b
                                                                    class="text-success">20</b> new messages in the
                                                                conversation
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check03">
                                                            <label class="form-check-label"
                                                                for="all-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6
                                                class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">
                                                Read Before</h6>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">

                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="assets/images/users/32/avatar-8.jpg"
                                                            class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span
                                                            class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-md fw-semibold">Maureen Gibson</h6>
                                                        </a>
                                                        <div class="fs-sm text-muted">
                                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                                        </div>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check04">
                                                            <label class="form-check-label"
                                                                for="all-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions" id="notification-actions">
                                            <div class="d-flex text-muted justify-content-center align-items-center">
                                                Select <div id="select-content" class="text-body fw-semibold px-1">0
                                                </div> Result <button type="button"
                                                    class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal"
                                                    data-bs-target="#removeNotificationModal">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user"
                                            src="assets/images/users/32/avatar-7.jpg" alt="Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                            <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">{{ Auth::user()->email }}</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                                            class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span
                                            class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="apps-chat.html"><i
                                            class="mdi mdi-message-text-outline text-muted fs-lg align-middle me-1"></i>
                                        <span class="align-middle">Messages</span></a>
                                    <a class="dropdown-item" href="apps-tickets-overview.html"><i
                                            class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i>
                                        <span class="align-middle">Taskboard</span></a>
                                    <a class="dropdown-item" href="pages-faqs.html"><i
                                            class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i> <span
                                            class="align-middle">Help</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-profile.html"><i
                                            class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span
                                            class="align-middle">Balance : <b>$8451.36</b></span></a>
                                    <a class="dropdown-item" href="pages-profile-settings.html"><span
                                            class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                                            class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span
                                            class="align-middle">Settings</span></a>
                                    <a class="dropdown-item" href="auth-lockscreen.html"><i
                                            class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span
                                            class="align-middle">Lock screen</span></a>
                                    <a class="dropdown-item" href="auth-logout.html"><i
                                            class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span
                                            class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-4"></i>
                                </div>
                                <div class="mt-4 fs-base">
                                    <h4 class="mb-1">Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                    It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- removeCartModal -->
            <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-cartmodal"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-5"></i>
                                </div>
                                <div class="mt-4">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete
                                    It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                document.write(new Date().getFullYear())
                                </script> © Lord.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Developed by lodeki
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button class="btn btn-dark btn-icon" id="back-to-top">
            <i class="bi bi-caret-up fs-3xl"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
        <div id="preloader">
            <div id="status">
                <div class="spinner-border text-primary avatar-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <div class="customizer-setting d-none d-md-block">
            <div class="btn btn-info p-2 text-uppercase rounded-end-0 shadow-lg" data-bs-toggle="offcanvas"
                data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                <i class="bi bi-gear mb-1"></i> Customizer
            </div>
        </div>

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                <div class="me-2">
                    <h5 class="mb-1 text-white">IPMS SYSTEM</h5>
                    <p class="text-white text-opacity-75 mb-0">Quick Settings and Adjustments.</p>
                </div>

                <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    Something
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="#!" target="_blank" class="btn btn-primary w-100">Save</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/list.js/list.min.js"></script>
        <script src="assets/libs/echarts/echarts.min.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/dropzone/dropzone-min.js"></script>

        <!--list pagination js-->
        <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <!-- sweetalert2 js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>


    </div>
</body>

</html>
