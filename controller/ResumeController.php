<?php 
require_once './models/Resume.php';
require_once './models/PartCustomer.php';
require_once './models/part.php';
require_once './models/model.php';
require_once './models/customer.php';
require_once './models/src.php';

class ResumeController {
    private $resume, $partCustomer, $part, $model, $customer, $src;

    public function __construct() {   
        $this->resume = new Resume();
        $this->partCustomer = new PartCustomer();
        $this->part = new Part();
        $this->model = new Model();
        $this->customer = new Customer();
        $this->src = new Src();
    }

    public function index() {
        $resumes = $this->resume->all();
        include './view/resume/index.php';
    }

    public function create() {
        $id = $_GET['id'];
        $partCustomers = $this->partCustomer->find($id);
        $srcs = $this->src->all();
        include './view/resume/create.php';
    }

    public function store() {
        try {
            $date = DateTime::createFromFormat('m/d/Y', $_POST['tanggal']);
            if ($date === false) {
                throw new Exception("Format tanggal tidak valid. Harap gunakan format MM/DD/YYYY.");
            }
            $formattedDate = $date->format('Y-m-d');
            $data = [
                'id_part_cust' => (int)$_POST['id_part_cust'],
                'id_source' => (int)$_POST['source_problem'],
                'tanggal' => $formattedDate,
                'no_claim' => $_POST['no_claim'],
                'problem' => $_POST['problem'],
                'qty_ng' => (int)$_POST['qty_ng']
            ];
    
            $this->resume->create($data);
            $_SESSION['toast'] = "Resume berhasil ditambahkan";
            $_SESSION['toast_type'] = "success";
        } catch (Exception $e) {
            error_log("Error in store: " . $e->getMessage());
            $_SESSION['toast'] = "Gagal menambahkan resume: " . $e->getMessage();
            $_SESSION['toast_type'] = "error";
        }
        header('Location: ?page=resume');
    }
    public function storeAnalysis() {
        try {
            // Validate required fields
            $requiredFields = ['id_resume_claim', 'occured', 'lost_inspection', 'problem'];
            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                    throw new Exception("Field '$field' is required.");
                }
            }

            // Validate id_resume
            if (!is_numeric($_POST['id_resume_claim']) || $_POST['id_resume_claim'] <= 0) {
                throw new Exception("Invalid resume ID.");
            }

            // Validate pencegahan file (optional)
            $filePath = null;
            if (!empty($_FILES['pencegahan']['name'])) {
                $allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'text/plain'];
                $maxFileSize = 5 * 1024 * 1024; // 5MB
                $fileType = $_FILES['pencegahan']['type'];
                $fileSize = $_FILES['pencegahan']['size'];

                if (!in_array($fileType, $allowedTypes)) {
                    throw new Exception("Invalid file type. Allowed types: PDF, JPEG, PNG, TXT.");
                }
                if ($fileSize > $maxFileSize) {
                    throw new Exception("File size exceeds 5MB limit.");
                }

                $uploadDir = 'uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = uniqid('report_') . '_' . basename($_FILES['pencegahan']['name']);
                $uploadFile = $uploadDir . $fileName;

                if (!move_uploaded_file($_FILES['pencegahan']['tmp_name'], $uploadFile)) {
                    throw new Exception("Failed to upload file.");
                }
                $filePath = $uploadFile;
            }

            // Prepare data
            $data = [
                'id_resume_claim' => (int)$_POST['id_resume_claim'],
                'occured' => $_POST['occured'],
                'problem'=> $_POST['problem'],
                'lost_inspection' => $_POST['lost_inspection'],
                'pencegahan_file' => $filePath
            ];

            // Log data for debugging
            error_log("Submitting analysis data: " . print_r($data, true));

            $this->resume->createAnalysis($data);
            $_SESSION['toast'] = "Analysis berhasil ditambahkan";
            $_SESSION['toast_type'] = "success";
        } catch (Exception $e) {
            error_log("Error in createAnalysis: " . $e->getMessage());
            $_SESSION['toast'] = "Gagal menambahkan analysis: " . $e->getMessage();
            $_SESSION['toast_type'] = "error";
        }
        header('Location: ?page=resume');
    }

    public function updateStatus() {
        try {
            $this->resume->updateStatus($_GET['id'], ['proses' => 'analysis']);
            $_SESSION['toast'] = "Sakanobory telah diselesaikan";
            $_SESSION['toast_type'] = "success";
        } catch (Exception $e) {
            $_SESSION['toast'] = "Sakanobory gagal diselesaikan";
            $_SESSION['toast_type'] = "error";
        }
        header('Location: ?page=resume');
    }

    public function delete($id){
        try{
            $this->resume->delete($id);
            $_SESSION['toast'] = "Resume berhasil dihapus";
            $_SESSION['toast_type'] = "success";
        } catch (Exception $e) {
            $_SESSION['toast'] = "Gagal menghapus resume: " . $e->getMessage();
            $_SESSION['toast_type'] = "error";
        }
        header('Location: ?page=resume');
    }


}