<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Daxil Ol | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/backend') }}/images/156logo.png">
    <link href="{{ asset('assets/backend') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body class="auth-body-bg">
<div class="bg-overlay"></div>
<div class="wrapper-page">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="{{ route('admin.login') }}" class="auth-logo">
                            <img src="{{ asset('assets/backend') }}/images/156logo.png" height="150" class="logo-dark mx-auto" alt="">
                            <img src="{{ asset('assets/backend') }} /images/156logo.png" height="150" class="logo-light mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-18"><b>Admin Panel</b></h4>

                <div class="p-3">
                    <form class="form-horizontal mt-3" action="{{ route('admin.login') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control"
                                       name="email"
                                       type="email"
                                       placeholder="E-mail">
                                @if($errors->has('email'))
                                    <code>{{$errors->first('email')}}</code>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control"
                                       name="password"
                                       type="password"
                                       placeholder="Şifrə">
                                @if($errors->has('password'))
                                    <code>{{$errors->first('password')}}</code>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Daxil Ol</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
<script src="{{ asset('assets/backend') }}/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('assets/backend') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/backend') }}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('assets/backend') }}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('assets/backend') }}/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/app.js"></script>
</body>
</html>
