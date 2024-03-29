<?php
    namespace App\Providers;
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\ServiceProvider;

    class ComposerServiceProvider extends ServiceProvider
    {
        /**
        * Register bindings in the container.
        *
        * @return void
        */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            [

            
            '/layouts/includes/dashboard',
            '/home', 
            '/profile', 
            '/courses',  
            '/show', 
            '/reportCard', 
            '/showtermcourses',
            '/layouts.includes.sidebar', 
            '/reportcards', 
            '/showtermreportcard',
            '/pdfshowtermreportcard',
            '/attendances/terms',
            '/attendances/days',
            'dailyactivity/activities',
            'discipline/records',
            'messages/messagetoteacher',
            'messages/sendmessagetoteacher',

            ], 
            
            'App\Http\ViewComposers\NavComposer'

        );
        

        // Using Closure based composers...
        //View::composer('dashboard', function ($view) {
            //
        //});
    }

     
    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
        //
    }
}