<?php namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table      = 'members';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'membership_plan_id',
    ];

  
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
