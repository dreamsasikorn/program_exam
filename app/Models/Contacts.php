<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contacts extends Model
{
    use HasFactory;
    public static function add_contacts_db($data)
    {
        return DB::table('contacts')->insert($data);
    }
    public static function get_contacts_db()
    {
        return DB::table('contacts')->get();
    }

    public static function get_detail_db($contacts_id)
    {
        return DB::table('contacts')->where("contacts_id", "=", $contacts_id)->get();
    }
    public static function update_detail($contacts_id, $data)
    {
        return DB::table('contacts')->where("contacts_id", "=", $contacts_id)->update($data);
    }

    public static function delete_contacts($contacts_id)
    {
        return DB::table('contacts')->where('contacts_id', '=', $contacts_id)->delete();
    }
}
