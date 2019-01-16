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
                        <h4 class="text-themecolor">View Blogs</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
          
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">BlogPosts Data Table</h4>

                                 @if(Session::has('flash_message_success'))
                                  <div class="alert alert-success alert-block">
                                       <button type="button" class="close" data-dismiss="alert">x</button>
                                      <strong>{!! session('flash_message_success') !!}</strong>
                                  </div>
                                  @endif


                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category level</th>
                                                <th>Title</th>
                                                <th>Slug</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($blogposts as $blogpost)
                                            <tr>
                                                <td>{{$loop->index +1}}</td>
                                                <td>{{$blogpost->category_name}}</td>
                                                <td>{{$blogpost->title}}</td>
                                                <td>{{$blogpost->slug}}</td>
                                                <td>{{$blogpost->content}}</td>
                                                <td>{{$blogpost->image}}</td>
                                                <td>{{$blogpost->date}}</td>
                                                <td>
                                                <a href="{{route('edit.blogpost', $blogpost->id)}}" class="btn btn-danger"><i class="fa fa-edit"></i></a>
                                                <a id="delCat" href="{{route('delete.blogpost', $blogpost->id)}}" class="btn btn-danger">
                                                         <i class="fa fa-trash"></i>
                                                     </a>
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
@endsection

@section('css')
    <link href="{{asset('public/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('script')

    <script src="{{asset('public/backend/assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
     <script>
        $(document).ready(function () {
            $("#delCat").click(function(){
               if(confirm('Are You Sure, You Want To Delete This Category')){
                   return true;
               }
               return false;
            });
        });
    </script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    </script>

@endsection