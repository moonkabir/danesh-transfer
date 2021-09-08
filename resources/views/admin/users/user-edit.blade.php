@extends('admin.master')
@section('users_menu_active','active')
@section('body')
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/user-edit/'.$user[0]->user_id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0]->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user[0]->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"value="{{$user[0]->password}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <select name="title" id="title" class="form-control">
                                    <option value="MR">MR</option>
                                    <option value="MRS">MRS</option>
                                    <option value="MS">MS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0]->fname}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0]->mname}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0]->lname}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="{{$user[0]->phno}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Additional Phone Number</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="{{$user[0]->phno_2}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0]->address}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Birthdate</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" value="{{$user[0]->bdate}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select ID type</label>
                                <select name="id_type" id="id_type"class="form-control">
                                    <option {{$user[0]->id_type == "aus_driver_lic" ? 'selected' : ''}} value="aus_driver_lic">Australia Driver License</option>
                                    <option {{$user[0]->id_type == "passport" ? 'selected' : ''}} value="passport">Passport</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Australia Driver License ID Number</label>
                                <input type="number"class="form-control" name="aus_driver_id_number" value="{{$user[0]->aus_driver_id_number}}"/>
                            </div>
                            <div class="form-group">
                                <label>Select Passport Issuing jurisdictions</label>
                                <select name="aus_driver_issuing_jurisdictions"class="form-control">
                                    <option value="VIC">VIC</option>
                                    <option value="NSW">NSW</option>
                                    <option value="SA">SA</option>
                                    <option value="QLD">QLD</option>
                                    <option value="WA">WA</option>
                                    <option value="NT">NT</option>
                                    <option value="TAS">TAS</option>
                                    <option value="ACT">ACT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Australia Driver Expiry</label>
                                <input type="date" name="aus_driver_expiry"class="form-control" value="{{$user[0]->aus_driver_expiry}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Passport Number</label>
                                <input type="number" name="passport_no"class="form-control" value="{{$user[0]->passport_no}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Passport Issuing date</label>
                                <input type="date" name="passport_issuing_date" class="form-control" value="{{$user[0]->passport_issuing_date}}"/>
                            </div>
                            <div class="form-group">
                                <label>Select Passport Issuing jurisdictions</label>
                                <select name="passport_issuing_jurisdictions" class="form-control">
                                    <option value="VIC">VIC</option>
                                    <option value="NSW">NSW</option>
                                    <option value="SA">SA</option>
                                    <option value="QLD">QLD</option>
                                    <option value="WA">WA</option>
                                    <option value="NT">NT</option>
                                    <option value="TAS">TAS</option>
                                    <option value="ACT">ACT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Passport Expiry</label>
                                <input type="date" name="passport_expiry" class="form-control" value="{{$user[0]->passport_expiry}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Occupation</label>
                                <select name="occupation" class="form-control">
                                    <option value="Job">Job</option>
                                    <option value="Student">Student</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country of Birth</label>
                                <select name="country_of_birth" class="form-control">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Pakistan">Pakistan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nationality</label>
                                <select name="Nationality" class="form-control">
                                    <option value="Bangladeshi">Bangladeshi</option>
                                    <option value="Pakistani">Pakistani</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Driver License front</label>
                                <input type="file" name="aus_driver_license_front" class="form-control" value="{{$user[0]->aus_driver_license_front}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Driver License back</label>
                                <input type="file" name="aus_driver_license_back" class="form-control" value="{{$user[0]->aus_driver_license_back}}"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Passport(front page only)</label>
                                <input type="file" name="passport_image" class="form-control" value="{{$user[0]->passport_image}}"/>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection
