@extends('template')

@section('content')
	<div class="content-wrapper">
    	<section class="content-header">
        <h1>
          <i class="glyphicon glyphicon-user">
          Users
          </i>
        </h1>

        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Users</a></li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              <a class="btn btn-primary pull-right" href="users/create">Create Users</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php $no=0; foreach($users_list as $users): $no++ ?>
                    <tr>
                      <td class="center">{{ $no}}</td>
                      <td>{{ $users->name}}</td>
                      <td class="left">{{ $users->email}}</td>
                      <td>
                          <a href="user/{{$users->id .'/edit'}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                          <a href="user/{{$users->id .'/destroy'}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-erase"></i></a>
                          
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
              {{ $users_list }}
             </div>
           </div>
         </div>
       </div>
     </section>
@stop
