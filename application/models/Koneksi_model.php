<?php

class Koneksi_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
    public function tampil_data_limit($table)
    {
        return $this->db->get($table, 3);
    }

    public function tampil_data_limit5($table)
    {
        return $this->db->get($table, 5);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function tampil_recent_post($table)
    {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(4);
        return $this->db->get($table);
    }

    public function kategori($table)
    {
        $this->db->group_by('kategori');
        return $this->db->get($table);
    }

    public function sign_in()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek_company = $this->db->get_where('mst_company', ['email_pt' => $email])->row_array();
        if ($cek_company) {
            if (password_verify($password, $cek_company['password'])) {
                $sess_data = array(
                    // 'kode' => $cek_company['kode_pt'],
                    'nama' => $cek_company['nama_pt'],
                    // 'jenis' => $cek_company['jenis_pt'],
                    'email' => $cek_company['email_pt'],
                    // 'deskripsi' => $cek_company['deskripsi'],
                    // 'date_input' => $cek_company['date_input'],
                    // 'image' => $cek_company['image'],
                    'logged_in' => TRUE,
                );
                $this->session->set_userdata($sess_data);
                redirect('website/dashboard', $sess_data);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Password Salah!</div>');
                redirect(base_url('website/admin'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Anda dilarang keras masuk area ini!</div>');
            redirect(base_url('website/admin'));
        }
    }
}
