<?php


namespace App\Http\Controllers;




use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getShearStoryAction(){

        return view('story/create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postStoryAction(Request $request){

        $this->validate($request, [
            'title' => 'required|max:255',
            'story' => 'required'
        ]);

        $story = new Story();

        $story->title = $request->title;
        $story->content = $request->story;

        $story->save();

        return redirect()->action('HomeController@getIndexAction');
    }


    public function getStoryAction($id){

        $story = Story::find($id);

        return view('story/show')->with('story', $story);
    }

    public function getAllStoriesAction(){

        $stories = Story::all()
            ->sortByDesc('created_at');

        return view('story/show_all')->with('stories', $stories);
    }

    public function getEditStoryAction($id){

        $story = Story::find($id);

        return view('story/edit')->with('story', $story);
    }

    public function postEditStoryAction(Request $request, $id){

        $this->validate($request, [
            'title' => 'required|max:255',
            'story' => 'required'
        ]);

        $story = Story::find($id);

        $story->title = $request->title;
        $story->content = $request->story;

        $story->save();

        return redirect()->route('show_story', $story->id);
    }
}