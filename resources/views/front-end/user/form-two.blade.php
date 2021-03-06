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
                    <h2><strong>Customer Information</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="regform_two" class="regform" action="{{url('/information-register')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-card">
                                        <input id="sender_id" type="text" name="sender_id" value="CUS-00001" readonly="readonly"/>
                                        {{-- <input id="title" type="text" name="title" placeholder="MR/MRS/MS" /> --}}
                                        <select name="title" id="title">
                                            <option>Select your title</option>
                                            <option value="MR">MR</option>
                                            <option value="MRS">MRS</option>
                                            <option value="MS">MS</option>
                                        </select>
                                        <input id="fname" type="text" name="fname" placeholder="First Name" required/>
                                        <input id="mname" type="text" name="mname" placeholder="middle Name" />
                                        <input id="lname" type="text" name="lname" placeholder="Last Name" required/>
                                        <input id="phno" type="number" name="phno" placeholder="Phone No." required/>
                                        <input id="phno_2" type="number" name="phno_2" placeholder="Alternate Phone No." />
                                        <input id="address" type="text" name="address" placeholder="Address" required/>
                                        <input type="hidden" name="id" value="{{Session::get("id")}}" />
                                    </div>
                                    <input id="user_submit_two" type="submit" name="submit" class="next action-button" value="Submit" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("assets/front-end/js/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/front-end/js/main.js")}}"></script>
</body>
</html>
