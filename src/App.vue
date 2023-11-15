<template>
  <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="assets/images/logo.svg" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav">
          <li>
              <div class="d-inline-flex mr-0 mr-md-3">
              </div>
          </li>
        </ul>
        <form class="ml-auto search-form d-none d-md-block" action="#">
          <div class="form-group">
            <input type="search" class="form-control" placeholder="Search Here">
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-email-outline"></i>
              <span class="count bg-success">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                  <p class="font-weight-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                  <p class="font-weight-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                  <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Reanne Martinez</p>
                <p class="font-weight-light text-muted mb-0">ReanneMartinez@gmail.com</p>
              </div>
              <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
              <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
              <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
              <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
              <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name">Reanne Martinez</p>
                <p class="designation">HR Manager</p>
              </div>
            </a>
          </li>
          <li class="nav-item nav-category">Main Menu</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Dashboard</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">User Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Attendance</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">Payroll</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Payments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Deductions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Tax</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon typcn typcn-shopping-bag"></i>
              <span class="menu-title">Schedule</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon typcn typcn-th-large-outline"></i>
              <span class="menu-title">Leave Request</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon typcn typcn-bell"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon typcn typcn-user-outline"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon typcn typcn-document-add"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Profile </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Page Title Header Starts-->
          <div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  <ul class="quick-links ml-auto">
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Watchlist</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="page-header-toolbar">
                <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                  <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                  <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                </div>
                <div class="filter-wrapper">
                  <div class="dropdown toolbar-item">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                      <a class="dropdown-item" href="#">Last Day</a>
                      <a class="dropdown-item" href="#">Last Month</a>
                      <a class="dropdown-item" href="#">Last Year</a>
                    </div>
                  </div>
                  <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
                </div>
                <div class="sort-wrapper">
                  <button type="button" class="btn btn-primary toolbar-item">New</button>
                  <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownexport">
                      <a class="dropdown-item" href="#">Export as PDF</a>
                      <a class="dropdown-item" href="#">Export as DOCX</a>
                      <a class="dropdown-item" href="#">Export as CDR</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Page Title Header Ends-->
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3 col-md-6">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">32,451</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Visits</h5>
                          <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">15,236</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Impressions</h5>
                          <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">7,688</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Conversation</h5>
                          <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                      <div class="d-flex">
                        <div class="wrapper">
                          <h3 class="mb-0 font-weight-semibold">1,553</h3>
                          <h5 class="mb-0 font-weight-medium text-primary">Downloads</h5>
                          <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                        </div>
                        <div class="wrapper my-auto ml-auto ml-lg-4">
                          <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Sales Statistics Overview</h4>
                  <div class="d-flex flex-column flex-lg-row">
                    <p>Lorem ipsum is placeholder text commonly used</p>
                    <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1D</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5D</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1M</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1Y</a>
                      </li>
                    </ul>
                  </div>
                  <div class="d-flex flex-column flex-lg-row">
                    <div class="data-wrapper d-flex mt-2 mt-lg-0">
                      <div class="wrapper pr-5">
                        <h5 class="mb-0">Total Cost</h5>
                        <div class="d-flex align-items-center">
                          <h4 class="font-weight-semibold mb-0">15,263</h4>
                          <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small>
                        </div>
                      </div>
                      <div class="wrapper">
                        <h5 class="mb-0">Total Revenue</h5>
                        <div class="d-flex align-items-center">
                          <h4 class="font-weight-semibold mb-0">$753,098</h4>
                          <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small>
                        </div>
                      </div>
                    </div>
                    <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                  </div>
                  <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <div class="wrapper">
                    <h4 class="card-title mb-0">Net Profit Margin</h4>
                    <p>Started collecting data from February 2019</p>
                    <div class="mb-4" id="net-profit-legend"></div>
                  </div>
                  <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Total Revenue</h4>
                        <p class="font-weight-semibold mb-0">+1.37%</p>
                      </div>
                      <h3 class="font-weight-medium mb-4">184.42K</h3>
                    </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-0">Market Overview</h4>
                      <div class="d-flex align-items-center justify-content-between w-100">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="dropdown">
                          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateSorter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Month</button>
                          <div class="dropdown-menu" aria-labelledby="dateSorter">
                            <div class="dropdown-item" id="market-overview_1">Daily</div>
                            <div class="dropdown-item" id="market-overview_2">Weekly</div>
                            <div class="dropdown-item" id="market-overview_3">Monthly</div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-end">
                        <h3 class="mb-0 font-weight-semibold">$36,2531.00</h3>
                        <p class="mb-0 font-weight-medium mr-2 ml-2 mb-1">USD</p>
                        <p class="mb-0 text-success font-weight-semibold mb-1">(+1.37%)</p>
                      </div>
                      <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Invoice</h4>
                        <a href="#"><small>Show All</small></a>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>Invoice ID</th>
                              <th>Customer</th>
                              <th>Status</th>
                              <th>Due Date</th>
                              <th>Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>INV-87239</td>
                              <td>Viola Ford</td>
                              <td>Paid</td>
                              <td>20 Jan 2019</td>
                              <td>$755</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Dylan Waters</td>
                              <td>Unpaid</td>
                              <td>23 Feb 2019</td>
                              <td>$800</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Louis Poole</td>
                              <td>Unpaid</td>
                              <td>25 Mar 2019</td>
                              <td>$463</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Vera Howell</td>
                              <td>Paid</td>
                              <td>27 Mar 2019</td>
                              <td>$235</td>
                            </tr>
                            <tr>
                              <td>INV-87239</td>
                              <td>Allie Goodman</td>
                              <td>Unpaid</td>
                              <td>1 Apr 2019</td>
                              <td>$657</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="d-flex align-items-center pb-2">
                            <div class="dot-indicator bg-danger mr-2"></div>
                            <p class="mb-0">Total Sales</p>
                          </div>
                          <h4 class="font-weight-semibold">$7,590</h4>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                          </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                          <div class="d-flex align-items-center pb-2">
                            <div class="dot-indicator bg-success mr-2"></div>
                            <p class="mb-0">Active Users</p>
                          </div>
                          <h4 class="font-weight-semibold">$5,460</h4>
                          <div class="progress progress-md">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card average-price-card">
                  <div class="card text-white">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2 align-items-center">
                        <h2 class="font-weight-semibold mb-0">4,624</h2>
                        <div class="icon-holder">
                          <i class="mdi mdi-briefcase-outline"></i>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h5 class="font-weight-semibold mb-0">Average Price</h5>
                        <p class="text-white mb-0">Since last month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h1 class="card-title mb-4">Website Audience Metrics</h1>
                      <div class="row">
                        <div class="col-5 col-md-5">
                          <div class="wrapper border-bottom mb-2 pb-2">
                            <h4 class="font-weight-semibold mb-0">523,200</h4>
                            <div class="d-flex align-items-center">
                              <p class="mb-0">Page Views</p>
                              <div class="dot-indicator bg-secondary ml-auto"></div>
                            </div>
                          </div>
                          <div class="wrapper">
                            <h4 class="font-weight-semibold mb-0">753,098</h4>
                            <div class="d-flex align-items-center">
                              <p class="mb-0">Bounce Rate</p>
                              <div class="dot-indicator bg-primary ml-auto"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-5 col-md-7 d-flex pl-4">
                          <div class="ml-auto">
                            <canvas height="100" id="realtime-statistics"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="col-6">
                          <div class="d-flex align-items-center mb-2">
                            <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                              <i class="icon ion-logo-buffer icon-sm"></i>
                            </div>
                            <h2 class="font-weight-semibold mb-0">3,605</h2>
                          </div>
                          <p>Since last week</p>
                          <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                        </div>
                        <div class="col-6">
                          <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-4">World sellings</h4>
                      <div id="dashboard-vmap" class="vector-map"></div>
                      <div class="wrapper">
                        <div class="d-flex w-100 pt-2 mt-4">
                          <p class="mb-0 font-weight-semibold">California</p>
                          <div class="wrapper ml-auto d-flex align-items-center">
                            <p class="font-weight-semibold mb-0">26,437</p>
                            <p class="ml-1 mb-0">26%</p>
                          </div>
                        </div>
                        <div class="d-flex w-100 pt-2">
                          <p class="mb-0 font-weight-semibold">Washington</p>
                          <div class="wrapper ml-auto d-flex align-items-center">
                            <p class="font-weight-semibold mb-0">3252</p>
                            <p class="ml-1 mb-0">64%</p>
                          </div>
                        </div>
                        <div class="d-flex w-100 pt-2">
                          <p class="mb-0 font-weight-semibold">Michigan</p>
                          <div class="wrapper ml-auto d-flex align-items-center">
                            <p class="font-weight-semibold mb-0">4,987</p>
                            <p class="ml-1 mb-0">30%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-0">Top Performer</h4>
                      <div class="d-flex mt-3 py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="assets/images/faces/face3.jpg" alt="profile image">
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">1 Hours ago</small>
                      </div>
                      <div class="d-flex py-2 border-bottom">
                        <span class="img-sm rounded-circle bg-warning text-white text-avatar">OH</span>
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Ora Hill</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">4 Hours ago</small>
                      </div>
                      <div class="d-flex py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="assets/images/faces/face4.jpg" alt="profile image">
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Brian Dean</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">4 Hours ago</small>
                      </div>
                      <div class="d-flex pt-2">
                        <span class="img-sm rounded-circle bg-success text-white text-avatar">OB</span>
                        <div class="wrapper ml-2">
                          <p class="mb-n1 font-weight-semibold">Olive Bridges</p>
                          <small>162543</small>
                        </div>
                        <small class="text-muted ml-auto">7 Hours ago</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Recent Events</h4>
                  <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Other Events</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Quarterly Report</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <div class="d-flex pt-2">
                    <div class="wrapper">
                      <small class="text-muted">Mar 14, 2019</small>
                      <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                    </div>
                    <small class="text-muted ml-auto">Edit event</small>
                  </div>
                  <a class="d-block mt-5" href="#">Show all</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between pb-3">
                    <h4 class="card-title mb-0">Activities</h4>
                    <p class="mb-0 text-muted">20 finished, 5 remaining</p>
                  </div>
                  <ul class="timeline">
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                    <li class="timeline-item">
                      <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                      <p class="event-time">Just now</p>
                    </li>
                  </ul>
                  <a class="d-block mt-3" href="#">Show all</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">People Also Watch</h4>
                  <div class="table-responsive">
                    <table class="table table-stretched">
                      <thead>
                        <tr>
                          <th>Symbol</th>
                          <th>Last Price</th>
                          <th>Change</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">NFLX</p><small class="font-weight-medium">Netflix, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$250.00</td>
                          <td class="text-success font-weight-medium">+12.64</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">TSLA</p><small class="font-weight-medium">Tesla, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$458.00</td>
                          <td class="text-danger font-weight-medium">-14.53</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">GOOG</p><small class="font-weight-medium">Alphabet, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$250.00</td>
                          <td class="text-danger font-weight-medium">+12.64</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">AMZN</p><small class="font-weight-medium">Amazon.com, Inc.</small>
                          </td>
                          <td class="font-weight-medium">$546.00</td>
                          <td class="text-success font-weight-medium">+24.34</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a class="d-block mt-3" href="#">Show all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
          </div>
        </footer>
        <!-- partial -->
  </div>
      <!-- main-panel ends -->
      </div>
  </div>
  </div>

  
  
</template>

 <style>
 /* Layouts */
/* Animation Mixins */
@-webkit-keyframes dropdownAnimation {
    from {
      opacity: 0;
      -webkit-transform: translate3d(0, -30px, 0);
      transform: translate3d(0, -30px, 0); }
    to {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
      -webkit-transform: translate3d(0, 0px, 0);
      transform: translate3d(0, 0px, 0); } }
  @keyframes dropdownAnimation {
    from {
      opacity: 0;
      -webkit-transform: translate3d(0, -30px, 0);
      transform: translate3d(0, -30px, 0); }
    to {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
      -webkit-transform: translate3d(0, 0px, 0);
      transform: translate3d(0, 0px, 0); } }
  
  .dropdownAnimation, .nav .nav-item.dropdown .navbar-dropdown,
  .navbar-nav .nav-item.dropdown .navbar-dropdown {
    -webkit-animation-name: dropdownAnimation;
    animation-name: dropdownAnimation;
    -webkit-animation-duration: 0.25s;
    animation-duration: 0.25s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both; }
  
  @-webkit-keyframes fadeOut {
    from {
      opacity: 1; }
    to {
      opacity: 0; } }
  
  @keyframes fadeOut {
    from {
      opacity: 1; }
    to {
      opacity: 0; } }
  
  .fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut; }
  
  .infinite-spin {
    -webkit-animation-name: spin;
    animation-name: spin;
    -webkit-animation-duration: 3s;
    animation-duration: 3s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear; }
  
  @-webkit-keyframes spin {
    from {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg); }
    to {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
  
  @keyframes spin {
    from {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg); }
    to {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
  
  @-webkit-keyframes fadeInUp {
    from {
      opacity: 0;
      -webkit-transform: translate3d(0, 100%, 0);
      transform: translate3d(0, 100%, 0); }
    to {
      opacity: 1;
      -webkit-transform: none;
      transform: none; } }
  
  @keyframes fadeInUp {
    from {
      opacity: 0;
      -webkit-transform: translate3d(0, 100%, 0);
      transform: translate3d(0, 100%, 0); }
    to {
      opacity: 1;
      -webkit-transform: none;
      transform: none; } }
  
  .fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp; }
  
  @-webkit-keyframes menufadeInLeft {
    from {
      opacity: 0;
      -webkit-transform: translate3d(-20px, 0, 0);
      transform: translate3d(-20px, 0, 0); }
    to {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0); } }
  
  @keyframes menufadeInLeft {
    from {
      opacity: 0;
      -webkit-transform: translate3d(-20px, 0, 0);
      transform: translate3d(-20px, 0, 0); }
    to {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0); } }
  
  .menufadeInLeft {
    -webkit-animation-name: menufadeInLeft;
    animation-name: menufadeInLeft; }
  
  .nav .nav-item,
  .navbar-nav .nav-item {
    line-height: 1; }
    @media (max-width: 992px) {
      .nav .nav-item.dropdown,
      .navbar-nav .nav-item.dropdown {
        position: unset; } }
    .nav .nav-item.dropdown .dropdown-toggle:after,
    .navbar-nav .nav-item.dropdown .dropdown-toggle:after {
      border: none;
      content: "\F140";
      font-family: "Material Design Icons";
      font-size: 20px;
      color: grey;
      text-rendering: auto;
      line-height: inherit;
      vertical-align: 0; }
    .nav .nav-item.dropdown .count-indicator,
    .navbar-nav .nav-item.dropdown .count-indicator {
      position: relative;
      text-align: center; }
      .nav .nav-item.dropdown .count-indicator i,
      .navbar-nav .nav-item.dropdown .count-indicator i {
        font-size: 21px;
        margin-right: 0;
        vertical-align: middle; }
      .nav .nav-item.dropdown .count-indicator .count,
      .navbar-nav .nav-item.dropdown .count-indicator .count {
        position: absolute;
        left: 50%;
        width: 1rem;
        height: 1rem;
        border-radius: 100%;
        background: #FF0017;
        color: #ffffff;
        font-size: 11px;
        top: -1px;
        font-weight: 600;
        line-height: 1rem;
        border: none;
        text-align: center; }
      .nav .nav-item.dropdown .count-indicator:after,
      .navbar-nav .nav-item.dropdown .count-indicator:after {
        display: none; }
    .nav .nav-item.dropdown i,
    .navbar-nav .nav-item.dropdown i {
      margin-right: 0.5rem;
      vertical-align: middle; }
      .rtl .nav .nav-item.dropdown i, .rtl
      .navbar-nav .nav-item.dropdown i {
        margin-left: 0.5rem;
        margin-right: 0; }
    .nav .nav-item.dropdown .navbar-dropdown,
    .navbar-nav .nav-item.dropdown .navbar-dropdown {
      font-size: 0.9rem;
      margin-top: 15px;
      position: absolute;
      right: 0;
      left: auto;
      border: 1px solid rgba(182, 182, 182, 0.1);
      padding: 0 0 20px;
      min-width: 100%;
      border-radius: 2px;
      box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.13);
      overflow-x: hidden;
      max-height: 350px;
      overflow-y: auto;
      overflow: hidden; }
      .rtl .nav .nav-item.dropdown .navbar-dropdown, .rtl
      .navbar-nav .nav-item.dropdown .navbar-dropdown {
        right: auto;
        left: 0; }
      @media (max-width: 991px) {
        .nav .nav-item.dropdown .navbar-dropdown,
        .navbar-nav .nav-item.dropdown .navbar-dropdown {
          right: -85px; } }
      .nav .nav-item.dropdown .navbar-dropdown.dropdown-left,
      .navbar-nav .nav-item.dropdown .navbar-dropdown.dropdown-left {
        left: 0;
        right: auto; }
      .nav .nav-item.dropdown .navbar-dropdown .badge,
      .navbar-nav .nav-item.dropdown .navbar-dropdown .badge {
        margin-left: 0.5rem; }
        .rtl .nav .nav-item.dropdown .navbar-dropdown .badge, .rtl
        .navbar-nav .nav-item.dropdown .navbar-dropdown .badge {
          margin-left: 0;
          margin-right: 1.25rem; }
        @media (max-width: 991px) {
          .nav .nav-item.dropdown .navbar-dropdown .badge,
          .navbar-nav .nav-item.dropdown .navbar-dropdown .badge {
            margin-right: 0.5rem; }
            .rtl .nav .nav-item.dropdown .navbar-dropdown .badge, .rtl
            .navbar-nav .nav-item.dropdown .navbar-dropdown .badge {
              margin-left: 0.5rem;
              margin-right: 0; } }
      .nav .nav-item.dropdown .navbar-dropdown .dropdown-item,
      .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
        display: flex;
        align-items: center;
        margin-bottom: 0;
        padding: 5px 25px; }
        .nav .nav-item.dropdown .navbar-dropdown .dropdown-item i,
        .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
          font-size: 24px; }
        .nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis,
        .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis {
          max-width: 200px;
          overflow: hidden;
          text-overflow: ellipsis; }
        .nav .nav-item.dropdown .navbar-dropdown .dropdown-item .preview-icon,
        .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .preview-icon {
          width: 40px;
          height: 40px;
          display: flex;
          align-items: center;
          justify-content: center; }
        .nav .nav-item.dropdown .navbar-dropdown .dropdown-item .small-text,
        .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .small-text {
          font-size: 0.75rem; }
      .nav .nav-item.dropdown .navbar-dropdown .dropdown-divider,
      .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-divider {
        margin: 0; }
  
  /* Navbar */
  .navbar.default-layout {
    font-family: "roboto", sans-serif;
    background: #fff;
    transition: background 0.25s ease;
    -webkit-transition: background 0.25s ease;
    -moz-transition: background 0.25s ease;
    -ms-transition: background 0.25s ease; }
    .navbar.default-layout .navbar-brand-wrapper {
      transition: width 0.25s ease, background 0.25s ease;
      -webkit-transition: width 0.25s ease, background 0.25s ease;
      -moz-transition: width 0.25s ease, background 0.25s ease;
      -ms-transition: width 0.25s ease, background 0.25s ease;
      background: #1c45ef;
      width: 270px;
      height: 63px; }
      .navbar.default-layout .navbar-brand-wrapper .navbar-brand {
        color: #ffffff;
        font-size: 1.5rem;
        line-height: 48px;
        margin-right: 0;
        padding: 0.25rem 0;
        display: flex; }
        .navbar.default-layout .navbar-brand-wrapper .navbar-brand:active, .navbar.default-layout .navbar-brand-wrapper .navbar-brand:focus, .navbar.default-layout .navbar-brand-wrapper .navbar-brand:hover {
          color: #424546; }
        .navbar.default-layout .navbar-brand-wrapper .navbar-brand img {
          width: 170px;
          max-width: 100%;
          margin: auto;
          vertical-align: middle; }
      .navbar.default-layout .navbar-brand-wrapper .brand-logo-mini {
        display: none; }
        .navbar.default-layout .navbar-brand-wrapper .brand-logo-mini img {
          width: 40px;
          max-width: 100%;
          margin: auto; }
    .navbar.default-layout .navbar-menu-wrapper {
      transition: width 0.25s ease;
      -webkit-transition: width 0.25s ease;
      -moz-transition: width 0.25s ease;
      -ms-transition: width 0.25s ease;
      color: #001737;
      padding-left: 15px;
      padding-right: 15px;
      width: calc(100% - 270px);
      height: 63px;
      box-shadow: 0 4px 16px 0 rgba(167, 175, 183, 0.33); }
      @media (max-width: 991px) {
        .navbar.default-layout .navbar-menu-wrapper {
          width: calc(100% - 70px); } }
      .navbar.default-layout .navbar-menu-wrapper .navbar-toggler {
        border: 0;
        color: inherit; }
        @media (max-width: 991px) {
          .navbar.default-layout .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
            display: none; } }
      .navbar.default-layout .navbar-menu-wrapper .search-form {
        width: 35%;
        margin-right: 30px; }
        .navbar.default-layout .navbar-menu-wrapper .search-form .form-group {
          margin-bottom: 0; }
      .navbar.default-layout .navbar-menu-wrapper .navbar-nav {
        flex-direction: row;
        align-items: center; }
        .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item {
          margin-left: 1rem; }
          @media (max-width: 992px) {
            .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item {
              margin-left: 10px;
              margin-right: 0px; } }
          .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
            color: inherit;
            font-size: 15px;
            vertical-align: middle; }
            @media (max-width: 767px) {
              .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
                margin-left: 0.5rem;
                margin-right: 0.5rem; } }
            .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i {
              font-size: 1.25rem;
              vertical-align: middle;
              margin-right: 0; }
          .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.user-dropdown {
            margin-left: 35px; }
            .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.user-dropdown:before {
              position: relative;
              top: 2px;
              font-size: 20px;
              color: grey; }
            .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.user-dropdown .dropdown-menu {
              min-width: 250px;
              margin-top: 9px; }
              .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.user-dropdown .dropdown-menu .dropdown-header {
                padding: 20px; }
              .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.user-dropdown .dropdown-menu .dropdown-item {
                padding: 10px 15px; }
            .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.user-dropdown .dropdown-toggle:after {
              position: relative;
              top: 50%; }
          .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.language-dropdown .dropdown-menu {
            width: 170px;
            left: -15px !important; }
            .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.language-dropdown .dropdown-menu .dropdown-item {
              padding-left: 22px;
              padding-right: 12px; }
              .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.language-dropdown .dropdown-menu .dropdown-item .flag-icon-holder {
                margin-right: 15px; }
          .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.language-dropdown .flag-icon-holder {
            height: 25px;
            width: 25px;
            border-radius: 100%;
            overflow: hidden; }
            .navbar.default-layout .navbar-menu-wrapper .navbar-nav .nav-item.language-dropdown .flag-icon-holder i {
              font-size: 25px; }
        @media (min-width: 992px) {
          .navbar.default-layout .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
            margin-left: auto; } }
  
  @media (max-width: 991px) {
    .navbar.default-layout {
      flex-direction: row; }
      .navbar.default-layout .navbar-brand-wrapper {
        width: 70px; }
        .navbar.default-layout .navbar-brand-wrapper .brand-logo {
          display: none; }
        .navbar.default-layout .navbar-brand-wrapper .brand-logo-mini {
          display: inline-block; }
    .navbar-collapse {
      display: flex;
      margin-top: 0.5rem; } }
  
  /* Sidebar */
  .sidebar {
    min-height: calc(100vh - 63px);
    background: linear-gradient(to top, #6062ca, rgb(2, 43, 104));
    font-family: "roboto", sans-serif;
    padding: 0;
    width: 270px;
    z-index: 11;
    transition: width 0.25s ease, background 0.25s ease;
    -webkit-transition: width 0.25s ease, background 0.25s ease;
    -moz-transition: width 0.25s ease, background 0.25s ease;
    -ms-transition: width 0.25s ease, background 0.25s ease; }
    .sidebar > .nav {
      overflow: hidden;
      flex-wrap: nowrap;
      flex-direction: column; }
      .sidebar > .nav .nav-item .collapse {
        z-index: 999; }
      .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu,
      .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu {
        margin: 5px 0; }
        .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item .nav-link,
        .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item .nav-link {
          padding: 10px 0px 10px 70px;
          position: relative;
          color: rgba(255, 255, 255, 0.8);
          font-size: calc(15px - 2px);
          font-weight: 500;
          transition-duration: 0.5s;
          transition-timing-function: "ease-in-out";
          transition-property: "background", "color", "box-shadow", "padding"; }
          .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item .nav-link:before,
          .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item .nav-link:before {
            content: "";
            position: absolute;
            top: 0px;
            left: 35px;
            display: block;
            height: 100%;
            width: 2px;
            background: #c610de; }
          .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item .nav-link:hover,
          .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item .nav-link:hover {
            color: #fff; }
            .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item .nav-link:hover:before,
            .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item .nav-link:hover:before {
              background: #fff; }
        .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item:first-child .nav-link,
        .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item:first-child .nav-link {
          padding-top: 0; }
        .sidebar > .nav .nav-item:not(.hover-open) .collapse .sub-menu .nav-item:last-child .nav-link,
        .sidebar > .nav .nav-item:not(.hover-open) .collapsing .sub-menu .nav-item:last-child .nav-link {
          padding-bottom: 0; }
      .sidebar > .nav .nav-item .nav-link {
        align-items: center;
        display: flex;
        padding: 15px 30px 15px 55px;
        white-space: nowrap;
        color: #fff; }
        .sidebar > .nav .nav-item .nav-link i.menu-arrow {
          margin-left: auto;
          margin-right: 0;
          transition-duration: 0.2s;
          transition-property: -webkit-transform;
          transition-property: transform;
          transition-property: transform, -webkit-transform;
          transition-timing-function: ease-in; }
          .sidebar > .nav .nav-item .nav-link i.menu-arrow:before {
            content: "\F054";
            font-family: "Material Design Icons";
            font-size: 18px;
            line-height: 1;
            font-style: normal;
            vertical-align: middle;
            color: #bfccda; }
        .sidebar > .nav .nav-item .nav-link[aria-expanded="true"] i.menu-arrow {
          -webkit-transform: rotate(90deg);
          transform: rotate(90deg); }
        .sidebar > .nav .nav-item .nav-link .menu-icon {
          display: none;
          margin-right: 1.25rem;
          width: 16px;
          line-height: 1;
          font-size: 18px;
          color: #fff; }
        .sidebar > .nav .nav-item .nav-link .menu-title {
          color: inherit;
          display: inline-block;
          font-size: 15px;
          line-height: 1;
          vertical-align: middle;
          font-weight: 500; }
        .sidebar > .nav .nav-item .nav-link .badge {
          margin-left: auto; }
        .sidebar > .nav .nav-item .nav-link:hover {
          color: #f2f2f2; }
      .sidebar > .nav .nav-item.active > .nav-link {
        color: #fff; }
        .sidebar > .nav .nav-item.active > .nav-link .menu-title,
        .sidebar > .nav .nav-item.active > .nav-link i {
          color: inherit; }
      .sidebar > .nav .nav-item.nav-profile {
        max-width: 270px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 30px;
        margin-bottom: 30px; }
        .sidebar > .nav .nav-item.nav-profile .nav-link {
          display: flex;
          border-radius: 3px;
          border: 1px solid rgba(255, 255, 255, 0.11);
          background-color: rgba(255, 255, 255, 0.1);
          color: #fff;
          padding: 15px 25px; }
          .sidebar > .nav .nav-item.nav-profile .nav-link .profile-image {
            margin-right: 15px;
            position: relative; }
          .sidebar > .nav .nav-item.nav-profile .nav-link .dot-indicator {
            position: absolute;
            bottom: 0px;
            right: 0px; }
          .sidebar > .nav .nav-item.nav-profile .nav-link .profile-name {
            margin-bottom: 5px;
            font-weight: 500;
            font-size: 15px;
            color: #fff; }
          .sidebar > .nav .nav-item.nav-profile .nav-link .designation {
            margin-bottom: 0;
            font-weight: 400;
            color: #fff; }
      .sidebar > .nav .nav-item.nav-category {
        color: rgba(255, 255, 255, 0.7);
        border-bottom: 1px solid rgba(255, 255, 255, 0.13);
        margin: 0 30px;
        font-size: 15px;
        font-weight: 500;
        padding: 10px 0px 15px 0px; }
      .sidebar > .nav > .nav-item > .nav-link {
        height: 52px; }
      .sidebar > .nav > .nav-item:not(.nav-profile) > .nav-link {
        position: relative; }
        .sidebar > .nav > .nav-item:not(.nav-profile) > .nav-link:before {
          content: "";
          position: absolute;
          left: 30px;
          right: 50%;
          width: 10px;
          height: 10px;
          border-radius: 100%;
          border: 2px solid #fff;
          display: block; }
      .sidebar > .nav:not(.sub-menu) > .nav-item > .nav-link {
        background: transparent;
        transition-duration: 0.3s;
        transition-timing-function: "ease-in-out";
        transition-property: "background", "color", "box-shadow", "padding"; }
      .sidebar > .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile):not(.hover-open) > .nav-link:not([aria-expanded="true"]) {
        background: #0f25d5;
        padding-left: 65px; }
        .sidebar > .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile):not(.hover-open) > .nav-link:not([aria-expanded="true"]):before {
          border-color: #fff; }
        .sidebar > .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile):not(.hover-open) > .nav-link:not([aria-expanded="true"]) .menu-title {
          color: #fff; }
        .sidebar > .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile):not(.hover-open) > .nav-link:not([aria-expanded="true"]) .menu-arrow:before {
          color: #bfccda; }
  
  /* style for off-canvas menu*/
  @media screen and (max-width: 991px) {
    .sidebar-offcanvas {
      position: fixed;
      max-height: calc(100vh - 63px);
      top: 63px;
      bottom: 0;
      overflow: auto;
      right: -270px;
      transition: all 0.25s ease-out; }
      .sidebar-offcanvas.active {
        right: 0; } }
  
  /* Footer */
  .footer {
    background: #dbdbdb;
    padding: 20px 1rem;
    transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    -webkit-transition: all 0.25s ease;
    -ms-transition: all 0.25s ease;
    border-top: 1px solid #cdd6dc;
    font-size: calc(0.875rem - 0.05rem);
    font-family: "roboto", sans-serif; }
    .footer a {
      font-size: inherit; }
    @media (max-width: 991px) {
      .footer {
        margin-left: 0;
        width: 100%; } }
  
  .navbar.fixed-top + .page-body-wrapper {
    padding-top: 63px; }
  
  .purchase-banner-active .navbar.fixed-top {
    top: 55px; }
    .purchase-banner-active .navbar.fixed-top + .page-body-wrapper {
      padding-top: calc(63px + 55px); }
  
  .card {
    box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
    border: solid 1px #dde4eb;
    border-radius: 0px; }
    .card .card-title {
      color: #212529; }
    .card .card-header {
      background: #fff; }
  
  .page-body-wrapper {
    min-height: calc(100vh - 63px);
    display: flex;
    flex-direction: row;
    padding-left: 0;
    padding-right: 0; }
    .page-body-wrapper.full-page-wrapper {
      width: 100%;
      min-height: 100vh; }
  
  .main-panel {
    transition: width 0.25s ease, margin 0.25s ease;
    width: calc(100% - 270px);
    min-height: calc(100vh - 63px);
    display: flex;
    flex-direction: column; }
    @media (max-width: 991px) {
      .main-panel {
        margin-left: 0;
        width: 100%; } }
  
  .content-wrapper {
    background: #F3F3F3;
    padding: 1.5rem 1.7rem;
    width: 100%;
    flex-grow: 1; }
  
  .container-scroller {
    overflow: hidden; }
  
  .page-header {
    display: flex;
    width: 100%;
    padding-bottom: 15px;
    border-bottom: 1px solid #cdd6dc;
    margin-bottom: 15px; }
    @media (max-width: 992px) {
      .page-header {
        display: inline-block; } }
  
  .page-title {
    margin-top: 0;
    margin-bottom: 2px; }
    @media (max-width: 992px) {
      .page-title {
        margin-botttom: 15px; } }
  
  .quick-links {
    list-style: none;
    margin-bottom: 0;
    display: inline-flex;
    align-items: center;
    margin-top: 4px;
    padding-left: 0; }
    @media (min-width: 992px) {
      .quick-links {
        padding-left: 10px; } }
    .quick-links li {
      margin-right: 10px;
      border-right: 1px solid #212529;
      line-height: 1; }
      .quick-links li a {
        display: inline-block;
        color: #212529;
        text-decoration: none;
        padding-right: 10px; }
      .quick-links li:last-child {
        margin-right: 0;
        border-right: none; }
        .quick-links li:last-child a {
          padding-right: 0; }
  
  .page-title-header {
    margin-bottom: 20px; }
  
  .page-header-toolbar {
    display: flex;
    align-items: center;
    width: 100%; }
    @media (max-width: 992px) {
      .page-header-toolbar {
        display: inline-block; }
        .page-header-toolbar .toolbar-item {
          margin-top: 20px; } }
    .page-header-toolbar .btn-group,
    .page-header-toolbar .btn {
      border: none; }
      .page-header-toolbar .btn-group i,
      .page-header-toolbar .btn i {
        font-size: 1.24rem;
        color: #2196f3; }
      .page-header-toolbar .btn-group.dropdown-toggle:after,
      .page-header-toolbar .btn.dropdown-toggle:after {
        color: #2196f3; }
  
  .filter-wrapper {
    display: flex;
    margin-left: 15px; }
    @media (max-width: 992px) {
      .filter-wrapper {
        margin-left: 0; } }
  
  .sort-wrapper {
    display: flex;
    width: 46%; }
    @media (max-width: 992px) {
      .sort-wrapper {
        width: 100%; } }
  
  .advanced-link {
    display: flex;
    align-items: center;
    margin-left: 30px;
    margin-right: 20px;
    white-space: nowrap; }
  
  #sales-statistics-legend .chartjs-legend {
    margin-top: 20px;
    margin-right: 20px; }
    #sales-statistics-legend .chartjs-legend ul li {
      color: #212529; }
      #sales-statistics-legend .chartjs-legend ul li span {
        width: 20px;
        height: 3px;
        border-radius: 0px; }
  
  #net-profit-legend .chartjs-legend li {
    font-weight: 500;
    color: #212529; }
  
  .average-price-card .card {
    background: #030aac; }
  
  .average-price-card h3 {
    margin-bottom: 0; }
  
  .average-price-card .icon-holder {
    border-radius: 5px;
    border: 1px solid #4e55c5;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #2944b5;
    color: #fff;
    font-size: 20px; }
    .average-price-card .icon-holder i {
      line-height: 1; }
  
  #dashboard-vmap {
    height: 161px;
    width: 100%; }
    #dashboard-vmap .jvectormap-zoomin,
    #dashboard-vmap .jvectormap-zoomout {
      display: none; }
  
  
</style>

