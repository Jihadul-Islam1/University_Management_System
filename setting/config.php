<?php
if (!class_exists('UniversityManagement')) {
    class UniversityManagement {
        public $server = "localhost";
        public $username = "root";
        public $password = "";
        public $dbname = "jxnu";
        public $connectdb;

        function __construct() {
            $this->connectdb = new mysqli($this->server, $this->username, $this->password, $this->dbname);
            if ($this->connectdb->connect_error) {
                die("Connection failed: " . $this->connectdb->connect_error);
            }
        }

        public function student_login_check($st_username, $st_password) {
            $sql = "SELECT * FROM st_info WHERE st_username='$st_username' AND st_password='$st_password'";
            return $this->connectdb->query($sql)->num_rows;
        }

        public function student_info_select($st_username) {
            $sql = "SELECT * FROM st_info WHERE st_username='$st_username'";
            return $this->connectdb->query($sql);
        }

        public function student_password_change($password, $username) {
            $sql = "UPDATE st_info SET st_password='$password' WHERE st_username='$username'";
            return $this->connectdb->query($sql);
        }

        public function student_info_display_admin1() {
            return $this->connectdb->query("SELECT * FROM st_info");
        }

        public function student_info_display_admin($grade) {
            return $this->connectdb->query("SELECT * FROM st_info WHERE st_grade='$grade'");
        }

        public function grade_st_info($grade) {
            return $this->connectdb->query("SELECT * FROM st_info WHERE st_grade='$grade'");
        }

        public function add_student($fullname, $username, $password, $grade, $roll, $dob, $address, $district, $gender, $father, $mother, $contact) {
            $sql = "INSERT INTO st_info(st_fullname, st_username, st_password, st_grade, roll_no, st_dob, st_address, st_district, st_gender, st_father, st_mother, st_parents_contact)
                    VALUES('$fullname','$username','$password','$grade','$roll','$dob','$address','$district','$gender','$father','$mother','$contact')";
            return $this->connectdb->query($sql);
        }

        public function edit_studentid($id) {
            return $this->connectdb->query("SELECT * FROM st_info WHERE st_id='$id'");
        }

        public function update_student_info($fullname, $username, $password, $grade, $roll, $dob, $address, $district, $gender, $father, $mother, $phone, $id) {
            $sql = "UPDATE st_info SET 
                        st_fullname='$fullname',
                        st_username='$username',
                        st_password='$password',
                        st_grade='$grade',
                        roll_no='$roll',
                        st_dob='$dob',
                        st_address='$address',
                        st_district='$district',
                        st_gender='$gender',
                        st_father='$father',
                        st_mother='$mother',
                        st_parents_contact='$phone'
                    WHERE st_id='$id'";
            return $this->connectdb->query($sql);
        }

        public function delete_student($id) {
            return $this->connectdb->query("DELETE FROM st_info WHERE st_id='$id'");
        }

        public function teacher_info($username, $staff_type) {
            $sql = "SELECT * FROM teacher_info WHERE t_staff_type='$staff_type' AND t_username='$username'";
            return $this->connectdb->query($sql);
        }

        public function teacher_info_display_admin() {
            return $this->connectdb->query("SELECT * FROM teacher_info");
        }

        public function teacher_info_instudent($grade) {
            return $this->connectdb->query("SELECT * FROM subjects_info WHERE grade='$grade'");
        }

        public function add_teacher($fullname, $address, $email, $username, $password, $father, $mother, $dob, $qualification, $contact, $staff_type, $gender) {
            $sql = "INSERT INTO teacher_info(t_fullname, t_address, t_email, t_username, t_pass, t_father, t_mother, t_dob, t_qualification, t_contact, t_staff_type, t_gender)
                    VALUES('$fullname','$address','$email','$username','$password','$father','$mother','$dob','$qualification','$contact','$staff_type','$gender')";
            return $this->connectdb->query($sql);
        }

        public function delete_teacher($id) {
            return $this->connectdb->query("DELETE FROM teacher_info WHERE t_id='$id'");
        }

        public function edit_teacherid($id) {
            return $this->connectdb->query("SELECT * FROM teacher_info WHERE t_id='$id'");
        }

        public function update_teacher_info($fullname, $address, $email, $father, $mother, $dob, $qualification, $contact, $staff_type, $gender, $id) {
            $sql = "UPDATE teacher_info SET 
                        t_fullname='$fullname',
                        t_address='$address',
                        t_email='$email',
                        t_father='$father',
                        t_mother='$mother',
                        t_dob='$dob',
                        t_qualification='$qualification',
                        t_contact='$contact',
                        t_staff_type='$staff_type',
                        t_gender='$gender'
                    WHERE t_id='$id'";
            return $this->connectdb->query($sql);
        }

        public function subject_info() {
            return $this->connectdb->query("SELECT * FROM subjects_info");
        }

        public function grade($grade) {
            return $this->connectdb->query("SELECT class FROM sub_class_name");
        }

        public function general_setting($name, $address, $phone1, $phone2, $email1, $email2, $start, $about) {
            $sql = "INSERT INTO general_setting(website_name, website_address, website_phone1, website_phone2, website_email1, website_email2, website_start, web_about)
                    VALUES('$name','$address','$phone1','$phone2','$email1','$email2','$start','$about')";
            return $this->connectdb->query($sql);
        }

        public function general_setting_check() {
            return $this->connectdb->query("SELECT * FROM general_setting");
        }

        public function general_setting_update($name, $address, $phone1, $phone2, $email1, $email2, $start, $about) {
            $sql = "UPDATE general_setting SET 
                        website_name='$name',
                        website_address='$address',
                        website_phone1='$phone1',
                        website_phone2='$phone2',
                        website_email1='$email1',
                        website_email2='$email2',
                        website_start='$start',
                        web_about='$about'";
            return $this->connectdb->query($sql);
        }

        public function meadmin_check($username, $password) {
            $sql = "SELECT * FROM meadmin WHERE admin_username='$username' AND admin_password='$password'";
            return $this->connectdb->query($sql)->num_rows;
        }

        public function meadmin_username($username) {
            return $this->connectdb->query("SELECT * FROM meadmin WHERE admin_username='$username'");
        }
    }

    $jxnu = new UniversityManagement();
}
?>
