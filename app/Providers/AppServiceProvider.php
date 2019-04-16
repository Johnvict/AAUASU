<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Iroyin;
use App\Material;
use App\Profile;
use Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $news = Iroyin::orderBy('updated_at', 'desc')->get();

        $appMaterials = Material::whereApproval('1')->get();
        if(count($appMaterials) > 0) {
            $Myarray = array();
            $materialArray = array();

            foreach ($appMaterials as $appMaterial) {
                //PUSHING THE VALUES OF THE OBJECT $appMaterials INTO THE ARRAY $Myarray
                array_push($Myarray, $appMaterial);

            }

            //THIS GETS THE INDEX OF ANY MEMBER OF $Myarray AT RANDOM
            if (count($Myarray) > 1) {
                $TwoIndices = array_rand($Myarray, 2);
                //THE ABOVE ONLY GETS ELEMENT INDEX FROM $Myarray
                //$materials RETURNS TWO INDICES FROM THE LIST OF ELEMENTS OF $Myarray
                for ($i = 0; $i <= 1; $i++) {
                    $materialArray[$i] = $Myarray[$TwoIndices[$i]];
                }
            } else {
                $OneIndex = array_rand($Myarray, 1);
                $materialArray[0] = $Myarray[$OneIndex];
            }

        }
        View::share(['news' => $news, 'materialArray' => $materialArray, 'appMaterials' => $appMaterials]);

        //View::share(['news' => $news]);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
