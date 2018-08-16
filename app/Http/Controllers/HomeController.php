<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Reptern\Domain\Contact\ContactRepository;

class HomeController extends Controller
{
    private $contact;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = $this->contact->getAll();
        return view('home',compact('contacts'));
    }
}
