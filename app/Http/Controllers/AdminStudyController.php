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

        $aStudyForm = array();
        $aMajorForm = array();
        foreach($aStudyData as $oStudyData)
        {
            $aStudyForm[$oStudyData->study_id]=$oStudyData->study_name;

        }
        foreach($aMajorData as $oMajorData)
        {
            $aMajorForm[$oMajorData->major_id]=$oMajorData->major_name;

        }

        return view("admin.study.overview", array(
            'aMajorData' => $aMajorData,
            'aStudyData' => $aStudyData,
            'aStudyForm' => $aStudyForm,
            'aMajorForm' => $aMajorForm
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
            'study_name'=> $request->post('studyName')
        ]);
        return redirect('admin/study')->with('message', 'De richting is toegvoegd');


    }

    /**
     *addMajor()
     * Adds a new major to the list of majors attached to a study
     *
     * @author Stef Kerkhofs
     * @since 2018-05-10
     */

    public function addMajor(Request $request){
        $aMajorData = Major::get();
        $sNewMajor = $request->post('majorName');


            Major::insert([
                'major_name' => $sNewMajor,
                'study_id' => $request->post('studySelect')
            ]);


        return redirect('admin/study')->with('message', 'De afstudeerrichting is toegvoegd');
    }
}

