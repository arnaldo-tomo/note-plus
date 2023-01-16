<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 13:40:54 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>NotePlus | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/note-plus/html/assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.mine209.css">
      <link rel="stylesheet" href="../assets/css/backende209.css">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome.min.css">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @livewireStyles
    </head>
  <body class="noteplus-layout  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <div class="right-sidebar-mini right-sidebar">
      <div class="right-sidebar-panel p-0">
          <div class="right-sidebar-toggle bg-primary mt-3" data-extra-toggle="right-sidebar-dissmiss">
                <i class="ri-arrow-left-line side-left-icon"></i>
                <i class="ri-close-fill side-right-icon"></i>
            </div>
          <div class="card shadow-none tag-details mb-0">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-0">Tag List</h4>
                </div>
                <div>
                    <a href="#" data-toggle="modal" data-target="#create-note"><i class="ri-add-line font-size-20"></i></a>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="list-inline p-3 m-0 pb-0">
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">A</div>
                            <h5>Afternoon</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton1"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton1" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">B</div>
                            <h5>Book</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton2"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton2" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-purple">C</div>
                            <h5>Cupcake</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton3"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton3" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">D</div>
                            <h5>Dinner</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton4"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton4" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">E</div>
                            <h5>Evening Snacks</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton5"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton5" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">F</div>
                            <h5>Fast Track</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton6"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton6" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">G</div>
                            <h5>Good Morning</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton7"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton7" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">H</div>
                            <h5>Health</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton8"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton8" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">I</div>
                            <h5>Ice Cream</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton9"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton9" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">J</div>
                            <h5>Juice</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton10"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton10" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">K</div>
                            <h5>Kangaroo</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton11"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton11" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-purple">L</div>
                            <h5>Leaves</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton12"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton12" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">M</div>
                            <h5>Machine</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton13"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton13" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="px-2">
                    <div class="item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">N</div>
                            <h5>Nail Polish</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton14"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton14" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
          </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="create-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Create New Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-outline-primary mr-4" data-dismiss="modal">Create</div>
                                    <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal -->
    <div class="modal fade" id="tag-rename" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Rename Your Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="index.html" class="header-logo">
                              <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                          
                      </a>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                          <li class="nav-item nav-icon search-content">
                              <a href="#" class="search-toggle rounded" id="h1-dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ri-search-line"></i>
                              </a>
                              <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownSearch">
                                  <form action="#" class="searchbox p-2">
                                      <div class="form-group mb-0 position-relative">
                                      <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                      <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                      </div>
                                  </form>
                              </div>
                          </li>                
                          <li class="nav-item nav-icon dropdown mail-content">
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-010" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                              <span class="bg-primary"></span>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton2">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="px-3 pt-0 pb-0">
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Emma Watson</h5>
                                                              <small class="text-dark"><b>12 : 47 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Ashlynn Franci</h5>
                                                              <small class="text-dark"><b>11 : 30 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Kianna Carder</h5>
                                                              <small class="text-dark"><b>11 : 21 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                              View All
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item nav-icon dropdown mail-content"> 
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-020" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail rounded-circle">2</span>
                              <span class="bg-primary "></span>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton004">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="px-3 pt-0 pb-0">
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Emma Watson</h5>
                                                              <small class="text-dark"><b>12 : 47 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Ashlynn Franci</h5>
                                                              <small class="text-dark"><b>11 : 30 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Kianna Carder</h5>
                                                              <small class="text-dark"><b>11 : 21 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                              View All
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </li>  
                          <li class="caption-content">
                             <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="../assets/images/user/1.jpg" class="img-fluid rounded avatar-50" alt="user">
                              </a>
                              <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2" aria-labelledby="h-dropdownMenuButton001">
                                  <a class="dropdown-item mb-2" href="https://templates.iqonic.design/note-plus/html/app/user-profile.html">
                                      <i class="lar la-user-circle font-size-20 mr-1"></i>
                                      <span class="mt-2">My Profile</span>
                                  </a>
                                  <a class="dropdown-item mb-2" href="https://templates.iqonic.design/note-plus/html/app/user-profile-edit.html">
                                      <i class="las la-user-edit font-size-20 mr-1"></i>
                                      <span>Edit Profile</span>
                                  </a>
                                  <a class="dropdown-item mb-2" href="https://templates.iqonic.design/note-plus/html/app/user-account-setting.html">
                                      <i class="las la-user-cog font-size-20 mr-1"></i>
                                      <span>Account Settings</span>
                                  </a>
                                  <a class="dropdown-item" href="https://templates.iqonic.design/note-plus/html/app/user-privacy-setting.html">
                                      <i class="las la-user-shield font-size-20 mr-1"></i>
                                      <span>Privacy Settings</span>
                                  </a>
                                  <hr class="my-1">
                                  <a class="dropdown-item" href="index.html">
                                      <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                      <span>Logout</span>
                                  </a>
                              </div>
                          </li>
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>      
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="index.html" class="header-logo">
                  <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4>
              </a>
              <div class="iq-menu-bt-sidebar">
                  <i class="las la-times wrapper-menu"></i>
              </div>
          </div>    
          <div class="sidebar-caption dropdown">
              <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="../assets/images/user/1.jpg" class="img-fluid rounded avatar-50 mr-3" alt="user">
                  <div class="caption">
                      <h6 class="mb-0 line-height">Bud Wiser</h6>
                  </div>
                  <i class="las la-angle-down"></i>
              </a>
              <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item mb-2" href="https://templates.iqonic.design/note-plus/html/app/user-profile.html">
                      <i class="lar la-user-circle font-size-20 mr-1"></i>
                      <span class="mt-2">My Profile</span>
                  </a>
                  <a class="dropdown-item mb-2" href="https://templates.iqonic.design/note-plus/html/app/user-profile-edit.html">
                      <i class="las la-user-edit font-size-20 mr-1"></i>
                      <span>Edit Profile</span>
                  </a>
                  <a class="dropdown-item mb-2" href="https://templates.iqonic.design/note-plus/html/app/user-account-setting.html">
                      <i class="las la-user-cog font-size-20 mr-1"></i>
                      <span>Account Settings</span>
                  </a>
                  <a class="dropdown-item mb-3" href="https://templates.iqonic.design/note-plus/html/app/user-privacy-setting.html">
                      <i class="las la-user-shield font-size-20 mr-1"></i>
                      <span>Privacy Settings</span>
                  </a>
                  <hr class="my-2">
                  <a class="dropdown-item" href="auth-sign-in.html">
                      <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                      <span>Logout</span>
                  </a>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <div class="iq-search-bar device-search mb-3">
                  <form action="#" class="searchbox">
                  <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                  <input type="text" class="text search-input" placeholder="Search">
                  </form>
              </div>
              <div class="sidebar-btn dropdown mb-3">
                  <a href="#"  id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary pr-5 position-relative iq-user-toggle d-flex align-items-center justify-content-between" style="height: 40px;"><span class="btn-title"><i class="ri-add-line mr-3"></i>Add New</span><span class="note-add-btn" style="height: 40px;"><i class="las la-angle-down"></i></span></a>
                  <div class="dropdown-menu w-100 border-0 py-3" aria-labelledby="dropdownMenuButton01">
                      <a class="dropdown-item mb-2" href="page-new-note5d2b.html?type=blank">
                          <span><i class="ri-sticky-note-line mr-3"></i>Blank Notes</span>
                      </a>
                      <a class="dropdown-item mb-2" href="page-new-note8fb2.html?type=todo">
                          <span><i class="ri-todo-line mr-3"></i>To-do</span>
                      </a>
                      <a class="dropdown-item mb-2" href="page-new-notefbee.html?type=essay">
                          <span><i class="ri-booklet-line mr-3"></i>Essay Notes</span>
                      </a>
                      <a class="dropdown-item" href="page-new-note7ce5.html?type=daily">
                          <span><i class="ri-donut-chart-line mr-3"></i>Daily Reflection</span>
                      </a>
                  </div>
              </div>
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="active">
                              <a href="index.html" class="svg-icon">
                                  <i>
                                      <svg class="svg-icon" id="iq-main-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                      </svg>
                                  </i>
                                  <span>Your Notes</span>
                              </a>
                          <ul id="index" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          </ul>
                      </li>
                      <li class="">
                          <a href="#notebooks" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                  </svg>
                              </i>
                              <span>Notebooks</span>
                              <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                              <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="notebooks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="">
                                  <a href="page-project-plans.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Project Plans</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="page-routinenotes.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Routine Notes</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="page-planning.html" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Planning</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="page-reminder.html" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                              </i>
                              <span>Reminder</span>
                          </a>
                      </li>
                      <li class="" data-extra-toggle="right-sidebar">
                          <a href="javascript:void(0);" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                  </svg>                            
                              </i>
                              <span>Tags</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="page-bin.html" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                              </i>
                              <span>Bin</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="#otherpage" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                  </svg>
                              </i>
                              <span>other page</span>
                              <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                              <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="">
                                  <a href="#user" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-user-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                          </svg>
                                      </i>
                                      <span>User Details</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                      <li class="">
                                          <a href="https://templates.iqonic.design/note-plus/html/app/user-profile.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-user-1-1"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                  </svg>
                                              </i><span class="">User Profile</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="https://templates.iqonic.design/note-plus/html/app/user-add.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-user-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                  </svg>
                                              </i><span class="">User Add</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="https://templates.iqonic.design/note-plus/html/app/user-list.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-user-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                  </svg>
                                              </i><span class="">User List</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#ui" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                          </svg>
                                      </i>
                                      <span>UI Elements</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                          <li class="">
                                                  <a href="ui-avatars.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                          </svg>
                                                      </i><span class="">Avatars</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-alerts.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                          </svg>
                                                      </i><span class="">Alerts</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-badges.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                          </svg>
                                                      </i><span class="">Badges</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-breadcrumb.html" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                      </svg>
                                                      </i><span class="">Breadcrumb</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-buttons.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                                          </svg>
                                                      </i><span class="">Buttons</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-buttons-group.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-5" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                          </svg>
                                                      </i><span class="">Buttons Group</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-boxshadow.html" class="svg-icon">
                                                      <i class="">
                                                              <svg class="svg-icon" id="iq-ui-1-6" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                                              </svg>
                                                      </i><span class="">Box Shadow</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-colors.html" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                                      </svg>
                                                      </i><span class="">Colors</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-cards.html" class="svg-icon">
                                                      <i class="">
                                                      <svg  class="svg-icon" id="iq-ui-1-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                      </svg>
                                                      </i><span class="">Cards</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-carousel.html" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                                      </svg>
                                                      </i><span class="">Carousel</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-grid.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                          </svg>
                                                      </i><span class="">Grid</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-helper-classes.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-11" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                                          </svg>
                                                      </i><span class="">Helper classes</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-images.html" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                      </svg>
                                                      </i><span class="">Images</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-list-group.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon feather feather-list" id="iq-ui-1-13" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                          </svg>
                                                      </i><span class="">list Group</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-media-object.html" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-14" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                          </svg>
                                                      </i><span class="">Media</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-modal.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon feather feather-columns" id="iq-ui-1-15" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>
                                                          </svg>
                                                      </i><span class="">Modal</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-notifications.html" class="svg-icon">
                                                      <i class="">
                                                      <svg  class="svg-icon" id="iq-ui-1-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                      </svg>
                                                      </i><span class="">Notifications</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-pagination.html" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-17" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                      </svg>
                                                      </i><span class="">Pagination</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-popovers.html" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon" id="iq-ui-1-18" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                  <line x1="7.5" y1="4.21" x2="7.5" y2="4.22" />
                                                                  <line x1="4.21" y1="7.5" x2="4.21" y2="7.51" />
                                                                  <line x1="3" y1="12" x2="3" y2="12.01" />
                                                                  <line x1="4.21" y1="16.5" x2="4.21" y2="16.51" />
                                                                  <line x1="7.5" y1="19.79" x2="7.5" y2="19.8" />
                                                                  <line x1="12" y1="21" x2="12" y2="21.01" />
                                                                  <line x1="16.5" y1="19.79" x2="16.5" y2="19.8" />
                                                                  <line x1="19.79" y1="16.5" x2="19.79" y2="16.51" />
                                                                  <line x1="21" y1="12" x2="21" y2="12.01" />
                                                                  <line x1="19.79" y1="7.5" x2="19.79" y2="7.51" />
                                                                  <line x1="16.5" y1="4.21" x2="16.5" y2="4.22" />
                                                                  <line x1="12" y1="3" x2="12" y2="3.01" />
                                                              </svg>
                                                      </i><span class="">Popovers</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-progressbars.html" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon feather feather-hard-drive" id="iq-ui-1-19" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="12" x2="2" y2="12"></line><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" y1="16" x2="6.01" y2="16"></line><line x1="10" y1="16" x2="10.01" y2="16"></line>
                                                          </svg>
                                                      </i><span class="">Progressbars</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-typography.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-20" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Typography</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-tabs.html" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-21" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Tabs</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-tooltips.html" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon" id="iq-ui-1-22" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                              <path d="M4 13v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a2 2 0 0 0 6 0v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a8 8 0 0 1 -16 0" />
                                                              <line x1="4" y1="8" x2="9" y2="8" />
                                                              <line x1="15" y1="8" x2="19" y2="8" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Tooltips</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-embed-video.html" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Video</span>
                                                  </a>
                                          </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#auth" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i>
                                          <svg class="svg-icon" id="iq-auth-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                          </svg>
                                      </i>
                                      <span>Authentication</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                      <li class="">
                                          <a href="auth-sign-in.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-auth-1-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                  </svg>
                                              </i>
                                              <span class="">Login</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-sign-up.html" class="svg-icon">
                                              <i class="">
                                                  <svg  class="svg-icon" id="iq-auth-1-2" width="20"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                  </svg>
                                              </i>
                                              <span class="">Register</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-recoverpw.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-auth-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                  </svg>
                                              </i>
                                              <span class="">Recover Password</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-confirm-mail.html" class="svg-icon">
                                              <i class="">
                                              <svg class="svg-icon" id="iq-auth-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                  </svg>
                                              </i>
                                              <span class="">Confirm Mail</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-lock-screen.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon feather feather-lock" id="iq-auth-1-5" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                              </i>
                                              <span class="">Lock Screen</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#pricing" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i>
                                          <svg class="svg-icon" id="iq-extra-1-3"  xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <path d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1zm7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a0.5 .5 0 0 1 -.5 -.6l.2 -1.4" />
                                          </svg>
                                      </i>
                                      <span>Pricing</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                          <li class="">
                                              <a href="pricing.html" class="svg-icon">
                                                  <i class="">
                                                      <svg class="svg-icon" id="iq-extra-1-3-1" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                          <rect x="4" y="4" width="16" height="16" rx="2" />
                                                      </svg>
                                                  </i>
                                                  <span class="">Pricing 1</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="pricing-1.html" class="svg-icon">
                                                  <i class="">
                                                      <svg class="svg-icon" id="iq-extra-1-3-2" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                      <line x1="12" y1="17" x2="12" y2="3" />
                                                      <path d="M15 6l-3 -3l-3 3" />
                                                      <circle cx="12" cy="19" r="2" />
                                                      </svg>
                                                  </i>
                                                  <span class="">Pricing 2</span>
                                              </a>
                                          </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#pages-error" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg  class="svg-icon feather feather-alert-triangle" id="iq-extra-1-4" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                      </i>
                                      <span>Error</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                      <li class="">
                                          <a href="pages-error.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon feather feather-alert-circle" id="iq-extra-1-4-1"  xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                              </i>
                                              <span class="">Error 404</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="pages-error-500.html" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-extra-1-4-2" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                      <path d="M9 9v-1a3 3 0 0 1 6 0v1" />
                                                      <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3" />
                                                      <line x1="3" y1="13" x2="7" y2="13" />
                                                      <line x1="17" y1="13" x2="21" y2="13" />
                                                      <line x1="12" y1="20" x2="12" y2="14" />
                                                      <line x1="4" y1="19" x2="7.35" y2="17" />
                                                      <line x1="20" y1="19" x2="16.65" y2="17" />
                                                      <line x1="4" y1="7" x2="7.75" y2="9.4" />
                                                      <line x1="20" y1="7" x2="16.25" y2="9.4" />
                                                  </svg>
                                              </i>
                                              <span class="">Error 500</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="pages-blank-page.html" class="svg-icon">
                                      <i class="">
                                          <svg  class="svg-icon" id="iq-extra-1-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Blank Page</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="pages-maintenance.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-extra-1-9" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <circle cx="12" cy="7" r="3" />
                                              <circle cx="17" cy="16" r="3" />
                                              <circle cx="7" cy="16" r="3" />
                                          </svg>
                                      </i>
                                      <span>Maintenance</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </nav>
              <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                  <div class="card rounded shadow-none">
                      <div class="card-body">
                          <div class="sidebarbottom-content">
                              <div class="image"><img src="../assets/images/layouts/side-bkg.png" class="img-fluid" alt="side-bkg"></div>
                              <p class="mb-0">Set Buisness Account To Explore Premiun Features</p>
                              <button type="button" class="btn bg-primary mt-3">Upgrade</button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-3"></div>
          </div>
      </div>      <div class="content-page">
     <div class="container-fluid note-details">
        <div class="desktop-header">
            <div class="card card-block topnav-left">
                <div class="card-body write-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="iq-note-callapse-menu">
                            <a class="iq-note-callapse-btn show-note-button" data-toggle="collapse" href="#collapseMenu" role="button"
                                data-extra-toggle="toggle" data-extra-class-show=".hide-note-button" data-extra-class-hide=".show-note-button"
                                aria-expanded="false">
                                <i class="las la-pencil-alt pr-2"></i>Write Your Note
                            </a>
                            <span class="hide-note-button d-none"><i class="las la-folder pr-2"></i>Folder</span>
                        </div>
                        <div class="note-right media align-items-top hide-note-button d-none">
                            <div class="mr-2"><a href="#" class="btn view-btn body-bg" data-toggle="modal" data-target="#share-note">Share</a></div>
                            <div class="view-btn btn-dropdown body-bg rounded">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                                        <i class="ri-more-2-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#"><i class="lar la-heart mr-3"></i>Add To Favourite</a>
                                        <a class="dropdown-item" href="#"><i class="las la-thumbtack mr-3"></i>Mark As Pin</a>
                                        <a class="dropdown-item" href="#"><i class="las la-trash-alt mr-3"></i>Move to Trash</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card topnav-right">
                
                <div class="card-body card-content-right">
                    <ul class="list-inline m-0 p-0 d-flex align-items-center justify-content-around">
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="">
                                <svg width="20" class="svg-icon" id="main-n-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </i>
                            <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                            <span class="bg-primary"></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="p-3">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pb-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pt-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown pl-3"> 
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton002" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <i class="">
                                <svg width="20" class="svg-icon" id="main-n-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </i>
                            <span class="badge badge-primary count-mail rounded-circle">2</span>
                            <span class="bg-primary "></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton002">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="p-3">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pb-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pt-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>  
                    </ul>
                </div>            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="collapse" id="collapseMenu">
                    <div class="card card-block card-stretch">
                        <div class="card-body write-card">
                            <div class="container-fluid collapse-fluid">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 p-0">
                                        <div class="card card-transparent card-block card-stretch event-note">
                                            <div class="card-body px-0 bukmark">
                                                <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">                                                    
                                                    <div class="quill-tool">
                                                    </div>
                                                    <div class="iq-full-screen"><a href="#" class="" id="btnFullscreen"><i class="las la-expand-arrows-alt font-size-18"></i></a></div>
                                                </div>
                                                <div id="quill-toolbar">
                                                    <h1 class="mb-3">Birthday Bash</h1>
                                                    <p>Hosting friend's birthday party and purchasing items.</p>
                                                    <ul>
                                                        <li>Cake</li>
                                                        <li>Balloons</li>
                                                        <li>Cold Drinks</li>
                                                    </ul>
                                                    <img src="../assets/images/event-note/01.png" class="img-fluid image-1" alt="image">                                                    
                                                    <img src="../assets/images/event-note/02.png" class="img-fluid image-2" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-12 p-0 d-flex justify-content-end">
                                        <button class="btn btn-outline-primary" data-extra-toggle="toggle" data-extra-class-show=".show-note-button" data-extra-class-hide=".hide-note-button">Close</button>
                                        <button class="btn btn-primary ml-2" data-extra-toggle="toggle" data-extra-class-show=".show-note-button" data-extra-class-hide=".hide-note-button">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">                
                <div class="card card-block card-stretch">
                    <div class="card-body custom-notes-space">
                        <h3 class="">Your Notes</h3>
                        <div class="iq-tab-content">
                            <div class="d-flex flex-wrap align-items-top justify-content-between">
                                <ul class="d-flex nav nav-pills text-center note-tab mb-3" id="note-pills-tab" role="tablist">                                
                                    <li class="nav-item">
                                        <a class="nav-link home active show" data-toggle="pill" data-init="note" href="#note1" role="tab" aria-selected="false">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link home" data-toggle="pill" data-init="shared-note" href="#note2" role="tab" aria-selected="true">Shared Notes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link home" data-toggle="pill" data-init="pin-note" href="#note3" role="tab" aria-selected="false">Pin Notes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link home" data-toggle="pill" data-init="fav-note" href="#note4" role="tab" aria-selected="false">Favourite Notes</a>
                                    </li>
                                </ul> 
                                <div class="media align-items-top iq-grid">
                                    <div class="view-btn rounded body-bg btn-dropdown filter-btn mr-3">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle cursor-pointer" id="dropdownMenuButton003" data-toggle="dropdown">
                                                <i class="las la-filter font-size-20"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton003">                                                
                                                <div class="dropdown-item mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mr-4"><i class="las la-book mr-3"></i>Located In</h6>
                                                        <div class="form-group mb-0">
                                                            <select name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                                <option value="1">Project Plans</option>
                                                                <option value="2">Routine Notes</option>
                                                                <option value="3">Planning</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mr-4"><i class="las la-paste mr-3"></i>Contains</h6>
                                                        <div class="form-group mb-0">
                                                            <select name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                                <option value="1">Address</option>
                                                                <option value="2">Archive Files</option>
                                                                <option value="3">Code Blocks</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item mb-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mr-4"><i class="las la-calendar mr-3"></i>Created</h6>
                                                        <div class="form-group mb-0">
                                                            <select id="date-select" name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                                <option value="today">Today</option>
                                                                <option value="yest">Yesterday</option>
                                                                <option value="last-week">Last Week</option>
                                                                <option value="last-month">Last Month</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="list-grid-toggle cursor-pointer">
                                        <span class="icon active i-grid rounded"><i class="ri-layout-grid-line font-size-20"></i></span>
                                        <span class="icon active i-list rounded"><i class="ri-list-check font-size-20"></i></span>
                                        <span class="label label-list">List</span>
                                    </div>
                                </div>          
                            </div>             
                            <div class="note-content tab-content">                                
                                <div id="note1" class="tab-pane fade active show">
                                    <div class="icon active animate__animated animate__fadeIn i-grid">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton4"
                                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                                    <i class="ri-more-fill"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="note-dropdownMenuButton4" style="">
                                                                    <a href="#" class="dropdown-item new-note1" data-toggle="modal" data-target="#new-note1"><i class="las la-eye mr-3"></i>View</a>
                                                                    <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                    <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Weekly Planner</h4>
                                                        <p class="mb-3 card-description short">Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>                                                            
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-info">
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>03 share</a>
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-purple note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-purple rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" class="show-tab" data-show-tab="[href='#note3']" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton5"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton5" style="">
                                                                        <a href="#" class="dropdown-item new-note2" data-toggle="modal" data-target="#new-note2"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Birthday Celebration</h4>
                                                        <p class="mb-3 card-description short">You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-purple"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-03"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton6"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton6" style="">
                                                                        <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Essay Outline</h4> 
                                                        <ul class="pl-3 mb-0">
                                                            <li class="note-list mb-2">Content should be of topic.</li>
                                                            <li class="note-list mb-2">300 Words only.</li>
                                                            <li class="note-list">Make presentation.</li>
                                                        </ul>  
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-warning"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-04" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title=""  class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton7"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton7" style="">
                                                                        <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Lecture Notes</h4>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox18">
                                                            <label for="checkbox18" class="note-checkbox mb-0">Chapter 1 notes.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox19">
                                                            <label for="checkbox19" class="note-checkbox mb-0">Chapter 2 Assignment.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox20">
                                                            <label for="checkbox20" class="note-checkbox mb-0">Chapter 3 practical File.</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-danger"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-primary note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-primary rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-05" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note3']" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton8"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton8" style="">
                                                                        <a href="#" class="dropdown-item new-note5" data-toggle="modal" data-target="#new-note5"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Image Notes</h4>
                                                        <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/08.jpg" class="img-fluid note-image rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/05.jpg" class="img-fluid note-image rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/03.jpg" class="img-fluid note-image rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-primary"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>01 Share</a>
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>05 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-success note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-06" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton9"
                                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                                    <i class="ri-more-fill"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="note-dropdownMenuButton9" style="">
                                                                    <a href="#" class="dropdown-item new-note6" data-toggle="modal" data-target="#new-note6"><i class="las la-eye mr-3"></i>View</a>
                                                                    <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                    <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Benefits of NotePlus</h4>
                                                        <p class="mb-3 card-description short">Take organized notes and share later as meeting minutes or check-list with this simple accessible Noteplus. Each note you create will be stored on a virtual page of the NotePlus. You can store groups of seperate notes. You can store an unlimited number of separate notes within the NotePlus.</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-success"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>02 share</a>
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-success note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-07"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note3']" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton10"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton10" style="">
                                                                        <a href="#" class="dropdown-item new-note7" data-toggle="modal" data-target="#new-note7"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">  
                                                        <h4 class="card-title">Quick Summary</h4>          
                                                        <p class="mb-3 card-description short">Need to write a summary note of the subject you just finished? NotePlus lets you do in on-the-go!</p>
                                                        <p class="text-underline ellipsis-text short">Https://Dribble.com/Shots/6387620</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-success"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>11 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-08" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton11"
                                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                                    <i class="ri-more-fill"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="note-dropdownMenuButton11" style="">
                                                                    <a href="#" class="dropdown-item new-note8" data-toggle="modal" data-target="#new-note8"><i class="las la-eye mr-3"></i>View</a>
                                                                    <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                    <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Address & Email</h4>
                                                        <p class="mb-3 card-description short">Quickly note down the address and email address on NotePlus so that you can access it from anywhere.</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-warning"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>04 share</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>13 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-09" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton12"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="dropdownMenuButton12" style="">
                                                                        <a href="#" class="dropdown-item new-note9" data-toggle="modal" data-target="#new-note9"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">NotePlus for Entrepreneurs</h4>
                                                        <p class="mb-3 card-description short">With NotePlus, you can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>                                                            
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-info"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>14 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon active animate__animated animate__fadeIn i-list">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table  tbl-server-info">
                                                        <thead>
                                                            <tr class="ligth">
                                                                <th class="w-50" scope="col">Title</th>
                                                                <th scope="col">Permission</th>
                                                                <th scope="col">Created At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Weekly Planner</h4>
                                                                    <span>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    03 share
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Birthday Celebration <i class="las la-thumbtack ml-2 show-tab" data-show-tab="[href='#note3']"></i></h4>
                                                                    <span>You can easily share via message, WhatsApp, emails etc.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Essay Outline <i class="lar la-heart ml-2 show-tab" data-show-tab="[href='#note4']"></i></h4>
                                                                    <span>Donec rutrum congue leo eget malesuada.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Lecture Notes <i class="lar la-heart ml-2 show-tab" data-show-tab="[href='#note4']"></i></h4>
                                                                    <span>Chapter 1 notes, Chapter 2 Assignment, Chapter 3 practical File.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Image Notes<i class="las la-thumbtack ml-2"></i></h4>
                                                                    <span>NotePlus lets you do in on-the-go!</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Benefits of NotePlus</h4>
                                                                    <span>Take organized notes and share later as meeting minutes or check-list</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    2 share
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Quick Summary <i class="las la-thumbtack ml-2 show-tab" data-show-tab="[href='#note3']"></i></h4>
                                                                    <span>Need to write a summary note of the subject you just finished</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 19</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Address & Email</h4>
                                                                    <span>Quickly note down the address and email address on NotePlus</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    04 share
                                                                </td>
                                                                <td>Dec 19</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">NotePlus for Entrepreneurs <i class="lar la-heart ml-2 show-tab" data-show-tab="[href='#note4']"></i></h4>
                                                                    <span>With NotePlus, you can easily share via message, WhatsApp, emails etc.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 19</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="note2" class="tab-pane fade">
                                    <div class="icon active animate__animated animate__fadeIn i-grid">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton13"
                                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                                    <i class="ri-more-fill"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="note-dropdownMenuButton13" style="">
                                                                    <a href="#" class="dropdown-item new-note1" data-toggle="modal" data-target="#new-note1"><i class="las la-eye mr-3"></i>View</a>
                                                                    <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                    <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Weekly Planner</h4>
                                                        <p class="mb-3 card-description short">Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>                                                            
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-info"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>03 share</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-success note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-11" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton14"
                                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                                    <i class="ri-more-fill"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="note-dropdownMenuButton14" style="">
                                                                    <a href="#" class="dropdown-item new-note6" data-toggle="modal" data-target="#new-note6"><i class="las la-eye mr-3"></i>View</a>
                                                                    <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                    <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Benefits of NotePlus</h4>
                                                        <p class="mb-3 card-description short">Take organized notes and share later as meeting minutes or check-list with this simple accessible Noteplus. Each note you create will be stored on a virtual page of the NotePlus. You can store groups of seperate notes. You can store an unlimited number of separate notes within the NotePlus.</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-success"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>02 share</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                                <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton15"
                                                                    data-toggle="dropdown" aria-expanded="false" role="button">
                                                                    <i class="ri-more-fill"></i>
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="note-dropdownMenuButton15" style="">
                                                                    <a href="#" class="dropdown-item new-note8" data-toggle="modal" data-target="#new-note8"><i class="las la-eye mr-3"></i>View</a>
                                                                    <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                    <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Address & Email</h4>
                                                        <p class="mb-3 card-description short">Quickly note down the address and email address on NotePlus so that you can access it from anywhere.</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-warning"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>04 share</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>8 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-13" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">  
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton16"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton16" style="">
                                                                        <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Lecture Notes</h4>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox4">
                                                            <label for="checkbox4" class="note-checkbox mb-0">Chapter 1 notes.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox5">
                                                            <label for="checkbox5" class="note-checkbox mb-0">Chapter 2 Assignment.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox6">
                                                            <label for="checkbox6" class="note-checkbox mb-0">Chapter 3 practical File.</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-danger"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>05 share</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-purple note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-purple rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton17"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton17" style="">
                                                                        <a href="#" class="dropdown-item new-note2" data-toggle="modal" data-target="#new-note2"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Birthday Celebration</h4>
                                                        <p class="mb-3 card-description short">You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>
                                                        <ul class="pl-3 mb-0">
                                                            <li class="note-list">Cakes and Balloons.</li>
                                                        </ul>  
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-purple"> 
                                                            <a href="#" class=""><i class="las la-lock mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                           
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton18"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton18" style="">
                                                                        <a href="#" class="dropdown-item new-note9" data-toggle="modal" data-target="#new-note9"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">NotePlus for Entrepreneurs</h4>
                                                        <p class="mb-3 card-description short">With NotePlus, you can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>                                                            
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-info"> 
                                                            <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>07 share</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>16 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>  
                                    </div>
                                    <div class="icon active animate__animated animate__fadeIn i-list">
                                        <div class="row">   
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table  tbl-server-info">
                                                        <thead>
                                                            <tr class="ligth">
                                                                <th class="w-50" scope="col">Title</th>
                                                                <th scope="col">Permission</th>
                                                                <th scope="col">Created At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Weekly Planner</h4>
                                                                    <span>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    03 share
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Benefits of NotePlus</h4>
                                                                    <span>Take organized notes and share later as meeting minutes or check-list</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    2 share
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Address & Email</h4>
                                                                    <span>Quickly note down the address and email address on NotePlus</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    04 share
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Lecture Notes</h4>
                                                                    <span>Chapter 1 notes, Chapter 2 Assignment, Chapter 3 practical File.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    05 share
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Birthday Celebration</h4>
                                                                    <span>You can easily share via message, WhatsApp, emails etc.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">NotePlus for Entrepreneurs</h4>
                                                                    <span>Quickly note down the address and email address on NotePlus</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-user-friends mr-2 font-size-20"></i>
                                                                    07 share
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="note3" class="tab-pane fade">
                                    <div class="icon active animate__animated animate__fadeIn i-grid">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-purple note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-purple rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton19"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton19" style="">
                                                                        <a href="#" class="dropdown-item new-note2" data-toggle="modal" data-target="#new-note2"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Birthday Celebration</h4>
                                                        <p class="mb-3 card-description short">You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>
                                                        <ul class="pl-3 mb-0">
                                                            <li class="note-list">Cakes and Balloons.</li>
                                                        </ul>  
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-purple"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-primary note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-primary rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-17" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton20"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton20" style="">
                                                                        <a href="#" class="dropdown-item new-note5" data-toggle="modal" data-target="#new-note5"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Image Notes</h4>
                                                        <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/01.jpg" class="img-fluid rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/02.jpg" class="img-fluid rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/03.jpg" class="img-fluid rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-primary"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>05 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-success note-detail mb-0">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton21"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton21" style="">
                                                                        <a href="#" class="dropdown-item new-note7" data-toggle="modal" data-target="#new-note7"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">  
                                                        <h4 class="card-title">Quick Summary</h4>          
                                                        <p class="mb-3 card-description short">Need to write a summary note of the subject you just finished? NotePlus lets you do in on-the-go!</p>
                                                        <p class="text-underline ellipsis-text short">Https://Dribble.com/Shots/6387620</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-success"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-19"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">     
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton22"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton22" style="">
                                                                        <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Essay Outline</h4> 
                                                        <ul class="pl-3 mb-0">
                                                            <li class="note-list mb-2">Content should be of topic.</li>
                                                            <li class="note-list mb-2">300 Words only.</li>
                                                            <li class="note-list">Make presentation.</li>
                                                        </ul>  
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-warning"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>13 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">     
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton23"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton23" style="">
                                                                        <a href="#" class="dropdown-item new-note9" data-toggle="modal" data-target="#new-note9"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">NotePlus for Entrepreneurs</h4>
                                                        <p class="mb-3 card-description short">With NotePlus, you can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>                                                            
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-info"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-21" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">        
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton24"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton24" style="">
                                                                        <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Lecture Notes</h4>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox7">
                                                            <label for="checkbox7" class="note-checkbox mb-0">Chapter 1 notes.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox8">
                                                            <label for="checkbox8" class="note-checkbox mb-0">Chapter 2 Assignment.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox9">
                                                            <label for="checkbox9" class="note-checkbox mb-0">Chapter 3 practical File.</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-danger"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>9 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="icon active animate__animated animate__fadeIn i-list">
                                        <div class="row">                                            
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table  tbl-server-info">
                                                        <thead>
                                                            <tr class="ligth">
                                                                <th class="w-50" scope="col">Title</th>
                                                                <th scope="col">Permission</th>
                                                                <th scope="col">Created At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Birthday Celebration <i class="las la-thumbtack ml-2"></i></h4>
                                                                    <span>You can easily share via message, WhatsApp, emails etc.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Image Notes<i class="las la-thumbtack ml-2"></i></h4>
                                                                    <span>NotePlus lets you do in on-the-go!</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Quick Summary <i class="las la-thumbtack ml-2"></i></h4>
                                                                    <span>Need to write a summary note of the subject you just finished</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Essay Outline <i class="las la-thumbtack ml-2"></i></h4>
                                                                    <span>Donec rutrum congue leo eget malesuada.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">NotePlus for Entrepreneurs <i class="las la-thumbtack ml-2"></i></h4>
                                                                    <span>With NotePlus, you can easily share via message, WhatsApp, emails etc.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Lecture Notes <i class="las la-thumbtack ml-2"></i></h4>
                                                                    <span>Chapter 1 notes, Chapter 2 Assignment, Chapter 3 practical File.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="note4" class="tab-pane fade">
                                    <div class="icon active animate__animated animate__fadeIn i-grid">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-22" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton25"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton25" style="">
                                                                        <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Essay Outline</h4> 
                                                        <ul class="pl-3 mb-0">
                                                            <li class="note-list mb-2">Content should be of topic.</li>
                                                            <li class="note-list mb-2">300 Words only.</li>
                                                            <li class="note-list">Make presentation.</li>
                                                        </ul>  
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-warning"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-23" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                      
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton26"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton26" style="">
                                                                        <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Lecture Notes</h4>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox10">
                                                            <label for="checkbox10" class="note-checkbox mb-0">Chapter 1 notes.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox11">
                                                            <label for="checkbox11" class="note-checkbox mb-0">Chapter 2 Assignment.</label>
                                                        </div>
                                                        <div class="checkbox mb-2">
                                                            <input type="checkbox" class="checkbox-input mr-3" id="checkbox12">
                                                            <label for="checkbox12" class="note-checkbox mb-0">Chapter 3 practical File.</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-danger"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>15 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                     
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton27"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton27" style="">
                                                                        <a href="#" class="dropdown-item new-note9" data-toggle="modal" data-target="#new-note9"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">NotePlus for Entrepreneurs</h4>
                                                        <p class="mb-3 card-description short">With NotePlus, you can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>                                                            
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-info"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>18 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                         
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-purple note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-purple rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton28"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton28" style="">
                                                                        <a href="#" class="dropdown-item new-note2" data-toggle="modal" data-target="#new-note2"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Birthday Celebration</h4>
                                                        <p class="mb-3 card-description short">You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>
                                                        <ul class="pl-3 mb-0">
                                                            <li class="note-list">Cakes and Balloons.</li>
                                                        </ul>  
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-purple"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-primary note-detail">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-primary rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-26" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton29"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton29" style="">
                                                                        <a href="#" class="dropdown-item new-note5" data-toggle="modal" data-target="#new-note5"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">
                                                        <h4 class="card-title">Image Notes</h4>
                                                        <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/01.jpg" class="img-fluid rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/02.jpg" class="img-fluid rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                            <li class="col-4">
                                                                <a href="#">
                                                                    <img src="../assets/images/gallery/grid/03.jpg" class="img-fluid rounded" alt="" />  
                                                                </a> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-primary"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>5 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card card-block card-stretch card-height card-bottom-border-success note-detail mb-0">
                                                    <div class="card-header d-flex justify-content-between pb-1">
                                                        <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                            <svg width="23" height="23" class="svg-icon" id="iq-main-27"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                            </svg>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">                                                                
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                            <div class="card-header-toolbar d-flex align-items-center">
                                                                <div class="dropdown">
                                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton30"
                                                                        data-toggle="dropdown" aria-expanded="false" role="button">
                                                                        <i class="ri-more-fill"></i>
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="note-dropdownMenuButton30" style="">
                                                                        <a href="#" class="dropdown-item new-note7" data-toggle="modal" data-target="#new-note7"><i class="las la-eye mr-3"></i>View</a>
                                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body rounded">  
                                                        <h4 class="card-title">Quick Summary</h4>          
                                                        <p class="mb-3 card-description short">Need to write a summary note of the subject you just finished? NotePlus lets you do in on-the-go!</p>
                                                        <p class="text-underline ellipsis-text short">Https://Dribble.com/Shots/6387620</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center justify-content-between note-text note-text-success"> 
                                                            <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only You</a>                                                            
                                                            <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12 Jan 2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="icon active animate__animated animate__fadeIn i-list">
                                        <div class="row">                                            
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table  tbl-server-info">
                                                        <thead>
                                                            <tr class="ligth">
                                                                <th class="w-50" scope="col">Title</th>
                                                                <th scope="col">Permission</th>
                                                                <th scope="col">Created At</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Essay Outline <i class="lar la-heart ml-2"></i></h4>
                                                                    <span>Donec rutrum congue leo eget malesuada.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Lecture Notes <i class="lar la-heart ml-2"></i></h4>
                                                                    <span>Chapter 1 notes, Chapter 2 Assignment, Chapter 3 practical File.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">NotePlus for Entrepreneurs <i class="lar la-heart ml-2"></i></h4>
                                                                    <span>With NotePlus, you can easily share via message, WhatsApp, emails etc.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Birthday Celebration <i class="lar la-heart ml-2"></i></h4>
                                                                    <span>You can easily share via message, WhatsApp, emails etc.</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Image Notes<i class="lar la-heart ml-2"></i></h4>
                                                                    <span>NotePlus lets you do in on-the-go!</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4 class="mb-2">Quick Summary <i class="lar la-heart ml-2"></i></h4>
                                                                    <span>Need to write a summary note of the subject you just finished</span>
                                                                </td>
                                                                <td>
                                                                    <i class="las la-lock mr-2 font-size-20"></i>
                                                                    Only You
                                                                </td>
                                                                <td>Dec 20</td>
                                                                <td>
                                                                    <div>
                                                                        <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                                        <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    <!-- Share Modal -->
    <div class="modal fade" id="share-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">Share</h4>
                        <div class="content create-workform bg-body">
                            <div class="mb-3">
                                <h5 class="mb-2">Shareable Link</h5>
                                <input type="text" class="form-control" placeholder="" value="https://dribble.com/Shots/6387620">
                            </div>      
                            <div class="pb-3">               
                                <h5 class="mb-2">Invite Someone</h5>
                                <input type="text" class="form-control" placeholder="Enter Name or Email">
                            </div>       
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Modal View -->
        <div class="modal fade" id="new-note1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Weekly Planner</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content create-workform">
                                <p class="mb-4">Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p> 
                                <h4 class="mb-3">Shared</h4>
                                <ul class="list-inline p-0 m-0">
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Anne Effit</h5>
                                                    <h6 class="mb-0">04 Hours Ago</h6>
                                                </div>
                                                <p class="mb-0">anneeffit@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Poall Molve</h5>
                                                    <h6 class="mb-0">04 Hours Ago</h6>
                                                </div>
                                                <p class="mb-0">poallmolve@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Mack Devid</h5>
                                                    <h6 class="mb-0">05 Jan 2021</h6>
                                                </div>
                                                <p class="mb-0">mackdevid@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="modal fade" id="new-note2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Birthday Celebration</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <p>You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p> 
                                <ul class="pl-3 mb-0">
                                    <li class="note-list">Cakes and Balloons.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Essay Outline</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <ul class="pl-3 mb-0">
                                    <li class="note-list mb-2">Content should be of topic</li>
                                    <li class="note-list mb-2">300 Words only</li>
                                    <li class="note-list mb-2">Make presentation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="new-note4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Lecture Notes</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="checkbox-input mr-3" id="checkbox13">
                                    <label for="checkbox13" class="note-checkbox mb-0">Chapter 1 notes</label>
                                </div>
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="checkbox-input mr-3" id="checkbox14">
                                    <label for="checkbox14" class="note-checkbox mb-0">Chapter 2 Assignment</label>
                                </div>
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="checkbox-input mr-3" id="checkbox15">
                                    <label for="checkbox15" class="note-checkbox mb-0">Chapter 3 practical File</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="new-note5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Image Notes</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform mb-4">
                                <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                    <li class="col-md-4 mb-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/01.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4 mb-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/02.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4 mb-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/03.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/04.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/05.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/06.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                            <h4 class="mb-3">Shared</h4>
                            <ul class="list-inline p-0 m-0">
                                <li>
                                    <div class="media align-items-center cust-card mb-3">
                                        <div class="">
                                            <img class="avatar-50 rounded-small" src="../assets/images/user/04.jpg" alt="01">
                                        </div>
                                        <div class="media-body ml-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">Anne Effit</h5>
                                                <h6 class="mb-0">02 Min Ago</h6>
                                            </div>
                                            <p class="mb-0">anneeffit@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="new-note6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Benefits of NotePlus</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content create-workform">
                                <p>Take organized notes and share later as meeting minutes or check-list with this simple accessible Noteplus.</p> 
                                <h4 class="mb-3">Shared</h4>
                                <ul class="list-inline p-0 m-0">
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/04.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Anne Effit</h5>
                                                    <h6 class="mb-0">02 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">anneeffit@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/05.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Poall Molve</h5>
                                                    <h6 class="mb-0">15 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">poallmolve@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Quick Summary</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <p>Need to write a summary note of the subject you just finished? NotePlus lets you do in on-the-go!</p> 
                                <p class="text-underline ellipsis-text short">Https://Dribble.com/Shots/6387620</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Address & Email</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content create-workform">
                                <p>Quickly note down the address and email address on NotePlus so that you can access it from anywhere.</p> 
                                <h4 class="mb-3">Shared</h4>
                                <ul class="list-inline p-0 m-0">
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/06.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Anne Effit</h5>
                                                    <h6 class="mb-0">02 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">anneeffit@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/07.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Poall Molve</h5>
                                                    <h6 class="mb-0">05 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">poallmolve@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/08.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">John Teach</h5>
                                                    <h6 class="mb-0">16 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">johnteach@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/09.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Rick Ness</h5>
                                                    <h6 class="mb-0">18 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">rickness@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">NotePlus for Entrepreneurs</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <p>With NotePlus, you can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <!-- Modal Edit -->
    <div class="modal fade" id="edit-note1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">                            
                            <h3 class="mb-3">Weekly Planner</h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content edit-notes">
                            <div class="card card-transparent card-block card-stretch event-note mb-0">
                                <div class="card-body px-0 bukmark">
                                    <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">                                                    
                                        <div class="quill-tool">
                                        </div>
                                    </div>
                                    <div id="quill-toolbar1">
                                        <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                        <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="text-secondary mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">NotePlus</a>.
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
  </body>

<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 13:41:26 GMT -->
</html>