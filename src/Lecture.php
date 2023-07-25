<?php
require "connection.php";



class Lecture 
{
    public $id;
    public  $subject;
    public  $date;
    public  $name;
    public  $lecturer;
    public $start_time;
    public $end_time;
    public $link;

    public function __construct($subject, $date, $name, $lecturer, $start_time, $end_time, $link)
    {
        $this->subject = $subject;
        $this->date = $date;
        $this->name = $name;
        $this->lecturer = $lecturer;
        $this->start_time = $start_time;
        $this->end_time = $end_time;
        $this->link = $link;
    }

    public function start()
    {

        $stmt = Database::getConnection()->prepare('SELECT * FROM `lecturer_subjects` WHERE `subject_subject`= ?
        AND `lecturer_email`= ? ');
        $stmt->bind_param('ss', $this->subject, $this->lecturer); // 's' specifies the variable type => 'string'

        $stmt->execute();

        $rs = $stmt->get_result();

        $num_rows = $rs->num_rows;

        if ($num_rows == 1) {
            $data = $rs->fetch_assoc();

            date_default_timezone_set('Asia/Colombo');

            $datetime = date('Y-m-d H:i:s');


            $stmt = Database::getConnection()->prepare("INSERT INTO `lecture`
            (`created_date`,`start_date`,`start_time`,`end_time`,`link`,`name`,`lecture_subjects_id`)
            VALUES (?,?,?,?,?,?,?);
             ");
            $stmt->bind_param('sssssss', $datetime, $this->date, $this->start_time, $this->end_time, $this->link, $this->name, $data["id"]); // 's' specifies the variable type => 'string'

            $stmt->execute();
        }
    }

    public  function update($id)
    {

        $this->id = $id;

        $stmt = Database::getConnection()->prepare('SELECT * FROM `lecturer_subjects` WHERE `subject_subject`= ?
        AND `lecturer_email`= ? ');
        $stmt->bind_param('ss', $this->subject, $this->lecturer); // 's' specifies the variable type => 'string'

        $stmt->execute();

        $rs = $stmt->get_result();

        $num_rows = $rs->num_rows;

        if ($num_rows == 1) {
            $data = $rs->fetch_assoc();

            date_default_timezone_set('Asia/Colombo');

            $datetime = date('Y-m-d H:i:s');


            $stmt = Database::getConnection()->prepare("UPDATE `lecture`
            SET `start_date` = ?,`start_time` = ? ,`end_time` = ? ,`link` = ? ,`name` = ? 
            WHERE `id`= ?
            ;
             ");
            $stmt->bind_param(
                'ssssss',
                $this->date,
                $this->start_time,
                $this->end_time,
                $this->link,
                $this->name,
                $this->id
            ); // 's' specifies the variable type => 'string'

            $stmt->execute();
        }
    }


    
}
