<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    header('Content-Type: text/csv; charset=utf-8');

    include('register_func.php');
    use League\Csv\Reader;
    use League\Csv\Writer;

    $db = new MysqliDb('localhost', DB_USER, DB_PASSWORD, DB_NAME);
    $colQuery = $db->rawQueryValue("SHOW COLUMNS FROM #");

    $csv = Writer::createFromFileObject(new SplTempFileObject());
    $cols = array();
    foreach($colQuery as $cq ){
        if( $cq != 'id'){
            $cols[] = $cq;
        }
    }
    $csv->insertOne($cols);

    $csv->setDelimiter(",");

    $datas = $db->get('#', null, $cols);
    foreach($datas as $data ){
        // $prepareData = array();
        // foreach($data as $key => $value){
        //     if(($key == 'BirthDate' || $key == 'ExpiryDate') && $value != ''){
                
        //     }
        //     $prepareData[] = $value;
        // }
        $csv->insertOne($data);
    }

    //we detect and adjust the output BOM to be used
    $csv->__toString();
    $csv->setOutputBOM(Reader::BOM_UTF8);
    $csv->output('fundregister_report_'. date('Ymd') .'.csv');
    exit;
?>