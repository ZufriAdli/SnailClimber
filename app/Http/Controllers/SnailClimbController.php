<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnailClimbController extends Controller
{
    /**
     * Show the form for the snail climb calculator.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('snail-form');
    }

    /**
     * Calculate the number of days required for the snail to climb out of the well.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function calculateDays(Request $request)
    {
        $wellDepth = 11; // Depth of the well in meters
        $dailyClimb = 3; // Distance climbed per day in meters
        $nightlySlide = 2; // Distance slid back each night in meters

        $netClimbPerDay = $dailyClimb - $nightlySlide;
        $days = 0;
        $currentHeight = 0;
        $calculation = [];

        while ($currentHeight < $wellDepth) {
            $days++;
            $currentHeight += $dailyClimb;

            // Record the calculation step
            $calculation[] = [
                'day' => $days,
                'height' => $currentHeight,
                'action' => 'Climbed up ' . $dailyClimb . ' meters',
            ];

            // Check if the snail has reached or surpassed the top of the well
            if ($currentHeight >= $wellDepth) {
                break;
            }

            $currentHeight -= $nightlySlide;

            // Record the night slide
            $calculation[] = [
                'day' => $days,
                'height' => $currentHeight,
                'action' => 'Slid back ' . $nightlySlide . ' meters',
            ];
        }

        // Store calculation and result in session
        session(['calculation' => $calculation, 'days' => $days]);

        return redirect()->route('snail.result');
    }

    /**
     * Show the result of the snail climb calculation.
     *
     * @return \Illuminate\View\View
     */
    public function showResult()
    {
        $days = session('days', 0); // Get the days from the session
        return view('snail-result', ['days' => $days]);
    }

    /**
     * Show the detailed calculation steps.
     *
     * @return \Illuminate\View\View
     */
    public function showCalculationDetails()
    {
        $calculation = session('calculation', []);
        return view('snail-calculation-details', ['calculation' => $calculation]);
    }
}
