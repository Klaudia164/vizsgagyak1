<?php

class felhasznalok {
    
    private $id;
    private $nev;
    private $email;
    private $szuletes;
    private $nem;

    public function set_user($id, $conn) {
        // adatbázisból lekérdezzük
        $sql = "SELECT id, nev, email, szuletes, nem FROM jelentkezok WHERE id = ".$id."";
        if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->id = $row['id'];
                $this->nev = $row['nev'];
                $this->email = $row['email'];
                $this->szuletes = $row['szuletes'];
                $this->nem = $row['nem'];
            }
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function get_email() {
        return $this->email;
    }

    public function get_nev() {
        return $this->nev;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_szuletes() {
        return $this->szuletes;
    }
    public function get_nem() {
        return $this->nem;
    }


    public function felhasznalokListaja($conn) {
        $lista = array();
        $sql = "SELECT id FROM jelentkezok";
        if($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
                    $lista[] = $row['id'];
                }
            }
        }
        return $lista;
    }
}

?>
