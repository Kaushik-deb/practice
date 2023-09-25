<?php
// $numbers = [10, 20, 30, 40, 50];

// // Displaying array elements using a loop
// foreach ($numbers as $number) {
//     echo $number." ";
// }



// Challenge 1: Numeric Array Average
// Create a PHP function that takes a numeric array as input and returns the average (mean) of its elements.

// Challenge 2: Array Search
// Write a PHP script that searches for a specific element in an array and returns its index if found, or a message if not found.

// Challenge 3: Associative Array Sort
// Build a PHP function that sorts an associative array of student names and their respective grades in descending order of grades. Output the sorted array.

// Challenge 4: Shopping Cart
// Create a PHP shopping cart using an array to store products (associative arrays with name and price). Implement functionality to add, remove, and display items in the cart.

// Challenge 5: Matrix Multiplication
// Write a PHP script that performs matrix multiplication for two given multidimensional arrays and outputs the result.

// Challenge 6: Palindrome Checker
// Build a PHP function that checks whether a given string is a palindrome (reads the same backward as forward) and returns true or false.

// Challenge 7: Unique Values
// Create a PHP function that takes an array of numbers and returns a new array containing only the unique values (removing duplicates).

// Challenge 8: Merge Arrays
// Write a PHP function that takes two numeric arrays as input and merges them into a single array, removing any duplicates.

// Challenge 9: Word Frequency Counter
// Develop a PHP script that takes a paragraph of text and generates an associative array where keys are unique words, and values are the frequency of each word in the text.

// Challenge 10: Tic-Tac-Toe Game
// Create a PHP implementation of the Tic-Tac-Toe game. Use a multidimensional array to represent the game board and implement the game logic, including checking for a win or a draw.

// ✅Challenge 1: Numeric Array Average


// function calculateAverage($numbers) {
//     $sum = array_sum($numbers);
//     $count = count($numbers);
//     return $count > 0 ? $sum / $count : 0;
// }

// $numericArray = [10, 20, 30, 40, 50];
// $average = calculateAverage($numericArray);
// echo "Average: $average";



// ✅Challenge 2: Array Search


// function findElementIndex($array, $element) {
//     $index = array_search($element, $array);
//     return $index !== false ? $index : "Element not found";
// }

// $fruits = ['apple', 'banana', 'cherry'];
// $searchElement = 'banana';
// $result = findElementIndex($fruits, $searchElement);
// echo "Index of $searchElement: $result";


// ✅Challenge 3: Associative Array Sort


// $students = [
//     'Alice' => 85,
//     'Bob' => 92,
//     'Charlie' => 78
// ];

// arsort($students);
// print_r($students);


// ✅Challenge 4: Shopping Cart


$cart = [];

// Add items to the cart
function addToCart($cart, $product, $price) {
    $cart[] = ['product' => $product, 'price' => $price];
    return $cart;
}

$cart = addToCart($cart, 'Laptop', 800);
$cart = addToCart($cart, 'Smartphone', 400);
print_r($cart);

// // Remove an item from the cart
// function removeFromCart($cart, $index) {
//     if (isset($cart[$index])) {
//         unset($cart[$index]);
//         return array_values($cart); // Reindex the array
//     }
//     return $cart;
// }

// $cart = removeFromCart($cart, 0);

// // Display items in the cart
// foreach ($cart as $item) {
//     echo $item['product'] . ': $' . $item['price'] . '<br>';
// }


//✅ Challenge 5: Matrix Multiplication


// function matrixMultiply($matrix1, $matrix2) {
//     $result = [];
//     foreach ($matrix1 as $i => $row) {
//         foreach ($matrix2[0] as $j => $col) {
//             $result[$i][$j] = 0;
//             foreach ($row as $k => $val) {
//                 $result[$i][$j] += $val * $matrix2[$k][$j];
//             }
//         }
//     }
//     return $result;
// }

// $matrix1 = [[1, 2], [3, 4]];
// $matrix2 = [[5, 6], [7, 8]];

// $resultMatrix = matrixMultiply($matrix1, $matrix2);
// print_r($resultMatrix);


// ✅Challenge 6: Palindrome Checker


// function isPalindrome($str) {
//     $str = str_replace(' ', '', $str);
//     $str = strtolower($str);
//     return $str === strrev($str);
// }

// $text = "A man a plan a canal Panama";
// $isPalindrome = isPalindrome($text);
// echo $isPalindrome ? 'Palindrome' : 'Not a Palindrome';


//✅ Challenge 7: Unique Values


// function getUniqueValues($numbers) {
//     return array_values(array_unique($numbers));
// }

// $numbers = [1, 2, 2, 3, 4, 4, 5];
// $uniqueValues = getUniqueValues($numbers);
// print_r($uniqueValues);


// ✅Challenge 8: Merge Arrays


// function mergeArrays($array1, $array2) {
//     return array_values(array_unique(array_merge($array1, $array2)));
// }

// $numbers1 = [1, 2, 3];
// $numbers2 = [3, 4, 5];
// $mergedArray = mergeArrays($numbers1, $numbers2);
// print_r($mergedArray);


// ✅Challenge 9: Word Frequency Counter


// function wordFrequency($text) {
//     $words = str_word_count(strtolower($text), 1);
//     $wordCount = array_count_values($words);
//     arsort($wordCount);
//     return $wordCount;
// }

// $text = "This is a sample text. This text contains words, and it is a sample.";
// $wordFrequency = wordFrequency($text);
// print_r($wordFrequency);









?>