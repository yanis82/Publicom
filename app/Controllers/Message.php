<?php

namespace App\Controllers;

use App\Models\MessageModel;
use CodeIgniter\Files\File;

class Message extends BaseController
{
    private $messageModel;
    public function __construct()
    {
        $this->messageModel = new MessageModel();
    }
    public function modifierForm($idMessage): string
    {
        return view('message/modifierForm', ['idMessage' => $idMessage]);
    }

    public function modifier()
    {
        $inputValues = [
            "titre" => $this->request->getPost("titre"),
            "message" => $this->request->getPost("message"),
            "enLigne" => $this->request->getPost("tienLigne"),
            "image" => $this->request->getFile("imageBackground"),
            "idMessage" => $this->request->getPost("idMessage"),
        ];
        if ($inputValues['titre']) {
            $inputValuesToUpdate['titreMessage'] = $inputValues['titre'];
        }
        if ($inputValues['message']) {
            $inputValuesToUpdate['contenuMessage'] = $inputValues['message'];
        }
        if ($inputValues['enLigne']) {
            $inputValuesToUpdate['enLigne'] = $inputValues['enLigne'];
        }
        if ($inputValues['image'] !== null) {
            $dataUpload = $this->upload();

            if ($dataUpload['isOk']) {
                $inputValuesToUpdate['imageMessage'] = $dataUpload['path'];
                return Utilitaires::success('Message modifié avec succès');
            } else {
                return Utilitaires::error($dataUpload['error']);
            }

        }

        $this->messageModel->update(['idMessage' => $inputValues['idMessage']], $inputValuesToUpdate);
        return json_encode(['inputValues' => $inputValues, 'inputToUpdate' => $inputValuesToUpdate]);
    }

    // public function suprimer()
    // {
    //     // Get the data from the database
    //     $data = $this->view->lister();

    //     // Check if the submit button has been clicked
    //     if (isset($_POST['submit'])) {
    //         // Get the checked checkboxes
    //         $checkedCheckBoxes = $this->input->post('checkbox');

    //         // Loop through the checked checkboxes and delete the corresponding columns
    //         foreach ($checkedCheckBoxes as $checkedCheckbox) {
    //             $this->db->drop_column('messages', $checkedCheckbox);
    //         }

    //         // Refresh the data
    //         $data = $this->view->lister();
    //     }

    //     // Return the data
    //     return view('listeMessage', ['data' => $data]);

    // }


    public function lister(): string
    {
        $messageModel = new MessageModel();
        $data = $messageModel->findAll();

        return view('listeMessage', ['data' => $data]);
    }

    public function creerForm()
    {
        return view('message/creerForm');
    }
    public function creer()
    {
        $dataUpload = $this->upload();

        if ($dataUpload['isOk']) {
            $relativePath = $dataUpload['path'];
            $data = [
                'idUtilisateur' => session()->get('isConnected')['IDUTILISATEUR'],
                'titreMessage' => $this->request->getPost('titre'),
                'contenuMessage' => $this->request->getPost('message'),
                'imageMessage' => $relativePath,
                'enLigne' => !empty($this->request->getPost('enLigne')),
            ];
            $messageModel = new MessageModel();
            $messageModel->insert($data);
            return Utilitaires::success('Message créé avec succès');
        } else {
            return Utilitaires::error($dataUpload['error']);
        }
    }


    private function upload()
    {
        $validationRule = [
            'imageBackground' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[imageBackground]',
                    'is_image[imageBackground]',
                    'mime_in[imageBackground,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    // 'max_size[imageBackground,100]',
                    // 'max_dims[imageBackground,1024,768]',
                ],
            ],
        ];
        if (!$this->validate($validationRule)) {
            $dataValidator = $this->validator->getErrors();
            // return json_encode($dataValidator);
            return json_encode(['isOk' => false, 'error' => 'Le fichier n \'est pas une image']);
        }

        $img = $this->request->getFile('imageBackground');

        if (!$img->hasMoved()) {
            $relativePath = $img->store();
            $filepath = WRITEPATH . 'uploads/' . $relativePath;

            $data = ['uploaded_fileinfo' => new File($filepath)];

            return ['isOk' => true, 'path' => $relativePath];
        }

        return ['isOk' => false, 'error' => 'Le fichier a changé de place'];
    }

    public function showImage($pathFolder, $pathFile)
    {
        $path = $pathFolder . '/' . $pathFile;
        $filepath = WRITEPATH . 'uploads/' . $path;

        $mime = mime_content_type($filepath);
        header('Content-Length: ' . filesize($filepath));
        header("Content-Type: $mime");
        header('Content-Disposition: inline; filename="' . $filepath . '";');
        readfile($filepath);
        exit();

    }

}
