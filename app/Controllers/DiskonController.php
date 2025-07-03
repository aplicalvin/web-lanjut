<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;
use CodeIgniter\HTTP\ResponseInterface;

class DiskonController extends BaseController
{
    protected $diskon;

    function __construct() 
    {
        $this->diskon = new DiskonModel();
    }

    public function index()
    {
        //
        $data['diskon'] = $this->diskon->findAll();   
        
        return view('v_diskon', $data);
    }

    //  public function create()
    // {
    //     $rules = [
    //         'tanggal' => 'require|unique',
    //         'nominal' => 'require',
    //     ];


    //     $dataForm = [
    //         'tanggal' => $this->request->getPost('tanggal'),
    //         'nominal' => $this->request->getPost('nominal'),
    //         'created_at' => date("Y-m-d H:i:s")
    //     ];

    //     $this->diskon->insert($dataForm);

    //     return redirect('diskon')->with('success', 'Data Berhasil Ditambah');
    // } 

    public function create()
    {
        // Aturan validasi biasa
        $rules = [
            'tanggal' => 'required|is_unique[diskon.tanggal]',
            'nominal' => 'required|numeric',
        ];

        // Jalankan validasi
        if (!$this->validate($rules)) {
            // Jika validasi gagal, simpan pesan error di flashdata
            $infoo = $this->validator->getErrors()['tanggal'];
            session()->setFlashdata('failed', $infoo);
            
            // Kembali ke form dengan membawa input yang pernah diisi
            return redirect()->back()->withInput();
        }

        // Jika validasi berhasil, lanjutkan proses
        $dataForm = [
            'tanggal'    => $this->request->getPost('tanggal'),
            'nominal'    => $this->request->getPost('nominal'),
            'created_at' => date("Y-m-d H:i:s")
        ];

        $this->diskon->insert($dataForm);

        // Simpan pesan sukses di flashdata
        session()->setFlashdata('success', 'Data Berhasil Ditambah');
        
        return redirect('diskon');
    }

    public function edit($id)
    {
        $dataDiskon = $this->diskon->find($id);

        $dataForm = [
            // 'tanggal' => $this->request->getPost('tanggal'),
            'nominal' => $this->request->getPost('nominal'),
            'updated_at' => date("Y-m-d H:i:s")
        ];


        $this->diskon->update($id, $dataForm);

        return redirect('diskon')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $dataDiskon = $this->diskon->find($id);

        $this->diskon->delete($id);

        return redirect('diskon')->with('success', 'Data Berhasil Dihapus');
    }
}
