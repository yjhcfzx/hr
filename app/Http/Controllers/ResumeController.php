<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Resume;
class ResumeController extends Controller
{
    public function index()
    {Resume::parse();die;
        return view('resume.index' );
    }
    public function upload()
    {
        return view('resume.upload' );
    }
    public function uploadSave(Request $request)
    {
      
      
        $name =  $request->input('name');
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $extension = $file->extension();
           
             if($name){
                 $fileName = $name .  '.' . $extension;
             }else{
                 $fileName = $file->getClientOriginalName();
             }
            $path = $request->resume->storeAs('resumes',  $fileName);
            var_dump($path);die;
            
        }
        var_dump($name);die;
        return view('resume.upload' );
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('resume.index' );
       // return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}