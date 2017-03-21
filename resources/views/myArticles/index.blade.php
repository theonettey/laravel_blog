@extends('layouts.theme')

@section('working_area')
    @if(!empty($user_articles))

        @foreach($user_articles as $article)
            <div class="col-lg-4">
                <div class="portlet">
                    <div class="portlet-heading bg-primary">
                        <h3 class="portlet-title">
                            <a href="/article/{{$article->id}}">{{$article->title}}</a>
                        </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="zmdi zmdi-refresh"></i></a>
                            <a data-toggle="collapse" data-parent="#accordion1" href="ui-cards.html#bg-primary1"><i class="zmdi zmdi-minus"></i></a>
                            {{--<a href="ui-cards.html#" data-toggle="remove"><i class="zmdi zmdi-close"></i></a>--}}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="bg-primary1" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            {{$article->description}}

                            <p>Written by: {{$article->user->name}}</p>

                            <hr>
                            <p>
                                <span class="pull-right">
                                    <a href="/article/{{$article->id}}/edit">Edit</a>
                                    <form action="/article/{{$article->id}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-sm btn-warning" type="submit">Delete</button>
                                    </form>
                                </span>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        @endforeach
    @endif


@endsection