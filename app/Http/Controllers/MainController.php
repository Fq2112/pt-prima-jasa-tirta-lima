<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.main.home');
    }

    public function presidentMessage()
    {
        return view('pages.main.about.president-message');
    }

    public function briefHistory()
    {
        return view('pages.main.about.brief-history');
    }

    public function visionMission()
    {
        return view('pages.main.about.vision-mission');
    }

    public function organizationChart()
    {
        return view('pages.main.about.organization-chart');
    }

    public function services()
    {
        return view('pages.main.services');
    }

    public function QhseCommitment()
    {
        return view('pages.main.qhse-commitment');
    }

    public function projectsExperiences()
    {
        return view('pages.main.project-experiences');
    }

    public function contact()
    {
        return view('pages.main.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'string|min:3',
            'message' => 'required'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
        );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to(env('MAIL_USERNAME'));
            $message->subject($data['subject']);
        });

        return back()->with('contact', 'Thank you for dropping us a line! Because every single comment or critics that you gave, will make us be a better company.');
    }
}
