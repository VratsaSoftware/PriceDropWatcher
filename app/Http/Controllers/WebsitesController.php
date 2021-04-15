<?php
namespace App\Http\Controllers;

use App\Cron_setting;
use App\Http\Requests\WebsiteValidateRequest;
use App\Website;
use Illuminate\Http\Request;

class WebsitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $websites = Website::latest()->paginate(5);
        return view('admin.websites.index', compact('websites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cron_settings = Cron_setting::all();
        return view('admin.websites.create',compact('cron_settings'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebsiteValidateRequest $request)
    {
        $data=$request->except('_token');
        Website::insert($data);
        return redirect()->route('websites.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        $cron_settings=Cron_setting::all();
        return view('admin.websites.edit',
            [
                'cron_settings'=>$cron_settings,
                'website'=>$website
                ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(WebsiteValidateRequest $request, Website $website)
    {
        $website->update($request->all());
        return redirect()->route('websites.index')
            ->with('success', 'The website was edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        $website->delete();
        return redirect()->route('websites.index')
            ->with('success', 'Website was deleted!');
    }
}
