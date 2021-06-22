 <?php

    class matapelajaran_m extends CI_model
    {
        public function getAllmatapelajaran()
        {
            return $this->db->get('tb_matapelajaran')->result_array();
        }

        public function tambahmatapelajaran()
        {
            $data = [
                "idmatapelajaran" => $this->input->post('idmatapelajaran', true),
                "matapelajaran" => $this->input->post('matapelajaran', true)
            ];

            $this->db->insert('tb_matapelajaran', $data);
        }

        public function hapusmatapelajaran($idmatapelajaran)
        {
            // $this->db->where('nips', $nips);
            $this->db->delete('tb_matapelajaran', ['idmatapelajaran' => $idmatapelajaran]);
        }

        public function getmatapelajaranbyid($idmatapelajaran)
        {
            return $this->db->get_where('tb_matapelajaran', ['idmatapelajaran' => $idmatapelajaran])->row_array();
        }

        public function ubahmatapelajaran()
        {
            $data = [
                "idmatapelajaran" => $this->input->post('idmatapelajaran', true),
                "matapelajaran" => $this->input->post('matapelajaran', true)
            ];
            $this->db->where('idmatapelajaran', $this->input->post('idmatapelajaran'));
            $this->db->update('tb_matapelajaran', $data);
        }
    }
