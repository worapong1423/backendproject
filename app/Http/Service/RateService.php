<?php


namespace App\Http\Service;


use App\Role;
use App\Rate;
use App\Hotel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RateService extends BaseService
{

    public function getRate($hotelId)
    {
        $hotel = Hotel::find($hotelId);
        return $hotel->rates;
    }

    public function saveRate($form,$id)
    {
        $hotel = Hotel::find($id);
        $rate =  new Rate();
        $rate->fill($form);
        $rate->hotel()->associate($hotel);
        $rate->save();
        return $rate;
    }

    public function updateRateById($form)
    {
        foreach ($form as $rate) {
            $r = Rate::find($rate['id']);
            $r->fill($rate);
            $r->save();
      }
        return "OK";
    }

    public function  getRateById($id){
        $data = Rate::find($id);
        if($data){
            return $data;
        }else {
            abort(404,'Error');
        }

    }

    public function  destroyRateById($id){
        $data = Rate::find($id);
        if($data){
            $data->delete();
            return $data;
        }else {
            abort(404,'Error');
        }

    }


}
