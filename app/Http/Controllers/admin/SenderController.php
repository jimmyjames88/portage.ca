<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use View;
use App\Sender;

class SenderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        view::share('cities', [
            ''                  =>      '',
            'Banff'             =>      'Banff',
            'Calgary'           =>      'Calgary',
            'Edmonton'          =>      'Edmonton',
            'Fort McMurray'     =>      'Fort McMurray' ,
            'Grande Prairie'    =>      'Grande Prairie',
            'High Level'        =>      'High Level',
            'Lethbridge'        =>      'Lethbridge',
            'Lloydminster'      =>      'Lloydminster',
            'Medicine Hat'      =>      'Medicine Hat',
            'Red Deer'          =>      'Red Deer',
            'Slave Lake'        =>      'Slave Lake',
            'Stettler'          =>      'Stettler',
            'Saskatoon'         =>      'Saskatoon',
            'Regina'            =>      'Regina',
            'Vancouver'         =>      'Vancouver',
            'Winnipeg'          =>      'Winnipeg'
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senders = Sender::whereDate('latestDeliveryDate', '>', now())->paginate(10);
        return view('admin.senders.index', compact('senders'));
    }


    public function archives(){
        $senders = Sender::whereDate('latestDeliveryDate', '<', now())->paginate(10);
        return view('admin.senders.archives', compact('senders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sender = new Sender;
        return view('admin.senders.create', compact('sender'));
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

        $sender = Sender::create($data);

        session()->flash('message', 'You have successfully created a new Sender');
        return redirect('/admin/senders/' . $sender->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sender = Sender::find($id);
        $cities = [
            'Banff'             =>      'Banff',
            'Calgary'           =>      'Calgary',
            'Edmonton'          =>      'Edmonton',
            'Fort McMurray'     =>      'Fort McMurray' ,
            'Grande Prairie'    =>      'Grande Prairie',
            'High Level'        =>      'High Level',
            'Lethbridge'        =>      'Lethbridge',
            'Lloydminster'      =>      'Lloydminster',
            'Medicine Hat'      =>      'Medicine Hat',
            'Red Deer'          =>      'Red Deer',
            'Slave Lake'        =>      'Slave Lake',
            'Stettler'          =>      'Stettler',
            'Saskatoon'         =>      'Saskatoon',
            'Regina'            =>      'Regina',
            'Vancouver'         =>      'Vancouver',
            'Winnipeg'          =>      'Winnipeg'
        ];
        return view('admin.senders.show', compact('sender', 'cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sender = Sender::find($id);
        return view('admin.senders.edit', compact('sender'));
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

        $sender = Sender::where('id', $id)
                            ->update($data);

        session()->flash('message', 'Your changes have been saved');
        return redirect('/admin/senders/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sender::destroy($id);
        session()->flash('message', 'Sender #' . $id . ' has been deleted');
        return redirect('/admin/senders');
    }

    // delete confirmation
    public function delete($id){
        return view('admin.senders.delete', compact('id'));
    }
}
