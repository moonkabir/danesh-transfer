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
                        <h3 class="text-center">Update Currency</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/admin/currency-update/'.$currency[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- {{dd($currency)}} --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Currency name</label>
                                <input type="text" class="form-control" name="name" id="currency_currency" value="{{$currency[0]->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Currency Code</label>
                                <input type="text" class="form-control" name="code" id="currency_code" value="{{$currency[0]->code}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Currency Code</label>
                                <input type="file" class="form-control" name="flag" id="currency_flag">
                            </div>
                            <div class="form-group">
                                <img id="currency_flag_img" src="{{ asset('assets/front-end/images/\/').$currency[0]->flag}}" width="200" alt="" />
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
<script>
$('#currency_flag').change( function(event) {
var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#currency_flag_img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
});
</script>
