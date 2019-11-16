<?php


namespace App\Http\Service;


use App\Order;
use App\Orderdetail;
use App\Rate;



use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderdetailService extends BaseService
{

    public function getOrderdetail($orderId)
    {
        $order = Order::find($orderId);
        return $order->orderdetail;
    }

    public function saveOrderdetail($form,$id){

        for($i=0;$i<count($form);$i++){
            $orderdetail =  new Orderdetail();
            $orderdetail->product_id =  $form[$i]['product_id'];
            $orderdetail->order_id =  $form[$i]['order_id'];
            $orderdetail->amountin =  $form[$i]['amountin'];
            $orderdetail->amountout =  $form[$i]['amountout'];
            $orderdetail->rate =  $form[$i]['rate'];
            $orderdetail->save();

        }

     //   return $form[0]['amountin'];
    }







}
