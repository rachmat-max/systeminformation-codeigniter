<?php namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table      = 'employees';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'email', 'position', 'salary'];
    
    // Use timestamps (optional)
    protected $useTimestamps = true;
    
    // Validation rules (optional)
    protected $validationRules    = [
        'name'  => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email|is_unique[employees.email]',
        'position'  => 'required|min_length[3]|max_length[255]',
        'salary'  => 'required|min_length[3]|max_length[255]',
    ];
    protected $validationMessages = [
        'name'  => ['required' => 'Name is required.'],
        'email' => ['required' => 'Email is required.'],
        'position'  => ['required' => 'Position is required.'],
        'salary'  => ['required' => 'Salary is required.']
    ];
    protected $skipValidation     = false;
}
