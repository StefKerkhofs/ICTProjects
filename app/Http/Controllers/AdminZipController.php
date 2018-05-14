<?php


namespace App\Http\Controllers;

use App\Page;
use App\Zip;
use App\Zipcode;
use Illuminate\Http\Request;

/**
 * Class AdminZipController
 * @package App\Http\Controllers
 * @author Nico Schelfhout
 */
class AdminZipController extends Controller
{
    /**
     * getList
     *
     * Get list of towns and zipcodes and passes them to view
     *
     * @author Nico Schelfhout
     *
     */
    public function index(){
        $aZipData = Zip::get();
        return view('admin.zip.overview', [
            'aZipData' => $aZipData,
        ]);
    }
    /**
     * addTown
     *
     * Adds a new town with zipcode to the list
     *
     * @author Nico Schelfhout
     *
     */
    public function addTown($iZipCode, $sTownName){
        return view("admin.zip.add");
    }
}