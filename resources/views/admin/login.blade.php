<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ANLAT KANKA ADMIN PANEL</title>

    <!-- Bootstrap -->
    <link href="{{url('admin_assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('admin_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('admin_assets/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('admin_assets/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('admin_assets/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form id="login-form" action="{{route('admin.login-post')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <h1>MERT MARTI</h1>
                    <div>
                        <input type="text" id="email" name="email" class="form-control" value="" placeholder="Email" />
                        <span id="username_error"></span>
                    </div>
                    <div>
                        <input type="password" id="password" name="password" value="" class="form-control" placeholder="Password"  />
                        <span id="password_error"></span>
                    </div>


                        <input type="submit" class="btn btn-primary" value="LOG IN" />

                        <button class="btn btn-danger" onclick="window.open('https://www.youtube.com/watch?v=StKVS0eI85I&ab_channel=BlondieVEVO','_blank')" >Lost your password?</button>


                    <div class="clearfix"></div>

                    <div class="separator">


                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> ANLAT PANPA!</h1>
                            <p>©2022</p>
                        </div>
                    </div>
        </form>

            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

</div>
<script src="{{url('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{url('js/sweetalert.min.js')}}"></script>
<script src="{{url('js/save.js')}}"></script>

<script>

    $('#login-form').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        var error = false;
        if ($('#username').val() == '') {
            $('#username_error').html('<span style="color: red">Lütfen giriniz</span>');
            error = true;
        } else {
            $('#username_error').html('');
        }
        if ($('#password').val() == '') {
            $('#password_error').html('<span style="color: red">Lütfen giriniz</span>');
            error = true;
        } else {
            $('#password_error').html('');
        }

        if(error){
            return false;
        }


        save(formData, '{{route('admin.login-post')}}', '', 'btn-1','');
    });
</script>

</body>
</html>
