<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\UploadTrait;
use App\Gallery;

class DocumentController extends Controller
{
    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $query = Document::orderBy('id', 'desc');
        $img = Gallery::all();
        $viewName = 'community.index';

        if ($type == '공지사항') {
            $query = $query->where('type', '공지사항')->paginate(10);
            $imgUrl = "http://julienwaffle.com/wp-content/uploads/2016/05/up17-1.png";
        }
        if ($type == 'news') {
            $query = $query->where('type', 'news')->paginate(0);
            $imgUrl = "http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_Photo_2016-05-26-15-43-56_33.png";
        }
        if ($type == '갤러리') {
            $viewName = 'community.gallery';
            $query = $query->where('type', '갤러리');
            $imgUrl = "http://julienwaffle.com/wp-content/uploads/2016/05/up18.png";
        }
        $documents = $query;
        return view($viewName, compact('documents', 'imgUrl','img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.community.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required',
            'content' => 'required',
            'main_image' => 'required',
        ]);

        $document = new Document([
            'type' => $request->get('type'),
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'main_image' => $request->get('main_image'),
        ]);
        
        $url = $this->uploadFile($request, 'main_image');
        $document->main_image = $url;
        $document->save();

        return redirect()->route('docu.admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document, $type, $id)
    {
        $document = Document::find($id);
        
        $document->view_count ++;
        $document->save();

        return view('community.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document, $id)
    {
        $document = Document::find($id);

        return view('admin.community.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document, $id)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required',
            'content' => 'required',
            'main_image' => 'required',
        ]);

        $document = Document::find($id);
        $document->type = $request->get('type');
        $document->title = $request->get('title');
        $document->content = $request->get('content');
        
        $url = $this->uploadFile($request, 'main_image');
        $document->main_image = $url;
        $document->save();

        return redirect()->route('docu.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document, $id)
    {
        $document = Document::find($id);
        $document->delete();

        return redirect()->route('docu.admin');
    }

    public function admin(Document $document)
    {
        $documents = Document::all();
        $documents = DB::table('documents')->orderBy('id', 'desc')->paginate(10);

        return view('admin.community.index', compact('documents'));
    }

    public function adshow($id)
    {
        $document = Document::find($id);

        return view('admin.community.adshow', compact('document'));
    }
}
