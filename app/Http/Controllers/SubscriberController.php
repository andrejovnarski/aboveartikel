<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\SubscriberRequest;
use Illuminate\Support\Facades\Redirect;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::paginate(5);
        return view('subscribers.index', compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubscriberRequest $request)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->email;

        if(!$subscriber->save()) return Redirect::back()->with('error', 'Something went wrong!!');
        return Redirect::back()->with('success', 'Thank you for joining us!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubscriberRequest $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        if (!$subscriber->delete()) {
            return redirect()->route('subscribers.index')->with('error', 'Subscriber could not be deleted!!');
        }
        return redirect()->route('subscribers.index')->with('success', 'Subscriber deleted!!');
    }
}
