<?php


namespace App\Http\Service;


use App\Role;
use App\Order;
use App\Hotel;
use App\User;
use App\Rate;
use App\Orderdetail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderService extends BaseService
{

    public function getOrder($hotelId)
    {
        $hotel = Hotel::find($hotelId);
        return $hotel->orders;
    }

    public function saveOrder($form,$id)
    {

        $hotel = Hotel::find($id);
        $user = User::find($id);
        $order =  new Order();
        $order->fill($form);
        $order->hotel()->associate($hotel);
        $order->user()->associate($user);
        $order->save();


        /*$orderdetail =  new Orderdetail();
        foreach ($form as $detail){
            $rate = Rate::find($id);
            $orderid = Order::find($id);
            $orderdetail->fill($detail);
            $orderdetail->order()->associate($orderid);
            $orderdetail->rate()->associate($rate);
            $orderdetail->save();
        }*/

        //return $orderdetail;
        return $order;

    }



    public function updateOrderById($form,$id)
    {
        $data = Order::find($id);
        if($data){
            $data->fill($form);
            $save = $data->save();
            return $data;
        }else {
            abort(404,"Error");
        }
    }

    public function  getOrderById($id){
        $data = Order::find($id);
        if($data){
            return $data;
        }else {
            abort(404,'Error');
        }

    }

    public function  destroyOrderById($id){
        $data = Order::find($id);
        if($data){
            $data->delete();
            return $data;
        }else {
            abort(404,'Error');
        }

    }


}
