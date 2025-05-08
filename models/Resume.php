<?php
require_once './config/db.php';

class Resume{
    private $db;

    public function __construct(){
        $this->db = database::connect();
    }
    public function all(){
        $stmt = $this->db->query("SELECT *, singkatan, part_name, nama_model, part_number FROM 
                resume_claim JOIN part_customer ON resume_claim.id_part_cust = part_customer.id_part_cust 
                JOIN part ON part_customer.id_part = part.id_part JOIN model ON part_customer.id_model = model.id_model
                JOIN customer ON part_customer.id_customer = customer.id_customer ORDER BY id_resume_claim DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($id){
        $stmt = $this->db->query("SELECT *, singkatan, part_name, nama_model, part_number FROM 
                resume_claim JOIN part_customer ON resume_claim.id_part_cust = part_customer.id_part_cust 
                JOIN part ON part_customer.id_part = part.id_part JOIN model ON part_customer.id_model = model.id_model
                JOIN customer ON part_customer.id_customer = customer.id_customer WHERE id_resume_claim = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create($data){
        $status = "OPEN";
        $proses = "sakanobory";
        $stmt = $this->db->prepare("INSERT INTO resume_claim (id_part_cust, id_source, tanggal, no_claim, 
                                    status, problem, proses, qty_ng) 
                                    VALUES (?, ?, ?, ?, ?, ?,?,?)");
        $stmt->execute([$data['id_part_cust'], $data['id_source'], $data['tanggal'], $data['no_claim'], 
                        $status, $data['problem'], $proses, 
                        $data['qty_ng']]);
    }
    public function updateStatus($id, $data){
        $stmt = $this->db->prepare("UPDATE resume_claim SET proses = ? WHERE id_resume_claim = ?");
        $stmt->execute([$data['proses'], $id]);
    }
    public function createAnalysis($data){
        $status = "CLOSED";
        $proses = "Approved";
        $stmt = $this->db->prepare("UPDATE resume_claim SET problem=?,occured = ?, lost_inspection = ?, status = ?, proses = ?, pencegahan = ? WHERE id_resume_claim = ?");
        try{
            $stmt->execute([
                $data['problem'],
                $data['occured'], 
                $data['lost_inspection'], 
                $status, 
                $proses, 
                $data['pencegahan_file'] ,
                $data['id_resume_claim']]);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function delete($id){
        $stmt=$this->db->prepare("DELETE from resume_claim where id_resume_claim = ?");
        $stmt->execute([$id]);
    }
}