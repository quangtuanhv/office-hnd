<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use Auth;
use App\State;
use App\Handler;
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
		$doc->tepdinhkem	 = '$req->tepdinhkem';
		$doc->noidung		 = $req->noidung;
		$doc->nguoisoan      =  Auth::id();
        $doc->status 		 =  1;
        $doc->ngaycohieuluc  = $req->ngaycohieuluc;
        $doc->ngayhethieuluc = $req->ngayhethieuluc;
        $doc->linhvuc        = $req->linhvuc;
		$doc->save();
        return redirect("/")->with('done','Đã gửi xong công văn, vui lòng chờ ký duyệt');
    }
    public function showDocument(){
        $documents = Document::all();
        return view('documents.doc-receive',compact('documents'));
    }

    public function showDetailDocument($id){
        $document = Document::where('id',$id)->first();
        return view('documents.detail',compact('document'));
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
        foreach ($req->input('handlers') as $handler) {
            $hand = new Handler;
            $hand->handler  = $handler;
            $hand->id_state = $state->id;
            $hand->save();
        }
        return redirect()->route('detail-document', ['id' => $id]);
    }
}
