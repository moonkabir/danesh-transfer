@extends('user.master')
@section('transfer_menu_active','active')
@section('receiver_menu_active','active')
@section('transfer_menu_open','menu-open')
@section('body')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(Session::get('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Receiver</h3>
                            <a href="{{url('user/create-receiver/')}}" class="float-right">Add Receiver</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Phone Number</th>
                                        <th>Country</th>
                                        <th>City/Town</th>
                                        <th>Street</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($receivers as $receiver)
                                    <tr>
                                        <td>{{$receiver->id}}</td>
                                        <td>{{$receiver->first_name}}</td>
                                        <td>{{$receiver->middle_name}}</td>
                                        <td>{{$receiver->last_name}}</td>
                                        <td>{{$receiver->phone_number}}</td>
                                        <td>{{$receiver->country}}</td>
                                        <td>{{$receiver->city}}</td>
                                        <td>{{$receiver->street_name}}</td>
                                        <td>
                                            <a href="receiver-update/{{$receiver->id}}"><i class="fas fa-edit"></i></a>&nbsp|
                                            <a href="receiver-delete/{{$receiver->id}}"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Phone Number</th>
                                        <th>Country</th>
                                        <th>City/Town</th>
                                        <th>Street</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
