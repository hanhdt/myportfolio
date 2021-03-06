<?php namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Project;
use App\SkillInformation;
use App\Team;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        // Get user logged in
        $user = Auth::user();
        // Collect skills
        $skills = SkillInformation::all();
        // Collect projects
        $projects = Project::all();
        // Collects contacts received
        $contacts = Contact::all();
        // Abouts
        $abouts = About::all();

        $teams = Team::all();
        return view('home')
            ->with([
                'skills' => $skills,
                'projects' => $projects,
                'contacts' => $contacts,
                'abouts' => $abouts,
                'teams' => $teams,
                'user' => $user,
            ]);
	}

}
