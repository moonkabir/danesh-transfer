@extends('user.master')
@section('transfer_menu_active','active')
@section('receiver_menu_active','active')
@section('transfer_menu_open','menu-open')
@section('body')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="text-center">Create Receiver</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/user/create-receiver/')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name*</label>
                                <input type="text" class="form-control" name="first_name" id="receiver_fname" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name</label>
                                <input type="text" class="form-control" name="middle_name" id="receiver_mname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name*</label>
                                <input type="text" class="form-control" name="last_name" id="receiver_lname" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number*</label>
                                <input type="number" class="form-control" name="phone_number" id="receiver_phone" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country*</label>
                                <input type="text" class="form-control" name="country" id="receiver_country" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">City/Town*</label>
                                <input type="text" class="form-control" name="city" id="receiver_city" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address*</label>
                                <input type="text" class="form-control" name="street_name" id="receiver_street" required>
                            </div>
                            <input type="hidden" value="{{Auth::user()->id}}" name="creator_id">
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
@endsection
