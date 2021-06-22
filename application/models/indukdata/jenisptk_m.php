 <?php

    class jenisptk_m extends CI_model
    {
        public function getAlljenisptk()
        {
            return $this->db->get('tb_jenisptk')->result_array();
        }

        public function tambahjenisptk()
        {
            $data = [
                "idjenisptk" => $this->input->post('idjenisptk', true),
                "jenisptk" => $this->input->post('jenisptk', true)
            ];

            $this->db->insert('tb_jenisptk', $data);
        }

        public function hapusjenisptk($idjenisptk)
        {
            // $this->db->where('nips', $nips);
            $this->db->delete('tb_jenisptk', ['idjenisptk' => $idjenisptk]);
        }

        public function getjenisptkbyid($idjenisptk)
        {
            return $this->db->get_where('tb_jenisptk', ['idjenisptk' => $idjenisptk])->row_array();
        }

        public function ubahjenisptk()
        {
            $data = [
                "idjenisptk" => $this->input->post('idjenisptk', true),
                "jenisptk" => $this->input->post('jenisptk', true)
            ];
            $this->db->where('idjenisptk', $this->input->post('idjenisptk'));
            $this->db->update('tb_jenisptk', $data);
        }
    }
