<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google material design icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
        <!-- Topbar -->
        <div class="topbar navbar shadow-sm p-0 sticky-top">
            <div class="row mx-0 w-100">
                <!-- Topbar logo -->
                <div class="topbar-brand d-flex align-items-center">

                    <!-- Initial logo -->
                    <a href="#" class="initial-logo">
                        <img src="{{ asset('images/topbar/rmg.png') }}" class="img-fluid" alt=""/>
                    </a>
                    <!-- Initial logo -->

                    <!-- Topbar collapse logo -->
                    <a href="dashboard.html" class="collapse-logo">
                        <img src="{{ asset('images/topbar/Twitter_Logo_Blue.svg') }}" class="img-fluid" alt=""/>
                    </a>
                    <!-- Topbar collapse logo -->
                </div>
                <!-- Topbar end -->

                <!-- Topbar menu -->
                <div class="topbar-menu d-flex align-items-center justify-content-between">

                    <!-- Sidebar toggler -->
                    <div class="sidebar-toggler d-none d-lg-flex">
                        <i class="material-icons md-48">menu</i>
                    </div>
                    <!-- Sidebar toggler end -->

                    <!-- Right menu -->
                    <div class="right-menu d-flex align-items-center ml-auto ml-lg-0">

                        <!-- Profile -->
                        <div class="dropdown profile">
                            <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                {{--  {{ $admin = Auth::user() }} --}}
{{--                                <img src="{{ (Auth::user()->logo != null) ? Storage::url(Auth::user()->logo) : asset('images/profile/profile.png') }}" class="img-fluid" alt=""/>--}}
                                <img src="{{ asset('images/profile/profile.png') }}" class="img-fluid" alt=""/>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right shadow-sm" aria-labelledby="dropdownMenuButton">
{{--                                <a class="dropdown-item" href="#"><i class="material-icons">person</i> Profile</a>--}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="material-icons">exit_to_app</i> Logout</a>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </div>
                        <!-- Profile end -->

                    </div>
                    <!-- Right menu end -->
                </div>
                <!-- Topbar menu end -->
            </div>
        </div>
        <!-- Topbar end -->

        <!-- Main wrapper -->
        <div class="main-wrapper">
            <!-- Sidebar -->
            <div class="navbar-nav sidebar accordion shadow-sm" id="accordionExample">

                <!-- Sidebar heading -->
                <div class="sidebar-heading">
                    <h4>মেনু</h4>
                </div>

                <!-- Nav item -->
{{--                <div class="nav-item">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="material-icons">dashboard</i>--}}
{{--                        <span>গাড়ী নিবন্ধন</span>--}}
{{--                    </a>--}}
{{--                </div>--}}

                <div class="nav-item">
                    <a class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'car.index' OR \Illuminate\Support\Facades\Route::currentRouteName() == 'car.create') ? 'active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseCar" aria-expanded="true" aria-controls="collapseCar">
                        <i class="material-icons">dashboard</i>
                        <span>গাড়ি</span>
                    </a>
                    <div id="collapseCar" class="collapse collapse-body {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'car.index' OR \Illuminate\Support\Facades\Route::currentRouteName() == 'car.create') ? 'show' : '' }}" aria-labelledby="headingCar" data-parent="#accordionExample">
                        <h5>Reports</h5>
                        <ul>
                            <li>
                                <a href="{{ route('car.index') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'car.index') ? 'active' : '' }}">সকল গাড়ি</a>
                            </li>
                            <li>
                                <a href="{{ route('car.create') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'car.create') ? 'active' : '' }}">নতুন গাড়ি নিবন্ধন</a>
                            </li>
                        </ul>
                    </div>
                </div>
            <!-- Nav item end -->

            <!-- Nav item start -->
                <div class="nav-item">
                    <a class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.index' OR \Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.create') ? 'active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseExpenceList" aria-expanded="true" aria-controls="collapseExpenceList">
                        <i class="material-icons">dashboard</i>
                        <span>খরচের খাত</span>
                    </a>
                    <div id="collapseExpenceList" class="collapse collapse-body {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.index' OR \Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.create') ? 'show' : '' }}" aria-labelledby="headingExpenceList" data-parent="#accordionExample">
                        <h5>Reports</h5>
                        <ul>
                            <li>
                                <a href="{{ route('expenceList.index') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.index') ? 'active' : '' }}">সকল খরচের খাত</a>
                            </li>
                            <li>
                                <a href="{{ route('expenceList.create') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.create') ? 'active' : '' }}">নতুন খরচের খাত</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Nav item end -->

                <!-- Nav item start -->
                <div class="nav-item">
                    <a class="nav-link {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.index' OR \Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.create') ? 'active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseDailyCost" aria-expanded="true" aria-controls="collapseDailyCost">
                        <i class="material-icons">dashboard</i>
                        <span>দৈনিক হিসাব</span>
                    </a>
                    <div id="collapseDailyCost" class="collapse collapse-body {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.index' OR \Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.create') ? 'show' : '' }}" aria-labelledby="headingDailyCost" data-parent="#accordionExample">
                        <h5>Reports</h5>
                        <ul>
                            <li>
                                <a href="{{ route('expenceList.index') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.index') ? 'active' : '' }}">সকল খরচের খাত</a>
                            </li>
                            <li>
                                <a href="{{ route('expenceList.create') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'expenceList.create') ? 'active' : '' }}">নতুন খরচের খাত</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Nav item end -->

{{--                <!-- Nav item -->--}}
{{--                <div class="nav-item">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="material-icons">tag_faces</i>--}}
{{--                        <span>Equipments</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <!-- Nav item end -->--}}

                <!-- Nav item -->
{{--                <div class="nav-item">--}}
{{--                    <a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#collapseEquipment" aria-expanded="true" aria-controls="collapseEquipment">--}}
{{--                        <i class="material-icons">bar_chart</i>--}}
{{--                        <span>Equipment</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseEquipment" class="collapse collapse-body" aria-labelledby="headingEquipment" data-parent="#accordionExample">--}}
{{--                        <h5>Reports</h5>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="#">All Equipment Purchase</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Purchase Equipment</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Nav item end -->

                <!-- Sidebar divider -->
                <div class="sidebar-divider"></div>

                <!-- Sidebar heading -->
                <div class="sidebar-heading">
                    <h4>More</h4>
                </div>

                <!-- Nav item end -->

                <!-- Nav item -->
{{--                <div id="supplier" class="nav-item">--}}
{{--                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupplier" aria-expanded="true" aria-controls="collapseSupplier">--}}
{{--                        <i class="material-icons">--}}
{{--                        people--}}
{{--                        </i>--}}
{{--                        <span>Supplier</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseSupplier" class="collapse collapse-body {{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'supplier.index' OR \Illuminate\Support\Facades\Route::currentRouteName() == 'supplier.create') ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                        <h5>Menu</h5>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('supplier.index') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'supplier.index') ? 'active' : '' }}">All Supplier</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('supplier.create') }}" class="{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'supplier.create') ? 'active' : '' }}">Create Supplier</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Nav item end -->

                <!-- Nav item -->

                <!-- Nav item end -->

{{--                <!-- Nav item -->--}}
{{--                <div id="menu" class="nav-item active">--}}
{{--                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">--}}
{{--                        <i class="material-icons">view_quilt</i>--}}
{{--                        <span>Menu</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseSix" class="collapse collapse-body show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                        <h5>Menu</h5>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="#">All Menu</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="active" href="{{ route('menu.create') }}">Create Menu</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Nav item end -->--}}

                <!-- Nav item -->
{{--                <div class="nav-item">--}}
{{--                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">--}}
{{--                        <i class="material-icons">--}}
{{--                        no_encryption--}}
{{--                        </i>--}}
{{--                        <span>Permission</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseSeven" class="collapse collapse-body" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                        <h5>Permission</h5>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('permission.index') }}">All Permission</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Create Permission</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Nav item end -->

                <!-- Nav item -->
{{--                <div class="nav-item">--}}
{{--                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">--}}
{{--                        <i class="material-icons">--}}
{{--                        policy--}}
{{--                        </i>--}}
{{--                        <span>Roll</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseEight" class="collapse collapse-body" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                        <h5>Roll</h5>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('role.index') }}">All Role</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Create Role</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Nav item end -->

            </div>
            <!-- Sidebar end -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="col-lg-12 mt-2">
                    @include('layouts.alert')
                </div>
                <main>
                    @yield('content')
                </main>
            </div>
            <!-- Content wrapper end -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
@push('script')
        <script>
            $(document).ready(function(){
                $('body').tooltip({
                    selector: '[data-toggle="tooltip"]',
                    container: 'body'
                });
            })
            $document.find('body').append(tooltip);
        </script>
@endpush
</body>
</html>
