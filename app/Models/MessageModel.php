<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'MESSAGE';
    protected $primaryKey = 'idMessage';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'idUtilisateur',
        'titreMessage',
        'contenuMessage',
        'imageMessage',
        'enLigne',
        'taillePoliceTitre',
        'taillePoliceContenu',
        'typePoliceTitre',
        'typePoliceContenu',
        'alignementMessage',
    ];
}
