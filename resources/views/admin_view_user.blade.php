<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View flights</title>
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
<li> <a href="admin_view_user">Registered User</a></li>
<li> <a href="getdata">Flight details</a></li>
<li> <a href="getnoti">Flight Status</a></li>
</ul>
</div>
</li>
  <li> <a href="#">LOGOUT</a>
</ul>
</nav>

<h1 class="text-center">Registered users</h1>

    
<div class="container-fluid">
<table class="table table-bordered table-info table-striped">
            <thead>
                    <tr>
                        <th>id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        
                    </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                
               
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</body>
</html>