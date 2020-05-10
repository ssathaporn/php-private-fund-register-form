<?php
    include('register_func.php');    

    if( isset($_POST ) ){

        $db = new MysqliDb([
            'host' => 'localhost',
            'username' => DB_USER, 
            'password' => DB_PASSWORD,
            'db'=> DB_NAME,
            'charset' => 'utf8'
        ]);


        if( $_GET['action'] == 'edit_fee' ){
            $datas = Array (
                'custom_frontend_fee' => $_POST['value']
            );
            $db->where ('id', $_POST['id']);
            $update = $db->update('#', $datas);

            echo json_encode( ['result' => $update] );
            exit;
        }

    }

?>