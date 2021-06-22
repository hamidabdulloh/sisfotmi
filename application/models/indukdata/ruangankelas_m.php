 <?php

    class ruangankelas_m extends CI_model
    {
        public function getAllruangankelas()
        {
            return $this->db->get('tb_ruangankelas')->result_array();
        }

        public function tambahruangankelas()
        {
            $data = [
                "idruangankelas" => $this->input->post('idruangankelas', true),
                "ruangan" => $this->input->post('ruangan', true),
                "kelas" => $this->input->post('kelas', true),
                "kapasitas" => $this->input->post('kapasitas', true),
                "jumlahsiswa" => $this->input->post('jumlahsiswa', true)
            ];

            $this->db->insert('tb_ruangankelas', $data);
        }

        public function hapusruangankelas($idruangankelas)
        {
            // $this->db->where('nips', $nips);
            $this->db->delete('tb_ruangankelas', ['idruangankelas' => $idruangankelas]);
        }

        public function getruangankelasbyid($idruangankelas)
        {
            return $this->db->get_where('tb_ruangankelas', ['idruangankelas' => $idruangankelas])->row_array();
        }

        public function ubahruangankelas()
        {
            $data = [
                "idruangankelas" => $this->input->post('idruangankelas', true),
                "ruangan" => $this->input->post('ruangan', true),
                "kelas" => $this->input->post('kelas', true),
                "kapasitas" => $this->input->post('kapasitas', true),
                "jumlahsiswa" => $this->input->post('jumlahsiswa', true)
            ];
            $this->db->where('idruangankelas', $this->input->post('idruangankelas'));
            $this->db->update('tb_ruangankelas', $data);
        }
    }
