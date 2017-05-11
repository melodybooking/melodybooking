<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Log;
use Session;

class PostsController extends Controller
{
	public function __construct(){

		$this->middleware('auth', ['except' => ['index', 'show']]);
	}
    // getting access to the request, is as a easy as adding it as a parameter to any controller
    // action
    public function index(Request $request)
    {
     	if(isset($request->search)) {
			$artist = Post::select('artists.*')
			->join('users', 'created_by', '=', 'users.id')
			->where('genre', 'like', "%$request->search%")
			->orwhere('artist_name', 'like', "%$request->search%")
			->orderBy('artists.created_at', 'DESC')
			->paginate(6)->appends(['search' =>$request->search]);
		} else {
			$artists = Post::with('user')->orderBy('artists.created_at', 'DESC')->paginate(6);
		}

        $data = [];
        $data['artists'] = $artists;
        return view('artists.index')->with($data);
    }

    public function create(Request $request)
    {
        return view('artists.create_artists');
    }

	public function imageUploadPost(Request $request)
	   {
		   $this->validate($request, [
			   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		   ]);
		   $imageName = mt_rand(999,999999)."_".time()."_".$request->image->getClientOriginalExtension();
		   //$type = $request->image->guessClientExtension();
		   $request->image->move(public_path('uploads/images'), $imageName);
		   $imagePath = asset('/public/uploads/images/')."/".$imageName;
		   return $imageName;
	   }

    public function store(Request $request)
    {
		$rules = Post::$rules;
        $this->validate($request, $rules);
        $artist = new Post();
		$artist->artist_name = $request->artist_name;
        $artist->email = $request->email;
        $artist->bio = $request->bio;
        $artist->genre = $request->genre;
		$artist->created_by = \Auth::id();
		$artist->facebook_url = $request->facebook_url;
		$artist->instagram_url = $request->instagram_url;
		$artist->twitter_url = $request->twitter_url;
		$artist->soundcloud_url = $request->soundcloud_url;
		$artist->bandcamp_url = $request->bandcamp_url;


		if($request->hasFile('image')) {
	    $artist->image = $this->imageUploadPost($request);
		}
		$artist->save();
		Log::info("New Artist saved", $request->all());

        $request->session()->flash('successMessage', 'Artist saved successfully');
        return redirect()->action('PostsController@show', [$artist->id]);
    }
    public function show(Request $request, $id)
    {
        $artist = Post::find($id);

        if (!$artist) {
            Log::error("Artist with id of $id not found.");
			abort(404);
        }
        $data = [];
        $data['artist'] = $artist;
        return view('artists.show')->with($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $artist = Post::find($id);

        if (!$artist) {
            Log::error("Artist with id of $id not found.");
            abort(404);
        }

		if($artist->user->id != \Auth::id()) {
			Session::flash('errorMessage', "Only the Artist author can edit this Artist.");
			return redirect()->action('PostsController@index');
		}
        $data = [];
        $data['artist'] = $artist;

        return view('artists.edit_artists')->with($data);
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
        $rules = Post::$rules;
        $this->validate($request, $rules);
        $artist = Post::find($id);
        if (!$artist) {
            $request->session()->flash('errorMessage', 'Artist cannot be found');
            return redirect()->action('PostsController@index');
        }
		$artist->artist_name = $request->artist_name;
        $artist->email = $request->email;
        $artist->bio = $request->bio;
        $artist->genre = $request->genre;
        $artist->save();
        $request->session()->flash('successMessage', 'Artist saved successfully');
        return redirect()->action('PostsController@show', [$artist->id]);
    }
    public function destroy(Request $request, $id)
    {
        $artist = Post::find($id);
        if (!$artist) {
            $request->session()->flash('errorMessage', 'Artist cannot be found');
            return redirect()->action('PostsController@index');
        }
        $artist->delete();
        return view('artists.index');
    }
}
