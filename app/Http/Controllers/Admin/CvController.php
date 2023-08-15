<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cv_file;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function list()
    {
        $cv_file = Cv_file::paginate(10);

        return view('backend.pages.cv.list', compact('cv_file'));
    }

    public function show($id)
    {
        $cv = Cv_file::findOrFail($id);

        return view('backend.pages.cv.show', compact('cv'));
    }

    public function delete($id)
    {
        $cv = Cv_file::findOrFail($id);
        $image = $cv->cv_file;

        if (file_exists($image))
        {
            unlink($image);
        }

        $cv->delete();

        $notification = array(
            'message' => 'Məlumat silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
