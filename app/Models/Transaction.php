<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    const PENDING = "pending";
    const ACCEPTED = "accepted";
    const ERROR = "error";
    const CANCELED = "canceled";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'billing_number',
        'amount',
        'customer',
        'status',
    ];
}
