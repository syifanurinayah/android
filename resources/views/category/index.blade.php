@extends('template')

@section('content')
	<div class="content-wrapper">
    	<section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-file">
        Categories
        </i>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Categories</a></li>
        <li class="active">Data Categories</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               <a class="btn btn-primary pull-right" href="category/create">New Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if (!empty($category_list))
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="col-sm-5">Name</th>
                  <th class="col-sm-2"></th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($category_list as $category): ?>
                    <tr>
                      <td>{{ $category->name}}</td>
                       <td>
                         <a href="category/{{$category->id .'/edit'}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                         <div class="box-button">
                          {!! Form::open(['method'=> 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}
                          {!! Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) !!}

                          {!! Form::close() !!}
                        </div>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
              @else 
              <p>Tidak ada data category</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
@stop
