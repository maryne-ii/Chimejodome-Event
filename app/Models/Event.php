<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    // public function users() : BelongsToMany{
    //     return $this->belongsToMany(User::class);
    // }
    public function organizes(): BelongsToMany{
        return $this->belongsToMany(Event::class,"user_organize_event");
    }
    public function joins(): BelongsToMany{
        return $this->belongsToMany(Event::class,"user_join_event");
    }
    public function staffConfirm(): BelongsTo{
        return $this->belongsTo(User::class);
    } 
    

    public function kanbanNotes() : HasMany{
        return $this->hasMany(KanbanNote::class);
    }
}
