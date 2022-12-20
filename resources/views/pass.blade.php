<?php

use Illuminate\Support\Facades\Hash;
$pass  = Hash::make('admin');
echo $pass;
