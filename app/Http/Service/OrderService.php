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
        $user = User::find($form['receiver_id']);
        $order =  new Order();
        $order->fill($form);
        $order->hotel()->associate($hotel);
        $order->user()->associate($user);
        $order->save();
        $order['order_code'] = 'HT'.$order['id'];
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



    public function updateOrderById($form,$id,$orderID)
    {
        $data = Order::find($orderID);
        if($data){
            $data->fill($form);
            $data->status_id = $form['status_id'] ;
            if($data->status_id > 2){
                $user = User::find($form['sender_id']);
                $data->usersend()->associate($user);
            }
            $data->save();
            return $data;
        }else {
            abort(404,"Error");
        }
    }

    public function  getOrderById($id,$orderId){
        $data = Order::find($orderId);
        if($data){
            return $data;
        }else {
            abort(404,'Error');
        }

    }

    public function  destroyOrderById($id,$orderId){
        $data = Order::where("hotel_id",$id)->find($orderId);
        $order = Orderdetail::where("order_id",$orderId)->get();
        // $data = Order::find($orderid);
        if($data){
            $data->delete();
            for($i=0;$i<count($order);$i++){
                $order[$i]->delete();
            }
            return response('Success', 200);
        }else {
            abort(404,'Error');
        }

    }


}
