<?php namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $table      = 'classes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'capacity',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
