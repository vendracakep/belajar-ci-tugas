<?php

namespace App\Controllers;

use App\Models\TransactionModel;
use CodeIgniter\Controller;

class PembelianController extends BaseController
{
    protected $transaksi;

    public function __construct()
    {
        $this->transaksi = new TransactionModel();

        if (session()->get('role') != 'admin') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function index()
    {
        $data['pembelian'] = $this->transaksi->findAll();
        return view('v_pembelian', $data);
    }

    public function update_status($id)
    {
        $pembelian = $this->transaksi->find($id);
        $newStatus = $pembelian['status'] == 1 ? 0 : 1;

        $this->transaksi->update($id, [
            'status' => $newStatus,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/pembelian');
    }
}