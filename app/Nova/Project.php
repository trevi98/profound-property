<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\TextArea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Number;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Title'),
            
            Text::make('Price', 'price', function () {
                return !is_null($this->price) ? number_format($this->price, 2, '.', ',') : 0;
            }),

            Text::make('Area'),
          
            Number::make('Stores'),

            Number::make('Appartments in store','appartments_in_store'),
            
            Number::make('Number of unites available','number_of_unites_available'),

            Textarea::make('Description'),
           
            Textarea::make('DLD'),
         
            Textarea::make('Location Link','location_link'),
         
            Date::make('Completion Date','completion_date'),
            
            Date::make('Starting Date','starting_date'), 
            

            Image::make('Cover Image','cover')->hideFromIndex()
            ->disk('userimages'),
            
            Image::make('Left View','left')->hideFromIndex()
            ->disk('userimages'),
            
            Image::make('Right View','Right')->hideFromIndex()
            ->disk('userimages'),
            
            Image::make('Front View','front')->hideFromIndex()
            ->disk('userimages'),
            
            Image::make('Back View','back')->hideFromIndex()
            ->disk('userimages'),
            

            File::make('Video')->nullable()->hideFromIndex()
            ->disk('userimages'),
           
            belongsTo::make('Developer'),
            
            belongsTo::make('Location'),
        
            Boolean::make('featured'),

            

        ];  
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
