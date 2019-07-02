@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              @if (! Auth::guest()) 
                    <div class="text-right">
                        <a href="{{ action('TopicController@create') }}">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                New Topic
                            </button>
                        </a>
                    </div>
                    <br />
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Home
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-linkable table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Topic</th>
                                <th class="text-center">Posted By</th>
                                <th class="text-center">Posted At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($topics as $topic)
                            <tr onclick="document.location.href = '{{ action('TopicController@show', $topic->id) }}'">
                                <td>{{ $topic->title }}</td>
                                <td class="text-center">{{ $topic->user->name }}</td>
                                <td class="text-center">{{ $topic->created_at->diffForHumans() }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection