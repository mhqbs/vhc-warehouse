<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post
{
use HasFactory;
static $vehicles = [
[
"VehicleID" => "1",
"VIN" => "51O1GO7JTT1122655",
"Make" => "TOYOTA",
"ModelType" => "MPV",
"Year" => "2015",
"PoliceNumber" => "B 1003 UR",
"Region" => "Jakarta",
"ReportCheck" => "PASS",
"LastMaintenance" => "9/27/2021",
"NextMaintenance" => "10/27/2021"
],
[
"VehicleID" => "2",
"VIN" => "51O1GO7JTT1122123",
"Make" => "TOYOTA",
"ModelType" => "MPV",
"Year" => "2017",
"PoliceNumber" => "B 1013 UR",
"Region" => "Jakarta",
"ReportCheck" => "PASS",
"LastMaintenance" => "9/27/2021",
"NextMaintenance" => "10/27/2021"
]
];
public static function all(){
return collect(self::$vehicles);
}

// public static function find($VehicleID){
// $vsinfo = static::all();
// return $vsinfo->firstWhere('VehicleID', $VehicleID);
// }

}