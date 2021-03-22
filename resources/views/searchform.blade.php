
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
    </style>
     <form class="modal-content animate form-group" action="searchf" method="get">
  @csrf
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
            <h1 class="text-center text-white">Search Flight Details</h1>
            
            <div id="form">
                <h3 class="text-white">Book a Flight</h3>
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">One Way</label>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Round Trip</label>
                </div>
            <div id="input">
                <input type="text" name="from" id="group" placeholder="From">
                <input type="text" name="to" id="group" placeholder="To">
                <input type="date" name="date" id="group" placeholder="Departure Date">
               
               
                </div>
               
               
                <button type="submit" class="btn btn-primary text-white">Search Flight</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>
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