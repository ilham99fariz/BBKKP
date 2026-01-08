<?php

namespace App\Exports;

use App\Models\CustomerSurvey;

class SurveyExport
{
    protected $year;

    public function __construct($year = null)
    {
        $this->year = $year;
    }

    public function generate()
    {
        $query = CustomerSurvey::query();

        if ($this->year) {
            $query->whereYear('created_at', $this->year);
        }

        return $query->orderBy('created_at', 'desc')->get();
    }
}
