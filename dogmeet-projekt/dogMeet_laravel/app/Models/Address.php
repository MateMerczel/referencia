<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = "address";
    public $timestamps = false;
    protected $fillable = [
        "profile_id",
        "country",
        "state",
        "city",
        "zip",
        "street",
        "houseNumber"
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
