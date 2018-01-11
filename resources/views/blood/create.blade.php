@extends('template')

@section('content')
		<div class="content-wrapper">
    	<section class="content-header">
      		<h1>
       		 Create Blood
      		</h1>

      		<ol class="breadcrumb">
        		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       			 <li><a href="#">Blood</a></li>
      		</ol>
    	</section>

		  <section class="content">
    		<div class="row">
      			<div class="col-md-12">
        			<div class="box box-primary">	
                <div class="form-horizontal">
              <div class="box-body">
              {!! Form::open(['url' => 'blood']) !!}

        			<div class="form-group">
                {!! Form::label('blood', 'Name', ['class' => 'control-label col-sm-2']) !!}

                <div class="col-sm-5">
                {!! Form::text('name', null, ['class' =>'form-control']) !!}
                </div>
              </div>

              @if ($errors->any())
              <div class="form-group {{ $errors->has('category_id') ? 'has-error' : 'has-success' }}">
              @else
              <div class="form-group">
              @endif
                {!! Form::label('category_id', 'Blood Type', ['class' => 'control-label col-sm-2']) !!}
                @if(count($category_list) > 0)
              <div class="col-sm-5">
                {!! Form::select('category_id',$category_list, null, ['class' =>'form-control', 'id' => 'category_id', 'placeholder' => 'Pilih Blood']) !!}
              @else
                <p>Tidak Ada pilihan Blood</p>
              @endif
              </div>
            </div>

            <div class="form-group">
                {!! Form::label('alamat', 'Alamat', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-5">
                {!! Form::text('alamat', null, ['class' =>'form-control']) !!}
            </div>
            </div>

            <div class="form-group">
                {!! Form::label('no_tlp', 'No Tlp', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-5">
                {!! Form::text('no_tlp', null, ['class' =>'form-control']) !!}
            </div>
            </div>


            <div class="form-group">
                {!! Form::label('keterangan', 'Keterangan', ['class' => 'control-label col-sm-2']) !!}
              <div class="col-sm-5">
                    {!! Form::textarea('keterangan', null,  ['class' =>'form-control']) !!}
              </div>
              </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                  <a href="edit" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>
              {!! Form::close() !!}
          </div>
        </form>
      </div>
  </div>
</section>

@stop