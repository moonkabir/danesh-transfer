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
                        <h3 class="text-center">Update Receiver</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/user/receiver-update/'.$receiver[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- {{dd($receiver)}} --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name*</label>
                                <input type="text" class="form-control" name="first_name" id="receiver_fname" required value="{{$receiver[0]->first_name}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name</label>
                                <input type="text" class="form-control" name="middle_name" id="receiver_mname" value="{{$receiver[0]->middle_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name*</label>
                                <input type="text" class="form-control" name="last_name" id="receiver_lname" value="{{$receiver[0]->last_name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number*</label>
                                <input type="number" class="form-control" name="phone_number" id="receiver_phone" value="{{$receiver[0]->phone_number}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country*</label>
                                <input type="text" class="form-control" name="country" id="receiver_country" value="{{$receiver[0]->country}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">City/Town*</label>
                                <input type="text" class="form-control" name="city" id="receiver_city" value="{{$receiver[0]->city}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address*</label>
                                <input type="text" class="form-control" name="street_name" id="receiver_street" value="{{$receiver[0]->street_name}}" required>
                            </div>
                            <input type="hidden" value="{{$receiver[0]->creator_id}}" name="creator_id">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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
