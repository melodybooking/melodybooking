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
			$posts = Post::select('posts.*')
			->join('users', 'created_by', '=', 'users.id')
			->where('genre', 'like', "%$request->search%")
			->orwhere('artist_name', 'like', "%$request->search%")
			->orderBy('posts.created_at', 'DESC')
			->paginate(6)->appends(['search' =>$request->search]);
		} else {
			$posts = Post::with('user')->orderBy('posts.created_at', 'DESC')->paginate(6);
		}

        $data = [];
        $data['posts'] = $posts;
        return view('posts.index')->with($data);
    }

    public function create(Request $request)
    {
        return view('posts.create');
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
        $post = new Post();
        $post->artist_name = $request->artist_name;
        $post->email = $request->email;
        $post->bio = $request->bio;
        $post->genre = $request->genre;


		if($request->hasFile('image')) {
	    $post->image = $this->imageUploadPost($request);
		}
		$post->save();
		Log::info("New Artist saved", $request->all());

        $request->session()->flash('successMessage', 'Artist saved successfully');
        return redirect()->action('PostsController@show', [$post->id]);
    }
    public function show(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            Log::error("Artist with id of $id not found.");
			abort(404);
        }
        $data = [];
        $data['post'] = $post;
        return view('posts.show')->with($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            Log::error("Artist with id of $id not found.");
            abort(404);
        }

		if($post->user->id != \Auth::id()) {
			Session::flash('errorMessage', "Only the Artist author can edit this Artist.");
			return redirect()->action('PostsController@index');
		}
        $data = [];
        $data['post'] = $post;

        return view('posts.edit')->with($data);
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
        $post = Post::find($id);
        if (!$post) {
            $request->session()->flash('errorMessage', 'Artist cannot be found');
            return redirect()->action('PostsController@index');
        }
		$post->artist_name = $request->artist_name;
        $post->email = $request->email;
        $post->bio = $request->bio;
        $post->genre = $request->genre;
        $post->save();
        $request->session()->flash('successMessage', 'Artist saved successfully');
        return redirect()->action('PostsController@show', [$post->id]);
    }
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            $request->session()->flash('errorMessage', 'Artist cannot be found');
            return redirect()->action('PostsController@index');
        }
        $post->delete();
        return view('posts.index');
    }
}
