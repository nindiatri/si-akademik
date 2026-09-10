<?php
class Mahasiswa
{
    public function getAll()
    {
        return [
            [
                'nim' => '23001',
                'nama' => 'Nindi',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23002',
                'nama' => 'Azira',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23003',
                'nama' => 'Aulia',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23004',
                'nama' => 'Fauzi',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23005',
                'nama' => 'Faul',
                'prodi' => 'Teknik Informatika'
            ],  
            [
                'nim' => '23006',
                'nama' => 'Aril',
                'prodi' => 'Teknik Informatika'
            ],  
        ];
    }

    public function getByNim($nim)
    {

        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] === $nim) {
                return $mhs;
            }
        }

        return null;
    }
}