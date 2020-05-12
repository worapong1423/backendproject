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
        $order = Orderdetail::where("order_id",$orderId)->get();
        return $order;
    }

    public function saveOrderdetail($form,$id){
        for($i=0;$i<count($form);$i++){
            $orderdetail =  new Orderdetail();
            $order = Order::find($id);
            $orderdetail->product_id =  $form[$i]['product_id'];
            //$orderdetail->order_id =  $form[$i]['order_id'];
            $orderdetail->amountin =  $form[$i]['amountin'];
            $orderdetail->amountout =  $form[$i]['amountout'];
            $orderdetail->rate =  $form[$i]['rate'];
            $orderdetail->order()->associate($order);
            $orderdetail->save();
        }

     //   return $form[0]['amountin'];
    }
    public function updateOrderdetail($form,$id){
        $orderdetail = Orderdetail::where("order_id",$id)->get();
        $order = Order::find($id);
        for($i=0;$i<count($form);$i++){
            // $orderdetail[i]->product_id =  $form[$i]['product_id'];
            // $orderdetail[i]->amountin =  $form[$i]['amountin'];
            // $orderdetail[i]->amountout =  $form[$i]['amountout'];
            // $orderdetail[i]->rate =  $form[$i]['rate'];
            $detail = $orderdetail[$i]->fill($form[$i]);
            $detail->save();
        }
    }







}
