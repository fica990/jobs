<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    protected $guarded = [];

    const STATUS_UNPUBLISHED = 0;
    const STATUS_PUBLISHED = 1;
    const STATUS_SPAM = 2;

    public static function getStatusNames()
    {
        return [
            self::STATUS_UNPUBLISHED => 'Unpublished',
            self::STATUS_PUBLISHED => 'Published',
            self::STATUS_SPAM => 'Spam',
        ];
    }

    public static function getStatusName($statusId)
    {
        $names = self::getStatusNames();

        return (isset($names[$statusId])) ? $names[$statusId] : '';
    }
}
