<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}} Yönetim Paneli</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="/yonetici/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/yonetici/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/yonetici/global_assets/js/main/jquery.min.js"></script>
    <script src="/yonetici/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="/yonetici/global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/yonetici/assets/js/app.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
    <div class="navbar-brand">

    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>


</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">
    @yield('icerik')


    <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2019 - 2020. {{config('app.name')}} Yönetim Paneli - <a href="https://www.emresarioglu.com.tr"
                                                                             target="_blank">Emre Sarıoğlu</a>
					</span>


            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

@if (Session::has('alert.config'))
    <script>
        swal({!! Session::pull('alert.config') !!});
    </script>
@endif
@yield('js')
</body>
</html>
