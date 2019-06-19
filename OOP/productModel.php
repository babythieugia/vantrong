<?php
class productModel extends Database {
    public $table = "product";

    public function __construct($ipDatabase, $userDatabase, $passDatabase, $databaseName){
        parent::__construct($ipDatabase, $userDatabase, $passDatabase, $databaseName);
    }
    /**
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function index() {
        // $this->>connection
        $sqlSelect = "SELECT * FROM ".$this->table;
        $result = $this->connection->query($sqlSelect);
        return $result;
    }
    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * không cần cái key id array('product_name' => 'son môi')
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function create($data) {
        if(isset($data["product_name"])&& isset($data["product_desc"])&& isset($data["created"])){
            $product_name=$data["product_name"];
            $product_desc=$data["product_desc"];
            $created=$data["created"];
            $sqlInsert="INSERT INTO ".$this->table." (product_name, product_desc, created) VALUES ('$product_name', '$product_desc', '$created')";

            return $this->connection->query( $sqlInsert);
        }
    }
    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * $data cần đủ các cột trong CSDL của bảng products
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function edit($data,$id) {
        if(isset($data["product_name"])&&isset($data["product_desc"])&&isset($data["create"])){
            $product_name=$data["product_name"];
            $product_desc=$data["product_desc"];
            $created=$data["created"];
            $sqlInsert="UPDATE".$this->table."SET product_name=".$product_name.",product_desc=".$product_desc.",create=".$created."Where product_id=".$id;
            return $this->connection->query($sqlInsert);
        }

    }
    /**
     * Xóa
     * @param $prodcut_id
     */
    public function delete($prodcut_id) {

        $sqlInsert="DELETE FROM ".$this->table."where  product_id=".$prodcut_id;
        return $this->connection->query($sqlInsert);

    }
}
