@extends('backend.adminlayouts.admin_design')

@section('content')
 <div class="page-wrapper">
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Edit Service Content</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Service</li>
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
                                <h4 class="card-title">Service Content</h4>
                                
                                <form class="form-material m-t-40" enctype="multipart/form-data" method="post" action="{{route('update.service', $services->id)}}">
                                 @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control form-control-line" name="title" value="{{$services->title}}"> 
                                    </div>
                                   
                                    
                                   
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="content" rows="8" cols="80" class="form-control" id="summernote">{{$services->content}}</textarea>
                                    
                                   

                                    
                                       </div>

                                       <div class="text-center">
                                         <input type="submit" name="submit" value="Update" class="btn btn-primary">
                                       </div>

                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div></div></div>
                

@endsection