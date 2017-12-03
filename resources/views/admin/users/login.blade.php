<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <!-- Core CSS - Include with every page -->
    <base href="{{asset('')}}">
    <link href="AdminTheme/css/bootstrap.min.css" rel="stylesheet">
    <link href="AdminTheme/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="AdminTheme/css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                @include('admin.messages.errors')
                @if(session('message'))
                    <div class="alert alert-danger">
                        {{session('message')}}
                    </div>
                @endif
                <div class="panel-body">
                    <form role="form" action="{{ route('updateLogin') }}" method="post">
                        <fieldset>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}"
                                       type="email"
                                       autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="AdminTheme/js/jquery-1.10.2.js"></script>
<script src="AdminTheme/js/bootstrap.min.js"></script>
<script src="AdminTheme/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="js/sb-admin.js"></script>

</body>

</html>
