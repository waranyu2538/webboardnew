@extends('layouts.app')

@section('content')
    <br><br><div class="form-group" style="margin-left: 50px">

            <a href="{{route('profile')}}" class="btn btn-success">User</a>
            <a href="{{route('group.index')}}" class="btn btn-success">Group</a>
            <a href="{{route('topic.index')}}" class="btn btn-success">Topic</a>
        </div><br><br>


    <div class="col-md-4 col-md-offset-2">
        <div class="panel panel-default">
                กดหกดเสกด้่เสา่
            
        </div>
    </div>
@endsection