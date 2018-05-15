<?php


namespace App\Http\Controllers;

use App\Page;
use App\Trip;
use App\Zip;
use App\Zipcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
    public function addZip(Request $request){
        Zip::insert([
            'zip_code' => $request->post('zipCode'),
            'zip_town' => $request->post('zipTown'),
        ]);
        return redirect('admin/zip')->with('message', 'De gemeente is toegevoegd');
    }

    public function addZipForm(){
        return view('admin.zip.addZip');
    }

    public  function editZip($id, Request $request){
        Zip::where('zip_id', $id)->update([
            'zip_code' => $request->post('zipCode'),
            'zip_town' => $request->post('zipTown'),
        ]);
        return redirect('admin/zip')->with('message', 'De gemeente is aangepast');
    }

    public function editZipForm($id){
        $oZipData = Zip::where('zip_id', $id)->first();
        return view('admin.zip.editZip', [
            'oZipData' => $oZipData
        ]);
    }
}