<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\Sponsorship;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RemoveExpiredSponsorshipRelationshipsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()


    {


        $currentDateTime = Carbon::now();

        $users = User::all()->where('user_id', 'sponsorship_id');

        foreach ($users as $user) {

            $dataDiCreazione = $user->email_verified_at;
        }


        $sponsorships = Sponsorship::all();


        foreach ($sponsorships as $sponsorship) {

            $durata = $sponsorship->duration;

            list($ore, $minuti, $secondi) = explode(':', $durata);

            $durataInSecondi = ($ore * 3600) + ($minuti * 60) + $secondi;

            /* $dataDiCreazione = $sponsorship->created_at; */

            $dataDiScadenza = $dataDiCreazione->copy()->addSeconds($durataInSecondi);




            if ($dataDiScadenza && $currentDateTime->isPast()) {
                // Se è scaduto, esegui le azioni necessarie
                DB::table('user_sponsorship')->where('sponsorship_id', 'user_id')->delete();
            }
        }

        /* $expiredSponsorshipIds = Sponsorship::where('created_at', '<=', Carbon::now()->subSeconds($sponsorships->duration))
            ->pluck('id');


        // Rimuovi le relazioni scadute dalla tabella pivot user_sponsorship
        foreach ($expiredSponsorshipIds as $sponsorshipId) {
            DB::table('user_sponsorship')->where('sponsorship_id', $sponsorshipId)->delete();
        } */
    }
}
