<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Appointments;

class AppointmentController extends Controller
{
    public function index() {
        return view('appointment.index', ['user'=> \Auth::user()]);
    }
    public function create() {
        $appointment = new Appointments;
        $appointment->status = request('appointmentStatus');
        $appointment->leadtype = request('appointmentleadtype') != null ? request('appointmentleadtype') : '';
        $appointment->nameofclient = request('nameofclient') != null ? request('nameofclient') : null;
        $appointment->appointmentdate = request('appointmentdate') != null ? request('appointmentdate'): '';
        $appointment->appointmenttime = request('appointmenttime') != null ? request('appointmenttime') : '';
        $appointment->citylocation = request('citylocation') != null ? request('citylocation') : '';
        $appointment->noofpolicysold = request('countofprivacysold') != null ? request('countofprivacysold'): '';
        $appointment->companysold = request('companysold') != null ? request('companysold') : '';
        $appointment->productsold = request('productsold') != null ? request('productsold') : '';
        $appointment->monthlypremium = request('monthlypremium') != null ? request('monthlypremium') : '';
        $appointment->additionalsale = request('anyadditionalsale') != null ? request('anyadditionalsale') : 2;
        $appointment->availablething = request('whatisavailablecon') != null ? request('whatisavailablecon') : '';
        $appointment->talkretirement = request('retirementcheck') != null ? request('retirementcheck') : 2;
        $appointment->rebookatime = request('rebooktime') != null ? request('rebooktime') : 2;
        $appointment->twothingbetterdone = request('doathome') != null ? request('doathome') : '';
        $appointment->howmanyreferral = request('howmanyreferral') != null ? request('howmanyreferral'): '';
        $appointment->nosaleaddress1 = request('appointmentnosaleaddress1') != null ? request('appointmentnosaleaddress1') : '';
        $appointment->nosaleaddress2 = request('appointmentnosaleaddress2') != null ? request('appointmentnosaleaddress2') : '';
        $appointment->nosalecity = request('appointmentnosalecity') != null ? request('appointmentnosalecity') : '';
        $appointment->nosalestate = request('appointmentnosalestate') != null ? request('appointmentnosalestate') : '';
        $appointment->nosalezip = request('appointmentnosalezip') != null ? request('appointmentnosalezip') : '';
        $appointment->whathappen = request('whathappen') != null ? request('whathappen') : '';
        $appointment->wasrescheduled = request('wasrescheduled') != null ? request('wasrescheduled') : 2;
        $appointment->user_id = \Auth::id();
        $appointment->save();
    }
    public function show($id) {
        echo 'show';
    }
    public function edit($id) {
        echo 'edit';
    }
    public function update(Request $request, $id) {
        echo 'update';
    }
    public function destroy($id) {
        echo 'destroy';
    }
}
