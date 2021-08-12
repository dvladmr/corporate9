<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\TD;
use App\Models\Thought;

class ThoughtResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Thought::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('name')
                ->title('Name')
                ->required()
                ->placeholder('Enter name here'),
            Input::make('job')
                ->title('Job')
                ->required()
                ->placeholder('Enter job here'),
            Input::make('description')
                ->title('Description')
                ->required()
                ->placeholder('Enter description here'),
            Picture::make('star')
                ->title('Star')
                ->maxFileSize(1)
                ->targetRelativeUrl()
                ->required('star')
                ->horizontal(),
            Cropper::make('image')
                ->title('Image')
                ->maxFileSize(2)
                ->targetRelativeUrl()
                ->required('image')
                ->horizontal(),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('image'),
            TD::make('name'),
            TD::make('job'),
            TD::make('description'),
            TD::make('star'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
