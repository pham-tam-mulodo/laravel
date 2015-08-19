@extends('layouts.main')
@section('content')
<section>
    <div class="col-lg-8">
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
        @elseif (Session::has('error'))
            <div class="alert alert-danger" role="alert">{!! Html::decode(Session::get('error')) !!}</div>
        @endif
    {!! Form::open(array('url' => 'category/'.$category->id, 'class' => 'form', 'method' => 'put')) !!}
    <div class="form-group">
        {!! Form::label('Name') !!} 
        {!! Form::text('name', $category->name, array('required',
      'class'=>'form-control',
      'placeholder'=>'Name')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Alias') !!} 
        {!! Form::text('alias', $category->alias, array('required',
      'class'=>'form-control',
      'placeholder'=>'Alias')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Ordering') !!} 
        {!! Form::text('ordering', $category->ordering, array(
      'class'=>'form-control',
      'placeholder'=>'Ordering')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', array('class' => 'btn btn-success')) !!}
        </div>
    {!! Form::close() !!}
    </div>
    </section>
@endsection