<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index2(Movies $movies, User $user)
    {
        $role = Auth::user()->role;
        if ($role == '1'){
            return view('index3',compact('movies','user'));
        }else{
            return view('creator');
        }
    }

    public function movieupload(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'publisher' => 'required',
            'producer' => 'required',
            'genre' => 'required',
            'agerating' => 'required',
            'picture' => ['required','image'],
            'video' => ['required','max:20000'],
            'rating' => 'required',
            'description' => 'required',
            'another' => ''
        ]);



        $picture = $request->picture;
       $imagePath = time().'.'.$picture->getClientOriginalExtension();
       $request->picture->move('coverPhotos',$imagePath);





        $video = $request->video;
        $videoPath = time(). '.' . $video->getClientOriginalExtension();
        $request->video->move('videos',$videoPath);


        auth()->user()->movies()->create([
            'title' => $data['title'],
            'publisher' => $data['publisher'],
            'producer' => $data['producer'],
            'genre' => $data['genre'],
            'agerating' => $data['agerating'],
            'rating' => $data['rating'],
            'description' => $data['description'],
            'picture' => $imagePath,
            'video' => $videoPath
        ]);

        return redirect()->route('home');
    }
    public function rate($id){
        $movie = Movies::find($id);
        return view('rating',compact('movie'));
    }

    public function rating(Request $request){
        $data = request()->validate([
            'star' => 'required',
            'comment' => 'required',
            'movie' => 'required',
            'name' => 'required'
        ]);

        auth()->user()->rating()->create($data);

        return redirect()->route('home');
    }

    public function catalogue(){
        return view('catalog2');
    }

    public function details(Movies $movies){
        return view('details1',compact('movies'));
    }

    public function faq(Movies $movies, Rating $rating){
        return view('celebrities',compact('movies','rating'));
    }

    public function about(){
        return view('about');
    }

    public function search(Movies $movies){
        $data = request()->validate([
            'search' => 'required',
        ]);
        $genre = Movies::where('title',$data)->get('video');
        return view('search',compact('genre'));
    }

    public function comments(Rating $rating){
        return view('comments',compact('rating'));
    }
}
