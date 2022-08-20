@include('admin/header')

@include('admin/topbar')

@include('admin/sidebar')


    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            @yield('content')

        </div>
        <!-- end container-fluid -->

    </div>
@include('admin/footer')

