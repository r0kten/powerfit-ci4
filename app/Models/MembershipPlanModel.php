<?php namespace App\Models;

use CodeIgniter\Model;

class MembershipPlanModel extends Model
{
    protected $table      = 'membership_plans';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'price',
        'duration', // кількість днів
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
