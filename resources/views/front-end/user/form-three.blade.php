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
                    <h2><strong>ID Details</strong></h2>
                    @if(Session::get('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('error')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="regform" class="regform" action="{{url('/id-register')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-card">
                                        <label for="bdate">Birth Date</label>
                                        <input id="bdate" type="date" name="bdate"/>
                                        <select name="id_type" id="id_type">
                                            <option>Select ID type</option>
                                            <option value="aus_driver_lic">Australia Driver License</option>
                                            <option value="passport">Passport</option>
                                        </select>
                                        <div class="aus_driver_lic">
                                            <input type="number" name="aus_driver_id_number" placeholder="Australia Driver License ID Number" />
                                            <input type="number" name="c_aus_driver_id_number" placeholder="Australia Driver ID number confirm"/>
                                            <label>Select Passport Issuing jurisdictions</label>
                                            <select name="aus_driver_issuing_jurisdictions">
                                                <option value="VIC">VIC</option>
                                                <option value="NSW">NSW</option>
                                                <option value="SA">SA</option>
                                                <option value="QLD">QLD</option>
                                                <option value="WA">WA</option>
                                                <option value="NT">NT</option>
                                                <option value="TAS">TAS</option>
                                                <option value="ACT">ACT</option>
                                            </select>
                                            <label>Australia Driver Expiry</label>
                                            <input type="date" name="aus_driver_expiry"/>
                                        </div>
                                        <div class="passport">
                                            <input type="number" name="passport_no" placeholder="Passport Number" />
                                            <input type="number" name="c_passport_no" placeholder="Confirm Passport number" />
                                            <label>Passport Issuing date</label>
                                            <input type="date" name="passport_issuing_date"/>
                                            <label>Select Passport Issuing jurisdictions</label>
                                            <select name="passport_issuing_jurisdictions">
                                                <option value="VIC">VIC</option>
                                                <option value="NSW">NSW</option>
                                                <option value="SA">SA</option>
                                                <option value="QLD">QLD</option>
                                                <option value="WA">WA</option>
                                                <option value="NT">NT</option>
                                                <option value="TAS">TAS</option>
                                                <option value="ACT">ACT</option>
                                            </select>
                                            <label>Passport Expiry</label>
                                            <input type="date" name="passport_expiry"/>
                                        </div>
                                        <label>Occupation</label>
                                        <select name="occupation">
                                            <option value="Job">Job</option>
                                            <option value="Student">Student</option>
                                        </select>
                                        <label>Country of Birth</label>
                                        <select name="country_of_birth">
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Pakistan">Pakistan</option>
                                        </select>
                                        <label>Nationality</label>
                                        <select name="Nationality">
                                            <option value="Bangladeshi">Bangladeshi</option>
                                            <option value="Pakistani">Pakistani</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="id" value="{{Session::get("id")}}" />
                                    <input id="user_submit_three" type="submit" name="submit" class="next action-button" value="Submit" />
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
