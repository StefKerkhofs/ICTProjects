<?php

namespace App\Http\Controllers;

use App\major;
use App\Page;
use App\Study;
use Illuminate\Http\Request;

/**
 * Class AdminStudyController
 * @package App\Http\Controllers
 * @author Stef Kerkhofs
 */



class AdminStudyController extends Controller
{
    /**
     *getList()
     * Retrieves the list containing all the studies and passes it to the view
     *
     * @author Stef Kerkhofs
     * @since 2018-05-08
     */

    public function getList(){


        $aMajorData = Major::get();
        $aStudyData = Study::get();



        return view("admin.study.overview", array(
            'aMajorData' => $aMajorData,
            'aStudyData' => $aStudyData
        ));

}
    /**
     *addStudy()
     * Adds a new study to the list of studies
     *
     * @author Stef Kerkhofs
     * @since 2018-05-10
     */

    public function addStudy(Request $request){
        Study::insert([
            'study_name' => $request->post('studyName')
        ]);
        $aStudyData = Study::get();
        return view("admin.study.overview", array(
            'aStudyData' => $aStudyData
        ));

    }

    /**
     *addMajor()
     * Adds a new major to the list of majors attached to a study
     *
     * @author Stef Kerkhofs
     * @since 2018-05-10
     */

    public function addMajor(){
        $aMajorData = Major::get();


        return view("admin.study.overview", array(
            'aMajorData' => $aMajorData
        ));
    }
}

