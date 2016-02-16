<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Watson\Sitemap\Facades\Sitemap;
use App\Http\Requests;
use Illuminate\Support\Facades\Lang;
use App\Http\Controllers\Controller;

class SitemapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = ['lt', 'pl', 'ru'];

        Sitemap::addTag('http://' . env('WEB'), date('c', time()), 'monthly', '1');
        foreach($languages as $language) {
            Sitemap::addTag('http://' . env(strtoupper($language).'_WEB') . '/' . Lang::get('routes.services', [], $language), date('c', time()), 'monthly', '1');
            Sitemap::addTag('http://' . env(strtoupper($language).'_WEB') . '/' . Lang::get('routes.seo', [], $language), date('c', time()), 'monthly', '1');
            Sitemap::addTag('http://' . env(strtoupper($language).'_WEB') . '/' . Lang::get('routes.design', [], $language), date('c', time()), 'monthly', '1');
            Sitemap::addTag('http://' . env(strtoupper($language).'_WEB') . '/' . Lang::get('routes.programming', [], $language), date('c', time()), 'monthly', '1');
            Sitemap::addTag('http://' . env(strtoupper($language).'_WEB') . '/' . Lang::get('routes.contacts', [], $language), date('c', time()), 'monthly', '1');
            Sitemap::addTag('http://' . env(strtoupper($language).'_WEB'), date('c', time()), 'monthly', '1');
        }
        return Sitemap::render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
