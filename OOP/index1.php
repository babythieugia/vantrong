<?php
/**
 * class (lớp)
 * object (đối tượng)
 * instance (thể hiện của 1 class) đối tượng cụ thể
 * class người
 * đối tượng hay instance là tuấn
 */

class student{
    /**
     * thuộc tính trong HĐT
     * là tính chất của class đó
     */
    public $name;
    public $age;
    public $location;
    public $point;
    /**
     * phương thức đầu tiên của class
     * phương thức khởi tạo _construct
     * phương thức nào sẽ chạy khi khởi động đối tượng
     * từ class mà ko cần gọi trực tiếp
     * hàm thì nằm ngoài class
     * còn phương thức method nằm trong class
     * method chính là hàm trong class
     */
    public function __construct($name_param , $age_param , $location_param)
    {
        // Gán tham số truyền vào thuộc tính của class
        /**
         * Trong class để gọi đến chính class thì ta dùng từ khóa $this
         * để gọi thuộc tính $this->tên_thuộc_tính nhưng chú ý là tên thuộc tính
         * không có $
         * $this->$name ( viết sai )
         * $this->name ( viết đúng )
         */
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;

        /**
         * _Method_ là magic method cho ta biết
         * phương thức nào đang được gọi
         */
        echo "<br>_method_".__METHOD__;
    }
    /**
     * Xây dựng phương thức khác
     */
    public function printInfo(){
        echo "<br>_method_".__METHOD__;
        echo "<br> Tên của SV ".$this ->name;
        echo "<br> Tuổi của SV ".$this ->age;
        echo "<br> Quê hương của SV ".$this ->location;

    }

    /**
     * Phương thức tính điểm trung bình
     * @param $point_arr_param
     * @return bool
     */
    public function calculatePoint($point_arr_param) {
        /**
         * is_array() kiểm tra biến có phải 1 mảng hay không
         * !empty() check không rỗng
         * empty() check rỗng
         * ! toán tử ! phủ định người lại
         */
        if (is_array($point_arr_param) && !empty($point_arr_param)) {
            $count = 0;
            $total = 0;
            foreach($point_arr_param as $key => $value) {
                // $total = $total + value;
                $total += $value;
                $count++;
            }
            $point = $total/$count;
            $this->point = $point;
        }
        return false;
    }



}//Kết thúc class
/**
 * khởi tạo đối tượng cụ thể của class
 * sử dụng từ khóa new tên_class
 */

$trong = new student("trong", "21", "Hà Tĩnh");
echo "<br> gọi đến method printInto()";
/**
 * Gọi 1 phương thức
 */
$trong ->printInfo();
/**
 * Gọi 1 số thuộc tính bên trong class
 */
echo "<br> In ra tên của sinh viên bên ngoài class " . $trong->name;
echo "<br> In ra tuổi của sinh viên bên ngoài class " . $trong->age;
echo "<br> In ra quê hương của sinh viên bên ngoài class " . $trong->location;
echo "<br> In ra cấu trúc của class";
/**
 * Xem cấu trúc của 1 class
 * thì sử dụng hàm print_r()
 */
echo "<pre>";
print_r($trong);
echo "</pre>";

//Gọi đến phương thức calculatePoint()
$point = array(

    'java'=> 7,
    'sql' => 5,
    'php' =>9,


);
//gọi đến phương thức class
$trong -> calculatePoint($point);
echo "<br>diem trung binh : " . $trong->point;
