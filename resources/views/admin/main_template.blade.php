<!DOCTYPE html>
<html lang="tr">

@include('admin.partials.head')
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            @include('admin.partials.left_menu')
        </div>

        <!-- top navigation -->
    @include('admin.partials.top_nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            @yield('main')
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('admin.partials.footer')
        <!-- /footer content -->
    </div>
</div>
@include('admin.partials.scripts')

</body>
</html>
