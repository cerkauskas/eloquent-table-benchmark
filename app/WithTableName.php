<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\WithTableName
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\WithTableName whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WithTableName whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\WithTableName whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WithTableName extends Model
{
    protected $table = 'with_table_names';
}
