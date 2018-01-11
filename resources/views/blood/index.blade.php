@extends('template')

@section('content')
	<div class="content-wrapper">
    	<section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-plus">
        Blood
        </i>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blood</a></li>
        <li class="active">Data Blood</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Blood</h3>
              <a class="btn btn-primary pull-right" href="blood/create">Blood</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if (!empty($blood_list))
              <table id="dataTables1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th class="center">No.</th>
                  <th class="center">Nama</th>
                  <th class="center">Type Blood</th>
                  <th class="center">Alamat</th>
                  <th class="center">No Tlp</th>
                  <th class="center">Keterangan</th>
                  <td colspan="2"></td>
                </tr>
                </thead>
                <tbody>
                 <?php $no=0; foreach($blood_list as $blood): $no++ ?>
                    <tr>
                      <td class="center">{{ $no}}</td>
                      <td class="center">{{ $blood->name}}</td>
                      <td class="center">{{ $blood->category->name}}</td>
                      <td class="center">{{ $blood->alamat}}</td>
                      <td class="center">{{ $blood->no_tlp}}</td>
                      <td class="center">{{ $blood->keterangan}}</td>
                      <td>
                          <a href="blood/{{$blood->id .'/edit'}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                          <div class="box-button">
                          {!! Form::open(['method'=> 'DELETE', 'action' => ['BloodController@destroy', $blood->id]]) !!}
                          {!! Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) !!}
                          {!! Form::close() !!}
                        </div>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
              {!! $blood_list->render() !!}
              @else if
              <p>Tidak ada data </p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
@stop