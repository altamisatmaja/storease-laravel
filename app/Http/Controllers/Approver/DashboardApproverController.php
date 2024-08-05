<?php

namespace App\Http\Controllers\Approver;

use App\Http\Controllers\Controller;
use App\Models\ApprovalProcess;
use App\Models\Approver;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;

class DashboardApproverController extends Controller
{
    public function index() {
        $user = auth()->user();
        $approver = Approver::where('user_id', $user->id)->first();

        if (!$approver) {
            return view('pages.dashboard.approver.index', ['vehicle_bookings' => []]);
        }

        $vehicle_booking_collection = VehicleBooking::select('vehicle_bookings.*', 'approval_processes.status as approval_status', 'approval_processes.id as approcal_processes_id')
            ->join('approval_processes', 'vehicle_bookings.id', '=', 'approval_processes.vehicle_booking_id')
            ->where('approval_processes.approver_id', $approver->id)
            ->with('employees', 'vehicles', 'start_mining_states', 'end_mining_states')
            ->get();

        $vehicle_bookings = [];
        foreach ($vehicle_booking_collection as $vehicle_booking) {
            foreach ($vehicle_booking->employees as $employee) {
                foreach ($vehicle_booking->vehicles as $vehicle) {
                    foreach ($vehicle_booking->start_mining_states as $start_state) {
                        foreach ($vehicle_booking->end_mining_states as $end_state) {
                            $vehicle_bookings[] = [
                                'nama_kendaraan' => $vehicle->nama,
                                'plat_nomor' => $vehicle->plat_nomor,
                                'durasi' => $vehicle_booking->durasi,
                                'keperluan' => $vehicle_booking->keperluan,
                                'asal' => $start_state->nama_tambang,
                                'tujuan' => $end_state->nama_tambang,
                                'nama_driver' => $employee->nama_lengkap,
                                'approval_status' => $vehicle_booking->approval_status,
                                'approval_processes_id' => $vehicle_booking->approcal_processes_id,
                            ];
                        }
                    }
                }
            }
        }

        return view('pages.dashboard.approver.index', compact('vehicle_bookings'));
    }

    public function updateApprovalStatus($approvalProcessId) {

        $approvalProcess = ApprovalProcess::find($approvalProcessId);

        if (!$approvalProcess) {
            return redirect()->back()->with('error', 'Approval tidak ditemukan.');
        }

        $approvalProcess->status = 'Disetujui';
        $approvalProcess->approved_at = now();
        $approvalProcess->save();

        return redirect()->back()->with('success', 'Berhasil! pemesanan berhasil di setujui.');
    }


}
