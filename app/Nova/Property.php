<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use App\Models\Role;
use Waynestate\Nova\CKEditor4Field\CKEditor;

class Property extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Property::class;

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

            Textarea::make('Title'),
            
            Textarea::make('Property name','property_name'),

            CkEditor::make('Description'),

            Textarea::make('Location link','location_link'),
            
            Textarea::make('Permit Number','permit_number'),
            
            Textarea::make('Category'),

            Number::make('Price'),
            
            Number::make('Number of bathrooms', 'bathrooms'),
            
            Number::make('Number of bedrooms', 'bedrooms'),
            
            Number::make('Area'),
            
            /////////Belongs To////////////
            
            BelongsTo::make('Agent', 'user','\App\Nova\User'),
          
            BelongsTo::make('Location'),
         
            BelongsTo::make('Type'),

            hasMany::make('Property images','property_imgs','\App\Nova\Propertyimg'),
          
            hasMany::make('Property plans','property_plans'),
          
            hasMany::make('Property 3Ds','property_3ds'),
           
            hasMany::make('Near locations','near_locations'),
           
            hasMany::make('Viewings','viewings'),
            
            Image::make('Cover Image')->hideFromIndex()
            ->disk('public')->path('images'),

            File::make('Video')->nullable()->hideFromIndex()
            ->disk('public')->path('images'),
            
            Boolean::make('Featured'),

            Boolean::make('Sold'),
            
            
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
    public static function relatableUsers(NovaRequest $request, $query)
    {
        return $query->where('role_id', Role::where('title','agent')->first()->id);
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

