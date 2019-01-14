        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                    <?php 
                        $current_user = Auth::User();
                    ?>

                          <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">

                            <img src="{{asset('public/backend/uploads/profile/' .$current_user->image)}}" alt="user-img" class="img-circle"><span class="hide-menu">{{$current_user->name}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('profile', $current_user->id)}}"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="{{route('adminlogout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- PERSONAL</li>
                       



                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html">Minimal </a></li>
                                <li><a href="index2.html">Analytical</a></li>
                            </ul>
                        </li>

                    <!-- Category section -->

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Category <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('add.category')}}">Add Category </a></li>
                                <li><a href="{{route('view.category')}}">View Category</a></li>
                            </ul>
                        </li>



                    </ul>
                </nav>
            </div>
            
    </aside>