<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class member extends Model
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
       'year',
       'name',
       'image_name',
       'role',
       'yearofstudy',
       
       
   ];
}
