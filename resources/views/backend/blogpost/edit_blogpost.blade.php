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
                        <h4 class="text-themecolor">Edit BlogPost</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">BlogPost</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Edit Existing Blogposts</h3>
                            <div class="row">


                                 @if(Session::has('flash_message_success'))
                                  <div class="alert alert-success alert-block">
                                       <button type="button" class="close" data-dismiss="alert">x</button>
                                      <strong>{!! session('flash_message_success') !!}</strong>
                                  </div>
                                  @endif

                                <div class="col-sm-12 col-xs-12">
                                    <form class="m-t-30" method="post" action="{{route('edit.blogpost', $blogpostDetails->id)}}" enctype="multipart/form-data">
                                        @csrf

                               <div class="form-group">
                                 <label for="parent_id">Category</label>
                                    <select class="form-control"  name="category_id">
                                         <?php echo $categories_dropdown ?>
                                    </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="title">BlogPost Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{$blogpostDetails->title}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Blog Content</label>
                                            <textarea name="content" rows="8" class="form-control" id="content"> {{$blogpostDetails->content}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Featured Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            <input type="hidden" class="form-control" id="image" name="current_image" value="{{$blogpostDetails->image}}">

                                            @if(!empty($blogpostDetails->image))

                                            <img src="{{asset('public/backend/uploads/blogs/small/'.$blogpostDetails->image)}}" alt="">
                                            <hr>
                                            <a class="btn btn-danger" href="{{route('delete.blogpostimage',$blogpostDetails->id)}}">Remove Image</a>
                                            @endif

                                        </div>

                                        <div class="form-group">
                                            <label for="date">Posting Date</label>
                                            <input type="text" class="form-control" id="date" name="date"value="{{$blogpostDetails->date}}">
                                        </div>

                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                                    </form>
                                </div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

               
@endsection