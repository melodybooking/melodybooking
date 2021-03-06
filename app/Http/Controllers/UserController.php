<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\User;
use Log;
use Session;
use Auth;

class UserController extends Controller
{
	public function __construct(){

		// $this->middleware('auth', ['except' => ['show']]);
	}
    // getting access to the request, is as a easy as adding it as a parameter to any controller
    // action
    public function index(Request $request)
    {

    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Request $request)

    {
        $user = User::findOrFail(Auth::id());
		$artist = Post::where('created_by', $user->id) -> get();

        return view('users.user_show', ['user' => $user], ['artist' => $artist]);
    }

    public function aboutUs() {

        return view('artists.about_us');
    }

    public function edit(Request $request)

    {
        $user = User::find(Auth::id());

        if (!$user) {
            Log::info("Cannot edit User.");
			$request->session()->flash('errorMessage', 'User cannot be found');
            abort(404);
        }

        return view('users.edit_user', ['user' => $user]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function password (Request $request, $id)

    {

        $user = User::find(Auth::id());

        return view('users.password')->with('user', $user);

    }

    public function updatePassword(Request $request, $id)
    {

        $user = User::find(Auth::id());


        $rules = [
            'password' => 'required|confirmed|min:6',
        ];

        $this->validate($request, $rules);

        $user->password = $request->password;

        $user->save();

        Session::flash('successMessage', "Password updated successfully.");



       return redirect()->action('UserController@show');

    }

    public function update(Request $request, $id)

    {

        $user = User::find(Auth::id());

        $rules = User::$rules;

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',

        ];

        $this->validate($request, $rules);


        if (!$user) {
            $request->session()->flash('errorMessage', 'User cannot be found');
            abort(404);
        }

		if($user->email != $request->email) {
			$rules['email'] .= '|unique:users';
		}

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        $request->session()->flash('successMessage', 'User updated successfully');


        return redirect()->action('UserController@show', [$user->id]);
    }

    public function destroy(Request $request, $id)
    {
		$user = User::find(Auth::id());

        if (!$user) {
			Log::info("Cannot delete User: $id");
            $request->session()->flash('errorMessage', 'User cannot be found');
            abort(404);
        }
        $user->delete();
        return redirect()->action('PostsController@index');
    }
}
