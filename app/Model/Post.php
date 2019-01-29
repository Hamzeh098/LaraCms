<?php

namespace App\Model;

use App\Category;
use App\Traits\commentable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use commentable;

    const PENDING = 0;
    const PUBLISHED = 1;
    const DRAFT = 2;
    const FATURE = 3;
    public $table ='posts';
    protected $primaryKey = 'post_id';
    protected $fillable
        = [
            'post_title',
            'post_content',
            'post_status',
            'post_slug',
            'post_view_count',
            'post_author',
        ];

    public function setPostSlugAttribute($value)
    {
        $this->attributes['post_slug'] = preg_replace('/\s+/', '-', $value);
    }

    public static function getStatuses(int $status = null)
    {
        $statuses = [
            self::PENDING   => 'بازبینی',
            self::PUBLISHED => 'منتشر شده',
            self::DRAFT     => 'پیش نویس',
            self::FATURE    => 'زمان بندی شده',
        ];
        if ( ! is_null($status) && in_array($status, array_keys($statuses))) {
            return $statuses[$status];
        }

        return $statuses;
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Model\Category::class,'category_post','post_id','category_id');
    }


}
