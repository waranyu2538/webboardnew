@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{ $topic->title }}</strong>
                    </div>
                   <div class="panel-body">

                        <div>
                            <p style="white-space: pre">{{ $topic->body }}</p>
                        </div>

                        <div class="text-right">
                            By <strong>{{ $topic->user->name }}</strong>
                            at <strong>{{ $topic->created_at->diffForHumans() }}</strong>
                        </div>

                        @foreach($comments as $comment)
                            <hr />
                            <div>
                                <p style="white-space: pre">{{ $comment->body }}</p>
                            </div>

                            <div class="text-right">
                                By <strong>{{ $comment->user->name }}</strong>
                                at <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                            </div>
                        @endforeach


                         @if(! Auth::guest())
    <hr />
    <div>
        <form class="form-horizontal" role="form" method="POST" action="{{ action('TopicController@comment', $topic->id) }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <label for="body" class="col-md-4 control-label">Comment</label>

                <div class="col-md-6">
                    <textarea id="body" type="body" class="form-control" name="body" required>{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Post
                    </button>
                </div>
            </div>
        </form>
    </div>
@endif   

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection