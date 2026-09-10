<?php

class Dosen
{
    private $dosen = [
        [
            'nidn' => '001',
            'nama' => 'Bu Qonita',
            'prodi' => 'Teknik Informatika'
        ],
        [
            'nidn' => '002',
            'nama' => 'Bu Ulfa',
            'prodi' => 'Teknik Informatika'
        ],
        [
            'nidn' => '003',
            'nama' => 'Bu Puji',
            'prodi' => 'Teknik Informatika'
        ],
        [
            'nidn' => '004',
            'nama' => 'Bu Nimah',
            'prodi' => 'Teknik Informatika'
        ],
        [
            'nidn' => '005',
            'nama' => 'Pak Radit',
            'prodi' => 'Teknik Informatika'
        ],
        [
            'nidn' => '006',
            'nama' => 'Pak Fikri',
            'prodi' => 'Teknik Informatika'
        ],

    ];

    public function getAll()    
    {
        return $this->dosen;
    }

    public function getByNidn($nidn)
    {
        foreach ($this->dosen as $dsn) {
            if ($dsn['nidn'] == $nidn) {
                return $dsn;
            }
        }

        return null;
    }
}