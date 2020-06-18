<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\JobOffer
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $email
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\JobOffer whereUpdatedAt($value)
 */
	class JobOffer extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

