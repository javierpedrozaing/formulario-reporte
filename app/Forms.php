<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $fillable = [
        'ticket_number', 'customer_name', 'customer_address', 'customer_phone', 'contact_name', 'customer_position', 'customer_email', 'activity_type', 'pc_type',
        'pc_serial', 'date', 'initial_hour', 'final_hour', 'total_time', 'observations', 'customer_sign_name', 'customer_sign_position', 'customer_sign',
        'customer_date', 'ps_sign_name', 'ps_sign_position', 'custoer_sign', 'customer_date', 'ps_sign_name', 'ps_sign_position', 'ps_sign', 'ps_date', 'sercie_qualification', 'service_comments'
    ];
}
