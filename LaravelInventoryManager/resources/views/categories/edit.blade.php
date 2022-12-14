@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Category</div>

                    <div class="card-body">
                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                        {{ Form::label('category', 'category: ') }}
                        {{ Form::text('category', null, ['class' => 'form-control', 'style' => '', 'id' => 'category']) }}
                        {{ Form::submit('Save category', ['class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top:20px']) }}
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

@section('css')
@endsection
