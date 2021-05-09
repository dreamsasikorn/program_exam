<?php

namespace App\Http\Controllers;

use App\Models\Contacts as ContactsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Contacts_Controller extends Controller
{
    public function phoneAddress(Request $data)
    {
        $picture = $data->file('picture');
        $telephone = $data->input('telephone');
        if ($picture != null) {
            $picture->move(public_path('/profilecontacts/'), $telephone . '-' . $picture->getClientOriginalName());
            $picture = "/profilecontacts/" . $telephone . '-' . $picture->getClientOriginalName();
        }
        $name = $data->input('name');
        $email = $data->input('email');
        $note = $data->input('note');

        $contactsdata = array(
            'picture'  =>  $picture,
            'name' => $name,
            'telephone' => $telephone,
            'email' => $email,
            'note' => $note
        );

        ContactsModel::add_contacts_db($contactsdata);
        return redirect('phoneview');
    }
    public function phoneview()
    {
        $contactsdata = ContactsModel::get_contacts_db();
        $data = array(
            'contactsdata' => $contactsdata
        );
        return view('managephone', $data);
    }

    public function phonedetail($contacts_id)
    {

        $detaildata = ContactsModel::get_detail_db($contacts_id);
        $data = array(
            'detaildata' => $detaildata
        );
        return view('phonedetail', $data);
    }
    public function phoneupdate(Request $data)
    {
        $contacts_id = $data->input('contacts_id');
        $name = $data->input('name');
        $telephone = $data->input('telephone');
        $email = $data->input('email');
        $note = $data->input('note');

        $data = array(
            'name' => $name,
            'telephone' => $telephone,
            'email' => $email,
            'note' => $note
        );

        ContactsModel::update_detail($contacts_id, $data);
        return redirect('phonedetail/' . $contacts_id);
    }

    public function delete_contacts($contacts_id)
    {

        $detaildata = ContactsModel::get_detail_db($contacts_id);
        File::delete(public_path($detaildata[0]->picture));
        ContactsModel::delete_contacts($contacts_id);

        return redirect('phoneview');
    }
}
