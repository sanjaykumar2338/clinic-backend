<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'mcl_revenue';

    public function payment_purpose(){
        return $this->hasMany(Paymentpurpose::class, 'id', 'payment_purpose');
    }

    public function payment_method(){
        return $this->hasMany(Paymentmethod::class, 'id', 'payment_method');
    }

    public function inventory(){
        return $this->hasMany(InventoryItem::class, 'id', 'inventory');
    }

    public function patient(){
        return $this->hasMany(RevenuePatient::class, 'revenue', 'id');
    }

    public function doctor(){
        return $this->hasOne(Doctor::class, 'id', 'doctor');
    }
}