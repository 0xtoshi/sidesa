<!DOCTYPE html>
<html lang="en">
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Niche Admin - Powerful Bootstrap 4 Dashboard and Admin Template</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{ url('dist/bootstrap/css/bootstrap.min.css') }}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">



<!-- Theme style -->
<link rel="stylesheet" href="{{ url('dist/css/style.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/themify-icons/themify-icons.css') }}">

<!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
<![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">Masuk Administrator</h3>
  

    <form id="form-login">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="User">
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
            </label>
            <a href="pages-recover-password.html" class="pull-right"><i class="fa fa-lock"></i> Lupa Password?</a> </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>

        <br/>
        <hr/>
        <div id="alert"></div>
        <div class="progress">
            <div class="progress-bar" id="progressBar" role="progressbar" style="width: 1%;"></div>
        </div>


        <!-- /.col --> 
      </div>
    </form>
    
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 
<script src="{{ url('dist/js/jquery.min.js') }}"></script> 


<!-- v4.0.0-alpha.6 --> 
<script src="{{ url('dist/bootstrap/js/bootstrap.min.js') }}"></script> 

<script type="text/javascript">

 function updateProgress(percentage){
    if(percentage > 100) percentage = 100;
    $('#progressBar').css('width', percentage+'%');
  }

  
  

  $('#form-login').submit(function(e){

    var form = $('#form-login').serialize();

    e.preventDefault();

    $.ajax({
      url : '{{ url("api/admin/login") }}',
      type : 'POST',
      data : form,
      dataType : 'JSON',
      success : function(data)
      {
        console.log(data);
        updateProgress(100);
        if(data.success == false){
          $('#alert').html(`<div class="alert alert-danger">`+data.message+`</div>`);
        }else{
          $('#alert').html(`<div class="alert alert-success">`+data.message+`</div>
            <meta http-equiv="refresh" content="0;URL='dashboard'" />
            `);
        }
      },
      error : function()
      {
        console.log('Error');
      }
    });

  });

</script>


</body>
</html>