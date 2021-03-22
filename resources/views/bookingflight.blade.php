<!----
@function:update flight
@author:Rubiya AS
@date:10/03/2021
@module:admin--->

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
    </head>
    <style>
        .bg1{
    background-image: url(../img/3.jpg);
    background-size: cover;
}
#form{
    background-color: #000;
    height:700px;
    width:700px;
    margin:auto;
    padding:20px;
    opacity: 0.7;

}
#form h3{
    border-bottom: 2px solid #3399ff;
    width:210px;
    padding: 5px;
}
::placeholder{
    color:#fff
}
#input #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input2 #group{
    width:195px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input3 #group{
    margin-left: 50px;
}
#input4 #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input5 h3{
    border-bottom: 2px solid #3399ff;
    width:220px;
    padding: 5px;
}
#input6 #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input6 #group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff

}
    </style>
<body class="bg1">
<!------header section---->
<!--container-->
<div class="container">
<!----form---->
<a href="/index">Back to home</a>
        <form class="form-group" action="{{url('booking')}}" method="get">
        
            <h1 class="text-center text-white">Airline Booking Form</h1>
             <h4 class="text-center text-white">Economic class</h4>
            <div id="form">
                <h3 class="text-white">Booking Details</h3>
                
@foreach($datas as $data)
<div id="input">
<input type="hidden" name="id" id="group" value="{{$data->id}}">
<input type="hidden" name="ecost" id="group" value="{{$data->ecost}}">
<input type="hidden" name="fcost" id="group" value="{{$data->fcost}}">
<input type="hidden" name="bcost" id="group" value="{{$data->bcost}}">
<input type="hidden" name="eseat" id="group" value="{{$data->eseat}}">
<input type="hidden" name="fseat" id="group" value="{{$data->fseat}}">
<input type="hidden" name="bseat" id="group" value="{{$data->bseat}}">
<?php
          $id1=session()->get('LoggedUser');
?>

<input type="text" name="uid" value="{{$id1}}">
<div class="row">
<div class="col-6">
   <h6 class="text-white"> Company name:</h6><input type="text" id="group" name="cname" value="{{$data->cname}}"></br></br>
   <h6 class="text-white"> Flightid:</h6><input type="text"  id="group" name="flightid" value="{{$data->flightid}}"></br></br>
   <h6 class="text-white"> From:</h6><input type="text" id="group" name="flyfrom"value="{{$data->flyfrom}}"></br></br>
    </div>
    <div class="col-6">
    <h6 class="text-white">To:</h6><input type="text"  id="group" name="flyto" value="{{$data->flyto}}"></br></br>
    <h6 class="text-white"> Departure time:</h6><input type="text" id="group" name="dtime"value="{{$data->dtime}}"></br></br>
    <h6 class="text-white">Arival time:</h6><input type="text" id="group" name="atime" value="{{$data->atime}}"></br></br>
  </div>
  </div>
                <select name="seating"  id="group" style="background: black;">
                    <option value="">Preffered Seating</option>
                    <option value="economy">Economy Class</option>
                    <option value="business">Business Class</option>
                    <option value="first">First Class</option>
                </select>
                <select name="utype" required="" id="group" style="background: black;">
                    <option value="">Preffered group</option>
                    <option value="adult">Adult</option>
                    <option value="seniour">Seniour citizen(above 60)</option>
                    <option value="infant">infant(0-2)</option>
                </select>
                </div>
                <div id="input5">
                    <h3 class="text-white">Personal Details</h3>
                </div>
                <div id="input6">
                    <input name="name"type="text" id="group" required="" maxlength="30" pattern="[a-zA-Z]+" placeholder="Full Name">
                    <input name="phone" type="number" id="group" placeholder="Phone Number" required pattern="[6-9]{1}[0-9]{9}">
                    <input name="email" type="email" id="group1" placeholder="Email">
                </div>
             
                <button name="submit" type="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>
  @endforeach
        </form>
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