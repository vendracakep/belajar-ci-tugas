<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;

class DiskonController extends BaseController
{
    protected $diskon;

    public function __construct()
    {
        helper(['form']);
        $this->diskon = new DiskonModel();

        if (session()->get('role') != 'admin') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function index()
    {
        $data['diskon'] = $this->diskon->findAll();
        return view('v_diskon', $data);
    }

    public function create()
    {
        $rules = [
            'tanggal' => 'required|is_unique[diskon.tanggal]',
            'nominal' => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->diskon->insert([
            'tanggal'    => $this->request->getPost('tanggal'),
            'nominal'    => $this->request->getPost('nominal'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/diskon');
    }

    public function update($id)
    {
        $this->diskon->update($id, [
            'nominal'    => $this->request->getPost('nominal'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/diskon');
    }

    public function delete($id)
    {
        $this->diskon->delete($id);
        return redirect()->to('/diskon');
    }
}