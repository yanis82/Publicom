<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoriqueMessageModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'HISTORIQUEMESSAGE';
    protected $primaryKey = 'IDHISTORIQUEMESSAGE';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ["IDHISTORIQUEMESSAGE", "IDMESSAGE", "IDUTILISATEUR", "DATEHISTORIQUEMESSAGE", "TITREHISTORIQUEMESSAGE", "CONTENUHISTORIQUEMESSAGE", "TAILLEPOLICECONTENU", "TAILLEPOLICETITRE", "TYPEPOLICETITRE", "TYPEPOLICECONTENU", "ENLIGNE", "TYPEMODIFICATION", "IMAGEMESSAGE"];
}
