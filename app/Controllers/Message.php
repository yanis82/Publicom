<?php

namespace App\Controllers;

use App\Models\Message as ModelsMessage;

class Message extends BaseController
{
    public function modifier($idMessage): string
    {
        return '<h1> id employe : '.$idMessage.'</h1>';
    }

    public function suprimer()
    {
        // Get the data from the database
        $data = $this->view->lister();

        // Check if the submit button has been clicked
        if (isset($_POST['submit'])) {
            // Get the checked checkboxes
            $checkedCheckBoxes = $this->input->post('checkbox');

            // Loop through the checked checkboxes and delete the corresponding columns
            foreach ($checkedCheckBoxes as $checkedCheckbox) {
                $this->db->drop_column('messages', $checkedCheckbox);
            }

            // Refresh the data
            $data = $this->view->lister();
        }

        // Return the data
        return view('listeMessage', ['data' => $data]);
        
    }
    
    
    public function lister(): string
    {
        $messageModel=new ModelsMessage();
        $data= $messageModel->findAll();;
        return view('listeMessage',['data'=>$data]);
    }
}
