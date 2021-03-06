<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Download extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    public $table = 'downloads';

    protected $fillable = [
        'name','category_id','type','size','from','sky_drive_name','sky_drive_src','sky_drive_psw','content','src','photo','state','sort'
    ];

    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function downloadCategory(){
        return $this->hasOne('App\Entities\Category', 'id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function downloadDownloadTag(){
        return $this->hasMany('App\Entities\DownloadTag', 'download_id', 'id');
    }

}
