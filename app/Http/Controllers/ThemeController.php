<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about()
    {
        return view('theme.about');
    }

    public function services()
    {
        return view('theme.services');
    }

    public function contact()
    {
        // GET ALL DATA
        // get all contacts data -> then passing it to the view
        // $data = Contact::where('id', '=', '2')->first();
        // $data = Contact::find(3);

        // CREATE DATA
        // $contact = new Contact();
        // $contact->first_name = 'ahmed33';
        // $contact->last_name = 'anwar33';
        // $contact->email = 'ahmed@yahoo.com';
        // $contact->message = 'this is ahmed\'s message';
        // $contact->save();

        // CREATE DATA USING MASS ASSIGNMENTS (FILLABLE)
        // Contact::create([
        //     'first_name' => 'Yasser55',
        //     'last_name' => 'Yasser55',
        //     'email' => 'Yasser55@yahoo.com',
        //     'message' => 'this is yasser\'s message',
        //     'status' => '0',
        // ]);

        // UPDATE RECORD
        // $contact = Contact::find(6);
        // $contact->last_name = 'updated name';
        // $contact->status = '0';
        // $contact->save();

        // UPDATE RECORD USING MASS ASSIGNMENT (FILLBALE)
        // $contact = Contact::find(6);
        // $contact->update([
        //     'last_name' => 'updated named with fillable',
        //     'status' => '1',
        // ]);

        // DELETE RECORD
        // $contact = Contact::find(6);
        // $contact->delete();

        // dd('Created successfully');

        $categories = Category::all();
        return view('theme.contact', compact('categories'));

        // GET RELATIONSHIP
        // $contact = Contact::find(13);
        // dd($contact->category->name);
    }

    public function store(StoreContactRequest $request)
    {
        $validatedData = $request->validated();

        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|min:5',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'nullable',
        // ], [
        //     'first_name.required' => 'My customized version of required message for first name field',
        //     'first_name.min' => 'My customized version of MINIMUM message for first name field',
        // ]);

        Contact::create($validatedData);

        return back()->with('status', 'Your message has been sent successfully!');
    }
}
