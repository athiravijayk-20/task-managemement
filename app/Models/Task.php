<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function project()
{
    return $this->belongsTo(Project::class);
}

public function assignedTo()
{
    return $this->belongsTo(User::class, 'assigned_to');
}

public function assignedBy()
{
    return $this->belongsTo(User::class, 'assigned_by');
}

}
