<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todolist extends Model
{
    use SoftDeletes; // 软删除 trait，更新 deleted_at 字段
    // protected $fillable = ['id', ……]; // 允许赋值的字段
    protected $guarded = []; // 不允许，和运行只能同时存在一个
}
