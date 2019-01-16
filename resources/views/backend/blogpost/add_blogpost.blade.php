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
                        <h4 class="text-themecolor">Add Category</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">AddCategory</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Add New BlogPost</h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form class="m-t-30" method="post" action="{{route('add.blogpost')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                                <label for="parent_id">Category</label>
                                                    <select class="form-control" name="category_id">
                                                         <?php echo $categories_dropdown ?>
                                                     </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="title">BlogPost Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Blog Content</label>
                                            <textarea name="content" rows="8" class="form-control" id="content"  placeholder="Write Content"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Featured Image</label>
                                            <input type="file" class="form-control" id="image" name="image" placeholder="Insert image">
                                        </div>

                                        <div class="form-group">
                                            <label for="date">Posting Date</label>
                                            <input type="text" class="form-control" id="date" name="date" placeholder="Enter Post Date">
                                        </div>

                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div>


               
@endsection