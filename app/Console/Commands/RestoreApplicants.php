<?php

namespace App\Console\Commands;

use App\Models\Applicant;
use App\Models\Department;
use Illuminate\Console\Command;

class RestoreApplicants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'applicants:restore';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '重新计算各部门报名详情';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('清空原有数据');
        $departments = Department::all();
        foreach ($departments as $department)
        {
            $department->applicants_count = 0;
            $department->save();
        }
        $this->info('重新计算');
        $applicants = Applicant::all();
        foreach ($applicants as $applicant)
        {
            $applicant->first->increment('applicants_count', 1);
        }
        $this->info('计算完成');
    }
}
