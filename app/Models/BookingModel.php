<?php namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table      = 'bookings';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'member_id',
        'session_id',
        'booking_date',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
