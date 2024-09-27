<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // 指定表名
    protected $table = 'student';

    // 允许批量赋值的字段
    protected $fillable = [
        'name',
        'age',
        'gender',
        'hobby'
    ];

    // 数据表的主键字段（默认是 'id'，如果和默认一致可以省略）
    protected $primaryKey = 'id';

    // 自动递增主键的类型
    protected $keyType = 'int';

    // 指定主键是否为自增（默认是 true）
    public $incrementing = true;

    // 是否使用 Laravel 的时间戳（created_at 和 updated_at）
    public $timestamps = true;

    // 如果你的 created_at 和 updated_at 字段不是默认的，可以在这里指定
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
