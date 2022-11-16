<?php

use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Session;

function required_mark()
{
    return '<span class="text-danger pl-1">*</span>';
}

function doPermitted($checkarray)
{
    if (Session::has('routes')) {
        return in_array($checkarray, Session::get('routes'));
    }
    return false;
}

function resizeUploadImage($imageFile, $path, $name, $height, $width)
{
    $name = $name . '.' . strtolower($imageFile->getClientOriginalExtension());
    Image::make($imageFile->path())->resize($height, $width, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path($path) . '/' . $name);
    return $name;
}

function format_currency($value, $currency = 2)
{
    return (($currency == 2) ? env('CURRENCY') : env('CURRENCYUSD')) . ' ' . number_format($value, 2);
}

function getUploadsPath($name)
{
    $name = 'uploads/' . $name;
    return asset($name);
}

function getDownloadFileName($prefix = null)
{
    return (($prefix) ? $prefix : '') . Carbon::now()->format('YmdHs');
}

function isntEmpty($val)
{
    return ($val && $val != '') ? true : false;
}

function getCarbonDate($text = null)
{
    return ($text == null) ? Carbon::now()->timezone('Asia/Colombo') : Carbon::parse($text)->timezone('Asia/Colombo');
}
