<!----
@function:notification view
@author:Rubiya A S
@date:10/03/2021
@module:Admin--->

<html>
<head>
<title></title>
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

      <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    <style> table,th,tr,td{
            
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:auto;
        }
    </style>
</head>

<body class="first">
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
  <li> <a href="logoutadmin">LOGOUT</a>
</ul>
</nav>

<h1 class="text-center">Notifications</h1>

<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
</head>
<style>
</style>
<body>
<table class="table table-bordered table-info table-striped">
<tr>

<td>id</td>
<td>notification</td>
<td>fid</td>
<td>date</td>


<td colspan="2">action</td>
</tr>
@foreach($data as $item)
<tr>

<td>{{ $item->id }}</td>
<td>{{ $item->notification }}</td>
<td>{{ $item->fid }}</td>
<td>{{ $item->date }}</td>



<td><a href="{{"deletenoti/".$item['id']}}">delete</a></td>
<td><a href="{{"updatenoti/".$item['id']}}">update</a></td>


</tr>
@endforeach
</table>
</body>
</html>
