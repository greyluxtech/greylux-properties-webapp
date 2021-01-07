<?php
namespace App\Http\Controllers;
use App\Models\Faq;

use illuminate\Http\Request;
class FaqsController extends Controller
{
    public function index(){
         $faqs = Faq::all();

        // return view('faq', compact('faqs'));
        return view('faq', compact('faqs'));

    }
}
