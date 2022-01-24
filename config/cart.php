<?php

return [

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Gross price as base price
    |--------------------------------------------------------------------------
    |
    | This default value is used to select the method to calculate prices and taxes
    | If true the item price is managed as a gross price, so taxes will be calculated by separation/exclusion
    |
    */

    'calculator' => \Gloudemans\Shoppingcart\Calculation\DefaultCalculator::class,

    /*
    |--------------------------------------------------------------------------
=======
>>>>>>> 76b1d5f56409c0b0ba153904fadbb1da0f5ab1bb
    | Default tax rate
    |--------------------------------------------------------------------------
    |
    | This default tax rate will be used when you make a class implement the
    | Taxable interface and use the HasTax trait.
    |
    */

<<<<<<< HEAD
    'tax' => 21,
=======
    'tax' => 0,
>>>>>>> 76b1d5f56409c0b0ba153904fadbb1da0f5ab1bb

    /*
    |--------------------------------------------------------------------------
    | Shoppingcart database settings
    |--------------------------------------------------------------------------
    |
    | Here you can set the connection that the shoppingcart should use when
    | storing and restoring a cart.
    |
    */

    'database' => [

        'connection' => null,

        'table' => 'shoppingcart',

    ],

    /*
    |--------------------------------------------------------------------------
    | Destroy the cart on user logout
    |--------------------------------------------------------------------------
    |
    | When this option is set to 'true' the cart will automatically
    | destroy all cart instances when the user logs out.
    |
    */

    'destroy_on_logout' => false,

    /*
    |--------------------------------------------------------------------------
    | Default number format
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | This defaults will be used for the formatted numbers if you don't
=======
    | This defaults will be used for the formated numbers if you don't
>>>>>>> 76b1d5f56409c0b0ba153904fadbb1da0f5ab1bb
    | set them in the method call.
    |
    */

    'format' => [

        'decimals' => 2,

        'decimal_point' => '.',

<<<<<<< HEAD
        'thousand_separator' => ',',

    ],

];
=======
        'thousand_seperator' => ','

    ],

];
>>>>>>> 76b1d5f56409c0b0ba153904fadbb1da0f5ab1bb
