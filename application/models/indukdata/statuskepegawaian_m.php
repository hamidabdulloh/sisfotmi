 <?php

    class statuskepegawaian_m extends CI_model
    {
        public function getAllstatuskepegawaian()
        {
            return $this->db->get('tb_statuskepegawaian')->result_array();
        }

        public function tambahstatuskepegawaian()
        {
            $data = [
                "idstatuskepegawaian" => $this->input->post('idstatuskepegawaian', true),
                "statuskepegawaian" => $this->input->post('statuskepegawaian', true)
            ];

            $this->db->insert('tb_statuskepegawaian', $data);
        }

        public function hapusstatuskepegawaian($idstatuskepegawaian)
        {
            // $this->db->where('nips', $nips);
            $this->db->delete('tb_statuskepegawaian', ['idstatuskepegawaian' => $idstatuskepegawaian]);
        }

        public function getstatuskepegawaianbyid($idstatuskepegawaian)
        {
            return $this->db->get_where('tb_statuskepegawaian', ['idstatuskepegawaian' => $idstatuskepegawaian])->row_array();
        }

        public function ubahstatuskepegawaian()
        {
            $data = [
                "idstatuskepegawaian" => $this->input->post('idstatuskepegawaian', true),
                "statuskepegawaian" => $this->input->post('statuskepegawaian', true)
            ];
            $this->db->where('idstatuskepegawaian', $this->input->post('idstatuskepegawaian'));
            $this->db->update('tb_statuskepegawaian', $data);
        }
    }
