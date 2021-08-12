<?php

namespace App\Orchid\Layouts;

use App\Models\Post; // #todo Has Errors
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'posts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->width('200px')
                ->render(function (Post $post) {
                    return Link::make($post->title)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('description', 'Description')
                ->width('300px')
                ->render(function (Post $post) {
                    return Link::make($post->description)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('body', 'Body')
                ->render(function (Post $post) {
                    return Link::make($post->body)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('author', 'Author')
                ->render(function (Post $post) {
                    return Link::make($post->author)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('ac', 'Action')
                ->render(function (Post $post) {
                    return Link::make($post->author)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
