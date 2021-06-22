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
                "guru" => $this->input->post('guru', true),
                "jeniskelamin" => $this->input->post('jeniskelamin', true),
                "tempatlahir" => $this->input->post('tempatlahir', true),
                "tanggallahir" => $this->input->post('tanggallahir', true),
                "alamat" => $this->input->post('alamat', true),
                "idjenisptk" => $this->input->post('idjenisptk', true),
                "idmatapelajaran" => $this->input->post('idmatapelajaran', true),
                "tugastambahan" => $this->input->post('tugastambahan', true),
                "idstatuskepegawaian" => $this->input->post('idstatuskepegawaian', true),
                "nip" => $this->input->post('nip', true),
                "skcpns" => $this->input->post('skcpns', true),
                "tanggalcpns" => $this->input->post('tanggalcpns', true),
                "skpengangkat" => $this->input->post('skpengangkat', true),
                "tmtpengangkat" => $this->input->post('tmtpengangkat', true),
                "lembpengangkat" => $this->input->post('lembpengangkat', true),
                "pangkatgolruang" => $this->input->post('pangkatgolruang', true),
                "foto" => $this->input->post('foto', true)
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
                "guru" => $this->input->post('guru', true),
                "jeniskelamin" => $this->input->post('jeniskelamin', true),
                "tempatlahir" => $this->input->post('tempatlahir', true),
                "tanggallahir" => $this->input->post('tanggallahir', true),
                "alamat" => $this->input->post('alamat', true),
                "idjenisptk" => $this->input->post('idjenisptk', true),
                "idmatapelajaran" => $this->input->post('idmatapelajaran', true),
                "tugastambahan" => $this->input->post('tugastambahan', true),
                "idstatuskepegawaian" => $this->input->post('idstatuskepegawaian', true),
                "nip" => $this->input->post('nip', true),
                "skcpns" => $this->input->post('skcpns', true),
                "tanggalcpns" => $this->input->post('tanggalcpns', true),
                "skpengangkat" => $this->input->post('skpengangkat', true),
                "tmtpengangkat" => $this->input->post('tmtpengangkat', true),
                "lembpengangkat" => $this->input->post('lembpengangkat', true),
                "pangkatgolruang" => $this->input->post('pangkatgolruang', true),
                "foto" => $this->input->post('foto', true)
            ];
            $this->db->where('idguru', $this->input->post('idguru'));
            $this->db->update('tb_guru', $data);
        }
    }
