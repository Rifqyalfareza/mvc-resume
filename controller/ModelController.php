<?php
require_once './models/model.php';

class ModelController{
    private $model;

    public function __construct(){
        $this->model = new model();
    }
    public function index(){
        $models = $this->model->all();
        include './view/model/index.php';
    }
    public function create(){
        include './view/model/create.php';
    }
    public function store($data){
        try{
            $this->model->create($data);
            $_SESSION['toast'] = 'Model berhasil ditambahkan.';
            $_SESSION['toast_type'] = 'success';
        }catch(Exception $e){
            $_SESSION['toast'] = 'Gagal menambahkan model.';
            $_SESSION['toast_type'] = 'error';
        }
        header('Location: ?page=model');
    }
    public function update($id,$data){
        try{
            $this->model->update($id,$data);
            $_SESSION['toast'] = 'Model berhasil diubah.';
            $_SESSION['toast_type'] = 'success';
        }catch(Exception $e){
            $_SESSION['toast'] = 'Gagal mengubah model.';
            $_SESSION['toast_type'] = 'error';
        }
        header('Location: ?page=model');
    }
    public function delete($id){
        try{
            $this->model->delete($id);
            $_SESSION['toast'] = 'Model berhasil dihapus.';
            $_SESSION['toast_type'] = 'success';
        }catch(Exception $e){
            $_SESSION['toast'] = 'Gagal menghapus model.';
            $_SESSION['toast_type'] = 'error';
        }
        header('Location: ?page=model');
    }
}