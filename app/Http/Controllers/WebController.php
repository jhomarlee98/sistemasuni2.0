<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\WebRepository;


class WebController extends Controller
{
    public function __construct(WebRepository $data){
        $this->data=$data;
    }

    public function index()
    {
        $sliders=$this->data->listSliders();
        $sliders_count=$this->data->sliderCount();

        $services=$this->data->listServices();
        $services_count=$this->data->serviceCount();

        $specialities=$this->data->listSpecialities(7,null);

        return view('inicio')->with(compact('sliders','sliders_count','specialities','services','services_count'));
    }

    public function specilities($nick=null){
        if (!empty($nick)){
            $speciality_count=$this->data->nickspecialityCount($nick);
            $specialities=$this->data->nickSpecialities($nick);
            $curses=$this->data->list_curseSpeciality($nick);
            //return view('speciality')->with(compact('specialities','speciality_count'));
            return view('speciality')->with(compact('specialities','speciality_count','curses'));
        }else{
            $speciality_count=$this->data->specialityCount();
            $specialities=$this->data->listSpecialities(null,null);
            return view('specialities')->with(compact('specialities','speciality_count'));
        }

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
