<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Resume;
use PHPExcel;
use PHPExcel_IOFactory;

class ResumeController extends Controller {

    public function index() {
        //Resume::parse();die;
        return view('resume.index');
    }

    public function upload() {
        return view('resume.upload');
    }

    public function uploadSave(Request $request) {


        $name = $request->input('name');
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $extension = $file->extension();

            if ($name) {
                $fileName = $name . '.' . $extension;
            } else {
                $fileName = $file->getClientOriginalName();
            }
            $path = $request->resume->storeAs('resumes', $fileName);
            $filePath = storage_path() . '/app/' . $path;
            $fileObj = \PHPExcel_IOFactory::load($filePath);
            $sheetObj = $fileObj->getSheet(0);
            $sheetData = $sheetObj->toArray(null, true, true, true);
            for ($i = 1; $i < count($sheetData); $i++) {
                $row = $sheetData[$i];

                foreach ($row as $j => $value) {
                    echo ($row[$j]);
                    echo ' ';
                }
                echo '</br>';
            }
            die;
//            $highestRow = $sheetObj->getHighestRow();
//            $highestColumn = $sheetObj->getHighestColumn();
//            $i = 0;
//            foreach ($sheetObj->getRowIterator() as $row) {
//                $i++;
//                $j = 0;
//                foreach ($row->getCellIterator() as $cell) {
//                    $cellValue = trim($cell->getCalculatedValue());
//                    var_dump($cellValue);
//                    die;
//                }
//            }
        }
        return view('resume.upload');
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return view('resume.index');
        // return view('user.profile', ['user' => User::findOrFail($id)]);
    }

}
