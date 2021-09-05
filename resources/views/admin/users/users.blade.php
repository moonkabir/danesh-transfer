@extends('admin.master')
@section('users_menu_active','active')
@section('body')
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>ID Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    @if($user->admin == 0)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phno}}</td>
                        <td>{{$user->id_type}}</td>
                        <td>
                            <a href="/user/{{$user->id}}"><i class="fas fa-eye"></i></a>&nbsp|&nbsp
                            <a href="/user/{{$user->id}}"><i class="fas fa-edit"></i></a>&nbsp|
                            <a href="/user/{{$user->id}}"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>ID Type</th>
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
