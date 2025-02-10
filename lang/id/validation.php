<?php

return [

    /*
    |----------------------------------------------------------------------
    | Pesan Validasi
    |----------------------------------------------------------------------
    |
    | Berikut adalah pesan kesalahan default yang digunakan oleh kelas validator.
    | Beberapa aturan memiliki beberapa versi, seperti aturan ukuran. Silakan
    | sesuaikan pesan ini sesuai kebutuhan.
    |
    */

    'accepted' => ':attribute harus diterima.',
    'accepted_if' => ':attribute harus diterima saat :other adalah :value.',
    'active_url' => ':attribute harus berupa URL yang valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal yang sama atau setelah :date.',
    'alpha' => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => ':attribute hanya boleh berisi huruf dan angka.',
    'array' => ':attribute harus berupa array.',
    'ascii' => ':attribute hanya boleh berisi karakter alfanumerik dan simbol dengan byte tunggal.',
    'before' => ':attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berupa tanggal yang sama atau sebelum :date.',
    'between' => [
        'array' => ':attribute harus memiliki antara :min dan :max item.',
        'file' => ':attribute harus memiliki ukuran antara :min dan :max kilobyte.',
        'numeric' => ':attribute harus memiliki nilai antara :min dan :max.',
        'string' => ':attribute harus memiliki panjang antara :min dan :max karakter.',
    ],
    'boolean' => ':attribute harus bernilai true atau false.',
    'can' => ':attribute mengandung nilai yang tidak sah.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Kata sandi yang dimasukkan salah.',
    'date' => ':attribute harus berupa tanggal yang valid.',
    'date_equals' => ':attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':attribute harus sesuai dengan format :format.',
    'decimal' => ':attribute harus memiliki :decimal angka desimal.',
    'declined' => ':attribute harus ditolak.',
    'declined_if' => ':attribute harus ditolak saat :other adalah :value.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus terdiri dari :digits digit.',
    'digits_between' => ':attribute harus memiliki antara :min dan :max digit.',
    'dimensions' => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => ':attribute tidak boleh berakhir dengan salah satu dari: :values.',
    'doesnt_start_with' => ':attribute tidak boleh dimulai dengan salah satu dari: :values.',
    'email' => ':attribute harus berupa alamat email yang valid.',
    'ends_with' => ':attribute harus berakhir dengan salah satu dari: :values.',
    'enum' => 'Pilihan :attribute yang dipilih tidak valid.',
    'exists' => 'Pilihan :attribute yang dipilih tidak valid.',
    'extensions' => ':attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute harus memiliki nilai.',
    'gt' => [
        'array' => ':attribute harus memiliki lebih dari :value item.',
        'file' => ':attribute harus lebih besar dari :value kilobyte.',
        'numeric' => ':attribute harus lebih besar dari :value.',
        'string' => ':attribute harus lebih panjang dari :value karakter.',
    ],
    'gte' => [
        'array' => ':attribute harus memiliki :value item atau lebih.',
        'file' => ':attribute harus lebih besar atau sama dengan :value kilobyte.',
        'numeric' => ':attribute harus lebih besar atau sama dengan :value.',
        'string' => ':attribute harus lebih panjang atau sama dengan :value karakter.',
    ],
    'hex_color' => ':attribute harus berupa warna hex yang valid.',
    'image' => ':attribute harus berupa gambar.',
    'in' => 'Pilihan :attribute yang dipilih tidak valid.',
    'in_array' => ':attribute harus ada di dalam :other.',
    'integer' => ':attribute harus berupa angka bulat.',
    'ip' => ':attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa string JSON yang valid.',
    'list' => ':attribute harus berupa daftar.',
    'lowercase' => ':attribute harus menggunakan huruf kecil.',
    'lt' => [
        'array' => ':attribute harus memiliki kurang dari :value item.',
        'file' => ':attribute harus kurang dari :value kilobyte.',
        'numeric' => ':attribute harus kurang dari :value.',
        'string' => ':attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => ':attribute tidak boleh lebih dari :value item.',
        'file' => ':attribute tidak boleh lebih besar dari :value kilobyte.',
        'numeric' => ':attribute tidak boleh lebih besar dari :value.',
        'string' => ':attribute tidak boleh lebih panjang dari :value karakter.',
    ],
    'mac_address' => ':attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => ':attribute tidak boleh memiliki lebih dari :max item.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'string' => ':attribute tidak boleh lebih panjang dari :max karakter.',
    ],
    'max_digits' => ':attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => ':attribute harus memiliki setidaknya :min item.',
        'file' => ':attribute harus memiliki ukuran minimal :min kilobyte.',
        'numeric' => ':attribute harus memiliki nilai minimal :min.',
        'string' => ':attribute harus memiliki panjang minimal :min karakter.',
    ],
    'min_digits' => ':attribute harus memiliki minimal :min digit.',
    'missing' => ':attribute harus hilang.',
    'missing_if' => ':attribute harus hilang saat :other adalah :value.',
    'missing_unless' => ':attribute harus hilang kecuali :other adalah :value.',
    'missing_with' => ':attribute harus hilang saat :values ada.',
    'missing_with_all' => ':attribute harus hilang saat :values ada.',
    'multiple_of' => ':attribute harus merupakan kelipatan dari :value.',
    'not_in' => 'Pilihan :attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'password' => [
        'letters' => ':attribute harus mengandung setidaknya satu huruf.',
        'mixed' => ':attribute harus mengandung setidaknya satu huruf kapital dan satu huruf kecil.',
        'numbers' => ':attribute harus mengandung setidaknya satu angka.',
        'symbols' => ':attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':attribute yang dimasukkan sudah pernah bocor. Silakan pilih :attribute yang lain.',
    ],
    'present' => ':attribute harus ada.',
    'present_if' => ':attribute harus ada saat :other adalah :value.',
    'present_unless' => ':attribute harus ada kecuali :other adalah :value.',
    'present_with' => ':attribute harus ada saat :values ada.',
    'present_with_all' => ':attribute harus ada saat :values ada.',
    'prohibited' => ':attribute tidak boleh diisi.',
    'prohibited_if' => ':attribute tidak boleh diisi saat :other adalah :value.',
    'prohibited_unless' => ':attribute tidak boleh diisi kecuali :other ada di :values.',
    'prohibits' => ':attribute melarang :other untuk hadir.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => ':attribute harus diisi.',
    'required_array_keys' => ':attribute harus berisi entri untuk: :values.',
    'required_if' => ':attribute harus diisi saat :other adalah :value.',
    'required_if_accepted' => ':attribute harus diisi saat :other diterima.',
    'required_if_declined' => ':attribute harus diisi saat :other ditolak.',
    'required_unless' => ':attribute harus diisi kecuali :other ada di :values.',
    'required_with' => ':attribute harus diisi saat :values ada.',
    'required_with_all' => ':attribute harus diisi saat :values ada.',
    'required_without' => ':attribute harus diisi saat :values tidak ada.',
    'required_without_all' => ':attribute harus diisi saat tidak ada :values.',
    'same' => ':attribute harus sama dengan :other.',
    'size' => [
        'array' => ':attribute harus berisi :size item.',
        'file' => ':attribute harus memiliki ukuran :size kilobyte.',
        'numeric' => ':attribute harus bernilai :size.',
        'string' => ':attribute harus memiliki panjang :size karakter.',
    ],
    'starts_with' => ':attribute harus dimulai dengan salah satu dari: :values.',
    'string' => ':attribute harus berupa string.',
    'timezone' => ':attribute harus berupa zona waktu yang valid.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => ':attribute gagal diunggah.',
    'uppercase' => ':attribute harus menggunakan huruf kapital.',
    'url' => ':attribute harus berupa URL yang valid.',
    'ulid' => ':attribute harus berupa ULID yang valid.',
    'uuid' => ':attribute harus berupa UUID yang valid.',

    /*
    |----------------------------------------------------------------------
    | Pesan Validasi Kustom
    |----------------------------------------------------------------------
    |
    | Di sini kamu bisa menambahkan pesan validasi kustom untuk atribut
    | menggunakan konvensi "atribut.aturan" untuk menyebutkan pesannya.
    |
    */

    'custom' => [],

    /*
    |----------------------------------------------------------------------
    | Atribut Validasi Kustom
    |----------------------------------------------------------------------
    |
    | Di sini kamu bisa mengganti placeholder atribut dengan nama yang lebih
    | mudah dibaca, seperti "Alamat E-Mail" daripada "email".
    |
    */

    'attributes' => [],

];
