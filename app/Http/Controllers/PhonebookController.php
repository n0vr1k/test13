<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhonebookModal;
//use Validator;
use Illuminate\Support\Facades\Validator;
class PhonebookController extends Controller
{
    public function phonebook() {

    return response()->json(PhonebookModal::paginate(5), 200);
    }

//    ________________________________phonebookById______________________________
    public function phonebookById($id){
        $phonebook = PhonebookModal::find($id);
        if (is_null($phonebook)){
            return response()->json(['error'=>true, 'message'=> 'Note found'], 404);
        }
        return response()->json($phonebook, 200);
    }
//    ________________________________phonebookSave______________________________
    public function phonebookSave(Request $reguest) {
        $rules =[


//            'iso' => 'required|min:2|max:2',
            'name' => 'required|min:3',
            'email' => 'email:rfc,dns|required|min:3',
         'phone' => 'required|min:7',

        ];
        $validator = Validator::make($reguest->all(), $rules);
        if ($validator->fails()){

            return response()->json($validator->errors(), 400);
        }

        $phonebook = PhonebookModal::create($reguest->all());
        return response()->json($phonebook, 201);
    }





//    ________________________________phonebookEDIT______________________________
    public function phonebookEdit(Request $reguest,  $id) {
        $rules =[

            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'phone' => 'digits:7',

        ];
        $validator = Validator::make($reguest->all(), $rules);
        if ($validator->fails()){

            return response()->json($validator->errors(), 400);
        }


        $phonebook = PhonebookModal::find($id);
        if (is_null($phonebook)){
            return response()->json(['error'=>true, 'message'=> 'Note found'], 404);
        }
        $phonebook->update($reguest->all());
        return response()->json($phonebook, 200);
    }




//    ________________________________phonebookDELETE______________________________
    public function phonebookDelite(Request $reguest,  $id) {

        $phonebook = PhonebookModal::find($id);
        if (is_null($phonebook)){
            return response()->json(['error'=>true, 'message'=> 'Note found'], 404);
        }
        $phonebook->delete();
        return response()->json('', 204);
    }
}



