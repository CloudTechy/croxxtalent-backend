<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class Cv extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cvs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'user_id',
        'job_title_id',
        'first_name',
        'last_name',
        'other_name',
        'gender',
        'date_of_birth',
        'class',
        'career_summary',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'state_id',
        'country_code',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth' => 'datetime:Y-m-d',
        'is_published' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'name', 'name_initials', 'photo_url', 'photo_url_cors', 'photo_data_url',
        'job_title_name', 'country_name', 'state_name',
        'work_experiences', 'educations', 'certifications', 'skills', 'hobbies',
        'awards', 'languages', 'references', 'progress', 'experience_years', 'experience_years_suffix',
        'pdf_url', 'pdf_download_url', 'import_linkedin_url'
    ];

    // Get Custom Attributes

    public function getNameAttribute()
    {
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
    
    public function getPhotoUrlCorsAttribute()
    {
        if ($this->photo) {
            return URL::signedRoute('api.links.image_cors_proxy', ['image_url' => cloud_asset($this->photo)]);
        } else {
            return null;
        }
    }

    public function getPhotoDataUrlAttribute()
    {
        if ($this->photo) {
            $image_url = cloud_asset($this->photo);
            // call custom helper
            $base64_image = image_to_data_url($image_url);
            return $base64_image;
        } else {
            return null;
        }
    }

    public function getJobTitleNameAttribute()
    {
        return $this->job_title_id ? $this->jobTitle->name : null;
    }
    
    public function getCountryNameAttribute()
    {
        return $this->country_code ? $this->country->name : null;
    }

    public function getStateNameAttribute()
    {
        return $this->state_id ? $this->state->name : null;
    }

    public function getWorkExperiencesAttribute()
    {
        return $this->workExperiences()
                    ->orderBy("start_date", "desc")
                    ->get();
    }

    public function getEducationsAttribute()
    {
        return $this->educations()
                    ->orderBy("start_date", "desc")
                    ->get();
    }

    public function getCertificationsAttribute()
    {
        return $this->certifications()
                    ->orderBy("start_date", "desc")
                    ->get();
    }

    public function getSkillsAttribute()
    {
        return $this->skills()
                    ->orderBy("created_at", "asc")
                    ->get();
    }

    public function getHobbiesAttribute()
    {
        return $this->hobbies()
                    ->orderBy("name", "asc")
                    ->get();
    }

    public function getAwardsAttribute()
    {
        return $this->awards()
                    ->orderBy("date", "desc")
                    ->get();
    }

    public function getLanguagesAttribute()
    {
        return $this->languages()
                    ->orderBy("created_at", "asc")
                    ->get();
    }

    public function getReferencesAttribute()
    {
        return $this->references()
                    ->orderBy("name", "asc")
                    ->get();
    }

    public function getProgressAttribute()
    {
        $progress = 0;
        if ($this->phone) {
            $progress += 20;
        }
        if ($this->workExperiences()->count() >= 1) {
            $progress += 10;
        }
        if ($this->educations()->count() >= 1) {
            $progress += 10;
        }
        if ($this->certifications()->count() >= 1) {
            $progress += 10;
        }
        if ($this->skills()->count() >= 1) {
            $progress += 10;
        }
        if ($this->hobbies()->count() >= 1) {
            $progress += 10;
        }
        if ($this->awards()->count() >= 1) {
            $progress += 10;
        }
        if ($this->languages()->count() >= 1) {
            $progress += 10;
        }
        if ($this->references()->count() >= 1) {
            $progress += 10;
        }
        return $progress;
    }

    public function getExperienceYearsAttribute()
    {
        $oldestWorkExperience = $this->workExperiences()->oldest("start_date")->first();
        if ($oldestWorkExperience) {
            $oldest_start_date = new Carbon($oldestWorkExperience->start_date);
            $now_date = Carbon::now();
            $diff = $oldest_start_date->diffInYears($now_date);
            return $diff;
        }
        return 0;
    }

    public function getExperienceYearsSuffixAttribute()
    {
        if ($this->experience_years == 1) {
            return "Year";
        } else {
            return "Years";
        }
    }

    public function getPdfUrlAttribute()
    {
        return URL::signedRoute('api.links.cvs.download', ['id' => $this->id]);
    }

    public function getPdfDownloadUrlAttribute()
    {
        return URL::signedRoute('api.links.cvs.download', ['id' => $this->id, 'download' => 1]);
    }

    public function getImportLinkedinUrlAttribute()
    {
        return URL::temporarySignedRoute(
            'api.links.cvs.import_linkedin', now()->addMinutes(2880), ['id' => $this->id]
        );
    }

    // Set Model Attributes

    public function setDateOfBirthAttribute($value)
    {
        if ($value) {
            $value = date("Y-m-d", strtotime($value));
        }
        $this->attributes['date_of_birth'] = $value;
    }

    public function setPhoneAttribute($value)
    {
        if ($value) {
            $value = preg_replace("/ /", '', $value);
        }
        $this->attributes['phone'] = $value;
    }

    // Model Relationships

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function jobTitle()
    {
        return $this->belongsTo('App\Models\JobTitle', 'job_title_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_code', 'code');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State', 'state_id', 'id');
    }

    public function workExperiences()
    {
        return $this->hasMany('App\Models\CvWorkExperience', 'cv_id', 'id');
    }

    public function educations()
    {
        return $this->hasMany('App\Models\CvEducation', 'cv_id', 'id');
    }

    public function certifications()
    {
        return $this->hasMany('App\Models\CvCertification', 'cv_id', 'id');
    }

    public function skills()
    {
        return $this->hasMany('App\Models\CvSkill', 'cv_id', 'id');
    }

    public function hobbies()
    {
        return $this->hasMany('App\Models\CvHobby', 'cv_id', 'id');
    }

    public function awards()
    {
        return $this->hasMany('App\Models\CvAward', 'cv_id', 'id');
    }

    public function languages()
    {
        return $this->hasMany('App\Models\CvLanguage', 'cv_id', 'id');
    }

    public function references()
    {
        return $this->hasMany('App\Models\CvReference', 'cv_id', 'id');
    }
}
