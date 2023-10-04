<?php

namespace App\Http\Controllers;
use App\Models\Client; 
use App\Models\Entreprise; 
use App\Models\Offre; 
use App\Models\Vehicule; 

use PDF;

use Illuminate\Http\Request;
class PDFController extends Controller
{
   

    public function RapportClientsPDF(){
    
       $clients=Client::orderBy('id','asc')->paginate(100);

        $filename = 'ListesClients.pdf';
        $data = [
            'title' => 'Clients Listes',
            'clients' => $clients
        ];
        $html = view('admin.RapportClientsPDF',$data)->render();
        $pdf = new PDF;

        $pdf::SetTitle('Clients Listes');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false);
        $pdf::Output(public_path($filename), 'F');  
        

        //return view('admin.RapportClientsPDF')->with($data);

        return response()->download(public_path($filename));
 }
 public function RapportEntreprisesPDF(){
    
    $entreprises=Entreprise::orderBy('id','asc')->paginate(100);

     $filename = 'ListesEntreprises.pdf';
     $data = [
         'title' => 'Societies Lists',
         'entreprises' => $entreprises
     ];
     $html = view('admin.RapportEntreprisesPDF',$data)->render();
     $pdf = new PDF;

     $pdf::SetTitle('Societies Lists');
     $pdf::AddPage();
     $pdf::writeHTML($html, true, false, true, false);
     $pdf::Output(public_path($filename), 'F');  
     


     return response()->download(public_path($filename));
}
public function RapportOffersPDF(){
    
    $offres=Offre::orderBy('id','asc')->paginate(100);

     $filename = 'ListesOffers.pdf';
     $data = [
         'title' => 'Societies Lists',
         'offres' => $offres
     ];
     $html = view('admin.RapportOffersPDF',$data)->render();
     $pdf = new PDF;

     $pdf::SetTitle('Offers Lists');
     $pdf::AddPage();
     $pdf::writeHTML($html, true, false, true, false);
     $pdf::Output(public_path($filename), 'F');  
     


     return response()->download(public_path($filename));
}
public function RapportVehiculesPDF(){
    
    $vehicles=Vehicule::orderBy('nom','asc')->paginate(100);

     $filename = 'ListesVehicules.pdf';
     $data = [
         'title' => 'Vehicles Lists',
         'vehicles' => $vehicles
     ];
     $html = view('admin.RapportVehiculesPDF',$data)->render();
     $pdf = new PDF;

     $pdf::SetTitle('Vehicles Lists');
     $pdf::AddPage();
     $pdf::writeHTML($html, true, false, true, false);
     $pdf::Output(public_path($filename), 'F');  
     


     return response()->download(public_path($filename));
}
}
 