<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'durasi' => 'required|integer',
            'keperluan' => 'required|string',
            'booked_at' => 'required|date',
            'start_from_mining_id' => 'required|integer',
            'end_to_mining_id' => 'required|integer',
            'employee_id' => 'required|integer',
            'vehicles_id' => 'required|integer',
            'approvers' => 'required|array',
            'approvers.*.approver_id' => 'required|integer',
            'approvers.*.level' => 'required|integer|between:1,5',
        ];
    }
}
