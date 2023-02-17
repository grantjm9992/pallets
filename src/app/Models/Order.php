<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use CrudTrait;

    protected $table = 'order';

    protected $fillable = [
        "name_collection",
        "company_collection",
        "address_line_1_collection",
        "address_line_2_collection",
        "city_collection" ,
        "county_collection" ,
        "postcode_collection" ,
        "country_collection" ,
        "phone_collection" ,
        "email_collection",
        "name_delivery" ,
        "company_delivery",
        "address_line_1_delivery",
        "address_line_2_delivery",
        "city_delivery",
        "county_delivery",
        "postcode_delivery",
        "country_delivery",
        "phone_delivery",
        "email_delivery",
        "terms_and_conditions",
        "product_id",
        "order_status",
    ];
}
