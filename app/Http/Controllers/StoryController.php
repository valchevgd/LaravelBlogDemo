<?php


namespace App\Http\Controllers;

use App\Category;
use App\Story;
use App\Tag;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class StoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getShearStoryAction(){

        $categories = Category::all();
        $tags = Tag::all();

        return view('story/create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postStoryAction(Request $request){

        $this->validate($request, [
            'title' => 'required|max:255',
            'story' => 'required',
            'category_id' => 'required|integer'
        ]);

        $story = new Story();

        $story->title = $request->title;
        $story->content = $request->story;
        $story->category_id = $request->category_id;

        $story->save();

        if ($request->tags){
            $story->tags()->sync($request->tags);
        }else{
            $story->tags()->sync([]);
        }

        return redirect()->action('HomeController@getIndexAction');
    }


    public function getStoryAction($id){

        $story = Story::find($id);
        $tags = $story->tags->toArray();

        return view('story/show')->with('story', $story)
            ->with('tags', $tags);
    }

    public function getAllStoriesAction(){

        $stories = Story::orderBy('id', 'desc')->paginate(4);

        return view('story/show_all')->with('stories', $stories);
    }

    public function getEditStoryAction($id){

        $story = Story::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        $storyTags = $story->tags->toArray();

        return view('story/edit')->with('story', $story)->with('categories', $categories)
            ->with('tags', $tags)->with('storyTags', $storyTags);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postEditStoryAction(Request $request, $id){

        $this->validate($request, [
            'title' => 'required|max:255',
            'story' => 'required',
            'category_id' => 'required|integer'
        ]);

        $story = Story::find($id);

        $story->title = $request->title;
        $story->content = $request->story;
        $story->category_id = $request->category_id;

        $story->save();

        if ($request->tags){
            $story->tags()->sync($request->tags);
        }else{
            $story->tags()->sync([]);
        }

        return redirect()->route('show_story', $story->id);
    }

    public function deleteStoryAction($id){

        $story = Story::find($id);

        $story->delete();

        return redirect()->route('index');
    }
}