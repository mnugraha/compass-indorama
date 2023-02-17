<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - HR Indorama</title>

    <!-- META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" href="/theme/css/styles.css">
    <!-- EOF CSS INCLUDE -->
</head>

<body>

    <!-- APP WRAPPER -->
    <div class="app app-fh">

        <!-- START APP CONTAINER -->
        <div class="app-container" style="background: url(/) center center no-repeat fixed;">
            <div class="app-login-box">
                <div class="app-login-box-user"><img src="/theme/img/user/no-image.png"></div>
                <div class="app-login-box-title">
                    <div class="title">Already a member?</div>
                    <div class="subtitle">Sign in to your account</div>
                </div>
                <div class="app-login-box-container">
                    <form action="/login_proses" method="post">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <ul>
                                    <li><span class="text-danger"> {{ $err }} </span></li>
                                </ul>
                            @endforeach
                        @endif
                        @if (session()->has('loginError'))
                            {{ session('loginError') }}
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control" name="id_user" placeholder="Email Address">

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <div class="app-checkbox">
                                        <label><input type="checkbox" name="app-checkbox-1" value="0"> Remember
                                            me</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <button class="btn btn-success btn-block">Sign In</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="app-login-box-footer">
                    &copy;HR Indorama. All rights reserved.
                </div>
            </div>

        </div>
        <!-- END APP CONTAINER -->

    </div>
    <!-- END APP WRAPPER -->

    <!--
        <div class="modal fade" id="modal-thanks" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="text-center margin-bottom-20">
                            <img src="assets/images/smile.png" alt="Thank you" style="width: 100px;">
                        </p>
                        <h3 id="modal-thanks-heading" class="text-uppercase text-bold text-lg heading-line-below heading-line-below-short text-center"></h3>
                        <p class="text-muted text-center margin-bottom-10">Thank you so much for likes</p>
                        <p class="text-muted text-center">We will do our best to make<br> Boooya template perfect</p>
                        <p class="text-center"><button class="btn btn-success btn-clean" data-dismiss="modal">Continue</button></p>
                    </div>
                </div>
            </div>
        </div>-->

    <!-- IMPORTANT SCRIPTS -->
    <script type="text/javascript" src="/theme/js/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/moment/moment.min.js"></script>
    <script type="text/javascript" src="/theme/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <!-- END IMPORTANT SCRIPTS -->
    <!-- APP SCRIPTS -->
    <script type="text/javascript" src="/theme/js/app.js"></script>
    <script type="text/javascript" src="/theme/js/app_plugins.js"></script>
    <script type="text/javascript" src="js/app_demo.js"></script>
    <!-- END APP SCRIPTS -->
</body>

</html>
