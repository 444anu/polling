<?php
namespace App\Http\Controllers;

    use App\Models\option;
    use App\Models\poll;
    use Illuminate\Http\Request;

class optionController extends Controller
{
//
//
        public function create()
        {
            return view('option');
        }

        public function show($id)
        {
            $option = Option::find($id);
            return view('option', compact('option'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'poll_id' => 'required|exists:polls,id',
                'option' => 'required|string',
            ]);

            $poll_id = $request->input('poll_id');
            $options = $request->input('option');

            foreach ($options as $option) {
                Option::create([
                    'poll_id' => $poll_id,
                    'option' => $option
                ]);
            }

            return redirect()->route('option.create')->with('success', 'Options created successfully');
        }

}
