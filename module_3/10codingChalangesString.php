//  ✅Here are 10 coding challenges based on the concepts of string/array conversions, splitting, concatenating, trimming, padding, replacing, and formatting strings, and word wrapping in PHP:

// 1. CSV to JSON Converter:
// Create a PHP script that reads CSV data and converts it into JSON format.

// 2. JSON to CSV Converter:
// Develop a PHP program that reads JSON data and converts it into CSV format.

// 3. String Splitter:
// Write a function that takes a string and a delimiter as input and splits the string into an array using the provided delimiter.

// 4. Text Formatter:
// Create a program that reads a long text and formats it into paragraphs with a specified maximum line length. Ensure that words are not split.

// 5. String Replacer:
// Build a PHP function that takes a string, a search term, and a replacement term as input and replaces all occurrences of the search term with the replacement term.

// 6. String Concatenation with Padding:
// Write a program that takes an array of strings and concatenates them into a single string, separated by a space, while ensuring each element is padded with a fixed number of characters (e.g., 10 characters).

// 7. HTML Line Break Generator:
// Create a function that takes a text input and converts newline characters into HTML line breaks (<br>) for displaying text in HTML.

// 8. String Truncation:
// Write a PHP function that takes a string and a maximum length as input and truncates the string if it exceeds the specified length, adding "..." to indicate truncation.

// 9. CSV Validator:
// Develop a PHP program that reads CSV data and checks if it is well-formed, ensuring that all rows have the same number of columns.

// 10. Password Generator:
// Create a function that generates random passwords of a specified length with a mix of characters (letters, numbers, and symbols). The generated passwords should be stored in an array.

// These coding challenges will help you practice and apply the string and array manipulation concepts you've learned, making you more proficient in using these techniques in real-world PHP applications.


//  ✅Here are the solutions for the 10 coding challenges based on the concepts of string/array conversions, splitting, concatenating, trimming, padding, replacing, and formatting strings, and word wrapping in PHP:

// 1. ✅CSV to JSON Converter:


// $csvData = "Name,Age,Location\nAlice,25,New York\nBob,30,San Francisco";
// $dataArray = array_map('str_getcsv', explode("\n", $csvData));
// $jsonData = json_encode($dataArray, JSON_PRETTY_PRINT);
// echo $jsonData;
// 2. JSON to CSV Converter:


// $jsonData = '[{"Name": "Alice", "Age": 25, "Location": "New York"}, {"Name": "Bob", "Age": 30, "Location": "San Francisco"}]';
// $dataArray = json_decode($jsonData, true);
// $csvData = implode("\n", array_map('str_getcsv', $dataArray));
// echo $csvData;

// 3.✅ String Splitter:


// function splitString($inputString, $delimiter) {
//     return explode($delimiter, $inputString);
// }

// $string = "Hello|World;Goodbye-Planet";
// $delimiter = "|";
// $parts = splitString($string, $delimiter);
// print_r($parts);

// 4.✅ Text Formatter:


// function formatText($inputText, $lineLength) {
//     return wordwrap($inputText, $lineLength, "\n", true);
// }

// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
// $maxLineLength = 20;
// $formattedText = formatText($text, $maxLineLength);
// echo $formattedText;

// 5.✅ String Replacer:


// function replaceString($inputString, $searchTerm, $replaceTerm) {
//     return str_replace($searchTerm, $replaceTerm, $inputString);
// }

// $string = "Hello, World!";
// $search = "World";
// $replace = "Universe";
// $newString = replaceString($string, $search, $replace);
// echo $newString;

// 6. String Concatenation with Padding:


// function concatenateWithPadding($stringArray, $paddingLength) {
//     return implode(str_repeat(' ', $paddingLength), $stringArray);
// }

// $strings = ["Apple", "Banana", "Cherry"];
// $padding = 5;
// $result = concatenateWithPadding($strings, $padding);
// echo $result;
// 7. ✅HTML Line Break Generator:


// function convertToHtmlLineBreaks($inputText) {
//     return nl2br($inputText);
// }

// $text = "Hello\nWorld";
// $htmlText = convertToHtmlLineBreaks($text);
// echo $htmlText;

// 8. String Truncation:


// function truncateString($inputString, $maxLength) {
//     if (strlen($inputString) > $maxLength) {
//         return substr($inputString, 0, $maxLength) . "...";
//     }
//     return $inputString;
// }

// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
// $maxLength = 20;
// $truncatedText = truncateString($text, $maxLength);
// echo $truncatedText;

// 9. CSV Validator:


// function isCsvWellFormed($csvData) {
//     $rows = explode("\n", $csvData);
//     $numColumns = count(str_getcsv($rows[0]));
    
//     foreach ($rows as $row) {
//         $columns = str_getcsv($row);
//         if (count($columns) !== $numColumns) {
//             return false;
//         }
//     }
//     return true;
// }

// $csvData = "Name,Age,Location\nAlice,25,New York\nBob,30,San Francisco";
// $isWellFormed = isCsvWellFormed($csvData);
// echo $isWellFormed ? 'CSV is well-formed' : 'CSV is not well-formed';

// 10. Password Generator:


// function generatePassword($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
//     $password = '';
    
//     for ($i = 0; $i < $length; $i++) {
//         $password .= $characters[rand(0, strlen($characters) - 1)];
//     }
    
//     return $password;
// }

// $passwords = [];
// for ($i = 0; $i < 5; $i++) {
//     $passwords[] = generatePassword(10);
// }

// print_r($passwords);

// These solutions demonstrate how to implement the given coding challenges related to string/array conversions, string manipulation, and text formatting in PHP.