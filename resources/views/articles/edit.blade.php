@extends('layouts.theme')

@section('working_area')

    <div class="col-lg-6">
        <div class="card-box col-md-offset-3">
            {!! Form::model($article, [
                'method' => 'PATCH',
                'route' => ['article.update', $article->id]
            ]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Update Article', ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}


        </div>
    </div>



@endsection