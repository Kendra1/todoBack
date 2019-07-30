<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller{

    public function testG($age){

        return $age;

    }

    
    public function testP(Request $request){

        $bodyContent = $request->getContent();
        
        return $bodyContent;

    }

    public function testPut(Request $request){

        $prop = $request->input('a');

        return $prop;

    }

    public function testPatch(Request $request){

        $prop = $request->input('b');

        return $prop;

    }

    public function testDelete($id){

        return $id;

    }

}