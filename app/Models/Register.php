<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Register as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Register extends Model
{
    use HasFactory,Notifiable;
     
     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    public $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
   protected $fillable = [
    // 'event_id',
    'name',
    'regNo',
    'email',
    'yos',
        
];
}
