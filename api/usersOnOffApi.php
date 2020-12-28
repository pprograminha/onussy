<?php
    require './tasksApi.php';

    
    class usersOnOffApi
    {

        public function __construct()
        {

            $connectDB = tasksApi::Class('connectDatabaseModel');
            $queryDB = $connectDB->query("SELECT * FROM `users` ORDER BY id ASC");

            $queryDB->execute();
            $datas = $queryDB->fetchAll(PDO::FETCH_ASSOC);

            if ($queryDB->rowCount()) 
                echo json_encode(array('status'=> 'success', 'datas' => $datas));
            else  echo json_encode(array('status'=> 'error', 'datas' => 'not content 204'));
        }
    }
    tasksApi::Class('usersOnOffApi');
