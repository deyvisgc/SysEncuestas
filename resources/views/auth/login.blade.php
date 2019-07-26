<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sys Marleo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-body">
            <h3 class="text-center m-t-0 m-b-15"> <img src="{{asset('assets/images/Poder_Judicial.jpg')}}" style="width: 200px"></h3>
            <h4 class="text-muted text-center m-t-0"><b>INGRESAR</b></h4>
            <form class="form-horizontal m-t-20"  method="POST" action="{{ route('login') }}" >
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="Usuario" value="{{ old('Usuario') }}"   placeholder="Usuario"></div>
                    @error('Usuario')
                    <span class="invalid-feedback" role="alert">
                <strong style="color: red" >{{$message}}</strong></span>
                    @enderror
                    <span class="bar">
                    </span>
                </div>
                <div class="form-group">
                    <div class="col-xs-12"> <input class="form-control" type="password" name="password"  value="{{ old('password') }}"   placeholder="Password"></div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                <strong style="color: red" >{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-block btn-lg waves-effect waves-light {{ __('Ingresar') }}" type="submit">Entrar</button></div>
                </div>
                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-7"> <a href="#" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a></div>
                    <div class="col-sm-5 text-right"> <a href="#" class="text-muted">Create an account</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
    function validarCampos() {
        var dni=  document.getElementById("dni").value;
        var pass=  document.getElementById("password").value;
        if (dni ==""){
            iziToast.error({
                title: 'Error',
                message: 'Completa El Campo DNI',
            });
            return false;
        }
        if (pass ==""){
            iziToast.error({
                title: 'Error',
                message: 'Completa El Campo Password',
            });
            return false;
        }

    }
</script>

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/admin-wrap/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 01:09:27 GMT -->
</html>
