<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "id_usuarios";
    protected $allowedFields = ["nombre","apellido","usuario","email","pass","perfil_id","baja","created_at",];   
}