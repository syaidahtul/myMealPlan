<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute mesti diterima.',
    'accepted_if' => ':attribute mesti diterima bila :other adalah :value.',
    'active_url' => ':attribute bukan URL yang sah.',
    'after' => ':attribute adalah tarikh selepas hari ini.',
    'after_or_equal' => ':attribute adalah tarikh selepas atau pada :date.',
    'alpha' => ':attribute hendaklah mengandungi huruf sahaja.',
    'alpha_dash' => ':attribute hendaklah mengandungi huruf, nombor, sengkang dan garis bawah.',
    'alpha_num' => ':attribute hendaklah mengandungi huruf dan nombor.',
    'array' => ':attribute must be an array.',
    'before' => ':attribute adalah tarikh sebelum atau pada hari ini.',
    'before_or_equal' => ':attribute adalah tarikh sebelum atau pada :date.',
    'between' => [
        'numeric' => ':attribute mestilah diantara :min dan :max.',
        'file' => ':attribute mestilah diantara :min dan :max kilobytes.',
        'string' => ':attribute mestilah diantara :min dan :max karakter.',
        'array' => ':attribute mestilah berada diantara :min dan :max items.',
    ],
    'boolean' => ':attribute medan mestilah benar atau salah.',
    'confirmed' => ':attribute pengesahan tidak sepadan.',
    'current_password' => 'Kata laluan tidak sepadan.',
    'date' => ':attribute is not a valid date.',
    'date_equals' => ':attribute must be a date equal to :date.',
    'date_format' => ':attribute does not match the format :format.',
    'different' => ':attribute and :other must be different.',
    'digits' => ':attribute mempunyai :digits angka.',
    'digits_between' => ':attribute mestilah antara :min dan :max angka.',
    'dimensions' => ':attribute has invalid image dimensions.',
    'distinct' => ':attribute field has a duplicate value.',
    'email' => ':attribute must be a valid email address.',
    'ends_with' => ':attribute must end with one of the following: :values.',
    'exists' => ':attribute tidak wujud.',
    'file' => ':attribute must be a file.',
    'filled' => ':attribute field must have a value.',
    'gt' => [
        'numeric' => ':attribute must be greater than :value.',
        'file' => ':attribute must be greater than :value kilobytes.',
        'string' => ':attribute must be greater than :value characters.',
        'array' => ':attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute must be greater than or equal :value.',
        'file' => ':attribute must be greater than or equal :value kilobytes.',
        'string' => ':attribute must be greater than or equal :value characters.',
        'array' => ':attribute must have :value items or more.',
    ],
    'image' => ':attribute must be an image.',
    'in' => 'selected :attribute tidak wujud.',
    'in_array' => ':attribute field does not exist in :other.',
    'integer' => ':attribute must be an integer.',
    'ip' => ':attribute must be a valid IP address.',
    'ipv4' => ':attribute must be a valid IPv4 address.',
    'ipv6' => ':attribute must be a valid IPv6 address.',
    'json' => ':attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => ':attribute must be less than :value.',
        'file' => ':attribute must be less than :value kilobytes.',
        'string' => ':attribute must be less than :value characters.',
        'array' => ':attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute must be less than or equal :value.',
        'file' => ':attribute must be less than or equal :value kilobytes.',
        'string' => ':attribute must be less than or equal :value characters.',
        'array' => ':attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute must not be greater than :max.',
        'file' => ':attribute must not be greater than :max kilobytes.',
        'string' => ':attribute must not be greater than :max characters.',
        'array' => ':attribute must not have more than :max items.',
    ],
    'mimes' => ':attribute must be a file of type: :values.',
    'mimetypes' => ':attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute must be at least :min.',
        'file' => ':attribute must be at least :min kilobytes.',
        'string' => ':attribute must be at least :min characters.',
        'array' => ':attribute must have at least :min items.',
    ],
    'multiple_of' => ':attribute must be a multiple of :value.',
    'not_in' => ':attribute tidak wujud.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute adalah angka.',
    'password' => 'Kata laluan tidak sah.',
    'present' => ':attribute field must be present.',
    'regex' => ':attribute format is invalid.',
    'required' => ':attribute diperlukan.',
    'required_if' => ':attribute diperlukan sekiranya :other adalah :value.',
    'required_unless' => ':attribute diperlukan kecuali :other adalah :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'prohibited' => ':attribute field is prohibited.',
    'prohibited_if' => ':attribute field is prohibited when :other is :value.',
    'prohibited_unless' => ':attribute field is prohibited unless :other is in :values.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'numeric' => ':attribute must be :size.',
        'file' => ':attribute must be :size kilobytes.',
        'string' => ':attribute must be :size characters.',
        'array' => ':attribute must contain :size items.',
    ],
    'starts_with' => ':attribute perlu bermula dengan : :values.',
    'string' => ':attribute must be a string.',
    'timezone' => ':attribute must be a valid timezone.',
    'unique' => ':attribute telah didaftarkan.',
    'uploaded' => ':attribute gagal dimuatnaik.',
    'url' => ':attribute must be a valid URL.',
    'uuid' => ':attribute must be a valid UUID.',

    'attributes' => [
        'name' => 'Nama',
        'email' => 'Email',
        'password' => 'Kata Laluan',
        'identity_no' => 'No Kad Pengenalan Baru',
        'remark' => 'Catatan',
    ],

];
