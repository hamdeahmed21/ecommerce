@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();

@endphp


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
                        <h3><b>online</b> Shop</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ ($route == 'dashboard')? 'active':'' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>
                <li class="treeview {{ ($prefix == '/brand')?'active':'' }}  ">
                    <a href="#">
                        <i data-feather="message-circle"></i>
                        <span>Brands</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == 'all.brand')? 'active':'' }}"><a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brand</a></li>

                    </ul>
                </li>

            <li class="treeview {{ ($prefix == '/category')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="mail"></i> <span>Category </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
                    <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
                    <li class="{{ ($route == 'all.subsubcategory')? 'active':'' }}"><a href="{{ route('all.subsubcategory') }}"><i class="ti-more"></i>All Sub->SubCategory</a></li>

                </ul>
            </li>
            <li class="treeview {{ ($prefix == '/product')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'add-product')? 'active':'' }}"><a href="{{ route('add-product') }}"><i class="ti-more"></i>Add Products</a></li>
                    <li class="{{ ($route == 'manage-product')? 'active':'' }}"><a href="{{ route('manage-product') }}"><i class="ti-more"></i>Manage Products</a></li>

                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/slider')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'manage-slider')? 'active':'' }}"><a href="{{ route('manage-slider') }}"><i class="ti-more"></i>Manage Slider</a></li>



                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/coupons')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Coupons</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'manage-coupon')? 'active':'' }}"><a href="{{ route('manage-coupon') }}"><i class="ti-more"></i>Manage Coupon</a></li>



                </ul>
            </li>

            <li class="treeview {{ ($prefix == '/shipping')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Shipping Area</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'manage-division')? 'active':'' }}"><a href="{{ route('manage-division') }}"><i class="ti-more"></i>Ship Division</a></li>

                    <li class="{{ ($route == 'manage-district')? 'active':'' }}"><a href="{{ route('manage-district') }}"><i class="ti-more"></i>Ship District</a></li>

                    <li class="{{ ($route == 'manage-state')? 'active':'' }}"><a href="{{ route('manage-state') }}"><i class="ti-more"></i>Ship State</a></li>



                </ul>
            </li>

            <li class="header nav-small-cap">User Interface</li>


                <li class="treeview {{ ($prefix == '/orders')?'active':'' }}  ">
                    <a href="#">
                        <i data-feather="file"></i>
                        <span>Orders </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ ($route == 'pending-orders')? 'active':'' }}"><a href="{{ route('pending-orders') }}"><i class="ti-more"></i>Pending Orders</a></li>

                        <li class="{{ ($route == 'confirmed-orders')? 'active':'' }}"><a href="{{ route('confirmed-orders') }}"><i class="ti-more"></i>Confirmed Orders</a></li>

                        <li class="{{ ($route == 'processing-orders')? 'active':'' }}"><a href="{{ route('processing-orders') }}"><i class="ti-more"></i>Processing Orders</a></li>

                        <li class="{{ ($route == 'picked-orders')? 'active':'' }}"><a href="{{ route('picked-orders') }}"><i class="ti-more"></i> Picked Orders</a></li>

                        <li class="{{ ($route == 'shipped-orders')? 'active':'' }}"><a href="{{ route('shipped-orders') }}"><i class="ti-more"></i> Shipped Orders</a></li>

                        <li class="{{ ($route == 'delivered-orders')? 'active':'' }}"><a href="{{ route('delivered-orders') }}"><i class="ti-more"></i> Delivered Orders</a></li>

                        <li class="{{ ($route == 'cancel-orders')? 'active':'' }}"><a href="{{ route('cancel-orders') }}"><i class="ti-more"></i> Cancel Orders</a></li>



                    </ul>
                </li>


            <li class="treeview {{ ($prefix == '/reports')?'active':'' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>All Reports </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ ($route == 'all-reports')? 'active':'' }}"><a href="{{ route('all-reports') }}"><i class="ti-more"></i>All Reports</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="inbox"></i>
                    <span>Forms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="forms_advanced.html"><i class="ti-more"></i>Advanced Elements</a></li>
                    <li><a href="forms_editors.html"><i class="ti-more"></i>Editors</a></li>
                    <li><a href="forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
                    <li><a href="forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
                    <li><a href="forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
                    <li><a href="forms_general.html"><i class="ti-more"></i>General Elements</a></li>
                    <li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="server"></i>
                    <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
                    <li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
                    <li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
                    <li><a href="charts_inline.html"><i class="ti-more"></i>Inline</a></li>
                    <li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
                    <li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
                    <li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="map"></i>
                    <span>Map</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
                    <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="alert-triangle"></i>
                    <span>Authentication</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
                    <li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
                    <li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
                    <li><a href="auth_user_pass.html"><i class="ti-more"></i>Password</a></li>
                    <li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
                    <li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">EXTRA</li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="layers"></i>
                    <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Level One</a></li>
                    <li class="treeview">
                        <a href="#">Level One
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Level Two</a></li>
                            <li class="treeview">
                                <a href="#">Level Two
                                    <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level Three</a></li>
                                    <li><a href="#">Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Level One</a></li>
                </ul>
            </li>

            <li>
                <a href="auth_login.html">
                    <i data-feather="lock"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
