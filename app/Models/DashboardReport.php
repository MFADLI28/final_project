<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardReport extends Model
{
    use HasFactory;
    protected $table ="dashboard_reports";
    protected $primaryKey ="id";
    protected $fillable =["name_institusi","name_project","name_am","hps","status_approve"];
}
