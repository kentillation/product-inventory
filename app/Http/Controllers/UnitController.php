<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitModel;

class UnitController extends Controller
{
    public function create() {
        return view('unit/unit');
    }
    public function save(Request $request) {
        $unit = new UnitModel;
        $unit->unit = $request->input('unit');
        $unit->save();
        return redirect(route('unit-list'));
    }

    public function list() {
        $unit = UnitModel::all();
        return view("unit/unit", ['tbl_units' => $unit]);
    }

    public function update(Request $request, $id) {
        $unit = UnitModel::find($id);
        $response = [
            'tbl_units' => $unit
        ];
        return view('unit/edit-unit', $response);
    }

    public function saveUpdate(Request $request, $id) {
        $data = [
            'unit' => $request->input()['unit']
        ];
        $update_unit = UnitModel::where('id', $id)->update($data);
        return redirect(route('unit-list'));
    }

    public function delete($id) {
        $unit = UnitModel::find($id);
        $unit->delete();
        return redirect(route('unit-list'));
    }
}
