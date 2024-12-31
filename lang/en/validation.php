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

    // 'accepted' => 'The :attribute must be accepted.',
    // 'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    // 'active_url' => 'The :attribute is not a valid URL.',
    // 'after' => 'The :attribute must be a date after :date.',
    // 'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    // 'alpha' => 'The :attribute must only contain letters.',
    // 'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    // 'alpha_num' => 'The :attribute must only contain letters and numbers.',
    // 'array' => 'The :attribute must be an array.',
    // 'ascii' => 'The :attribute must only contain single-byte alphanumeric characters and symbols.',
    // 'before' => 'The :attribute must be a date before :date.',
    // 'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    // 'between' => [
    //     'array' => 'The :attribute must have between :min and :max items.',
    //     'file' => 'The :attribute must be between :min and :max kilobytes.',
    //     'numeric' => 'The :attribute must be between :min and :max.',
    //     'string' => 'The :attribute must be between :min and :max characters.',
    // ],

    'accepted' => 'Le champ :attribute doit être accepté.',
'accepted_if' => 'Le champ :attribute doit être accepté lorsque :other est :value.',
'active_url' => 'Le champ :attribute n\'est pas une URL valide.',
'after' => 'Le champ :attribute doit être une date postérieure à :date.',
'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
'alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
'alpha_dash' => 'Le champ :attribute ne doit contenir que des lettres, des chiffres, des tirets et des underscores.',
'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et des chiffres.',
'array' => 'Le champ :attribute doit être un tableau.',
'ascii' => 'Le champ :attribute ne doit contenir que des caractères alphanumériques et des symboles d\'un octet.',
'before' => 'Le champ :attribute doit être une date antérieure à :date.',
'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
'between' => [
    'array' => 'Le champ :attribute doit contenir entre :min et :max éléments.',
    'file' => 'Le champ :attribute doit avoir une taille comprise entre :min et :max kilo-octets.',
    'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
    'string' => 'Le champ :attribute doit contenir entre :min et :max caractères.',
],


    // 'boolean' => 'The :attribute field must be true or false.',
    // 'confirmed' => 'The :attribute confirmation does not match.',
    // 'current_password' => 'The password is incorrect.',
    // 'date' => 'The :attribute is not a valid date.',
    // 'date_equals' => 'The :attribute must be a date equal to :date.',
    // 'date_format' => 'The :attribute does not match the format :format.',
    // 'decimal' => 'The :attribute must have :decimal decimal places.',
    // 'declined' => 'The :attribute must be declined.',
    // 'declined_if' => 'The :attribute must be declined when :other is :value.',
    // 'different' => 'The :attribute and :other must be different.',
    // 'digits' => 'The :attribute must be :digits digits.',
    // 'digits_between' => 'The :attribute must be between :min and :max digits.',
    // 'dimensions' => 'The :attribute has invalid image dimensions.',
    // 'distinct' => 'The :attribute field has a duplicate value.',
    // 'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    // 'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    // 'email' => 'The :attribute must be a valid email address.',
    // 'ends_with' => 'The :attribute must end with one of the following: :values.',
    // 'enum' => 'The selected :attribute is invalid.',
    // 'exists' => 'The selected :attribute is invalid.',
    // 'file' => 'The :attribute must be a file.',
    // 'filled' => 'The :attribute field must have a value.',

    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
'confirmed' => 'La confirmation du champ :attribute ne correspond pas.',
'current_password' => 'Le mot de passe est incorrect.',
'date' => 'Le champ :attribute n\'est pas une date valide.',
'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
'decimal' => 'Le champ :attribute doit avoir :decimal décimales.',
'declined' => 'Le champ :attribute doit être refusé.',
'declined_if' => 'Le champ :attribute doit être refusé lorsque :other est :value.',
'different' => 'Le champ :attribute et :other doivent être différents.',
'digits' => 'Le champ :attribute doit contenir :digits chiffres.',
'digits_between' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
'dimensions' => 'Le champ :attribute a des dimensions d\'image invalides.',
'distinct' => 'Le champ :attribute a une valeur en double.',
'doesnt_end_with' => 'Le champ :attribute ne doit pas se terminer par l\'un des éléments suivants : :values.',
'doesnt_start_with' => 'Le champ :attribute ne doit pas commencer par l\'un des éléments suivants : :values.',
'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
'ends_with' => 'Le champ :attribute doit se terminer par l\'un des éléments suivants : :values.',
'enum' => 'La valeur sélectionnée pour :attribute est invalide.',
'exists' => 'La valeur sélectionnée pour :attribute est invalide.',
'file' => 'Le champ :attribute doit être un fichier.',
'filled' => 'Le champ :attribute doit avoir une valeur.',


    // 'gt' => [
    //     'array' => 'The :attribute must have more than :value items.',
    //     'file' => 'The :attribute must be greater than :value kilobytes.',
    //     'numeric' => 'The :attribute must be greater than :value.',
    //     'string' => 'The :attribute must be greater than :value characters.',
    // ],
    // 'gte' => [
    //     'array' => 'The :attribute must have :value items or more.',
    //     'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
    //     'numeric' => 'The :attribute must be greater than or equal to :value.',
    //     'string' => 'The :attribute must be greater than or equal to :value characters.',
    // ],
    // 'image' => 'The :attribute must be an image.',
    // 'in' => 'The selected :attribute is invalid.',
    // 'in_array' => 'The :attribute field does not exist in :other.',
    // 'integer' => 'The :attribute must be an integer.',
    // 'ip' => 'The :attribute must be a valid IP address.',
    // 'ipv4' => 'The :attribute must be a valid IPv4 address.',
    // 'ipv6' => 'The :attribute must be a valid IPv6 address.',
    // 'json' => 'The :attribute must be a valid JSON string.',
    // 'lowercase' => 'The :attribute must be lowercase.',

    // 'lt' => [
    //     'array' => 'The :attribute must have less than :value items.',
    //     'file' => 'The :attribute must be less than :value kilobytes.',
    //     'numeric' => 'The :attribute must be less than :value.',
    //     'string' => 'The :attribute must be less than :value characters.',
    // ],
    // 'lte' => [
    //     'array' => 'The :attribute must not have more than :value items.',
    //     'file' => 'The :attribute must be less than or equal to :value kilobytes.',
    //     'numeric' => 'The :attribute must be less than or equal to :value.',
    //     'string' => 'The :attribute must be less than or equal to :value characters.',
    // ],
    // 'mac_address' => 'The :attribute must be a valid MAC address.',
    // 'max' => [
    //     'array' => 'The :attribute must not have more than :max items.',
    //     'file' => 'The :attribute must not be greater than :max kilobytes.',
    //     'numeric' => 'The :attribute must not be greater than :max.',
    //     'string' => 'The :attribute must not be greater than :max characters.',
    // ],

    // 'max_digits' => 'The :attribute must not have more than :max digits.',
    // 'mimes' => 'The :attribute must be a file of type: :values.',
    // 'mimetypes' => 'The :attribute must be a file of type: :values.',
    // 'min' => [
    //     'array' => 'The :attribute must have at least :min items.',
    //     'file' => 'The :attribute must be at least :min kilobytes.',
    //     'numeric' => 'The :attribute must be at least :min.',
    //     'string' => 'The :attribute must be at least :min characters.',
    // ],
    // 'min_digits' => 'The :attribute must have at least :min digits.',
    // 'missing' => 'The :attribute field must be missing.',
    // 'missing_if' => 'The :attribute field must be missing when :other is :value.',
    // 'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    // 'missing_with' => 'The :attribute field must be missing when :values is present.',
    // 'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    // 'multiple_of' => 'The :attribute must be a multiple of :value.',
    // 'not_in' => 'The selected :attribute is invalid.',
    // 'not_regex' => 'The :attribute format is invalid.',
    // 'numeric' => 'The :attribute must be a number.',

    // 'password' => [
    //     'letters' => 'The :attribute must contain at least one letter.',
    //     'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
    //     'numbers' => 'The :attribute must contain at least one number.',
    //     'symbols' => 'The :attribute must contain at least one symbol.',
    //     'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    // ],
    // 'present' => 'The :attribute field must be present.',
    // 'prohibited' => 'The :attribute field is prohibited.',
    // 'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    // 'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    // 'prohibits' => 'The :attribute field prohibits :other from being present.',
    // 'regex' => 'The :attribute format is invalid.',
    // 'required' => 'The :attribute field is required.',
    // 'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    // 'required_if' => 'The :attribute field is required when :other is :value.',
    // 'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    // 'required_unless' => 'The :attribute field is required unless :other is in :values.',
    // 'required_with' => 'The :attribute field is required when :values is present.',
    // 'required_with_all' => 'The :attribute field is required when :values are present.',
    // 'required_without' => 'The :attribute field is required when :values is not present.',
    // 'required_without_all' => 'The :attribute field is required when none of :values are present.',
    // 'same' => 'The :attribute and :other must match.',

    // 'size' => [
    //     'array' => 'The :attribute must contain :size items.',
    //     'file' => 'The :attribute must be :size kilobytes.',
    //     'numeric' => 'The :attribute must be :size.',
    //     'string' => 'The :attribute must be :size characters.',
    // ],
    // 'starts_with' => 'The :attribute must start with one of the following: :values.',
    // 'string' => 'The :attribute must be a string.',
    // 'timezone' => 'The :attribute must be a valid timezone.',
    // 'unique' => 'The :attribute has already been taken.',
    // 'uploaded' => 'The :attribute failed to upload.',
    // 'uppercase' => 'The :attribute must be uppercase.',
    // 'url' => 'The :attribute must be a valid URL.',
    // 'ulid' => 'The :attribute must be a valid ULID.',
    // 'uuid' => 'The :attribute must be a valid UUID.',

    'gt' => [
        'array' => 'Le champ :attribute doit contenir plus de :value éléments.',
        'file' => 'Le champ :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'string' => 'Le champ :attribute doit contenir plus de :value caractères.',
    ],
    'gte' => [
        'array' => 'Le champ :attribute doit contenir :value éléments ou plus.',
        'file' => 'Le champ :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'Le champ :attribute doit être en minuscules.',
    
    'lt' => [
        'array' => 'Le champ :attribute doit contenir moins de :value éléments.',
        'file' => 'Le champ :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'string' => 'Le champ :attribute doit contenir moins de :value caractères.',
    ],
    'lte' => [
        'array' => 'Le champ :attribute ne doit pas contenir plus de :value éléments.',
        'file' => 'Le champ :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le champ :attribute ne doit pas contenir plus de :max éléments.',
        'file' => 'Le champ :attribute ne doit pas être supérieur à :max kilo-octets.',
        'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le champ :attribute ne doit pas être supérieur à :max caractères.',
    ],
    
    'max_digits' => 'Le champ :attribute ne doit pas contenir plus de :max chiffres.',
    'mimes' => 'Le champ :attribute doit être un fichier de type :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type :values.',
    'min' => [
        'array' => 'Le champ :attribute doit contenir au moins :min éléments.',
        'file' => 'Le champ :attribute doit être d\'au moins :min kilo-octets.',
        'numeric' => 'Le champ :attribute doit être d\'au moins :min.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
    ],
    'min_digits' => 'Le champ :attribute doit contenir au moins :min chiffres.',
    'missing' => 'Le champ :attribute est manquant.',
    'missing_if' => 'Le champ :attribute est manquant lorsque :other est :value.',
    'missing_unless' => 'Le champ :attribute est manquant à moins que :other soit :value.',
    'missing_with' => 'Le champ :attribute est manquant lorsque :values est présent.',
    'missing_with_all' => 'Le champ :attribute est manquant lorsque :values sont présents.',
    'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
    'not_in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'not_regex' => 'Le format du champ :attribute est invalide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    
    'password' => [
        'letters' => 'Le champ :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le champ :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Le champ :attribute doit contenir au moins un chiffre.',
        'symbols' => 'Le champ :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'Le champ :attribute fourni a été compromis dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other ne soit parmi :values.',
    'prohibits' => 'Le champ :attribute interdit que :other soit présent.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour :values.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other est :value.',
    'required_if_accepted' => 'Le champ :attribute est obligatoire lorsque :other est accepté.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est parmi :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values sont présents.',
    'required_without' => 'Le champ :attribute est obligatoire lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire lorsque aucun de :values n\'est présent.',
    'same' => 'Le champ :attribute et :other doivent correspondre.',
    
    'size' => [
        'array' => 'Le champ :attribute doit contenir :size éléments.',
        'file' => 'Le champ :attribute doit avoir une taille de :size kilo-octets.',
        'numeric' => 'Le champ :attribute doit être :size.',
        'string' => 'Le champ :attribute doit contenir :size caractères.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'une des valeurs suivantes : :values.',
    'string' => 'Leattribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le champ :attribute a déjà été pris.',
    'uploaded' => 'Le chargement du fichier :attribute a échoué.',
    'uppercase' => 'Le champ :attribute doit être en majuscules.',
    'url' => 'Le champ :attribute doit être une URL valide.',
    'ulid' => 'Le champ :attribute doit être un ULID valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',
    
    

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
