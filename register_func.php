<?php
    require_once ('vendor/autoload.php');

    define('DB_NAME', 'fund');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    function pr($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    function checkbox_value_to_array($datas){
        $result = [];
        foreach( $datas as $key => $value ){
            $result[] = $value;
        }
        return implode('-', array_reverse($result));
    }

    function mysql_date_format($date){
        $convert_date = DateTime::createFromFormat('d/m/Y', $date);
        $convert_date->setTimeZone(new DateTimeZone('Asia/Bangkok'));
        return $convert_date->format('Y-m-d');
    }

    function render_dropdown_citizen( $name ){
        $db = new MysqliDb([
            'host' => 'localhost',
            'username' => DB_USER, 
            'password' => DB_PASSWORD,
            'db'=> DB_NAME,
            'charset' => 'utf8'
        ]);  

        $countries = $db->get('fund_countries');

        $html = '<select name="'. $name .'" class="form-control fc-alt"> ';
        $html .= '<option value="">-- เลือกสัญชาติ</option> ';
        foreach($countries as $country){
            $html .= '<option value="'. $country['citizen_ship'] .'">'. $country['country'] .'</option> ';
        }
        $html .= '</select>';
        return $html;
    }
?>