<?php

use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;

if (!function_exists('app_name')) {

    /**
     * @return Repository|Application|mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

/*
|--------------------------------------------------------------------------
| Status = Activate | Deactivate
|--------------------------------------------------------------------------
*/

if (!function_exists('activate_status')) {

    /**
     * Activate status
     *
     * @return Repository|Application|mixed
     */
    function activate_status()
    {
        return config('hwa_helpers.status.activate');
    }
}

if (!function_exists('deactivate_status')) {

    /**
     * Deactivate status
     *
     * @return Repository|Application|mixed
     */
    function deactivate_status()
    {
        return config('hwa_helpers.status.deactivate');
    }
}

/*
|--------------------------------------------------------------------------
| Gender = Male | Female
|--------------------------------------------------------------------------
*/

if (!function_exists('gender_male')) {

    /**
     * Gender male
     *
     * @return Repository|Application|mixed
     */
    function gender_male()
    {
        return config('hwa_helpers.gender.male');
    }
}

if (!function_exists('gender_female')) {

    /**
     * Gender female
     *
     * @return Repository|Application|mixed
     */
    function gender_female()
    {
        return config('hwa_helpers.gender.female');
    }
}

/*
|--------------------------------------------------------------------------
| Paginate = page_limit
|--------------------------------------------------------------------------
*/

if (!function_exists('page_limit')) {

    /**
     * Paginate page limit
     *
     * @return Repository|Application|int|mixed
     */
    function page_limit()
    {
        return config('hwa_helpers.page_limit') ?: intval(12);
    }
}
