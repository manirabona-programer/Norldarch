<?php

    namespace App\Models;

    use App\Utilities\Constants\Roles;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Passport\HasApiTokens;
    use Laratrust\Traits\LaratrustUserTrait;

    class User extends Authenticatable {
        use LaratrustUserTrait;
        use HasApiTokens, HasFactory, Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'name',
            'username',
            'email',
            'password',
        ];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];

        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        /**
         * User has many blog comments
         *
         * @return HasMany
         */
        public function blogComments(): HasMany {
            return $this->hasMany(BlogComment::class);
        }

        /**
         * User has many blog likes
         *
         * @return HasMany
         */
        public function blogLikes(): HasMany {
            return $this->hasMany(BlogLike::class);
        }

        /**
         * User has many blog dislikes
         *
         * @return HasMany
         */
        public function blogDislikes(): HasMany {
            return $this->hasMany(BlogDislike::class);
        }

        public function isAdministrator() {
            return $this->roles()->where('name', Roles::ADMIN)->exists();
        }
    }
