<?php

namespace App\Http\Controllers;

use App\Models\Button;
use Illuminate\Http\Request;

class ButtonController extends Controller
{

    public function index()
    {

        $buttons = Button::all();

        return view('dashboard', compact('buttons'));
    }


    public function showButton($id)
    {
        $button = Button::findOrFail($id);


        if (!$button->hyperlink) {
            return redirect()->route('button.configure', ['id' => $button->id]);
        }

        return redirect($button->hyperlink);
    }


    public function configure($id)
    {
        $button = Button::findOrFail($id);

        return view('configure', compact('button'));
    }

    public function saveConfiguration(Request $request, $id)
    {

        $request->validate([
            'hyperlink' => 'nullable|url',
            'color' => 'required|string',
        ]);

        $button = Button::findOrFail($id);

        $button->hyperlink = $request->hyperlink;
        $button->color = $request->color;

        $button->save();

        return redirect('/');
    }
}


