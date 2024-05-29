<?php
include('connect.php');

function addReview($name, $phone, $review) {
    global $connect;

    $name = mysqli_real_escape_string($connect, $name);
    $phone = mysqli_real_escape_string($connect, $phone);
    $review = mysqli_real_escape_string($connect, $review);

    if (!empty($name) && !empty($phone) && !empty($review)) {
        $query = "INSERT INTO reviews (`name`, `phone`, `msg`) VALUES ('$name', '$phone', '$review')";

        if (mysqli_query($connect, $query)) {
            header('Location:reviews.php?success=true');
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connect);
        }
    } else {
        echo "Запрос не отправлен!";
    }
}

function showHeader() {
    //верстка хедера
    require 'header.php';
}
function showFooter() {
    //верстка хедера
    require 'footer.php';
}

function catalogFilling ($connect){
    $sql = "SELECT * FROM `products`";
    if($result = $connect->query($sql)){
        while($row = $result->fetch_array()){
            $title = $row['title'];
            $price = $row['price'];
            $image = $row['image'];
            $descriptions = $row['descriptions'];
            require 'basket.php';
        }
    }
}
?>