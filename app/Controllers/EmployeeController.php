<?php namespace App\Controllers;

use App\Models\EmployeeModel;

class EmployeeController extends BaseController
{
    public function index()
    {
        $model = new EmployeeModel();
        $data['employees'] = $model->findAll();
        return view('employee/index', $data);
    }

    public function create()
    {
        return view('employee/create');
    }

    public function store()
    {
        $model = new EmployeeModel();

        if (!$this->validate([
            'name'  => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[employees.email]',
            'position'  => 'required|min_length[3]',
            'salary'  => 'required|min_length[3]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model->save([
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'position'  => $this->request->getPost('position'),
            'salary'  => $this->request->getPost('salary')
        ]);

        return redirect()->to('/employee');
    }

    public function edit($id)
    {
        $model = new EmployeeModel();
        $data['employee'] = $model->find($id);

        if (empty($data['employee'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Employee not found');
        }

        return view('employee/edit', $data);
    }

    public function update($id)
    {
        $model = new EmployeeModel();

        if (!$this->validate([
            'name'  => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[employees.email,email,' . $id . ']',
            'position'  => 'required|min_length[3]',
            'salary'  => 'required|min_length[3]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model->update($id, [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'position'  => $this->request->getPost('position'),
            'salary'  => $this->request->getPost('salary')
        ]);

        return redirect()->to('/employee');
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);
        return redirect()->to('/employee');
    }
}
