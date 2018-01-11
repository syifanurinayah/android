@extends('template')

@section('content')
	
		<div class="content-wrapper">
    	<section class="content-header">
      		<h1>
       		 Create Users
      		</h1>

      		<ol class="breadcrumb">
        		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       			 <li><a href="#">Users</a></li>
        		 <li class="active">Create Users</li>
      		</ol>
    	</section>

		<section class="content">
    		<div class="row">
      			<div class="col-md-12">
        			<div class="box box-primary">	
                <form class="form-horizontal">
              <div class="box-body">
                {!! Form::open(['url' => 'users']) !!}
        			<div class="form-group">
                {!! Form::label('name', 'Name', ['class' => 'control-label col-sm-2']) !!}
              <div class="col-sm-5">
                {!! Form::text('name', null, ['class' =>'form-control']) !!}
              </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label col-sm-2']) !!}
              <div class="col-sm-5">
                {!! Form::text('email', null, ['class' =>'form-control']) !!}
              </div>
            </div>

             <div class="form-group">
                {!! Form::label('phone', 'Phone', ['class' => 'control-label col-sm-2']) !!}
              <div class="col-sm-5">
                {!! Form::text('phone', null, ['class' =>'form-control']) !!}
              </div>
            </div>

             <div class="form-group">
                {!! Form::label('address', 'Address', ['class' => 'control-label col-sm-2']) !!}
              <div class="col-sm-5">
                {!! Form::text('adress', null, ['class' =>'form-control']) !!}
              </div>
            </div>

             <div class="form-group">
                {!! Form::label('role', 'Level', ['class' => 'control-label col-sm-2']) !!}
              <div class="col-sm-5">
                {!! Form::text('role', null, ['class' =>'form-control']) !!}
              </div>
            </div>

             <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'control-label col-sm-2']) !!}
              <div class="col-sm-5">
                {!! Form::password('password', null, ['class' =>'form-control']) !!}
              </div>
            </div>



              		<div class="box-footer">
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                        <a href="create" class="btn btn-default btn-reset">Batal</a>
                    </div>
                  </div>
               </div>
                 {!! Form::close() !!}
                  </div>
           		 </div>
              </div>
            </form>
			</div>
	</div>
</section>

@stop