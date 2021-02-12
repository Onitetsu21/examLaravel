<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Command;

class CommandController extends Controller
{
    public function Home(){
        $command = Command::all();
        return view('/commands', ["Commands"=> $command]);
    }

    public function UpdateCommand(Command $command){
        return view('UpdateCommand', ["command" => $command]);
    }

    public function UpdateCommandPost(Request $request, Command $command){
      $command->name = $request->name;
      $command->description = $request->description;
      $command->save();

      return redirect('commands');
    }

    public function DeleteCommand(Command $command){
        $command->delete();
        return back();
    }

    public function CreateCommand(){
        return view('CreateCommand');
    }

    public function CreateCommandPost(Request $request){
        $command = new Command();
        $command->name = $request->name;
        $command->description = $request->description;
        $command->save();
        return redirect('commands');
    }

}
