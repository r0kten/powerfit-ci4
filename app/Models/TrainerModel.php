<?php namespace App\Models;

use CodeIgniter\Model;

class TrainerModel extends Model
{
    protected $table      = 'trainers';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'specialization',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
