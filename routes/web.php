    <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AirController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//just view

Route::get('/',function()
{
    return view('welcome');
});
Route::view('pro','first');
Route::view('tic','tic');
/*****************
 * @author:Varsha S
 * @Date:10/03/2021
 * @Module:user
 * @function:Registration form
 * ***************/

Route::view('reg','registeruser');
/*****************
 * @author:Rubiya
 * @Date:10/03/2021
 * @Module:user
 * @function:Insertion
 * ***************/
Route::post("insert",[AirController::class,'register']);
/*****************
 * @author:Varsha S
 * @Date:10/03/2021
 * @function:Index page
 * ***************/
Route::view('/index','index');

/*****************
 * @author:Rubiya
 * @Date:10/03/2021
 * @Module:user
 * @function:login
 * ***************/
Route::view('login','log');
Route::get('dashboard',[AirController::class,'dash']);
Route::get('logged',[AirController::class,'check']);

/*****************
 * @author:Radhika jaladharan
 * @Date:10/03/2021
 * @Module:admin
 * @function:Flight Add
 * ***************/
Route::view('add','flightadd');
 Route::get('insertflight',[AirController::class,'insertflight']);

/*********** 
@function:adding airport function
@author:Mahima .S
@date:10/03/2021
@module:admin
*************/

 Route::view('addairport','addairport');
Route::get('insertairport',[AirController::class,'insertairport']);

/*********** 
@function:delete/update flight route
@author:Rubiya A S
@date:10/03/2021
@module:admin
*************/


//Route::view('view','flightadd_view');

Route::get('getdata',[AirController::class,'datalist']);
//delete
Route::get('delete/{id}',[AirController::class,'delete']);
//update
Route::get('update/{id}',[AirController::class,'update']);
Route::post('/edit',[AirController::class,'edit_view']);

/*********** 
@function:delete/update airport route
@author:Mahima S
@date:10/03/2021
@module:admin
*************/


//Route::view('view','flightadd_view');
Route::view('airport','welcome');
Route::get('airportlist',[AirController::class,'airportlist']);
//delete
Route::get('deleteairport/{id}',[AirController::class,'deleteairport']);
//update
Route::get('updateairport/{id}',[AirController::class,'updateairport']);
Route::post('/editairport',[AirController::class,'editairport']);


/*********** 
@function:register view
@author:Rubiya
@date:10/03/2021
@module:user
*************/

Route::get('registerview/{id}',[AirController::class,'registerview']);
Route::get('registerupdate/',[AirController::class,'registerupdate']);

/*********** 
@function:flight book
@author:Rubiya A S
@date:10/03/2021
@module:user
*************/
Route::get('getflight',[AirController::class,'flightbooking']);
Route::get('book/{id}',[AirController::class,'book']);

/*********** 
@function:notification
@author:Radika J
@date:11/03/2021
@module:admin
*************/
Route::get('notification',[AirController::class,'notification']);
Route::get('insertnotification',[AirController::class,'insertnotification']);

/*********** 
@function:notification delete/update
@author:Rubiya A S
@date:11/03/2021
@module:admin
*************/
Route::get('getnoti',[AirController::class,'notificationlist']);
//delete
Route::get('deletenoti/{id}',[AirController::class,'deletenoti']);
//update
Route::get('updatenoti/{id}',[AirController::class,'updatenoti']);
Route::post('/editnoti',[AirController::class,'editnoti']);

/*********** 
@function:Search function
@author:Varsha S
@date:12/03/2021
@module:user
*************/
Route::get('searchf',[AirController::class,'searchaction']);
/*********** 
@function:admin index
@author:Mahima s
@date:12/03/2021
@module:admin
*************/
Route::view('adminindex','adminindex');
/*********** 
@function:view Registered users
@author:Radhika Jaladharan
@date:12/03/2021
@module:admin
*************/
Route::get('admin_view_user',[AirController::class,'adminviewuser']);
/*********** 
@function:Booking
@author:varsha s
@date:13/03/2021
@module:user
*************/

Route::get('booking',[AirController::class,'insertbooking']);
/*********** 
@function:userhome
@author:Rubiya A S
@date:12/03/2021
@module:user
*************/

Route::view('/userhome','userindex');
/*********** 
@function:searching
@author:Radhika Jaladharan
@date:12/03/2021
@module:user
*************/
Route::view('/searchform','searchform');
/*********** 
@function:payment
@author:Mahima s
@date:12/03/2021
@module:user
*************/
Route::get('payment', function () {
    return view('payment');
});
Route::get('pay', function () {
    return view('success');
});
/*********
@function:payment
@author:Varsha S
@date:13/03/2021
@module:user
*************/
Route::get('ticket/{bid}',[AirController::class,'ticket']);
Route::get('passenger',[AirController::class,'passenger']);
/*********
@function:logoutuser
@author:Varsha S
@date:13/03/2021
@module:user
*************/
Route::get('logoutuser',[AirController::class,'logoutuser']);
/*********
@function:logoutadmin
@author:Varsha S
@date:13/03/2021
@module:admin
*************/
Route::get('logoutadmin',[AirController::class,'logoutadmin']);
Route::get('myticket',[AirController::class,'myticket']);

/*********
@function:usernotification
@author:Rubiya A S
@date:13/03/2021
@module:user
*************/

Route::get('user_view_not',[AirController::class,'notviewuser']);