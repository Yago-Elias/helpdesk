<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Stancl\Tenancy\Database\Concerns\BelongsToPrimaryModel;

#[Fillable(['ticket_id', 'original_filename', 'stored_filename', 'mime_type', 'size_bytes', 'uploaded_by'])]
class Attachment extends Model
{
    use BelongsToPrimaryModel;

    public function getRelationshipToPrimaryModel(): string
    {
        return 'ticket';
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    public function uploadedBy(): BelongsTo
    {
        return $this->belogsTo(User::class, 'uploaded_by', 'id');
    }
}
