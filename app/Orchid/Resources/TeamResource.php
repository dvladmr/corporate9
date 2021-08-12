<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;
use App\Models\Team;

class TeamResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Team::class;

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
            Input::make('facebook')
                ->title('Facebook')
                ->required()
                ->placeholder('Enter facebook here'),
            Input::make('twitter')
                ->title('Twitter')
                ->required()
                ->placeholder('Enter twitter here'),
            Input::make('instagram')
                ->title('Instagram')
                ->required()
                ->placeholder('Enter instagram here'),
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
            TD::make('facebook'),
            TD::make('twitter'),
            TD::make('instagram'),

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
