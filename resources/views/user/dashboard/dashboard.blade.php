@extends('user.master')
@section('dashboard_menu_active','active')
@section('body')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">You're logged in!</h1>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">ID:</th>
                                    <td>{{ Auth::user()->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Name:</th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sender id:</th>
                                    <td>{{ $user[0]->sender_id}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    <!-- /.content -->
</div>
@endsection
