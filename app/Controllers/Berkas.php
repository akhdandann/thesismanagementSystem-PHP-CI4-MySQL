<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;

class Berkas extends BaseController
{
    public function index()
    {
        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();
        return view('admin/view_berkas', $data);
    }

    public function create()
    {
        return view('form_upload');
    }

    public function save()
    {
        if (!$this->validate([
            'topik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Topik TIDAK boleh kosong!'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul TIDAK boleh kosong!'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,application/pdf]|max_size[berkas,20048]',
                'errors' => [
                    'uploaded' => 'Harus ada file yang diupload!',
                    'mime_in' => 'File Extention harus berupa pdf!',
                    'max_size' => 'Ukuran file maksimal 20 MB'
                ]

            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan TIDAK boleh kosong!'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $berkas->insert([
            'berkas' => $fileName,
            'keterangan' => $this->request->getPost('keterangan'),
            'judul' => $this->request->getPost('judul'),
            'topik' => $this->request->getPost('topik'),
            'nama' => $this->request->getPost('nama')
        ]);
        $dataBerkas->move('uploads/berkas/', $fileName);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('http://localhost:8080/berkasmhs/check'));
    }

    function download($id)
    {
        $berkas = new BerkasModel();
        $data = $berkas->find($id);
        return $this->response->download('uploads/berkas/' . $data->berkas, null);
    }
}
