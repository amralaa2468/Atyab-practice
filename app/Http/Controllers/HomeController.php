<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;


class HomeController extends Controller
{
    // public function index()
    // {
    //     return view("home");
    // }

    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     // echo $request->file('my_file')->extension();
    //     // echo $request->file('my_file')->getClientOriginalExtension();
    //     //--------------------------------------//

    //     //uploading to public folder

    //     // $final_name = 'new_image.' . $request->my_file->extension();
    //     // echo $final_name;
    //     // $request->my_file->move(public_path('uploads'), $final_name);

    //     //--------------------------------------//

    //     //uploading in storage folder

    //     // $final_name = 'new_image.' . $request->my_file->extension();
    //     // $request->my_file->storeAs('uploads', $final_name); 
    //     //assign a random name if no second parameter

    //     //--------------------------------------//

    //     //storage link -> link files store in storage/app/public (secured)
    //     //to be connected with public/storage (can be accessed)
    //     // php artisan storage:link

    //     $final_name = 'new_image.' . $request->my_file->extension();
    //     $request->my_file->storeAs('public/uploads', $final_name);


    //     //--------------------------------------//


    //     return redirect()->back();
    // }

    // public function delete()
    // {
    //     // Storage::delete('public/uploads/new_image.png');
    //     //or
    //     // File::delete(storage_path('app/public/uploads/new_image.png'));
    //     //or
    //     unlink(storage_path('app/public/uploads/new_image.png'));


    //     return redirect()->back();
    // }

    //----------------------------------------------------------------------------//
    //file manipulation(image) with intervention/image
    public function index()
    {
        return view("home");
    }
    public function test()
    {
        $manager = new ImageManager(new Driver());
        $image = $manager->read(public_path("uploads/image1.jpg"));
        // $image->crop(300, 200);
        // $image->resize(300, 200);
        // $image->fit(300, 200);
        // $image->rotate(90);
        // $image->flip('v');
        $image->save(public_path("uploads/image1Cropped.jpg"));
    }
}
