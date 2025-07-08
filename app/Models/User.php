<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles; // ✅ This line is critical

class User extends Authenticatable
{
    use Notifiable, HasRoles; // ✅ Use HasRoles here

    // ... other code
}
