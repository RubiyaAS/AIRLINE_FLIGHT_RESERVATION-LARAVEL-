<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirModel;
use App\Models\Flight;
use App\Models\Airport;
use App\Models\Booking;
use App\Models\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Auth;


class AirController extends Controller
{
/*********** 
 @function:registration function
@author:Rubiya AS
@date:9/3/2021
@module:user
****/
    
    
    function register(Request $req)
    {
    
        $req->validate([
           'firstname'=>'required',
           'lastname'=>'required',
           'age'=>'required',
           'gender'=>'required',
           'address'=>'required',
           'phone'=>'required',

          'email'=>'required|email|unique:auths',
          'password'=>'required|min:5|max:12'
          ]);
    
    
    
    $data=new AirModel ;
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->age=$req->age;
        $data->gender=$req->gender;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $query=$data->save();
        if($query)
        {
            return back()->with('sucess','sucessfully registered');
        }
        else{
            return back()->with('fail','something wrong');
        }
        
    }
 

function dash(Request $req)
 {
     $data=['LoggedUserInfo'=>AirModel::where('id','=',session('LoggedUser'))->first()];
 return view('dashboad',$data);
 }
 /*********** 
 @function name:check
 @function:login action
@author:Rubiya AS
@date:10/3/2021
****/
    
function check(Request $req)
    {
       
        if($req->email=='admin@gmail.com'&&$req->password=='admin@123')
        {
            $adminsession='admin';
            $req->session()->put('LoggedAdmin',$adminsession);
            $id2=$req->session()->get('LoggedAdmin');
            return view('adminindex');
        }
        else
        {

      
        $req->validate(['email'=>'required','password'=>'required']);
      $userinfo=AirModel::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','Your email is not recognized!');
        }
        else{
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->session()->put('LoggedUser',$userinfo->id);
                $id1=$req->session()->get('LoggedUser');
                return redirect('userhome');

            }
            else
            {
                return back()->with('fail','invalid password');
            }
        }
    }

    }





/***********
 @function name:insertflight 
 @function:add flight function
@author:Radhika jaladharan
@date:10/03/2021
@module:admin
****/

    function insertflight(Request $req)
    {
    $Flight=new Flight;
         $Flight->cname=$req->cname;
         $Flight->flightid=$req->flightid;
         $Flight->flyfrom=$req->flyfrom;
         $Flight->flyto=$req->flyto;
         $Flight->dtime=$req->dtime;
         $Flight->atime=$req->atime;
         $Flight->eseat=$req->eseat;
         $Flight->bseat=$req->bseat;
         $Flight->fseat=$req->fseat;
         $Flight->date=$req->date;
         $Flight->ecost=$req->ecost;
         $Flight->bcost=$req->bcost;
         $Flight->fcost=$req->fcost;

         $query=$Flight->save();
         return redirect('add');
    }


/****
 @function name:insertairport 
 @function:adding airport function
@author:Mahima S
@date:10/03/2021
@module:admin
****/


    function insertairport(Request $req)
    {
    $Airport=new Airport;
         $Airport->aname=$req->aname;
         $Airport->abbrevation=$req->abbrevation;
         $Airport->city=$req->city;
         $Airport->state=$req->state;
         $Airport->pincode=$req->pincode;
         $Airport->timezone=$req->timezone;
         $query=$Airport->save();
         return redirect('addairport');
    }
    
/****
 @function:update/delete flight
@author:Rubiya AS
@date:10/03/2021
@module:admin
****/
    function datalist()
    {
        $data=Flight::all();
        return view('flightadd_view',['data'=>$data]);
    }
    function delete($id)
        {
            $data=Flight::find($id);
            $data->delete();

        }
        function update($id)
        {
            $data=Flight::find($id);
           return view('updateflight',['data'=>$data]);


           
        }
        function edit_view(Request $req)
        {
            $m=Flight::find($req->id);
            $m->cname=$req->cname;
            $m->flightid=$req->flightid;
            $m->flyfrom=$req->flyfrom;
            $m->flyto=$req->flyto;
            $m->dtime=$req->atime;
            $m->eseat=$req->eseat;
            $m->bseat=$req->bseat;
            $m->fseat=$req->fseat;
            $m->date=$req->date;
            $m->ecost=$req->ecost;
            $m->bcost=$req->bcost;
            $m->fcost=$req->fcost;
            
            $m->save();
            return redirect('getdata');
        }


/****
 @function:update/delete aireport
@author:Mahima S
@date:10/03/2021
@module:admin
****/
    function airportlist()
    {
        $data=Airport::all();
        return view('aireportview',['data'=>$data]);
    }
    function deleteairport($id)
        {
            $data=Airport::find($id);
            $data->delete();

        }
        function updateairport($id)
        {
            $data=Airport::find($id);
           return view('updateairport',['data'=>$data]);


           
        }
        function editairport(Request $req)
        {
            $m=Airport::find($req->id);
            $m->aname=$req->aname;
            $m->abbrevation=$req->abbrevation;
            $m->city=$req->city;
            $m->state=$req->state;
            $m->pincode=$req->pincode;
            $m->timezone=$req->timezone;
             $query=$m->save();

             $data=Airport::all();
             return view('aireportview',['data'=>$data]);
             //return redirect('airport');
        }

/*********** 
@function:registerview function
@author:Rubiya A S
@date:10/03/2021
@module:user
*************/


        
        public function registerview($id)
    {

       
         $data=AirModel::where('id',$id)->select('air_models.*')->get();
        return view('registerview_update',compact('data'));
    }
    /*********** 
@function:Updation of user
@author:Radhika Jaladharan
@date:10/03/2021
@module:user
*************/
    public function registerupdate(Request $req)
    {
        $data=AirModel::find($req->id);
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->age=$req->age;
        $data->gender=$req->gender;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->save();
        echo $data;
        $data=AirModel::all();
        return view('list');

        }

        /*********** 
        @function name:flightbooking
        @function:viewing flight details
        @author:Rubiya A S
        @date:10/03/2021
        @module:user
        *************/
        function flightbooking()
        {
            $data=Flight::all();
            return view('flightbook',['data'=>$data]);
        }

        function book($id)
        {
            $datas=Flight::where('id',$id)->get();
           return view('bookingflight',compact('datas'));
        }

        /*********** 
        @function name:notification
        @function:notification form
        @author:Radika J
        @date:11/03/2021
        @module:Admin
        *************/
        function notification()
        {   
        $data=Flight::all();
        return view('notification',['data'=>$data]);

        }
 /*********** 
        @function name:insertnotification
        @function:inserting notification
        @author:Radika J
        @date:11/03/2021
        @module:Admin
        *************/

        function insertnotification(Request $req)
        {
            $Notification=new Notification;
            $Notification->notification=$req->notification;
            $Notification->fid=$req->fid;
            $Notification->date=$req->date;

            
            $query=$Notification->save();
            return redirect('notification');
        }

     /*********** 
    @function name:notificationlist
    @function:view notification
    @author:Radika J
    @date:11/03/2021
    @module:user
        *************/

        function notificationlist()
    {
        $data=Notification::all();
        return view('notificationview',['data'=>$data]);
    }
 /*********** 
    @function name:deletenoti
    @function:delete notification
    @author:Radika J
    @date:11/03/2021
    @module:user
        *************/

    function deletenoti($id)
        {
            $data=Notification::find($id);
            $data->delete();

        }
        /*********** 
    @function name:updatetenoti
    @function:update notification
    @author:Radika J
    @date:11/03/2021
    @module:Admin
        *************/

        function updatenoti($id)
        {
            $data=Notification::find($id);
           return view('update_notification',['data'=>$data]);
        }
        function editnoti(Request $req)
        {
            $m=Notification::find($req->id);
            $m->id=$req->id;
            $m->notification=$req->notification;
            $m->fid=$req->fid;
            $m->date=$req->date;
            $m->save();
            return redirect('getnoti');
        }

    /*********** 
    @function name:searchaction
    @function:Searching flights
    @author:Varsha S
    @date:11/03/2021
    @module:user
        *************/

   public function searchaction(Request $req)

    {
        $flight= new Flight;
        $from=$req->from;
        $to=$req->to;
        $date=$req->date;
        $users= DB::table('flights')
            ->where('flyfrom',$from)
            ->where('flyto',$to)
            ->where('date',$date)
            ->get();
      
        return view('flightbook',['data'=>$users]);
    }
    /*********** 
    @function name:adminviewuser
    @function:Viewing users
    @author:Rubiya A S
    @date:13/03/2021
    @module:admin
    *************/

     public function adminviewuser()
    {   $data=DB::table('air_models')
        ->get();
  
        return view('admin_view_user',['users'=>$data]);
    }
    /*********** 
    @function name:insert booking
    @function:inserting booking details
    @author:Varsha S,Radhika J
    @date:13/03/2021
    @module:user
    *************/
   public  function insertbooking(Request $req)
    {
     $userid=$req->uid;
    $bookingid=Str::random(10);
    $ecost=$req->ecost;
    $bcost=$req->bcost;
    $fcost=$req->fcost;
    $eseat=$req->eseat;
    $bseat=$req->bseat;
    $fseat=$req->fseat;
    $class=$req->seating;
    $usertype=$req->utype;
    $fid=$req->id;
    if($class=="economy")
    { 
        if($eseat>0)
        {
        $ecount=$eseat-1;
        $var=Flight::where('id',$fid)->update(['eseat'=>$ecount]);
        if($usertype=="seniour")
        {
           $cost=$ecost-500;
        
        }
        elseif($usertype=="infant")
    
        {
        $cost=$ecost-1000;
          
        }
      else
      {
        $cost=$ecost;
          
       }
    }
    else{

        echo "Economic class is full";exit;
    }
    }
    if($class=="business")
    {
        if($bseat>0)
        {
         
        $bcount=$bseat-1;   
        $var=Flight::where('id',$fid)->update(['bseat'=>$bcount]);
        if($usertype=="seniour")
        {
           $cost=$bcost-400;
        
        }
        elseif($usertype=="infant")
    
        {
        $cost=$bcost-800;
          
        }
      else
      {
        $cost=$bcost;
          
       }
    }
    else{

        echo "Business class is full";exit;
    }
    }
      if($class=="first")
      {
        if($fseat>0)
        {
         
        $fcount=$fseat-1; 
        $var=Flight::where('id',$fid)->update(['fseat'=>$fcount]);
        if($usertype=="seniour")
        {
           $cost=$fcost-800;
        
        }
        elseif($usertype=="infant")
    
        {
        $cost=$fcost-1200;
          
        }
      else
      {
        $cost=$fcost;
          
       }
    }
    else{

        echo "First class is full";exit;
    }
    }
    $Booking=new Booking;
    $Booking->seating=$class;
    $Booking->utype=$usertype;
    $Booking->name=$req->name;
    $Booking->phone=$req->phone;
    $Booking->email=$req->email;
    $Booking->bookingid=$bookingid;
    $Booking->fid=$req->id;
    $Booking->amount=$cost;
    $Booking->uid=$userid;
    
         $query=$Booking->save();
         return view('payment');
    }

  /*********** 
    @function name:ticket
    @function:Viewing ticket
    @author:Varsha S
    @date:13/03/2021
    @module:user
    *************/
     
    // 
    // $datas=DB::table('bookings')
    // ->join('air_models','air_models.id','=','bookings.uid')
    // ->select('bookings.*','air_models.*')
   public  function ticket($bid)
    {    
        
         $datas=DB::table('bookings')
        ->join('flights','flights.id','=','bookings.fid')
        ->select('bookings.*','flights.*')
        ->where('bid','=',$bid)
        ->get();
        return view('tic',['datas'=>$datas]);
    }
    public  function passenger()
    {    
        $id1=session()->get('LoggedUser'); 
        $datas=DB::table('bookings')
        ->join('flights','flights.id','=','bookings.fid')
        ->select('bookings.*','flights.*')
        ->where('uid','=',$id1)
        ->get();
        return view('singlepass',['datas'=>$datas]);
    }
      /*********** 
    @function name:logoutuser
    @function:logout for user
    @author:Varsha S
    ->limit(1)
    @date:13/03/2021
    @module:user
    *************/
   public function logoutuser()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return view('index');
        }
    }
       /*********** 
    @function name:logoutadmin
    @function:logout for admin
    @author:Varsha S
    @date:13/03/2021
    @module:admin
    *************/
    public function logoutadmin()
    {
        if(session()->has('LoggedAdmin'))
        {
            session()->pull('LoggedAdmin');
            return view('index');
        }
    }

    function myticket()
    {
        $id1=session()->get('LoggedUser');
        $datas=DB::table('bookings')
        ->select('bookings.*')
        ->where('uid','=',$id1)
        ->get();
        return view('myticket',['datas'=>$datas]);
    }

    /*********** 
    @function name:notification view_user
    @author:Rubiya A S
    @date:13/03/2021
    @module:user
    *************/

    public function notviewuser()
    {   $data=DB::table('notifications')
        ->get();
  
        return view('notifi_user_view',['data'=>$data]);
    }
    }  

