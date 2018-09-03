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
<link rel="stylesheet" href="{{ url('dist/plugins/formwizard/jquery-steps.css') }}">

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
    <h3 class="login-box-msg">Reset Password</h3>
  

   <div id="demo">
          <div class="step-app">
            <ul class="step-steps">
              <li><a href="#step1"><span class="number">1</span>Check</a></li>
              <li><a href="#step2"><span class="number">2</span>Verify</a></li>
              <li><a href="#step3"><span class="number">3</span>Apply</a></li>
            </ul>
            <div class="step-content">
              <div class="step-tab-panel" id="step1">
                <form id="form-check">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input name="username" class="form-control" type="text">
                      </div>
                      <button type="submit" class="btn btn-success">Check</button> 
                </form>
                <br/>
                <div id="alert"></div>
                <div class="progress">
                    <div class="progress-bar" id="progressBar" role="progressbar" style="width: 1%;"></div>
                </div>

              </div>
              <div class="step-tab-panel" id="step2">
                
                 <form id="form-verify">
                      <div class="form-group">
                        <label for="hash">Hash</label>
                        <input name="hash" class="form-control" type="text">
                      </div>
                      <button type="submit" class="btn btn-success">Verify</button> 
                </form>
                 <br/>
                <div id="alert2"></div>
                <div class="progress">
                    <div class="progress-bar" id="progressBar2" role="progressbar" style="width: 1%;"></div>
                </div>


              </div>
              <div class="step-tab-panel" id="step3">


                <form id="form-change">
                      <div class="form-group">
                        <label for="password1">Password Baru</label>
                        <input name="password1" class="form-control" type="text">
                      </div>
                      <div class="form-group">
                        <label for="password2">Verifikasi Password Baru</label>
                        <input name="password2" class="form-control" type="text">
                      </div>
                      <button type="submit" class="btn btn-success">Ganti</button> 
                </form>
                 <br/>
                <div id="alert3"></div>
                <div class="progress">
                    <div class="progress-bar" id="progressBar3" role="progressbar" style="width: 1%;"></div>
                </div>


                
              </div>
          
            </div>
            <div class="step-footer">
              <button data-direction="prev" id="prev" class="btn btn-light">Previous</button>
              <button data-direction="next" id="next" class="btn btn-primary">Next</button>
              
            </div>
          </div>
      </div>

    
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 
<script src="{{ url('dist/js/jquery.min.js') }}"></script> 

<script src="{{ url('dist/plugins/formwizard/jquery-steps.js') }}"></script> 



<!-- v4.0.0-alpha.6 --> 
<script src="{{ url('dist/bootstrap/js/bootstrap.min.js') }}"></script> 

<script type="text/javascript">

  $(document).ready(function(){
    $('#next').hide();
  })

 function updateProgress(percentage){
    if(percentage > 100) percentage = 100;
    $('#progressBar').css('width', percentage+'%');
  }

   $('#demo').steps({
      onFinish: function () {
        alert('Wizard Completed');
      }
    });

  
  

  $('#form-check').submit(function(e){

    var form = $('#form-check').serialize();

    e.preventDefault();

    $.ajax({
      url : '{{ url("api/admin/password_reset") }}',
      type : 'POST',
      data : form,
      dataType : 'JSON',
      success : function(data)
      {
        console.log(data);
        updateProgress(100);
        if(data.success == false){
          $('#alert').html(`<div class="alert alert-danger">`+data.message+`</div>`);
          $('#next').hide();
        }else{
          $('#next').show();
          $('#alert').html(`<div class="alert alert-success">`+data.message+`</div>`);
        }
      },
      error : function()
      {
        console.log('Error');
      }
    });

  });


  $('#form-verify').submit(function(e){

    var form = $('#form-verify').serialize();

    e.preventDefault();

    $.ajax({
      url : '{{ url("api/admin/verify_hash_reset") }}',
      type : 'POST',
      data : form,
      dataType : 'JSON',
      success : function(data)
      {
        console.log(data);
        $('#progressBar2').css('width', 100+'%');
        if(data.success == false){
          $('#alert2').html(`<div class="alert alert-danger">`+data.message+`</div>`);
          $('#next').hide();
        }else{
          $('#next').show();
          $('#alert2').html(`<div class="alert alert-success">`+data.message+`</div>`);
        }
      },
      error : function()
      {
        console.log('Error');
      }
    });

  });


  $('#form-change').submit(function(e){

    var form = $('#form-change').serialize();

    e.preventDefault();

    $.ajax({
      url : '{{ url("api/admin/password_reset_apply") }}',
      type : 'POST',
      data : form,
      dataType : 'JSON',
      success : function(data)
      {
        console.log(data);
        $('#progressBar3').css('width', 100+'%');
        if(data.success == false){
          $('#alert3').html(`<div class="alert alert-danger">`+data.message+`</div>`);
          $('#next').hide();
        }else{
          $('#next').show();
          $('#alert3').html(`<div class="alert alert-success">`+data.message+`</div>`);
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