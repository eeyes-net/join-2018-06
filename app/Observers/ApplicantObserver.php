<?php

namespace App\Observers;

use App\Models\Applicant;
use Mews\Purifier\Facades\Purifier;

class ApplicantObserver
{
    /**
     * @param Applicant $applicant
     */
    public function saving(Applicant $applicant)
    {
        if (!empty($applicant->wanna_say))
        {
            $applicant->wanna_say = Purifier::clean($applicant->wanna_say);
        }
    }

    /**
     * @param Applicant $applicant
     */
    public function saved(Applicant $applicant)
    {
        $applicant->first->increment('applicants_count',1);
//        $applicant->second->increment('applicants_count',1);
//        $applicant->third->increment('applicants_count',1);
    }
}