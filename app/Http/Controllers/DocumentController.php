<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use Auth;
use App\State;
use App\Handler;
use App\Opinion;
use App\Comment;
class DocumentController extends Controller
{
    public function addDocument(Request $req){
        $doc                 = new Document;
		$doc->trichyeu		 = $req->trichyeu;
		$doc->kihieu		 = $req->so;
		$doc->id_loaivanban	 = 1;
		$doc->ngaybanhanh	 = $req->ngaybanhanh;
		$doc->id_sovanban	 = $req->sovanban;
		$doc->ngayden 	     = $req->ngayden;
		$doc->coquanbanhanh  = $req->coquanbanhanh;
		$doc->nguoiky 		 = $req->nguoiky;
		$doc->chucvu		 = $req->chucvu;
		$doc->tepdinhkem	 = $req->tepdinhkem;
		$doc->noidung		 = $req->noidung;
		$doc->nguoisoan      =  Auth::id();
        $doc->status 		 =  1;
        $doc->ngaycohieuluc  = $req->ngaycohieuluc;
        $doc->ngayhethieuluc = $req->ngayhethieuluc;
        $doc->linhvuc        = $req->linhvuc;
        $doc->vanbanden      = $req->vanbanden;
		$doc->save();
        return redirect("/")->with('done','Đã gửi xong công văn, vui lòng chờ ký duyệt');
    }
    public function showDocument(){
        $documents = Document::Where('vanbanden',1)->get();
        return view('documents.doc-receive',compact('documents'));
    }

    public function showDetailDocument($id){
        $document  = Document::where('id',$id)->first();
        $states    = State::where('id_document',$id)->get();
        $opinions  = Opinion::where('document_id',$id)->get();
        $comments  = Comment::where('id_doc',$id)->get(); 
        return view('documents.detail',compact('document','states','opinions','comments'));
    }

    public function getPageFoward($id){
        $doc = Document::where('id',$id)->first();
        return view('documents.forward',compact('doc'));
    }
    public function saveStateDocument(Request $req,$id){
        $state = new State;
        $state->id_document = $id;
        $state->id_handler  = Auth::id();
        $state->note        = $req->content;
        $state->file        = $req->file;
        $state->deadline    = $req->deadline;
        $state->status      = 1;
        $state->save();
        $doc = Document::where('id',$id)->first();
        $doc->status = 2;
        $doc->save();
        foreach ($req->input('handlers') as $handler) {
            $hand = new Handler;
            $hand->handler  = $handler;
            $hand->id_state = $state->id;
            $hand->status   = 1;
            $hand->save();
        }
        return redirect()->route('detail-document', ['id' => $id]);
    }
    public function getSubHandler($id){
        $doc = Document::where('id',$id)->first();
        return view('documents.sub-handle.sub-handle',compact('doc'));
    }

    public function postSubHandler(Request $req, $id){
        $opinion = new Opinion;
        $opinion->user_id = Auth::id();
        $opinion->document_id = $id;
        $opinion->content = $req->content;
        $opinion->file    = $req->tepdinhkem;
        $opinion->save();
        return redirect()->route('detail-document', ['id' => $id]);;


    }
    
    public function postComment(Request $req, $id){
        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->content = $req->content;
        $comment->id_doc  = $id;
        $comment->save();
        return redirect()->back();
    }

    public function deleteDocument($id){
        Document::where('id',$id)->delete();
        return  redirect()->back();
    }

    // ahihi ihaha send 
    public function showDocumentSend(){
        $documents = Document::Where('vanbanden',2)->get();
        return view('documents.doc-receive',compact('documents'));
    }
    //editdocument:
    public function editDocument($id){
        
        $document =  Document::where('id',$id)->first();
        if(Auth::id()!=$document->nguoisoan){
            return "Không có quyền sửa";
        }
        return view('documents.edit-document',compact('document'));
    }
    public function editPostDocument(Request $req, $id){
        $doc                 = Document::where('id',$id)->first();
		$doc->trichyeu		 = $req->trichyeu;
		$doc->kihieu		 = $req->so;
		$doc->ngaybanhanh	 = $req->ngaybanhanh;
		$doc->id_sovanban	 = $req->sovanban;
		$doc->ngayden 	     = $req->ngayden;
		$doc->coquanbanhanh  = $req->coquanbanhanh;
		$doc->nguoiky 		 = $req->nguoiky;
		$doc->chucvu		 = $req->chucvu;
		$doc->tepdinhkem	 = $req->tepdinhkem;
		$doc->noidung		 = $req->noidung;
		$doc->nguoisoan      =  Auth::id();
        $doc->ngaycohieuluc  = $req->ngaycohieuluc;
        $doc->ngayhethieuluc = $req->ngayhethieuluc;
        $doc->linhvuc        = $req->linhvuc;
        $doc->vanbanden      = $req->vanbanden;
		$doc->save();
        return  redirect()->route('detail-document', ['id' => $id]);
    }
    public function endHandleDocument($id){
        $doc                 = Document::where('id',$id)->first();
        $doc->status         = 3;
        $doc->save();
        return redirect()->back()->with('end','Đã kết thúc văn bản !');
    }
    public function searchDocument(Request $request){
        $doc = $request->all();
        $documents = Document::where(function($query) use ($doc){
            $query->Where('documents.ngaybanhanh','>' ,$doc['tungay'])
                  ->Where('documents.ngaybanhanh','<' ,$doc['denngay'])
                  ->Where('documents.kihieu',$doc['kihieu'])
                  ->Where('documents.id_sovanban', $doc['sovanban'])
                  ->Where('documents.vanbanden', $doc['loai']);
        })->get();
        return view('documents.search.result', compact('documents'));
    }
}
