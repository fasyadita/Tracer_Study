<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;  // Tambahkan ini

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;  // Tambahkan SoftDeletes

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'username',
        'password',
        'role',
        'first_name',
        'last_name',
        'email',
        'phone_number'
    ];

    // Menentukan kolom untuk soft deletes
    protected $dates = ['deleted_at'];
}
