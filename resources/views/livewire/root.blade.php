<div>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name') }}</title>
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="https://templates.iqonic.design/note-plus/html/assets/images/favicon.ico" />
        <link rel="stylesheet" href="../assets/css/backend-plugin.mine209.css">
        <link rel="stylesheet" href="../assets/css/backende209.css">
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <link rel="stylesheet" href="fontawesome.min.css" />
        <link rel="stylesheet" href="all.min.css" />


        <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
        <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">
        <link rel="stylesheet" href="../assets/vendor/line-awesome.min.css">
        <link rel="stylesheet"
            href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
        <link rel="stylesheet"
            href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
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
                            <h4 class="card-title mb-0">Lista de Tags</h4>
                        </div>
                        <div>
                            <a href="#" data-toggle="modal" data-target="#create-note"><i
                                    class="ri-add-line font-size-20"></i></a>
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
                                            <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                                href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                                href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
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
                                            <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                                href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                                href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
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
                                            <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                                href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                                href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
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
                                            <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename"
                                                href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item"
                                                href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    
    
        <!-- Wrapper Start -->
        <div class="wrapper">
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>
                            <a href="/" class="header-logo">
                                <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo"
                                    alt="logo">
    
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <li class="nav-item nav-icon search-content">
                                        <a href="#" class="search-toggle rounded" id="h1-dropdownSearch"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="h1-dropdownSearch">
                                            <form action="#" class="searchbox p-2">
                                                <div class="form-group mb-0 position-relative">
                                                    <input type="text" class="text search-input font-size-12"
                                                        placeholder="Escreva aque para pesquisar...">
                                                    <a href="#" class="search-link"><i
                                                            class="las la-search"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
    
    {{-- Email --}}
                                    <li class="nav-item nav-icon dropdown mail-content">
                                        <a href="#" class="search-toggle dropdown-toggle nav-icon-1"
                                            id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="">
                                                <svg width="20" class="svg-icon" id="main-n-010"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </i>
                                            <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                                            <span class="bg-primary"></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="h1-dropdownMenuButton2">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
                                                    <div class="px-3 pt-0 pb-0">
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/01.jpg" alt="01">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Emma Watson</h5>
                                                                        <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/02.jpg" alt="02">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Ashlynn Franci</h5>
                                                                        <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card py-3">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/03.jpg" alt="03">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Kianna Carder</h5>
                                                                        <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-block btn-primary position-relative text-center"
                                                        href="#" role="button">
                                                       Ver todas
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    {{-- Fim de email --}}
    
    {{-- notoficaco --}}
                                    <li class="nav-item nav-icon dropdown mail-content">
                                        <a href="#" class="search-toggle dropdown-toggle nav-icon-1"
                                            id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="">
                                                <svg width="20" class="svg-icon" id="main-n-020"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                </svg>
                                            </i>
                                            <span class="badge badge-primary count-mail rounded-circle">2</span>
                                            <span class="bg-primary "></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="h1-dropdownMenuButton004">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
                                                    <div class="px-3 pt-0 pb-0">
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/01.jpg" alt="01">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Emma Watson</h5>
                                                                        <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/02.jpg" alt="02">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Ashlynn Franci</h5>
                                                                        <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card py-3">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/03.jpg" alt="03">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Kianna Carder</h5>
                                                                        <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-block btn-primary position-relative text-center"
                                                        href="#" role="button">
                                                        View All
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    {{-- fim notificacao --}}
    
                                    <li class="caption-content">
                                        <a href="#"
                                            class="iq-user-toggle d-flex align-items-center justify-content-between"
                                            id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="../assets/images/user/1.jpg" class="img-fluid rounded avatar-50"
                                                alt="user">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2"
                                            aria-labelledby="h-dropdownMenuButton001">
                                            <a class="dropdown-item mb-2"
                                                href="/user-profile">
                                                <i class="lar la-user-circle font-size-20 mr-1"></i>
                                                <span class="mt-2">Meu Perfil</span>
                                            </a>
                                            <a class="dropdown-item mb-2"
                                                href="/user-profile-edit">
                                                <i class="las la-user-edit font-size-20 mr-1"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                            <a class="dropdown-item mb-2"
                                                href="/user-account-setting">
                                                <i class="las la-user-cog font-size-20 mr-1"></i>
                                                <span>Account Settings</span>
                                            </a>
                                            <a class="dropdown-item"
                                                href="/user-privacy-setting">
                                                <i class="las la-user-shield font-size-20 mr-1"></i>
                                                <span>Privacy Settings</span>
                                            </a>
                                            <hr class="my-1">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            <a class="dropdown-item" href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                                <span>Logout</span>
                                            </a>
                                            </form>
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
                    <a href="/index" class="header-logo">
                        <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                        <h4 class="logo-title ml-3">{{ config('app.name') }}</h4>
                    </a>
                    <div class="iq-menu-bt-sidebar">
                        <i class="las la-times wrapper-menu"></i>
                    </div>
                </div>
                <div class="sidebar-caption dropdown">
                    <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../assets/images/user/1.jpg" class="img-fluid rounded avatar-50 mr-3" alt="user">
                        <div class="caption">
                            <h6 class="mb-0 line-height">{{ Auth::user()->name }}</h6>
                        </div>
                        <i class="las la-angle-down"></i>
                    </a>
                    <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item mb-2"
                            href="app/user-profile">
                            <i class="lar la-user-circle font-size-20 mr-1"></i>
                            <span class="mt-2">Meu Perfil</span>
                        </a>
                        <a class="dropdown-item mb-2"
                            href="app/user-profile-edit">
                            <i class="las la-user-edit font-size-20 mr-1"></i>
                            <span>Editar perfol</span>
                        </a>
                        <a class="dropdown-item mb-2"
                            href="app/user-account-setting">
                            <i class="las la-user-cog font-size-20 mr-1"></i>
                            <span>configurcao da conta</span>
                        </a>
                        <a class="dropdown-item mb-3"
                            href="app/user-privacy-setting">
                            <i class="las la-user-shield font-size-20 mr-1"></i>
                            <span>config Privacidade</span>
                        </a>
                        <hr class="my-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <a class="dropdown-item" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                            <span>Logout</span>
                        </a>
                        </form>
                    </div>
                </div>
                <div class="data-scrollbar" data-scroll="1">
                    <div class="iq-search-bar device-search mb-3">
                        <form action="#" class="searchbox">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            <input type="text" class="text search-input" placeholder="Procurar">
                        </form>
                    </div>
                    <div class="sidebar-btn dropdown mb-3">
                        <a href="#" id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"
                            class="btn btn-primary pr-5 position-relative iq-user-toggle d-flex align-items-center justify-content-between"
                            style="height: 40px;"><span class="btn-title"><i class="ri-add-line mr-3"></i>Adicionar Novo</span><span class="note-add-btn" style="height: 40px;"><i
                                    class="las la-angle-down"></i></span></a>
                        <div class="dropdown-menu w-100 border-0 py-3" aria-labelledby="dropdownMenuButton01">
                            <a class="dropdown-item mb-2" href="/criar">
                                <span><i class="ri-sticky-note-line mr-3"></i>Notas Brancas</span>
                            </a>
                            <a class="dropdown-item mb-2" href="page-new-note8fb2.html?type=todo">
                                <span><i class="ri-todo-line mr-3"></i>Tarefas</span>
                            </a>
                            <a class="dropdown-item mb-2" href="page-new-notefbee.html?type=essay">
                                <span><i class="ri-booklet-line mr-3"></i>Notas de Ensaio</span>
                            </a>
                            <a class="dropdown-item" href="page-new-note7ce5.html?type=daily">
                                <span><i class="ri-donut-chart-line mr-3"></i>Reflexao Diaria</span>
                            </a>
                        </div>
                    </div>
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                            <li class="active">
                                <a href="index.html" class="svg-icon">
                                    <i>
                                        <svg class="svg-icon" id="iq-main-1" width="20"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </i>
                                    <span>Suas anotações</span>
                                </a>
                                <ul id="index" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                </ul>
                            </li>
                            <li class="">
                                <a href="#notebooks" class="collapsed svg-icon" data-toggle="collapse"
                                    aria-expanded="false">
                                    <i>
                                        <svg width="20" class="svg-icon" id="iq-main-2"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
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
                                                <svg width="20" class="svg-icon" id="iq-main-3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                                </svg>
                                            </i>
                                            <span>Planos de Projecto</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="page-routinenotes.html" class="svg-icon">
                                            <i>
                                                <svg width="20" class="svg-icon" id="iq-main-4"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                                </svg>
                                            </i>
                                            <span>Notas de Rotinas</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="page-planning.html" class="svg-icon">
                                            <i>
                                                <svg width="20" class="svg-icon" id="iq-main-5"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                                </svg>
                                            </i>
                                            <span>Paneamento</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="page-reminder.html" class="svg-icon">
                                    <i>
                                        <svg width="20" class="svg-icon" id="iq-main-6"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span>Lembrete</span>
                                </a>
                            </li>
                            <li class="" data-extra-toggle="right-sidebar">
                                <a href="javascript:void(0);" class="svg-icon">
                                    <i>
                                        <svg width="20" class="svg-icon" id="iq-main-7"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                        </svg>
                                    </i>
                                    <span>Tags</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="page-bin.html" class="svg-icon">
                                    <i>
                                        <svg width="20" class="svg-icon" id="iq-main-8"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </i>
                                    <span>Lixeira</span>
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                    
                </div>
            </div>
    
            {{ $slot }}


        </div>
    
        <!-- Wrapper End-->
        <footer class="iq-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="">Política de privacidade</a></li>
                            <li class="list-inline-item"><a href="">Termos de Uso</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        <span class="text-secondary mr-1">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>©
                        </span> <a href="#" class="">{{ config('app.name') }}</a>.
                    </div>
                </div>
            </div>
        </footer>
    
      
        @stack('scripts')

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
    
</div>
