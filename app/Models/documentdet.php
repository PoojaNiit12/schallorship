<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentdet extends Model
{
    use HasFactory;
    protected $fillable = ['resultstatus','exams','board','passingyear','crmarkes','maxmarkes','persentage','examroll','disqualify','details','photo','sign'];
}
