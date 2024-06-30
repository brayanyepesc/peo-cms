<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'employees';

    protected $fillable = [
        'client_id',
        'names',
        'email',
        'contact',
        'payment_type',
        'payment_amount',
    ];
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function employeesAccordinToClient($client_id)
    {
        return $this->where('client_id', $client_id);
    }

}