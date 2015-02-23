<?php namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Project;
use App\SkillInformation;
use App\Team;
use Illuminate\Support\Facades\Request;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$brief_skills = SkillInformation::all();
        $projects = Project::all();
        $abouts = About::all();
        $teams = Team::all();
		return view('welcome.welcome')
			->with([
				'skills' => $brief_skills,
                'projects' => $projects,
                'abouts' => $abouts,
                'teams' => $teams,
			]);
	}

}
