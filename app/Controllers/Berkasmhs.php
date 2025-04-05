<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;

class Berkasmhs extends BaseController
{
    public function check()
    {
        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();
        return view('mahasiswa/view_berkasmhs', $data);
    }

    public function create()
    {
        return view('form_upload');
    }

    public function save()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Mahasiswa TIDAK boleh kosong!'
                ]
            ],
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
            'name' => $this->request->getPost('name')
        ]);
        $dataBerkas->move('uploads/berkas/', $fileName);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('berkas'));
    }

    function download($id)
    {
        $berkas = new BerkasModel();
        $data = $berkas->find($id);
        return $this->response->download('uploads/berkas/' . $data->berkas, null);
    }
}
