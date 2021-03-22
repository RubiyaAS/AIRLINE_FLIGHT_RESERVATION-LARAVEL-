<!----
@Index page
@author:Varsha S
@date:13/03/2021
@module:user
--->
<!DOCTYPE html>
<html>
    <head>
        <title>Afrs</title>
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
        body{
            background-image: url("../img/banner2.jpg");
            background-size: cover;
        }
        .container{
            background-color: rgba(120,225,185,0.7);
            width:500px;        }
        .break{
            margin-top:10px;
        }
       
    </style>
<body>
<nav>
               <h1 class="text-center ">Have a safe journey </h1>
           </nav>
   
        <div class="container">
         
        @foreach($datas as $data) 
            <table class="table">
                
            

     
    <tr><td><h6>Ticket No:</h6></td><td>{{$data->bookingid}}</td></tr>
    <tr><td><h6>Flight ID:</h6></td><td>{{$data->flightid}}</td></tr>
    <tr><td> <h6>From:</h6></td><td>{{$data->flyfrom}}</td></tr>
    <tr><td> <h6>To:</h6></td><td>{{$data->flyto}}</td></tr>
    <tr><td> <h6>Time:</h6></td><td>{{$data->dtime}}</td></tr>
    <tr><td> <h6>Name:</h6></td><td>{{$data->name}}</td></tr>
    <tr><td> <h6>Email:</h6></td><td>{{$data->email}}</td></tr>
    <tr><td> <h6>Phone Number:</h6></td><td>{{$data->phone}}</td></tr>
    <tr><td> <h6>Cost:</h6></td><td>{{$data->amount}}</td></tr> 
   <tr><td> *********************************************</td></tr>
   
    
    </div>
</tr>
</table>
<br></br></br>
@endforeach
   

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
</script>
</body>
</html>
