<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogPost
 *
 * @package App\Modedls
 *
 * @property \App\Models\BlogCategory $category
 * @property \App\Models\Users        $user
 * @property string                   $title
 * @property string                   $slug
 * @property string                   $content_html
 * @property string                   $content_raw
 * @property string                   $excerpt
 * @property string                   $published_at
 * @property boolean                  $is_published
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */

class BlogPost extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'excerpt',
        'content_raw',
        'is_published',
        'published_at',
        'user_id',
    ];

    public function category()
    {
        // Статья принадлежит категории
        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Автор стаьи
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // Статья принадлежит пользователю
        return $this->belongsTo(User::class);
    }
}
