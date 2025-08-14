<?php
parse_str(file_get_contents("php://input"), $input);
echo json_encode($input);
