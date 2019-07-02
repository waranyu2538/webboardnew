@extends('layouts.app')

@section('content')
<head>
  
</head>
  
</header><!-- /header -->
<style>
.table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<div class="container">
<div class="row">
   <div class="col-md-12"><br/>
      <h3 align="center">Add Data Now</h3></br>

      <div align="left"><a href="{{route('home')}}" class="btn btn-success">Home</a><div><br/>
      @if(count($errors) > 0)
         <div class="alert aler-danger">
         <ul>
               @foreach($errors->all() as $error)
               <li>{{$error}}</li>
        @endforeach
      </ul>
      </div>
    @endif

    @if(\Session::has('success'))
      <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
      </div>
    @endif

      <form method="post" action="{{url('home')}}">
         {{csrf_field()}}
         <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="input first name"/>
         </div>
         <div class="form-group">
            <input type="text" name="lname" class="form-control" placeholder="input last name"/>
         </div>
         <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="input email"/>
         </div>
         <div class="form-group">
            <input type="text" name="password" class="form-control" placeholder="input password"/>
         </div>

         <div class="form-group">
            <input type="submit" class="btn btn-primary" value="save" />
         </div>
      </form>


            <nav class="col-lg-12"><br>



              <table>
                <tr>
                  <ul class="breadcrumb"><a style="font-size:30px;">User Records</a></ul>
                </tr>
                <tr>
                  <th style="font-size:20px;" style="margin-top: 10px;">First Name:</th>
                  <th style="font-size:20px;" >Last Name:</th>
                  <th style="font-size:20px;" >E-mail:</th>
                  <th style="font-size:20px;" >Active/Ban</th>
                </tr>
                <tr>
                  <td>Waranu</td>
                  <td>Mk.</td>
                  <td>wm@pkw.com</td>
                  <td><input type="button" class="btn btn-danger" value="Full" onclick="msg()"/> <input type="button" class="btn btn-success"  value="Lock Post" onclick="msg()"/></td>
                </tr>
                <tr>
                  <td>Jakkapat</td>
                  <td>Mtj.</td>
                  <td>jm@pkw.com</td>
                  <td><input type="button" class="btn btn-danger" value="Full" onclick="msg()"/> <input type="button" class="btn btn-success" value="Lock Post" onclick="msg()"/></td>
                </tr>
                <tr>
                  <td>Gghost</td>
                  <td>Jk.</td>
                  <td>gj@pkw.com</td>
                  <td><input type="button" class="btn btn-danger" value="Full" onclick="msg()"/> <input type="button" class="btn btn-success" value="Lock Post" onclick="msg()"/></td>
                </tr>
                <tr>
                  <td>Drow</td>
                  <td>Rg.</td>
                  <td>dr@pkw.com</td>
                  <td><input type="button" class="btn btn-danger" value="Full" onclick="msg()"/> <input type="button" class="btn btn-success" value="Lock Post" onclick="msg()"/></td>
                </tr>

              </table>
              <br><br>



              <table>
                <tr>
                  <td><ul class="breadcrumb"><a style="font-size:30px;">Group Manage</a></ul></td>
                  <td><ul class="breadcrumb"><a style="font-size:30px;">Add Group</a></ul></td>
                </tr>
                <tr>
                  <td>
                    <ul><a style="font-size:20px;">Name Group:</a></ul>
                    <ul><a style="font-size:20px;">group </a><input type="button" value="Full" class="btn btn-danger" onclick="msg()"/> <input type="button" value="Lock Post" class="btn btn-primary" onclick="msg()"/> </ul>
                    <ul><a style="font-size:20px;">group </a><input type="button"  value="Full" class="btn btn-danger" onclick="msg()"/> <input type="button" value="Lock Post" class="btn btn-primary" onclick="msg()"/> </ul>
                  </td>
                  <td>

                  </td>
                </tr>
              </table>

                <ul class="breadcrumb" style="margin-top: 20px;"><a style="font-size:30px;" >Group Manage</a></ul>
                <ul><a style="font-size:20px;">Name Group:</a></ul>
                <ul><a style="font-size:20px;">group</a></ul>
                <ul><a style="font-size:20px;">group</a></ul>

                <ul class="breadcrumb"><a style="font-size:30px;">Add Group</a></ul>
                <div class="form-group">
                   <input type="text" name="namegroup" class="form-control" placeholder="name group"/>
                </div>
                <div class="form-group">
                   <input type="text" name="detailgroup" class="form-control" placeholder="detail"/>
                </div>
                <input type="btn btn-primary" value="Add Group" onclick="msg()"/>

            </nav>



   </div>
</div>
</div>





@endsection