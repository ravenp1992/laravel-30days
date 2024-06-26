<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperJob
 */
class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    // protected $fillable = ['title', 'salary'];
    // public static function all(): array
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Director',
    //             'salary' => '$50,000',
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Programmer',
    //             'salary' => '$10,000',
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Teacher',
    //             'salary' => '$40,000',
    //         ],
    //     ];
    // }
    //
    // public static function find(int $id): ?array
    // {
    //     $job = Arr::first(Job::all(), fn ($job) => $job['id'] === $id);
    //
    //     if (! $job) {
    //         abort(404, 'Resource not found!');
    //     }
    //
    //     return $job;
    // }
}
