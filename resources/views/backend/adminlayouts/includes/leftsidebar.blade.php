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
                       



                        <li> <a href="{{route('admin.dashboard')}}"><i class="icon-speedometer"></i><button class="hide-menu btn btn-danger" >Dashboard</button></a>


                    <!-- Site header Section -->
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Site Header <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.site')}}">Add SiteInfo </a></li>
                                <li><a href="{{route('index.site')}}">View SiteInfo</a></li>
                            </ul>
                        </li>


                        <!-- AboutSite section -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">AboutSite <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.about')}}">Add AboutSite </a></li>
                                <li><a href="{{route('index.about')}}">View AboutSite</a></li>
                            </ul>
                        </li>



                        <!-- Services Section  -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Services  <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.service')}}">Add Services </a></li>
                                <li><a href="{{route('index.service')}}">View Services</a></li>
                            </ul>
                        </li>

                        <!-- Contact Section -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Contacts <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.contact')}}">Add Contact </a></li>
                                <li><a href="{{route('index.contact')}}">View Contact</a></li>
                            </ul>
                        </li>





                    <!-- Category section -->

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Category <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('add.category')}}">Add Category </a></li>
                                <li><a href="{{route('view.category')}}">View Category</a></li>
                            </ul>
                        </li>

                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">BlogPost <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('add.blogpost')}}">Add Blogs </a></li>
                                <li><a href="{{route('view.blogpost')}}">View Blogs</a></li>
                            </ul>
                        </li>

                         <!-- Contact Message  Section -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Messages <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('view.messages')}}">View Messages</a></li>
                            </ul>
                        </li>

                        <!-- social section -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Social Links <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.social')}}">Add Social Links </a></li>
                                <li><a href="{{route('index.social')}}">View Social Links</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            
    </aside>