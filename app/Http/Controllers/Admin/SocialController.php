<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SocialController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $socials = Social::orderBy('id', 'desc')->get(['id', 'name', 'icon', 'link', 'comment', 'status']);
            
            return DataTables::of($socials)
                ->addIndexColumn() // Automatically adds the row index (DT_RowIndex)
                ->addColumn('icon', function($social) {

                    return "<div>
                            <img src='" . asset($social->icon) . "' alt='Current Icon' style='width: 100px; height: auto;'>
                        </div>";
                })
                ->addColumn('status', function($social) {
                    return $social->status == 1 
                        ? '<span class="badge bg-success">Active</span>' 
                        : '<span class="badge bg-warning">Inactive</span>';
                })

                ->addColumn('action', function($social) {
                    return '<a href="#" class="text-dark"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-dark edit" data-id="'.$social->id.'" data-name="'.$social->name.'" data-icon="'.$social->icon.'" data-link="'.$social->link.'" data-status="'.$social->status.'"><i class="fas fa-edit"></i></a>
                            <a href="#" class="text-danger delete" data-id="'.$social->id.'"><i class="fas fa-trash-alt"></i></a>';
                })
                ->rawColumns(['status', 'action','icon']) // Ensures status and action columns are rendered with HTML
                ->make(true);
        }
    
        return view('backend.admin.social.index');
    }

    public function create()
    {
        return view('backend.admin.social.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required',
            'comment' => 'nullable|string',
            'status' => 'required|boolean',
            'icon' => 'required|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file_add_name = 'frontend/uploads/social_icons/';
            $folderPath = public_path($file_add_name);
    
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0755, true);
            }
    
            $filePath = $folderPath . $filename;
            $file->move($folderPath, $filename);
    
            Social::create([
                'name' => $request->name,
                'icon' => $file_add_name . $filename,
                'link' => $request->link,
                'comment' => $request->comment,
                'status' => $request->status,
            ]);
    
            return redirect()->back()->with('success', 'Social media record created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to upload the icon.');
        }
    }
}
