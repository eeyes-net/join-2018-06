<?php

namespace App\Observers;

use App\Models\Applicant;

class ApplicantObserver
{
    public function saving(Applicant $applicant)
    {
        if (empty($applicant->wanna_say))
        {
            $applicant->wanna_say = Purifier::clean($applicant->wanna_say);
        }
    }
}