<!DOCTYPE html>
<html>
    <head>
        <title>Airline</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    
    <style>
   .bgclr
   {
       background-color: #AFEEEE;
   }
       
    </style>
    <body>
    
    
       
    @foreach($datas as $data) 
    
    <div class="container border border-dark mt-5 w-50 bgclr p-5">
    <nav class="mb-5">
               <h1 class="text-center ">Have a safe journey </h1>
    </nav>
    <div class="row">
    <div class="col-4">
           <p>BOOKING ID: {{$data->bookingid}}</p>
           <p>FLIGHT ID:  {{$data->flightid}}</p>
           <p>FROM:  {{$data->flyfrom}}</p>
           <p>TO:  {{$data->flyto}}</p>
           
    </div>
    <div class="col-4">
        <p>Name:{{$data->name}}</p>
        <p>  Amount:{{$data->amount}}</p>
        <p>  Departure Date:{{$data->date}}</p>
        <p>  Time:{{$data->dtime}}</p>
    </div>
    <div class="col-4 px-3">
    <i class="fa fa-qrcode fa-7x"></i>
    </div>
    </div>
    </div>

    @endforeach
   

   




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