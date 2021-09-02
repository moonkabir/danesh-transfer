<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("assets/front-end/css/style.css")}}">
</head>
<body>
    <div class="container-fluid" id="grad1" style="height: 100vh;">
        <div class="row justify-content-center mt-0" style="transform: translateY(-50%);position: absolute;top: 50%;width: 100%;">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Login Your Account</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="regform" action="{{url('/create-categories')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-card">
                                        <input type="email" name="email" placeholder="Email Id" required/>
                                        <input type="password" name="password" placeholder="Password" required/>
                                    </div>
                                    <input type="button" name="submit" class="next action-button" value="Submit" />
                                </fieldset>
                            </form>
                            <a href="{{url('/account-register')}}" class="btn btn-primary mb-3">Registrater your account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("assets/front-end/js/main.js")}}"></script>
</body>
</html>




{{-- <html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Multiple step form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
	<style type="text/css">
		#personal_information,
		#company_information{
			display:none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-lg-5">
			<form class="form-horizontal" action="" method="POST" id="myform">
				<fieldset id="account_information" class="">
					<legend>Account information</legend>
					<div class="form-group">
						<label for="username" class="col-lg-4 control-label">Username</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="" name="username" placeholder="username">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-lg-4 control-label">Password</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="conf_password" class="col-lg-4 control-label">Confirm password</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="conf_password" name="conf_password" placeholder="Password">
						</div>
					</div>
					{{-- <p><a class="btn btn-primary next">next</a></p> --}}
					<p><input class="btn btn-success next" type="submit" value="submit"></p>
				</fieldset>
				<fieldset id="company_information" class="">
					<legend>Account information</legend>
                    <div class="col-md-12" >
                        <div id="field">
                            <div id="field0">
                                <br>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3">Field of Study</label>
                                    <div class="col-md-8">
                                        <input type="text"name="field_stu[]" id="field_stu" class="form-control" placeholder="e.g. Computer Science, Intellectual Property,Psychology." required>
                                    </div>
                                </div>
                                <br><br>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3">University</label>
                                    <div class="col-md-8">
                                        <input type="text"  name="university[]" id="university" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                        </div>
                    </div>
					<p><a class="btn btn-primary next">next</a></p>
				</fieldset>
				<fieldset id="personal_information" class="">
					<legend>Personal information</legend>
                    <div class="col-md-12">
                        <div id="fielda">
                            <div id="fielda0">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3">Job Title</label>
                                    <div class="col-md-8">
                                        <input type="text"  name="job_tit[]" id="job_tit" class="form-control" placeholder="e.g. Java/php Developer" required>
                                    </div>
                                </div>
                                <br><br>
                                <br>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3">Company</label>
                                    <div class="col-md-8">
                                        <input type="text"  name="company[]" id="company" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <br><br>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3">City</label>
                                    <div class="col-md-8">
                                        <input type="text"  name="city[]" id="city" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<p><a class="btn btn-primary" id="previous" >Previous</a></p>
					<p><input class="btn btn-success" type="submit" value="submit"></p>
				</fieldset>
			</form>
		</div>
	</div>
<script>
    $(document).ready(function(){
        $.validator.addMethod("usernameRegex", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
        }, "Username must contain only letters, numbers");
        $(".next").click(function(){
            var form = $("#myform");
            form.validate({
                errorElement: 'span',
                errorClass: 'help-block',
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass("has-error");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass("has-error");
                },
                rules: {
                    username: {
                        required: true,
                        usernameRegex: true,
                        minlength: 6,
                    },
                    password : {
                        required: true,
                    },
                    conf_password : {
                        required: true,
                        equalTo: '#password',
                    },
                    company:{
                        required: true,
                    },
                    url:{
                        required: true,
                    },
                    name: {
                        required: true,
                        minlength: 3,
                    },
                    email: {
                        required: true,
                        minlength: 3,
                    },

                },
                messages: {
                    username: {
                        required: "Username required",
                    },
                    password : {
                        required: "Password required",
                    },
                    conf_password : {
                        required: "Password required",
                        equalTo: "Password don't match",
                    },
                    name: {
                        required: "Name required",
                    },
                    email: {
                        required: "Email required",
                    },
                }
            });
            if (form.valid() === true){
                if ($('#account_information').is(":visible")){
                    current_fs = $('#account_information');
                    next_fs = $('#company_information');
                }else if($('#company_information').is(":visible")){
                    current_fs = $('#company_information');
                    next_fs = $('#personal_information');
                }

                next_fs.show();
                current_fs.hide();
            }
        });
        $('#previous').click(function(){
            if($('#company_information').is(":visible")){
                current_fs = $('#company_information');
                next_fs = $('#account_information');
            }else if ($('#personal_information').is(":visible")){
                current_fs = $('#personal_information');
                next_fs = $('#company_information');
            }
            next_fs.show();
            current_fs.hide();
        });
    });
</script>
</body>
</html> --}}
