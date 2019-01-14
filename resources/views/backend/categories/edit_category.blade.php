 @extends('backend.adminlayouts.admin_design')   
 @section('content')  

       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Edit Category</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Edit Existing Category</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form class="m-t-30" method="post" action="{{route('edit.category', $category->id)}}" enctype="multipart/form-data">
                                        @csrf

                                <div class="form-group">
                                 <label for="parent_id">Category Level</label>
                                 <select class="form-control" name="parent_id">
                                   <option value="0">Main Category</option>
                                     @foreach($levels as $val)
                                         <option value="{{$val->id}}" @if($val->id==$category->parent_id) Selected @endif> {{$val->name}}</option>
                                         @endforeach
                                 </select>
                               </div>


                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
                                        </div>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


               
@endsection