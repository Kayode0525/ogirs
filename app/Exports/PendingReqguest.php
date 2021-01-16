<?php

namespace App\Exports;

use App\Models\MyRequest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;

class PendingReqguest implements FromCollection,WithMapping,WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MyRequest::where('payment_status',1)->where('status',0)->get();
    }


    public function map($registration) : array {
        return [
            $registration->firstname,
            $registration->lastname,
            $registration->requests->description,
            //$registration->created_at,
            Carbon::parse($registration->created_at)->toFormattedDateString(),
            $registration->departments->description,

            $registration->applicant_address,
            $registration->applicant_email,
            $registration->applicant_phone_number,

            $registration->dest_address,
            $registration->dest_email_address,
            $registration->dest_phone,
            // $registration->user->plus_one,
            // Carbon::parse($registration->event_date)->toFormattedDateString(),
            // Carbon::parse($registration->created_at)->toFormattedDateString()
        ] ;
 
 
    }

    public function headings() : array {
        return [
           //'#',
           'Firstname',
           'Lastname',
           'Request',
           'Request Date',
           'Department',
           'Applicant Address',
           'Applicant Email',
           'Applicant Phone Number',
           'Destination Address',
           'Destination Email',
           'Destination Phone Number'
        ] ;
    }
}
