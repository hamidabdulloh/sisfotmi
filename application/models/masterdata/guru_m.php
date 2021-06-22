 <?php

    class guru_m extends CI_model
    {
        public function getAllguru()
        {
            return $this->db->get('tb_guru')->result_array();
        }

        public function tambahguru()
        {
            $data = [
                "idguru" => $this->input->post('idguru', true),
                "guru" => $this->input->post('guru', true)
            ];

            $this->db->insert('tb_guru', $data);
        }

        public function hapusguru($idguru)
        {
            // $this->db->where('nips', $nips);
            $this->db->delete('tb_guru', ['idguru' => $idguru]);
        }

        public function getgurubyid($idguru)
        {
            return $this->db->get_where('tb_guru', ['idguru' => $idguru])->row_array();
        }

        public function ubahguru()
        {
            $data = [
                "idguru" => $this->input->post('idguru', true),
                "guru" => $this->input->post('guru', true)
            ];
            $this->db->where('idguru', $this->input->post('idguru'));
            $this->db->update('tb_guru', $data);
        }
    }
