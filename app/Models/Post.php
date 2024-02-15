<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
    {
        public string $title;
        public string $excerpt;
        public string $date;
        public string $body;
        public string $slug;

    public function __construct(string $title, string $excerpt, string $date, string $body, string $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;

    }


    public static function all()
        {
            return collect(File::files(resource_path("posts")))
                ->map(function ($file){
                    return YamlFrontMatter::parseFile($file);

                })
                ->map(function ($document){

                    return new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug,
                    );
                });

        }
        public  static function find($slug)
        {
            return static::all()->firstWhere('slug', $slug);
//            if (!file_exists($path = resource_path("posts/{$slug}.html"))){
//                throw new ModelNotFoundException();
//            }
//           return cache()->remember("posts.{$slug}", 1200, fn()=> file_get_contents($path));

        }

    }