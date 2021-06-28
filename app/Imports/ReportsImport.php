<?php

namespace App\Imports;

use App\Models\Report;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;



class ReportsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Report([

            'user_id' => $row[1],
            'profile_id' => $row[2],
            'report_request_id' => $row[3],
            'record_type' => $row[4],
            'report_date' => $date,
            'keywordId' => $row[6],
            'campaignId' => $row[7],
            'adGroupId' => $row[8],
            'asin' => $row[9],
            'sku' => $row[10],
            'query' => $row[11],
            'placement' => $row[12],
            'impressions' => $row[13],
            'averageImpressionPosition'=> $row[14],
            'clicks' => $row[15],
            'cost' => $row[16],
            'bidPlus' => $row[17],
            'currency' => $row[18],
            'units1d' => $row[19],
            'units7d' => $row[20],
            'units14d' => $row[21],
            'units30d' => $row[22],
            'sales1d' => $row[23],
            'sales7d' => $row[24],
            'sales14d' => $row[25],
            'sales30d' => $row[26],
            'sales1dSameSKU' => $row[27],
            'sales7dSameSKU' => $row[28],
            'sales14dSameSKU' => $row[29],
            'sales30dSameSKU' => $row[30],
            'conversions1d' => $row[31],
            'conversions7d' => $row[32],
            'conversions14d' => $row[33],
            'conversions30d' => $row[34],
            'conversions1dSameSKU' => $row[35],
            'conversions7dSameSKU' => $row[36],
            'conversions14dSameSKU' => $row[37],
            'conversions30dSameSKU' => $row[38],
            'created_at' => $row[39],
            'updated_at' => $row[40],

        ]);
    }
}


 

