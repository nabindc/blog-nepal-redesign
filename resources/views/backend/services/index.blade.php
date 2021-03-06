@extends('backend.adminlayouts.admin_design')

@section('content')
 <div class="page-wrapper">
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Datatable</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Datatable</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Service details</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                   <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>content</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                  <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>{{$loop->index +1}}</td>
                                        <td>{{$service->title}}</td>
                                        <td>{{$service->content}}</td>
                                       
                                        <td>
                                           <a href="{{route('edit.service', $service->id)}}">Edit</a>
                                           <a href="{{route('delete.service', $service->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div></div>


@endsection