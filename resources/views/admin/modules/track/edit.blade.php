@extends('admin.layouts.one_col')

@section('title')
    <h1>Edit Track {{ $track->title }}</h1>
@stop

@section('style')
    @parent
@stop

@section('script')
    @parent

@stop

@section('content')

    <div class="mTop10">
        {!! Form::model($track,['action' => ['Admin\TrackController@update',$track->id], 'method' => 'patch'], ['class'=>'form-horizontal']) !!}

        <div class="form-group">
            {!! Form::label('trackeable', $type, ['class' => 'control-label']) !!} <span class="red">*</span>
            {!! Form::select('trackeable_id', $trackeables,null,array('class'=>'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Track Title', ['class' => 'control-label']) !!} <span class="red">*</span>
            {!! Form::text('title_ar', null, ['class' => 'form-control','placeholder'=>'Category Name']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
            {!! Form::textarea('description_ar', null, ['class' => 'form-control editor','placeholder'=>'Category Description']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save Draft', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@stop