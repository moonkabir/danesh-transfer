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
                <h3>All information about <strong>{{$user[0]->name}}</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>Name :</td>
                        <td>{{$user[0]->name}}</td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>{{$user[0]->email}}</td>
                    </tr>
                    <tr>
                        <td>User ID :</td>
                        <td>{{$user[0]->user_id}}</td>
                    </tr>
                    <tr>
                        <td>Sender ID :</td>
                        <td>{{$user[0]->sender_id}}</td>
                    </tr>
                    <tr>
                        <td>Title :</td>
                        <td>{{$user[0]->title}}</td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td>{{$user[0]->fname}}</td>
                    </tr>
                    <tr>
                        <td>Middle Name:</td>
                        <td>{{$user[0]->mname}}</td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td>{{$user[0]->lname}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td>{{$user[0]->phno}}</td>
                    </tr>
                    <tr>
                        <td>Another Number:</td>
                        <td>{{$user[0]->phno_2}}</td>
                    </tr>
                    <tr>
                        <td>Address :</td>
                        <td>{{$user[0]->address}}</td>
                    </tr>
                    <tr>
                        <td>BirthDate :</td>
                        <td>{{$user[0]->bdate}}</td>
                    </tr>
                    <tr>
                        <td>ID Type :</td>
                        <td>{{$user[0]->id_type}}</td>
                    </tr>
                    @if($user[0]->id_type == 'passport')
                        <tr>
                            <td>Passport Number :</td>
                            <td>{{$user[0]->passport_no}}</td>
                        </tr>
                        <tr>
                            <td>Passport Issuing Date :</td>
                            <td>{{$user[0]->passport_issuing_date}}</td>
                        </tr>
                        <tr>
                            <td>Passport Issuing Jurisdictions :</td>
                            <td>{{$user[0]->passport_issuing_jurisdictions}}</td>
                        </tr>
                        <tr>
                            <td>Passport Expiry :</td>
                            <td>{{$user[0]->passport_expiry}}</td>
                        </tr>
                    @else
                        <tr>
                            <td>Australia Driver ID Number :</td>
                            <td>{{$user[0]->aus_driver_id_number}}</td>
                        </tr>
                        <tr>
                            <td>Australia Driver Issuing Jurisdictions :</td>
                            <td>{{$user[0]->aus_driver_issuing_jurisdictions}}</td>
                        </tr>
                        <tr>
                            <td>Australia Driver Expiry :</td>
                            <td>{{$user[0]->aus_driver_expiry}}</td>
                        </tr>
                    @endif
                    <tr>
                        <td>Occupation :</td>
                        <td>{{$user[0]->occupation}}</td>
                    </tr>
                    <tr>
                        <td>Country Of Birth :</td>
                        <td>{{$user[0]->country_of_birth}}</td>
                    </tr>
                    <tr>
                        <td>Nationality :</td>
                        <td>{{$user[0]->Nationality}}</td>
                    </tr>
                    @if($user[0]->id_type == 'passport')
                        <tr>
                            <td>Passport Image:</td>
                            <td><img width="300" src="{{asset("assets/front-end/images/".$user[0]->passport_image)}}" alt="passport_image"></td>
                        </tr>
                    @else
                        <tr>
                            <td>Australia Driver License Front Image:</td>
                            <td><img width="300" src="{{asset("assets/front-end/images/".$user[0]->aus_driver_license_front)}}"  alt="aus_driver_license_front"></td>
                        </tr>
                        <tr>
                            <td>Australia Driver License Back Image:</td>
                            <td><img width="300" src="{{asset("assets/front-end/images/".$user[0]->aus_driver_license_back)}}"  alt="aus_driver_license_back"></td>
                        </tr>
                    @endif
                </tbody>
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
