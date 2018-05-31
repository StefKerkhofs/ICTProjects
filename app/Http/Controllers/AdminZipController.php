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
        $validatedData = $request->validate([
            'zip_code' => 'integer',
        ],$this->messages());
        Zip::insert([
            'zip_code' => $request->post('zipCode'),
            'zip_town' => $request->post('zipTown'),
        ]);
        return redirect('admin/zip')->with('message', 'De gemeente is toegevoegd');
    }

    /**
     * addZipForm will return the addZip view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addZipForm(){
        return view('admin.zip.addZip');
    }

    /**
     * editZip will edit a zipcode and town by searching on a zip id
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     */

    public  function editZip($id, Request $request){
        $validatedData = $request->validate([
            'zip_code' => 'numeric',
        ],$this->messages());
        Zip::where('zip_id', $id)->update([
            'zip_code' => $request->post('zipCode'),
            'zip_town' => $request->post('zipTown'),
        ]);
        return redirect('admin/zip')->with('message', 'De gemeente is aangepast');
    }

    /**
     * editZipForm will get all the current zip data from the database and return the view editZip with an array $oZipData
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editZipForm($id){
        $oZipData = Zip::where('zip_id', $id)->first();
        return view('admin.zip.editZip', [
            'oZipData' => $oZipData
        ]);
    }

    /**
     * messages is used by the laravel validator to override the error messages
     * @return array
     */
    public function messages()
    {
        return [
            'zip_code.integer' => 'De postcode moet een getal zijn.',
        ];
    }
}