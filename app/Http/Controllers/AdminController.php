<?php

namespace App\Http\Controllers;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entreprise; 
use App\Models\Client; 
use App\Models\ClientEntreprise; 
use App\Models\Planning; 
use App\Models\Abonnement; 
use App\Models\NotesCommentaire;
use App\Models\ExprimerAbonnement; 
use App\Models\ExprimerReport; 
use App\Models\CouponAbonnement; 


class AdminController extends Controller
{
    public function voireVoyages(Request $request)
    {
        $abonnementsIds = $request->input('abonnements');
        if ($abonnementsIds) {
            // Retrieve the abonnements based on the IDs
            return view('admin.voyages', [
                'abonnementsIds' => $abonnementsIds
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function plannier()
    {
        // Définir les tableaux pour les abonnements et les dates d'abonnement
        $abonnementss = [];

        // Définir les intervalles horaires
        $intervals = [
            ['06:00:00', '08:00:00'],
            ['09:00:00', '11:00:00'],
            ['12:00:00', '14:00:00'],
            ['15:00:00', '17:00:00'],
            ['18:00:00', '20:00:00'],
            ['21:00:00', '23:00:00'],
        ];
        $currentDate = date('Y-m-d'); // Get the current date

        // Parcourir les intervalles horaires
        // Parcourir les intervalles horaires
        foreach ($intervals as $interval) {
            // Récupérer les abonnements dans l'intervalle horaire
            $abonnementsInterval = DB::table('abonnements')->whereNotNull('id_offre')
                ->whereDate('created_at', '>=', DB::raw('DATE_SUB(NOW(), INTERVAL duree MONTH)'))
                ->whereDate('created_at', '<=', $currentDate)
                ->where(function ($query) use ($interval) {
                    $query->whereRaw("TIME(heur_debut_aller) BETWEEN ? AND ?", $interval)
                        ->orWhereRaw("TIME(heur_debut_retour) BETWEEN ? AND ?", $interval);
                })
                ->get();

            // Ajouter les résultats aux tableaux principaux
            $abonnementss[] = $abonnementsInterval;
        }

        return view('admin.planning', [
            'abonnementss' => $abonnementss,
        ]);
    }

    public function Messenger(){
            return view('layouts.ChatifyContact');
    }
   public function consulterCommentaires(){
    $dataComment =  DB::table('notes_commentaires')
    ->orderBy('likes', 'desc')
    ->take(5)
    ->get();
    $clientComments=Client::all();


    $exprimerAbonnement = DB::table('exprimer_abonnements')->get();
   
    $visitor = DB::table('notes_commentaires')
    ->select(
        DB::raw("year(created_at) as year"),
        DB::raw("SUM(likes) as total_likes"),
        DB::raw("SUM(dislikes) as total_dislikes")) 
    ->orderBy("created_at")
    ->groupBy(DB::raw("year(created_at)"))
    ->get();


    $result[] = ['Year','Likes','Dislikes'];
    foreach ($visitor as $key => $value) {
    $result[++$key] = [$value->year, (int)$value->total_likes, (int)$value->total_dislikes];
    }

    return view('admin.voireCommentsAdmin',compact('dataComment','clientComments'), [
            'exprimerAbonnement' => $exprimerAbonnement
        ])->with('visitor',json_encode($result));
   }
    public function ListesClients(Request $request){

        $ClientData = Client::select(DB::raw("count(*)as count"))
		->whereYear("created_at",date('Y'))
		->groupBy(DB::raw("Month(created_at)"))
		->pluck('count');

        $NombreAbonnement=Abonnement::select(DB::raw('count(*)as NombreAbonnements'))->get();
        $NombreEntreprise=Entreprise::select(DB::raw('count(*)as NombreEntreprises'))->get();
        $NombreClient=Client::select(DB::raw('count(*)as NombreClients'))->get();

        $search = $request['search']?? "";
        if($search != ""){
            $clients=Client::where('nom','LIKE','%'.$search.'%')
                            ->orWhere('email','LIKE','%'.$search.'%')
                            ->orderBy('nom','asc')->paginate(100);
        }else{       
            $clients=Client::orderBy('nom','asc')->paginate(100);
        }

       return view('admin.ListesClients',compact('ClientData','clients','NombreAbonnement','NombreEntreprise','NombreClient'));
    }
    public function ListesEntreprises(Request $request){
        $EntrepriseData = Entreprise::select(DB::raw("count(*)as count"))
		->whereYear("created_at",date('Y'))
		->groupBy(DB::raw("Month(created_at)"))
		->pluck('count');
        $NombreAbonnement=Abonnement::select(DB::raw('count(*)as NombreAbonnements'))->get();
        $NombreEntreprise=Entreprise::select(DB::raw('count(*)as NombreEntreprises'))->get();
        $NombreClient=Client::select(DB::raw('count(*)as NombreClients'))->get();

        $search = $request['search']?? "";
        if($search != ""){
            $entreprises=Entreprise::where('nom','LIKE','%'.$search.'%')
                            ->orWhere('email','LIKE','%'.$search.'%')
                            ->orderBy('nom','asc')->paginate(100);
        }else{       
            $entreprises=Entreprise::orderBy('nom','asc')->paginate(100);
        }

       return view('admin.ListesEntreprises',compact('EntrepriseData','entreprises','NombreAbonnement','NombreEntreprise','NombreClient'));
    }
    public function ClientsProfiles(Request $request){
       
        $search = $request['search']?? "";
        if($search != ""){
            $clients=Client::where('nom','LIKE','%'.$search.'%')
                            ->orWhere('email','LIKE','%'.$search.'%')
                            ->get();
        }else{       
             $clients=Client::all();
        }

        $data=compact('clients','search');
        return view('admin.ClientsProfiles')->with($data);
    } 
    public function EntreprisesProfiles(Request $request){
       
        $search = $request['search']?? "";
        if($search != ""){
            $entreprises=Entreprise::where('nom','LIKE','%'.$search.'%')->get();
        }else{       
             $entreprises=Entreprise::all();
        }

        $data=compact('entreprises','search');
        return view('admin.EntreprisesProfiles')->with($data);
    }

    public function ProfilEntreprise($id){
        $entreprise = Entreprise::findOrFail($id);
        return view('admin.ProfilEntreprise',compact('entreprise'));
    }
    public function TripsSearch(Request $request){
       
        $searchByDepart = $request['searchByDepart']?? "";
        $searchByDestination = $request['searchByDestination']?? "";
        $searchByStart = $request['searchByStart']?? "";


        if (($searchByDepart != "") && ($searchByDestination != "") && ($searchByStart != "") ) {
            $voyages =Voyage::where('depart','LIKE','%'.$searchByDepart.'%')
                            ->where('destination','LIKE','%'.$searchByDestination.'%')
                            ->where('heur_debut_aller','LIKE','%'.$searchByStart.'%')
                            ->get();

        } else{            
            $voyages = Voyage::all();
        }
        $voyagesSelect =Voyage::all();
        return view('admin.TripsSearch',compact('voyages','voyagesSelect'));
    }
    public function ViewAllAbonnements(Request $request){
       
        $search = $request['search']?? "";
        if($search != ""){
            $abonnements=Abonnement::where('nom','LIKE','%'.$search.'%')->get();
        }else{       
             $abonnements=Abonnement::all();
        }

        $data=compact('abonnements','search');
       return view('admin.ViewAllAbonnements')->with($data);
    }
    
    public function dashboardAdmin(){      
        $NombreAbonnement=Abonnement::select(DB::raw('count(*)as NombreAbonnements'))->get();
        $NombreEntreprise=Entreprise::select(DB::raw('count(*)as NombreEntreprises'))->get();
        $NombreClient=Client::select(DB::raw('count(*)as NombreClients'))->get();

        $ClientEntreprise=ClientEntreprise::select('id_entreprise',DB::raw('count(*)as nbClients'))
                                            ->groupby('id_entreprise')
                                            ->get();
        $entreprises=Entreprise::all();
        return view('admin.dashboardAdmin',compact('ClientEntreprise','entreprises','NombreAbonnement','NombreEntreprise','NombreClient'));
    }
    public function RapportsTrips(){
        $NombreReport=ExprimerReport::select(DB::raw('count(*)as NombreReports'))->get();
        $NombreComment=ExprimerAbonnement::select(DB::raw('count(*)as NombreComments'))->get();
        $NombreAbonnement=Abonnement::select(DB::raw('count(*)as NombreAbonnements'))->get();
        $NombreEntreprise=Entreprise::select(DB::raw('count(*)as NombreEntreprises'))->get();
        $NombreClient=Client::select(DB::raw('count(*)as NombreClients'))->get();
        $ReportEntreprise=ExprimerReport::select('id_entreprise',DB::raw('count(*)as nbReports'))
                                            ->groupby('id_entreprise')
                                            ->get();
       
        $CommentEntreprise=NotesCommentaire::select('id_entreprise',DB::raw('count(*)as nbComments'))
                                            ->groupby('id_entreprise')
                                            ->get();
        $ClientEntreprise=ClientEntreprise::select('id_entreprise',DB::raw('count(*)as nbClients'))
                                            ->groupby('id_entreprise')
                                            ->get();
        $entreprises=Entreprise::all();
        return view('admin.RapportsTrips',compact('ReportEntreprise','NombreReport','CommentEntreprise','NombreComment','ClientEntreprise','entreprises','NombreAbonnement','NombreEntreprise','NombreClient'));
    }   
    public function ListesComentaires()
    {
        
        return view('admin.ListesComentaires');
    }
    public function Planning()
    {
        
        $voyages=Voyage::all();
        $horaires=Planning::all();
        $data=compact('horaires','voyages');
        return view('admin.Planning')->with($data);
    }
    public function ViewAbonnement($id){
        $abonnement = Abonnement::findOrFail($id);
        $data=('abonnement');
        return view('admin.ViewAbonnement')->with($data);
    }
    public function VerificationCode()
    {
 
             $coupons=CouponAbonnement::all();
      

        return view('admin.VerificationCode',compact('coupons' ));
    }
    public function deleteClient($id)
    {

        $deletedRows = DB::delete('DELETE FROM clients WHERE id = ?', [$id]);
         

        return redirect()->route('ListesClients');
    } 
    public function deleteSociety($id)
    {

        $deletedRows = DB::delete('DELETE FROM entreprises WHERE id = ?', [$id]);
         

        return redirect()->route('ListesEntreprises');
    } 
    public function deleteOffer($id)
    {

        $deletedRows = DB::delete('DELETE FROM offres WHERE id = ?', [$id]);
         

        return redirect()->route('ListesOffres');
    } 
    public function deleteComment($id)
    {

        $deletedRows = DB::delete('DELETE FROM exprimer_abonnements WHERE id = ?', [$id]);
         

        return redirect()->route('consulterCommentaires');
    } 
    public function deleteTrip($id)
    {

        $deletedRows = DB::delete('DELETE FROM voyages WHERE id = ?', [$id]);
         

        return redirect()->route('TripsSearch');
    } 
    public function deleteReport($id)
    {

        $deletedRows = DB::delete('DELETE FROM exprimer_report WHERE id = ?', [$id]);
         

        return redirect()->route('Repports');
    } 
    public function updateEntreprise(Request $request )
    {
        $entreprise= Entreprise::find($request->id);
        $entreprise->nom =$request->nom;
        $entreprise->email =$request->email; 
        $entreprise->adresse =$request->adresse;
        $entreprise->telephone =$request->telephone;
        $entreprise->secteur =$request->secteur;
        $entreprise->siteWeb =$request->siteWeb;
         
         $entreprise->save();
         return redirect()->route('ListesEntreprises');

    }
        
    public function updateClient(Request $request )
         {
             $client= Client::find($request->id);
             $client->nom =$request->nom .' '. $request->prenom ;
             $client->email =$request->email; 
             $client->adresse =$request->adresse;
             $client->telephone =$request->telephone;
             
              $client->save();
              return redirect()->route('ListesClients');
     
  }
    
     
    /**
     * Show the form for creating a new resource.
     */
    public function Repports(Request $request)
    {  
        
        $NombreReport=ExprimerReport::select(DB::raw('count(*)as NombreReports'))->get();
        $NombreComment=ExprimerAbonnement::select(DB::raw('count(*)as NombreComments'))->get();
        $NombreAbonnement=Abonnement::select(DB::raw('count(*)as NombreAbonnements'))->get();
        $NombreEntreprise=Entreprise::select(DB::raw('count(*)as NombreEntreprises'))->get();
        $NombreClient=Client::select(DB::raw('count(*)as NombreClients'))->get();
        $ReportEntreprise=ExprimerReport::select('id_entreprise',DB::raw('count(*)as nbReports'))
                                            ->groupby('id_entreprise')
                                            ->get();
       
        $CommentEntreprise=NotesCommentaire::select('id_entreprise',DB::raw('count(*)as nbComments'))
                                            ->groupby('id_entreprise')
                                            ->get();
        $ClientEntreprise=ClientEntreprise::select('id_entreprise',DB::raw('count(*)as nbClients'))
                                            ->groupby('id_entreprise')
                                            ->get();
           
        $entreprises=Entreprise::all();
        $repports=ExprimerReport::all();
         return view('admin.Repports',compact('repports','ReportEntreprise','NombreReport','CommentEntreprise','NombreComment','ClientEntreprise','entreprises','NombreAbonnement','NombreEntreprise','NombreClient'));

    }
    public function loginAdmin()
    {
        return view('admin.loginAdmin');
    }
    public function welcomeAdmin (){
        return view('admin.welcomeAdmin');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
