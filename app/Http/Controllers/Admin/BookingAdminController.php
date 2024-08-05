<?php

namespace App\Http\Controllers\Admin;

use App\Exports\VehicleBookingsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVehicleBookingRequest;
use App\Models\ApprovalLevel;
use App\Models\ApprovalProcess;
use App\Models\Approver;
use App\Models\Employee;
use App\Models\MiningState;
use App\Models\Vehicle;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class BookingAdminController extends Controller
{
    public function index(){
        $vehicle_booking_collection = VehicleBooking::with('employees', 'vehicles', 'start_mining_states','end_mining_states')->get();

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
                            ];
                        }
                    }
                }
            }
        }

        return view('pages.dashboard.admin.bookings.index', compact('vehicle_bookings'));
    }

    public function history(){
        return view('pages.dashboard.admin.bookings.history');
    }
    public function create(Request $request){

        logger('View data booking for create booking by admin:', ['data' => $request->all(), 'user' => Auth::user()]);

        $mining_states = MiningState::all();
        $employees = Employee::where('employee_position_id', 5)->get();
        $vehicles = Vehicle::all();

        $approver_collections = Approver::with('employees')->get();
        $approvers = [];
        foreach($approver_collections as $approver){
            foreach ($approver->employees as $employee) {
                $approvers[] = [
                    'id' => $approver->id,
                    'nama_lengkap' => $employee->nama_lengkap,
                ];
            }
        }

        return view('pages.dashboard.admin.bookings.create', compact('mining_states', 'employees', 'vehicles', 'approvers'));
    }

    public function store(Request $request){
        DB::beginTransaction();

        logger('Store booking by admin:', ['data' => $request->all(), 'user' => Auth::user()]);

        try {
            $validator = Validator::make($request->all(), [
                'durasi' => 'required|integer',
                'keperluan' => 'required|string',
                'booked_at' => 'required|date',
                'start_from_mining_id' => 'required|integer',
                'end_to_mining_id' => 'required|integer',
                'employee_id' => 'required|integer',
                'vehicle_id' => 'required|integer',
                'approvers' => 'required|array',
                'approvers.*.approver_id' => 'required|integer',
                'approvers.*.level' => 'required|integer|between:1,5',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $vehicleBooking = VehicleBooking::create($request->only([
                'durasi',
                'keperluan',
                'booked_at',
                'start_from_mining_id',
                'end_to_mining_id',
                'employee_id',
                'vehicle_id',
            ]));


            foreach ($request->approvers as $approver) {
                ApprovalProcess::create([
                    'status' => 'Menunggu',
                    'vehicle_booking_id' => $vehicleBooking->id,
                    'approval_level_id' => ApprovalLevel::where('level', $approver['level'])->first()->id,
                    'approver_id' => $approver['approver_id'],
                ]);
            }

            DB::commit();

            return redirect()->route('admin.dashboard.booking')->with('success', 'Booking berhasil dibuat!');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Booking gagal dibuat! '.$e->getMessage());
        }
    }
    public function show(Request $request){
        // TODO
    }
    public function update(Request $request){
        // TODO
    }
    public function destroy(Request $request){
        // TODO
    }

    public function exportToExcel()
{
    $vehicle_booking_collection = VehicleBooking::with('employees', 'vehicles', 'start_mining_states', 'end_mining_states')->get();

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
                        ];
                    }
                }
            }
        }
    }

    $export = new VehicleBookingsExport();
    $export->setVehicleBookings($vehicle_bookings);
    $excel = Excel::download($export, 'vehicle_bookings.xlsx', \Maatwebsite\Excel\Excel::XLSX);

    return $excel;
}
}
