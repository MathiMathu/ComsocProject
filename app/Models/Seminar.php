<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Event as Authenticatable;
use Illuminate\Notifications\Notifiable;


// class seminar extends Model
// {
//     use HasFactory;
//     public $table= "seminar";

class Seminar extends Model
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
       'RegistrationNo',
       'Name',
       'Email',
       'Place',
       'Language',


   ];

    use HasFactory;

}
