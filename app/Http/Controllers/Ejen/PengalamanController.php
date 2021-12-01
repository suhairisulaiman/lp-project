<!-- <?php

namespace App\Http\Controllers\Ejen;

use Illuminate\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permohonan;

class PermohonanController extends Controller
{
    public function index()
    {
        return view('ejen.permohonan.index', compact('senarai_permohonan'));
    }

    public function create()
    {
        // show create form
        return view('ejen.permohonan.create');
    }

    public function store(Request $request)
    {
        // store to ejen table using model
        $permohonan = new Permohonan();
        $permohonan->user_id = auth()->user()->id;
        $permohonan->save();

        // return permohonan index
        return redirect()->to('/ejen/senarai-permohonan')->with([
            'type' => 'alert-primary',
            'message' => 'Berjaya simpan Ejen'
        ]);

    }
} -->
