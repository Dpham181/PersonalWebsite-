<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutcontroller extends Controller
{
    public function home(){
      $h1 = "WELCOME TO MY SITE";
    return view('components.home')->with('h1', $h1); // passing value to layouts child by with satetment
    }
    public function education(){

      $edu = array(
          'h1' => 'My Education Background',
          'CoursesT' => 'Courses Taken',
          'Courses' => ['Web Front End ', 'DataBase Management ', 'Android Programing' ],
          'EducationLevel' => 'Education Level',
          'Level' => ['High School Diploma', 'A.A degree of Arts' ,'B.s Degree']


      );

      return view('components.Education')-> with($edu);

    }
    public function memo(){
      return view('components.lifememory');

    }

}
