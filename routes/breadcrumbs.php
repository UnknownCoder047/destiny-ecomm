<?php

use App\Models\Anime;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail): void {
  $trail->push('Home', route('home'));
});
Breadcrumbs::for('anime.index', function (BreadcrumbTrail $trail): void {
  $trail->parent('home');
  $trail->push('Animes', route('anime.index'));
});

Breadcrumbs::for('anime.show', function (BreadcrumbTrail $trail, $slug): void {
  $trail->parent('anime.index');

  $trail->push(slugify($slug), route('anime.show', ['anime' => $slug]));
});
Breadcrumbs::for('anime.watch', function (BreadcrumbTrail $trail, $slug): void {
  $trail->parent('anime.index');

  $trail->push(slugify($slug), route('anime.watch', ['anime' => $slug]));
});
