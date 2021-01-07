@extends('dashboard.dashlayout')

@section('content')
<body>
   
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>Welcome, {{Auth::user()->name}}
                                    <div class="page-title-subheading">You are Logged in as a {{Auth::user()->name}}</div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                                    class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span> Inbox</span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span> Book</span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span> Picture</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span> File Disabled</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                         </div>
                    </div> 

                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Roles
                            </div>
                            <div class="btn-actions-pane-right">
                                <button type="button" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex" data-toggle="modal"
                                data-target="#exampleModal">
                                    Create
                                    <span class="pl-2 align-middle opacity-7">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($role as $key => $r)
                                    <tr>
                                        <td class="text-center text-muted" style="width: 80px;">{{$r->id}}</td>
                                        {{-- <td class="text-center" style="width: 80px;">
                                            <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                        </td> --}}
                                        <td class="text-center"><a href="javascript:void(0)">{{$r->name}}</a></td>
                                        {{-- <td class="text-center"><a href="javascript:void(0)">Micro Electronics</a></td>
                                        <td class="text-center">
                                            <div class="badge badge-pill badge-danger">Canceled</div>
                                        </td>
                                        <td class="text-center">
                                            <span class="pr-2 opacity-6">
                                                <i class="fa fa-business-time"></i>
                                            </span>
                                            12 Dec
                                        </td>
                                        <td class="text-center" style="width: 200px;">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left pr-2">
                                                            <div class="widget-numbers fsize-1 text-danger">71%</div>
                                                        </div>
                                                        <div class="widget-content-right w-100">
                                                            <div class="progress-bar-xs progress">
                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        --}}
                                        <td class="text-center">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="btn-shadow btn btn-primary">Edit</button>
                                                <button class="btn-shadow btn btn-primary">Delete</button>
                                            </div>
                                        </td> 
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
@endsection
