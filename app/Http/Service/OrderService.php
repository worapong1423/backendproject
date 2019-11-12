<?php


namespace App\Http\Service;


use App\Role;
use App\Order;
use App\Hotel;
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
        $order =  new Order();
        $order->fill($form);
        $order->hotel()->associate($hotel);
        $order->save();
        return $order;
    }

    public function updateOrderById($form)
    {

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
