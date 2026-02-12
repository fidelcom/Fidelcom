<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\GetInTouch;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('contact.index', compact('contact'));
    }

//    public function store(Request $request)
//    {
//        try {
//            $validated = $request->validate([
//                'name'    => 'required|string|max:255',
//                'phone'   => 'required|string|max:20',
//                'email'   => 'required|email',
//                'subject' => 'required|string|max:255',
//                'message' => 'required|string',
//            ]);
//
//            GetInTouch::create([
//                'name'    => $validated['name'],
//                'email'   => $validated['email'],
//                'phone'   => $validated['phone'],
//                'subject' => $validated['subject'],
//                'message' => $validated['message'],
//                'status'  => 0,
//            ]);
//
//            return response()->json([
//                'code'    => true,
//                'success' => 'Your message has been sent successfully!',
//            ]);
//
//        } catch (\Illuminate\Validation\ValidationException $e) {
//
//            $errors = $e->validator->errors();
//
//            return response()->json([
//                'code'  => false,
//                'field' => $errors->keys()[0],
//                'err'   => $errors->first(),
//            ], 422);
//        }
//    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'    => 'required|string|max:255',
                'phone'   => 'required|string|max:20',
                'email'   => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
                'budget' => 'nullable|integer',
                'file'    => 'nullable|file|mimes:jpg,jpeg,png,gif,pdf,doc,docx,xls,xlsx|max:10240', // max 10MB
            ]);

            $filePath = null;

            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Optional: create a unique filename
                $filename = time() . '_contact.' . $file->getClientOriginalExtension();

                // Store in 'uploads' directory inside 'storage/app/public'
//                $filePath = $file->storeAs('uploads', $filename, 'public');
                // Save directly to public/uploads
                $file->move(public_path('upload'), $filename);
                $filePath = 'upload/' . $filename;
            }
//            dd($filePath);

            GetInTouch::create([
                'name'    => $validated['name'],
                'email'   => $validated['email'],
                'phone'   => $validated['phone'],
                'subject' => $validated['subject'],
                'budget' => $validated['budget'],
                'message' => $validated['message'],
                'image'    => $filePath, // store file path in database
                'status'  => 0,
            ]);

            return response()->json([
                'code'    => true,
                'success' => 'Your message has been sent successfully!',
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {

            $errors = $e->validator->errors();

            return response()->json([
                'code'  => false,
                'field' => $errors->keys()[0],
                'err'   => $errors->first(),
            ], 422);
        }
    }


    public function show()
    {
        $data = GetInTouch::latest()->get();
        return view('admin.get_in_touch.index', compact('data'));
    }

    public function edit($id)
    {
        $data = GetInTouch::findOrFail($id);

        $data->update([
            'status' => $data->status == 1 ? 0 : 1
        ]);

        return redirect()->back()->with([
            'message' => 'Status updated successfully!',
            'alert-type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        $data = GetInTouch::findOrFail($id);
        $data->delete();
        return redirect()->back()->with([
            'message' => 'Message deleted successfully!',
            'alert-type' => 'success'
        ]);
    }
}
