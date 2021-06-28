<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

protected $fillable = ['user_id',
  'profile_id',
  'report_request_id',
  'record_type',
  'report_date',
  //'productAdId',
  'keywordId',
  'campaignId',
  'adGroupId',
  'asin',
  'sku',
  'query',
  'placement',
  'impressions',
  'averageImpressionPosition' ,
  'clicks',
  'cost',
  'bidPlus',
  'currency',
  'units1d',
  'units7d',
  'units14d',
  'units30d',
  'sales1d',
  'sales7d',
  'sales14d',
  'sales30d',
  'sales1dSameSKU',
  'sales7dSameSKU',
  'sales14dSameSKU' ,
  'sales30dSameSKU',
  'conversions1d',
  'conversions7d',
  'conversions14d',
  'conversions30d',
  'conversions1dSameSKU',
  'conversions7dSameSKU',
  'conversions14dSameSKU',
  'conversions30dSameSKU',
  'created_at',
  'updated_at'

]; 


}
