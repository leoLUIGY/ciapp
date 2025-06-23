<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model {
    protected $table = "article";
    protected $allowedFields = ["title", "content"];
}