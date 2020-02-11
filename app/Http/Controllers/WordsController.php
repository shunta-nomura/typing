<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\User;

class WordsController extends Controller
{
    public function index()
    {
       if (\Auth::check()) {
            $user = \Auth::user();
            $words = $user->words()->orderBy('created_at', 'desc')->paginate(10);
            
        return view('words.index',[
        'words' => $words,
            ]);
        }
    }
    
    public function create(){
    
    $word = new Word;
   return view('words.create', [
       'word' => $word,
       ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
            'meaning' => 'required|max:191',
        ]);

         $word = new Word; 
        $word->content = $request->content;
        $word->meaning = $request->meaning;
        $word->user_id= \Auth::user()->id;
        $word->save();
                    return redirect('/');

    }

    public function update(Request $request, $id)
    {
        $word = Word::find($id);
        $this->validate($request, [
            'content' => 'required|max:191',
            'meaning' => 'required|max:191',
        ]);
        
        $word = Word::find($id);
        $word->content = $request->content;
        $word->meaning = $request->meaning;
        $word->save();


        return redirect()->route('words.index');
    }
    
    public function edit()
    {
        return view('words.edit');
    }
    
    public function show($id)
    {
        $word = Word::find($id);
        
        return view('words.show',[
            'word' => $word
            ]);
    }
    
    public function destroy($id)
    {
        $word = Word::find($id);
        $word->delete();
        
        return redirect('/');
    }
}
