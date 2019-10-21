<?php


namespace App\Http\Service;


use App\Role;
use App\Rate;
use App\Hotel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TrainingFormService extends BaseService
{

    public function getRate()
    {
        $query = Rate::query();
        $query->with('hotel');
        $forms = $query->get();
        return $forms;
    }

    public function saveRate($form)
    {
        $hotel = (new \App\Rate)->hotel();
        $rate =  new Rate();
        $rate->fill($form);
        $rate->hotel()->associate($hotel);
        $rate->save();
        return $rate;
    }

    public function updateRateById($id,$form)
    {
        $data = Rate::find($id);
        if($data){
            $data->fill($form);
            $save = $data->save();
            return $data;
        }else {
            abort(404,"Error");
        }

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
