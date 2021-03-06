@extends('template')

@section('content')
  
    <div class="content-wrapper">
      <section class="content-header">
        <h1>  
          Edit Category
        </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Category</a></li>
          <li class="active">Edit Category</li>
      </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary"> 
              <div class="form-horizontal">
                <div class="box-body">
                {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}
                <div class="form-group">
                {!! Form::label('category', 'Name', ['class' => 'control-label col-sm-2']) !!}

                <div class="col-sm-5">
                {!! Form::text('name', null, ['class' =>'form-control']) !!}
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