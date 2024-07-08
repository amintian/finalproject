<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BankTransfer;
use Illuminate\Http\Request;

class BankController extends Controller
{
public function BankSettings(Request $request)
{
    $request->validate([
        'bank_name' => 'required|string|max:255',
        'account_number' => 'required|string|max:255',
        'account_holder' => 'required|string|max:255',
        'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Logic to save the bank transfer settings
    // You can save these settings to the database or configuration files

    return back()->with('success', 'Bank settings saved successfully.');
}
}
