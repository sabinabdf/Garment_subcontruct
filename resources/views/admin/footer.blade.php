<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                2022 &copy; Broker  by <a href="#">BITL-Round-48</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->


<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
    </div>
    <div class="slimscroll-menu">

        <div class="p-4">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class="mb-2">
                <img src="{{asset('admin_assets/images/layouts/light.png')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('admin_assets/images/layouts/dark.png')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                    data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('admin_assets/images/layouts/rtl.png')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                    data-appStyle="assets/css/app-rtl.min.css" />
                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <a href="https://bit.ly/2QMLoUn" class="btn btn-danger btn-block mt-3" target="_blank"><i
                    class="mdi mdi-download mr-1"></i> Download Now</a>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>



<!-- Vendor js -->
<script src="{{asset('admin_assets/js/vendor.min.js')}}"></script>

<script src="{{asset('admin_assets/libs/moment/moment.min.js')}}"></script>
<script src="{{asset('admin_assets/libs/jquery-scrollto/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin_assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Chat app -->
<script src="{{asset('admin_assets/js/pages/jquery.chat.js')}}"></script>

<!-- Todo app -->
<script src="{{asset('admin_assets/js/pages/jquery.todo.js')}}"></script>

<!-- flot chart -->
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.selection.js')}}"></script>
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin_assets/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>

<!-- Dashboard init JS -->
<script src="{{asset('admin_assets/js/pages/dashboard.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin_assets/js/app.min.js')}}"></script>


</body>

</html>