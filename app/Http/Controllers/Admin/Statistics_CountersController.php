<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Statistics_CountersRequest;
use App\Http\Requests\UpdateStatistics_CountersRequest;
use App\Models\Statistics_Counters;
use Illuminate\Http\Request;

class Statistics_CountersController extends Controller
{
    public function list()
    {
        $statistics_counters = Statistics_Counters::paginate(10);

        return view('backend.pages.statistics_counters.list', compact('statistics_counters'));
    }

    public function create()
    {
        return view('backend.pages.statistics_counters.create');
    }

    public function store(Statistics_CountersRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/statistics_counters'), $imageName);
            $validated['image'] = $imageName;
        }

        Statistics_Counters::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $statistics_counters  = Statistics_Counters::findOrFail($id);

        return view('backend.pages.statistics_counters.edit', compact('statistics_counters'));
    }

    public function update(UpdateStatistics_CountersRequest $request, $id)
    {
        $previous_image = $request->previous_image;

        $statistics_counters = Statistics_Counters::find($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/statistics_counters'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $statistics_counters->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.statistics_counters.list')->with($notification);

    }

    public function delete($id)
    {
        $statistics_counters= Statistics_Counters::findOrFail($id);
        $image = $statistics_counters->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        Statistics_Counters::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
