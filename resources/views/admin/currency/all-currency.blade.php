@extends('admin.master')
@section('currency_menu_active','active')
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
                            <h3 class="card-title">All Currency</h3>
                            <a href="{{url('admin/create-currency/')}}" class="float-right">Add Currency</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Currency Name</th>
                                        <th>Currency Code</th>
                                        <th>Currency Flag</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_currency as $currency)
                                    <tr>
                                        <td>{{$currency->id}}</td>
                                        <td>{{$currency->name}}</td>
                                        <td>{{$currency->code}}</td>
                                        <td>
                                            <img id="currency_flag_img" src="{{ asset('assets/admin/images/flag/\/').$currency->flag}}" width="50" alt=""/>
                                        </td>
                                        <td>
                                            <a href="currency-update/{{$currency->id}}"><i class="fas fa-edit"></i></a>&nbsp|
                                            <a href="currency-delete/{{$currency->id}}"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Currency Name</th>
                                        <th>Currency Code</th>
                                        <th>Currency Flag</th>
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
