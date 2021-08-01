<?php

namespace App\Controllers;

// use App\Models\DataDiriModel;

class User extends BaseController
{
  
  // protected $dataDiriModel;

  // public function __construct()
  // {
  //   $this->dataDiriModel = new DataDiriModel();
  // }

	public function index()
	{
    $data['title'] = 'KONSULAT.ID';
		return view('profiles/users/index', $data);
	}
  
  public function edit()
  {
    $data['title'] = 'KONSULAT.ID';
    return view('profiles/users/edit', $data);
  }

  // public function update($id)
  // {
  //   // $this->builder->select('users.id as userid, username, email, fullname');
  //   // $query = $this->builder->get();
  //   // $users = $query->getResult();

  //   // if ($this->request->getVar('email') == $users()->email) {
  //   //   $rule_email = 'required|valid_email';
  //   // } else {
  //   //   $rule_email = 'required|valid_email|is_unique[data_diri.email]';
  //   // }
    
  //   // if ($dataDiriLama['telepon'] == $this->request->getVar('telepon')) {
  //   //   $rule_telepon = 'required|min_length[10]|is_natural';
  //   // } else {
  //   //   $rule_telepon = 'required|min_length[10]|is_natural|is_unique[data_diri.telepon]';
  //   // }

  //   // if (!$this->validate([
  //   //   'nama' => [
  //   //     'rules' => 'required|alpha_space',
  //   //     'errors' => [
  //   //       'required' => 'Nama harus diisi.',
  //   //       'alpha_space' => 'Nama hanya boleh berisi karakter alfabet dan spasi.'
  //   //     ]
  //   //   ],
  //   //   'email' => [
  //   //     'rules' => $rule_email,
  //   //     'errors' => [
  //   //       'required' => 'Email harus diisi.',
  //   //       'valid_email' => 'Email tidak valid. (nama@email.com / nama0@email.com)',
  //   //       'is_unique' => 'Email sudah terdaftar.'
  //   //     ]
  //   //   ],
  //   //   'jenis_kelamin' => [
  //   //     'rules' => 'required',
  //   //     'errors' => [
  //   //       'required' => 'Pilih jenis kelamin.'
  //   //     ]
  //   //   ],
  //   //   'agama' => [
  //   //     'rules' => 'required',
  //   //     'errors' => [
  //   //       'required' => 'Pilih agama.'
  //   //     ]
  //   //   ],
  //   //   'telepon' => [
  //   //     'rules' => $rule_telepon,
  //   //     'errors' => [
  //   //       'required' => 'Nomer telepon harus diisi.',
  //   //       'min_length' => 'Nomer telepon minimal harus sepuluh angka.',
  //   //       'is_natural' => 'Nomor telepon tidak valid. (0123456789)',
  //   //       'is_unique' => 'Nomor telepon sudah terdaftar.'
  //   //     ]
  //   //   ],
  //   //   'alamat' => [
  //   //     'rules' => 'required',
  //   //     'errors' => [
  //   //       'required' => 'Alamat harus diisi.'
  //   //     ]
  //   //   ]
  //   // ])) {
  //   //   $validation = \Config\Services::validation();
  //   //   return redirect()->to('/data-diri/edit' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
  //   // }

  //   // $slug = url_title($this->request->getVar('nama'), '-', true);
  //   $this->dataDiriModel->save([
  //     'users_id' => $id,
  //     'fullname' => $this->request->getVar('fullname'),
  //     'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
  //     'umur' => $this->request->getVar('umur'),
  //     'telepon' => $this->request->getVar('telepon'),
  //     'email' => $this->request->getVar('email'),
  //     'alamat' => $this->request->getVar('alamat')
  //   ]);

  //   session()->setFlashData('pesan', 'Data berhasil diubah.');

  //   return redirect()->to('/');
  // }
}
