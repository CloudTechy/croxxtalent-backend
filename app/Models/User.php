<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Models\Cv;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The connection name for the model.
     *
     * @var string
     */
    //protected $connection = '';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'int'; // string

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'first_name', 
        'last_name', 
        'email', 
        'password',
        'phone',
        'company_name',
        'referral_user_id',
        'referral_code',
        'employer_org_name',
        'employer_org_core_services',
        'employer_org_size',
        'employer_org_contact',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
        'password_updated_at' => 'datetime',
        // 'last_login_at' => 'datetime',
    ];


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'is_active' => true,
    ];

    /**
     * The custom attributes that will be appened to the model results.
     *
     * @var array
     */
    protected $appends = [
        'name', 'display_name', 'name_initials', 'photo_url', 'cv', // 'full_name', 'salutation_name',
        'recent_audits', 'total_affiliates', 'permissions', 
    ];

    // Get Model Attributes

    public function getNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getDisplayNameAttribute()
    {
        if ($this->company_name) {
            return "{$this->first_name} {$this->last_name} ({$this->company_name})";
        }
        return "{$this->first_name} {$this->last_name}";
    }

    public function getNameInitialsAttribute()
    {
        return strtoupper("{$this->first_name[0]}{$this->last_name[0]}");
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo ? cloud_asset($this->photo) : null;
    }

    public function getCvAttribute()
    {
        if ($this->type === 'talent') {
            // $cv = $this->cv();
            $cv = Cv::where('user_id', $this->id)->first();
            if ($cv) {
                return $cv;
            }
        }
        return false;
    }

    public function getPermissionsAttribute()
    {
        $permissions = [];
        
        if ($this->role_id && $this->role) {
            if ($this->role->is_owner) {
                $permissions[] = 'owner';
            }
            if ($this->role->is_admin) {
                $permissions[] = 'admin';
            }
            $rolePermissions = $this->role->permissions;
            if (is_object($rolePermissions) && $rolePermissions->isNotEmpty()) {
                foreach($rolePermissions as $perm) {
                    $permissions[] = $perm['name'];
                }
            }
        }
        return $permissions;
    }

    // Set Model Attributes

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Model Relationship

    public function verifications()
    {
        return $this->morphMany('App\Models\Verification', 'verifiable');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }
    
    
    public function cv()
    {
        return $this->hasOne('App\Models\Cv', 'user_id', 'id');
    }

    /**
     * Get the user_settings for the user.
     */
    public function userSettings()
    {
        return $this->hasMany('App\Models\UserSetting', 'user_id', 'id');
    }

    /**
     * Get a user_setting for the user.
     */
    public function userSetting($key)
    {
        return $this->userSettings()->where('key', $key)->first();
    }

    public function userSettingValue($key)
    {
        $userSetting = $this->userSetting($key);
        if ($userSetting) {
            return $userSetting->value;
        }
        return null;
    }

    public function deleteUserSetting($key)
    {
        $userSetting = $this->userSetting($key);
        if ($userSetting) {
            return $userSetting->delete();
        }
    }


    /**
     * Get the audits for the user.
     */
    public function audits()
    {
        return $this->hasMany('App\Models\Audit', 'user_id', 'id');
    }

    public function getAuditsAttribute()
    {
        return $this->audits()
                    ->orderBy("created_at", "desc")
                    ->get();
    }

    public function getRecentAuditsAttribute()
    {
        return $this->audits()
                    ->orderBy("created_at", "desc")
                    ->offset(0)
                    ->limit(4)
                    ->get();
    }

    public function getTotalAffiliatesAttribute()
    {
        $user = $this;
        if ($this->type === 'affiliate') {
            $count = Cv::where( function ($query) use ($user) {
                $query->whereHas('user', function($sub_query) use ($user) {
                    $sub_query->where('referral_user_id', $user->id);        
                    return $sub_query;
                });
            })->count();
            return $count;
        }
        return false;
    }

}
