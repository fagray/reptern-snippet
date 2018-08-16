<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Reptern\Domain\Group\GroupRepository;
use Reptern\Domain\Contact\ContactRepository;

class ContactsController extends Controller
{
    private $group;
    private $contact;

    public function __construct(GroupRepository $group, ContactRepository $contact)
    {
        $this->middleware('auth');
        $this->group = $group;
        $this->contact = $contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = $this->group->getAll();
        return view('contacts.create',compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatarImgName = $this->contact->generateAvatar($request->contact_name);
        $request->merge(['contact_avatar' => $avatarImgName]);
        $this->contact->create($request->all());
        session()->flash('status','Contact has been saved!');
        return redirect()->route('home');
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
        $contact = $this->contact->find($id);
        $groups = $this->group->getAll();
        return view('contacts.edit', compact('contact','groups'));
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
        $this->contact->update($request->all(), $id);
        session()->flash('status','Contact has been updated!');
        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contact->find($id)->delete();
        session()->flash('status','Contact has been deleted!');
        return redirect()->route('home');
    }
}
