<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
    'name','email','logo','website'
    ];


    /**
     * method upload logo company
     * @param $file
     * @return string
     */
    public function uploadLogoCompany($file){

        $logo_name = time().'.'.$file->getClientOriginalExtension();
        $logo = Image::make($file->getRealPath());
        $logo->resize(100,100,function ($constrain){
            $constrain->aspectRatio();
        });
        $logo->stream();
        Storage::disk('public')->put('public/logo/'.$logo_name,$logo,'public');
        return $logo_name;
    }

    public function deleteLogo($name_logo){
        Storage::delete('/public/logo/'.$name_logo);
    }

    public function employeeCount(){
        return $this->hasMany('App\Models\Employee','company_id','id')->count();
    }
}
