<?php namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
    protected $table      = 'sessions';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'class_id',
        'trainer_id',
        'session_date',
        'start_time',
        'end_time',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // якщо є зв’язки, можна підвантажувати автоматично
    protected $returnType = 'array';
}
