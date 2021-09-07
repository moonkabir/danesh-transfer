@extends('admin.master')
@section('country_menu_active','active')
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
                        <h3 class="text-center">Update Country</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/admin/country-update/'.$country[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- {{dd($country)}} --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country name</label>
                                <input type="text" class="form-control" name="country_name" id="country_country" value="{{$country[0]->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country Code</label>
                                <input type="text" class="form-control" name="country_code" id="country_code" value="{{$country[0]->code}}">
                            </div>
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
