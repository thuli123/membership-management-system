<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
    
    
    'RegistrationsAdmin'=> [

        'driver'=>'eloquent',
        'model'=>App\Models\RegistrationsAdmin::class,
    ],
    'Assessors'=> [

        'driver'=>'eloquent',
        'model'=>App\Models\Assessors::class,
    ],

    'FinanceTeam'=>[

        'driver'=>'eloquent',
        'model'=>App\Models\FinanceTeam::class,
    
    
    ],
    'CEO'=>[

        'driver'=>'eloquent',
        'model'=>App\Models\CEO::class,
    
    
    ],
    'MemberRegistration'=>[

        'driver'=>'eloquent',
        'model'=>App\Models\MemberRegistration::class,
    
    
    ],
    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
         'RegistrationsAdmin'=>[


            'driver' => 'session',
            'provider' => 'RegistrationsAdmin',

         ],

    



         'Assessors'=>[


            'driver' => 'session',
            'provider' => 'Assessors',

         ],



         'FinanceTeam'=>[


            'driver' => 'session',
            'provider' => 'FinanceTeam',

         ],
         'CEO'=>[


            'driver' => 'session',
            'provider' => 'CEO',

         ],

         'MemberRegistration'=>[


            'driver' => 'session',
            'provider' => 'MemberRegistration',

         ],
    ],



    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    
    'RegistrationsAdmin'=>[

           'driver'=>'eloquent',
           'model'=>App\Models\RegistrationsAdmin::class,


    ],


    'Assessors'=>[

        'driver'=>'eloquent',
        'model'=>App\Models\Assessors::class,


 ],
 'FinanceTeam'=>[

    'driver'=>'eloquent',
    'model'=>App\Models\FinanceTeam::class,


],
'CEO'=>[

    'driver'=>'eloquent',
    'model'=>App\Models\CEO::class,

    
    ],

    'MemberRegistration'=>[

        'driver'=>'eloquent',
        'model'=>App\Models\MemberRegistration::class,
    
        
        ],
],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    
        'RegistrationsAdmin'=>[

            'driver'=>'eloquent',
            'model'=>App\Models\RegistrationsAdmin::class,
 
 
     ],
     'Assessors'=>[

        'driver'=>'eloquent',
        'model'=>App\Models\Assessors::class,


 ],
 'FinanceTeam'=>[

    'driver'=>'eloquent',
    'model'=>App\Models\FinanceTeam::class,


],
'CEO'=>[

    'driver'=>'eloquent',
    'model'=>App\Models\CEO::class,

    
    ],
    'MemberRegistration'=>[

        'driver'=>'eloquent',
        'model'=>App\Models\MemberRegistration::class,
    
        
        ],
    
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
