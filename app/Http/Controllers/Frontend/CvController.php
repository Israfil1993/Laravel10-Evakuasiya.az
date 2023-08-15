<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cv_FileRequest;
use App\Models\Cv_file;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function cvSubmit(Cv_FileRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('cv_file')) {
            $imageName = rand(1, 30) . time() . $request->cv_file->getClientOriginalName();
            $request->cv_file->move(public_path('uploads/cv'), $imageName);
            $validated['cv_file'] = $imageName;
        }

        Cv_file::create($validated);

        $notification = array(
            'message' => 'Cv Uğurla Göndərildi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
