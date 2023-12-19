<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class summeryController extends Controller
{
    public function saleSummery()
    {
        $TotoalPrice = DB::table('solds')
            ->whereDate('created_at', today())
            ->sum("total_price");

        $todaySales = DB::table('solds')
            ->whereDate('created_at', today())
            ->sum('quantity');

        $YesterdayTotalAmmount = DB::table('solds')
            ->whereBetween('created_at', [now()->subDays(1), now()])
            ->sum("total_price");

        $YesterdayTotalSale = DB::table('solds')
            ->whereBetween('created_at', [now()->subDays(1), now()])
            ->sum('quantity');

        $ThisMonthTotalAmmount = DB::table('solds')
            ->whereBetween('created_at', [now()->submonth()->endOfMonth(), now()])
            ->sum("total_price");

        $ThisMonthTotalSale = DB::table('solds')
            ->whereBetween('created_at', [now()->submonth()->endOfMonth(), now()])
            ->sum('quantity');

        $LastMonthTotalAmmount = DB::table('solds')
            ->whereBetween('created_at', [now()->submonths(1)->startOfMonth(), now()->submonths(1)->endOfMonth()])
            ->sum("total_price");

        $LastMonthTotalSale = DB::table('solds')
            ->whereBetween('created_at', [now()->submonths(1)->startOfMonth(), now()->submonths(1)->endOfMonth()])
            ->sum('quantity');

        return view('pages.home', compact("todaySales", "TotoalPrice", "YesterdayTotalAmmount", "YesterdayTotalSale", "ThisMonthTotalAmmount", "ThisMonthTotalSale", "LastMonthTotalAmmount", "LastMonthTotalSale"));

    }
    public function today(){
        $solds = DB::table('solds')
            ->whereDate('created_at', today())
            ->select('*')->paginate(10);
            return view('pages.soldDetails',compact('solds'));
    }
    public function yesterday(){
        $solds = DB::table('solds')
            ->whereBetween('created_at', [now()->subDays(1), today()])
            ->select('*')->paginate(10);
            return view('pages.soldDetails',compact('solds'));
    }
    
    public function thisMonth(){
        $solds = DB::table('solds')
            ->whereBetween('created_at', [now()->submonth()->endOfMonth(), today()])
            ->select('*')->paginate(10);
            return view('pages.soldDetails',compact('solds'));
    }
    
    public function lastMonth(){
        $solds = DB::table('solds')
            ->whereBetween('created_at', [now()->submonths(1)->startOfMonth(), now()->submonths(1)->endOfMonth()])
            ->select('*')->paginate(10);
            return view('pages.soldDetails',compact('solds'));
    }
}
