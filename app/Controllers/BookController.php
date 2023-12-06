<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BooksModel;

class BookController extends BaseController
{
    public function index()
    {
        //
        return view('books/index');
    }
    
    
    public function createBook(){

        //call the form
        return view('books/add');
    }


    public function bookStore(){

        //insertion of  data in our database
        //echo 'Save book';
        $mdlBook = new  BooksModel();

        $dataPost = [
            'title' => $this->request->getPost('txtTitle'),
            'author' => $this->request->getPost('txtAuthor'),
            'year' => $this->request->getPost('txtYear'),
        ];

       
        #$dataPost = $this->request->getPost(['txtTitle','txtAuthor','txtYear']);

        //dd($dataPost);
        $mdlBook->insert($dataPost);
        return redirect()->to('books/list')->with('success','Book Successfully Added.');

    }

    public function bookList()  {
        
        $mdlBook = new  BooksModel();
        $data['books'] = $mdlBook->findAll();
        
        return view('books/list',$data);
    }


    public function bookView($id) {
        $mdlBook = new  BooksModel();
        $data['books'] = $mdlBook->find($id);
        #dd($data);

        return view('books/edit',$data);
    }

    public function bookUpdate($id){
        $mdlBook = new  BooksModel();
        $dataPost = [
            'title' => $this->request->getPost('txtTitle'),
            'author' => $this->request->getPost('txtAuthor'),
            'year' => $this->request->getPost('txtYear'),
        ];
        $mdlBook->update($id,$dataPost);
        return redirect()->to('books/list')->with('success-update','Book Successfully Updated.');
    }

    public function bookViewDelete($id) {
        $mdlBook = new  BooksModel();
        $data['books'] = $mdlBook->find($id);
        #dd($data);

        return view('books/view',$data);
    }

    public function bookDelete($id)  {
       
       
        $mdlBook = new  BooksModel();
        $mdlBook->delete($id);
        return redirect()->to('books/list')->with('success-delete','Book Successfully Deleted.');
        
    }
}
