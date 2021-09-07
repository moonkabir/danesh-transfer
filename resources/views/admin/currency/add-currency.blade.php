@extends('admin.master')
@section('currency_menu_active','active')
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
                        <h3 class="text-center">Create Currency</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/admin/create-currency/')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Currency Name</label>
                                <input type="text" class="form-control" name="currency" id="currency_currency" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Currency code</label>
                                <input type="text" class="form-control" name="code" id="currency_city" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Currency flag</label>
                                <input type="file" class="form-control" name="flag" id="currency_flag" required>
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
@endsection
