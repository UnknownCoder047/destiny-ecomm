<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
	public function import()
	{
		$file = Storage::disk("local")->get("assets/anime_ka_file.json");
		$file = json_decode($file, true);
		foreach ($file as $key => $value) {
			if (Anime::where("name", $value['title'])->first()) {
				dump('Anime Exist');
				continue;
			}
			$category = Category::where("name", $value["type"])->first();
			if ($category)
				$category_id = $category->id;
			else {
				$category_created = Category::create([
					"name" => $value["type"],
					'slug' => Str::slug($value['type']),
				]);
				$category_id = $category_created->id;
			}

			$tags_id = [];
			foreach ($value['tags'] as $tag) {
				$tag_id = Tag::where("name", $tag)->first();
				if ($tag_id)
					$tags_id[] = $tag_id->id;
				else {
					$tag_created = Tag::create([
						"name" => $tag,
						'slug' => Str::slug($tag),
					]);
					$tags_id[] = $tag_created->id;
				}
			}
			$anime = Anime::create([
				"name" => $value["title"],
				"slug" => Str::slug($value["title"]),
				'category_id' => $category_id,
				'status' => $value['status'],
				'season' => $value['animeSeason']['season'],
				'episodes' => $value['episodes'],
				'year' => $value['animeSeason']['year'],
				'image' => $value['picture'],
				'thumbnail' => $value['thumbnail'],
			]);
			$anime->tags()->attach($tags_id);
			dump('Anime Created');
		}
	}
}
