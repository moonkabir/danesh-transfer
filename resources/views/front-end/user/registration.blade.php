<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("assets/front-end/css/style.css")}}">
</head>
<body>
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Sign Up Your User Account</strong></h2>
                    <p>Fill all form field to go to next step</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="regform" action="{{url('/create-categories')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Account</strong></li>
                                    <li id="personal"><strong>Customer</strong></li>
                                    <li id="id"><strong>ID</strong></li>
                                    <li id="upload"><strong>Upload ID</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset class="form-group email-password">
                                    <div class="form-card">
                                        <h2 class="fs-title">Account Information</h2>
                                        <h4 class="text-center">
                                            <label class="error error-email">Email does not match</label>
                                            <label class="error error-password">Password does not match</label></h4>
                                        <input id="email" type="email" name="email" placeholder="Email Id" required/>
                                        <input id="cemail" type="email" name="c_email" placeholder="Confirm Email Id" required/>
                                        <input id="password" type="password" name="password" placeholder="Password" required/>
                                        <input id="c_password" type="password" name="c_password" placeholder="Confirm Password" required/>
                                    </div>
                                    <input id="first_button" type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Customer Information</h2>
                                        <input type="text" name="sender_id" value="CUS-00001" readonly="readonly"/>
                                        <input type="text" name="title" placeholder="MR/MRS/MS" />
                                        <input type="text" name="fname" placeholder="First Name" required/>
                                        <input type="text" name="mname" placeholder="middle Name" />
                                        <input type="text" name="lname" placeholder="Last Name" required/>
                                        <input type="text" name="phno" placeholder="Phone No." required/>
                                        <input type="text" name="phno_2" placeholder="Alternate Phone No." />
                                        <input type="text" name="address" placeholder="Address" />
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input id="second_button" type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">ID Details</h2>
                                        <label>Birth Date</label>
                                        <input type="date" name="bdate"/>
                                        <select name="id_type" id="id_type">
                                            <option>Select ID type</option>
                                            <option value="aus_driver_lic">Australia Driver License</option>
                                            <option value="passport">Passport</option>
                                        </select>
                                        <div class="aus_driver_lic">
                                            <input type="text" name="aus_driver_id_number" placeholder="Australia Driver License ID Number" />
                                            <input type="text" name="c_aus_driver_id_number" placeholder="Australia Driver ID number confirm"/>
                                            <select name="aus_driver_issuing_jurisdictions">
                                                <option>Select Australia Driver Issuing jurisdictions</option>
                                                <option value="VIC">VIC</option>
                                                <option value="NSW">NSW</option>
                                                <option value="SA">SA</option>
                                                <option value="QLD">QLD</option>
                                                <option value="WA">WA</option>
                                                <option value="NT">NT</option>
                                                <option value="TAS">TAS</option>
                                                <option value="ACT">ACT</option>
                                            </select>
                                            <label>Expiry</label>
                                            <input type="date" name="expiry"/>
                                        </div>
                                        <div class="passport">
                                            <input type="text" name="passport_no" placeholder="Passport Number" />
                                            <input type="text" name="c_passport_no" placeholder="Confirm Passport number" />
                                            <label>Passport Issuing date</label>
                                            <input type="date" name="passport_issuing_date"/>
                                            <select name="passport_issuing_jurisdictions">
                                                <option>Select Passport Issuing jurisdictions</option>
                                                <option value="VIC">VIC</option>
                                                <option value="NSW">NSW</option>
                                                <option value="SA">SA</option>
                                                <option value="QLD">QLD</option>
                                                <option value="WA">WA</option>
                                                <option value="NT">NT</option>
                                                <option value="TAS">TAS</option>
                                                <option value="ACT">ACT</option>
                                            </select>
                                            <label>Expiry</label>
                                            <input type="date" name="expiry"/>
                                        </div>
                                        <input type="text" name="occupation" placeholder="Occupation"/>
                                        <input type="text" name="country_of_birth" placeholder="Country of Birth"/>
                                        <input type="text" name="Nationality" placeholder="Nationality"/>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Upload ID</h2>
                                        <div class="aus_driver_lic">
                                            <label>Driver License front</label>
                                            <input type="file" name="aus_driver_license_front"/>
                                            <label>Driver License back</label>
                                            <input type="file" name="aus_driver_license_back"/>
                                        </div>
                                        <div class="passport">
                                            <label>Passport(front page only)</label>
                                            <input type="file" name="passport_image"/>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("assets/front-end/js/main.js")}}"></script>
</body>
</html>
