<?php
   class List_Procduct {
    public static function getAll() {
        // Mô phỏng việc lấy dữ liệu từ cơ sở dữ liệu
        return [
            ['id' => 1, 'name' => 'Product 1', 'price' => 10],
            ['id' => 2, 'name' => 'Product 2', 'price' => 20],
            ['id' => 3, 'name' => 'Product 3', 'price' => 30],
        ];
    }

    public static function getProduct($id) {
        // Mô phỏng việc lấy dữ liệu từ cơ sở dữ liệu dựa trên ID
        $products = self::getAll();
        foreach ($products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }
}
  ?>