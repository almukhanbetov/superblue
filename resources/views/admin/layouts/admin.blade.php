<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BILIM EDUCATION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}" />
    <link rel="shortcut icon" href="{{asset('/css/test.css')}}" />
    <link rel="shortcut icon" href="{{asset('/css/payment.css')}}" />
</head>
<body>
<div class="container-scroller">
    @include('admin.includes.nav')
    <div class="container-fluid page-body-wrapper">

        @include('admin.includes.aside')

        <div class="main-panel">
            <div class="content-wrapper">
                @yield("content")
            </div>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">BilimEducation © 2023 <a href="#" target="_blank">Senin uakytyn</a>. Bilimdi bol.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Bilim & made with <i class="ti-heart text-danger ml-1"></i></span>
                </div>
            </footer>
        </div>
    </div>
</div>

<script src="{{asset('/assets/vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('/assets/js/template.js')}}"></script>
<script src="{{asset('/assets/js/todolist.js')}}"></script>
<script src="{{asset('/assets/js/dashboard.js')}}"></script>
<script src="{{asset('/js/test.js')}}"></script>

</body>

</html>

