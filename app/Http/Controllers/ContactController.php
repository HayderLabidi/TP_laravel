<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Http\RedirectResponse;
    use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
     
    public function store1(ContactRequest $request): View|RedirectResponse
        {
            return view('confirm');
        }

        public function store(Request $request): View|RedirectResponse
        {
            
           $validator = Validator::make($request->all(), [
                'nom' => 'bail|required|between:5,20|alpha',
                'email' => 'bail|required|email',
                'message' => 'bail|required|max:250'
            ]);
     
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            return view('confirm'); 
        }

        public function create(): View
        {
            return view('contact');
        }
}
