<!-----@function:flight book
@author:Radika J
@date:11/03/2021
@module:user--->
<!DOCTYPE html>
<html>
<head>
<title>Flight Notification Adding</title>
<style>
*
{
padding:0px;
margin:0px;
}

.menubar
{
background-color:rgb(0,0,95);
text-align:center;

}
.menubar ul
{
list-style:none;
display:inline-flex;
padding:15px;

}
.menubar ul li a
{
text-decoration:none;
color:white;
padding:15px;
}
.menubar ul li
{
padding:10px;

}
.menubar ul li a:hover
{
background-color:green;
border-radius:10px;

}
.submenu
{
display:none;
}
.menubar ul li:hover .submenu
{
display:block;
position:absolute;
background-color:black;
border-radius:10px;

}
.menubar ul li:hover .submenu ul
{
display:block;
}
.submenu ul li
{
border-bottom:2px solid green;
}
.row
{

display:flex;
}
.col h2
{
text-align:center;
text-decoration:underline;
}
.ft
{
background-color:black;
padding:50px;
text-align:center;
color:white;
}

.first
{
background-color:rgba(0,0,0,0.3);
background-size:cover;



}
h1
{
font-size: 60px;
}


</style>

<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------------custom style-->
            

       <style>

fieldset{
width:500px;
height: 500px;

}
</style>
</head>
<body>
<div class="first">
<nav class="menubar navbar-light">

<ul>
<li> <a href="index">HOME </a></li>
<li> <a href="#">ADD</a>
<div class="submenu">
<ul>
<li> <a href="add">Add Flight Details</a></li>
<li> <a href="addairport">Add Airport</a></li>
<li> <a href="notification">Add Flight Status</a></li>
</ul>
</div>
</li>
<li> <a href="#">VIEW</a>
<div class="submenu">
<ul>
<li> <a href="getdata">Flights</a></li>
<li> <a href="airportlist">Airports</a></li>
<li> <a href="admin_view_user">Registered User</a></li>
<li> <a href="">Booked Users</a></li>
<li> <a href="getnoti">Notification</a></li>

</ul>
</div>
</li>
  <li> <a href="#">LOGOUT</a>
</ul>
</nav>






<form method="get" action="insertnotification" class="form-group">
<center>


<fieldset class="mt-3">
<h1>Flight notification</h1>
Select Flight:
<select name="fid" class="form-select">
@foreach($data as $user)
<option value="{{$user->id}}">{{$user->cname}}
</option>
@endforeach

</select><br><br>
<textarea placeholder="Notification" name="notification" class="form-control"></textarea><br><br>
<input type="date"  name="date" class="form-control"><br><br>


<input type="submit" name="submit" value="Notify" class="btn btn-primary">

</fieldset>


</form>

</body>
</html>

