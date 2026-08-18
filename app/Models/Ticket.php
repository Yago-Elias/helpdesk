<?php

namespace App\Models;

use App\Models\Attachments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory, BelongsToTenant;

    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class);
    }
}
