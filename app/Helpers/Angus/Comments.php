<?php
//app/Helpers/Angus/Comments.php
namespace App\Helpers\Comments;

use Illuminate\Support\Facades\DB;

class Comments {
  function __construct() {
      $this->model = "VW";
    }
    /**
     * @param int $user_id User-id
     *
     * @return string
     */
    public function get_comments() {
      return 12345;
    }
}
