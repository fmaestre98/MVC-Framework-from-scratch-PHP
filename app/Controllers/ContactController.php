<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Repositories\ContactRepository;

class ContactController extends Controller{
    public function index()
    {
       $contactRepository=new ContactRepository();
       return $contactRepository->queryAll();
    }

    public function firstContact()
    {
        $contactRepository=new ContactRepository();
       return $contactRepository->queryFirst();
    }



}
