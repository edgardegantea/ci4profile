<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'nombre', 'apellidos', 'username', 'email', 'password', 'reset_token', 
        'reset_token_expiration', 'telefono', 'is_profile_complete', 'active',
        'created_at', 'updated_at', 'deleted_at', 'role'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;


    public function getUserByUsernameOrEmail($usernameOrEmail)
    {
        return $this->where('username', $usernameOrEmail)
                    ->orWhere('email', $usernameOrEmail)
                    ->first();
    }
}