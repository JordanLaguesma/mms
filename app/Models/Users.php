<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'fullname',
        'username',
        'email',
        'password',
        'role'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function initTable()
    {
        $builder = $this->db->table("users");
        $setting = [
            "setTable" => $builder,
            "setDefaultOrder" => [
                ["id", "DESC"],
            ],
            "setSearch" => [null, "username", "role", "email"],
            "setOrder"  => [null, "username", "role", "email"],
            "setOutput" => [
                function () {
                    return '
                            <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>
                    ';
                },
                function ($row) {
                    return
                        '
                            <img src="'.$row['img'].'" alt="image" />
                            <span class="ps-2">'.$row['username'].'</span>
                        ';
                },
                "role",
                "email",
                function ($row) {
                    return '
                        <div class="form-group">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal_view_users" data-id="'.$row['id'].'"><i class="mdi mdi-eye"></i> View</a>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal_edit_users" data-id="'.$row['id'].'"><i class="mdi mdi-pen"></i> Update</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Delete</a>
                        </div>
                    </div>
                    ';
                },
            ]
        ];
        return $setting;
    }
}
