<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use View;
use App\Porter;


class PorterController extends Controller
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
        $porters = Porter::whereDate('departure', '>', now())->paginate(10);
        return view('admin.porters.index', compact('porters'));
    }

    public function archives(){
        $porters = Porter::whereDate('departure', '<', now())->paginate(10);
        return view('admin.porters.archives', compact('porters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $porter = new Porter;
        return view('admin.porters.create', compact('porter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        $porter = Porter::create($data);

        session()->flash('message', 'You have successfully created a new Porter');
        return redirect('/admin/porters/' . $porter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $porter = Porter::find($id);

        

        return view('admin.porters.show', compact('porter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $porter = Porter::find($id);
        return view('admin.porters.edit', compact('porter'));
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

        $data = $request->except(['_token', '_method']);

        $porter = Porter::where('id', $id)
                            ->update($data);

        session()->flash('message', 'Your changes have been saved');
        return redirect('/admin/porters/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Porter::destroy($id);
        session()->flash('message', 'Porter #' . $id . ' has been deleted');
        return redirect('/admin/porters');
    }

    // delete confirmation
    public function delete($id){
        return view('admin.porters.delete', compact('id'));
    }
}
