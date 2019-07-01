@extends('layouts.app')

@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="container" style="padding-top: 10px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="https://fb-s-b-a.akamaihd.net/h-ak-xfa1/v/t1.0-1/c9.0.160.160/p160x160/420257_10151474103567424_1224916620_n.jpg?oh=0932a7be9adb74fd949d0211d9128ad7&oe=58BA7A17&__gda__=1488564886_feb0fc02d6307304a3d43aecff5a804a" class="avatar img-circle img-thumbnail" alt="avatar">
        <br><br>
        <input type="file" class="text-center center-block well well-sm">
      </div>

      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">Name : </label>
          <div class="col-lg-8">
            <input class="form-control" value="{{ Auth::user()->name }}" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email :</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{ Auth::user()->email }}" type="text">
          </div>
        </div>
        <br><br>
        <div class="form-group">

            <a href="{{route('home')}}" class="btn btn-success">back to home</a>

        </div>
    </div>


    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <h3 align="center">Post reviews</h3>
      <table>
		<tr>     
      		<th > Post </th>
      		<th style ="left: 50px; ">Show/Hide</th>
      	</tr> 
      </table>
        
          

        
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="button">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
			</div></div></div>
@endsection