<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use App\Models\Role;
class viewing extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\viewing::class;

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
        $agents = \App\Models\User::where('role_id',2)->pluck('name','id');
        $clients = \App\Models\User::where('role_id',3)->pluck('name','id');
        return [
            ID::make(__('ID'), 'id')->sortable(),
      
            Textarea::make('Location Link','location_link'),

            BelongsTo::make('Type')
            ->display(function($type){
                return $type->title;
            }),

            Select::make('Agent','agent_id')->options($agents),
            Select::make('Client','client_id')->options($clients),
            BelongsTo::make('Property'),
            Date::make('Date'),
            Boolean::make('assigned'),
            // BelongsTo::make('Agent', 'agent','\App\Nova\User')
            // ->display(function($user){
            //     return $user->name;
            // }),
            // Textarea::make('user', function(){
            //     // return dd($this);
            //     return 'asdd;;';
            // }),

            // BelongsTo::make('Client', 'property','\App\Nova\User'),

        ];
    }
    public static function relatableAgents(NovaRequest $request, $query)
{
  
    return $query->where('role_id', Role::where('title','agent')->first()->id);
}
    // public static function relatableUsers(NovaRequest $request, $query)
    // {
    //     return dd($request);
    //     if ($request->resource() == 'App\Nova\User') 
    //     return $query->where('role_id', Role::where('title','agent')->first()->id);

    // }
    // {
    //     $viaRelationship = $request->input('viaRelationship');
    //     // return dd($viaRelationship);
    //     // return dd($request->resourceId);
    //     return dd($request->route('field'));
    //     if ($viaRelationship == 'agent ') {
    //         return $query->where('role_id', Role::where('title','agent')->first()->id);

    //     } elseif ($viaRelationship == 'inactiveUsers') {
    //         return $query->last();
    //     }
    //  }
    // public static function relatableUsers(NovaRequest $request, $query)
    // {
    //     return $query->where('role_id', Role::where('title','agent')->first()->id);
    // }
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
