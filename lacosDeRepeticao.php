<?php
echo "<br>for php ";
for ($i = 0; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br>foreach php ";
$numbers = range(0, 10);
foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br>while php ";
$i = 0;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}

echo "<br>do while php ";
$i = 0;
do {
    echo $i . " ";
    $i++;
} while ($i <= 10);
?>

<script>
document.write("<br>for js ");
for (let i = 0; i <= 10; i++) {
  print(i + " ");
}

document.write("<br>foreach js ");
const numbers = Array.from({ length: 11 }, (_, i) => i);
numbers.forEach(num => print(num + " "));

document.write("<br>while js ");
let i = 0;
while (i <= 10) {
  print(i + " ");
  i++;
}

document.write("<br>do while js ");
i = 0;
do {
  print(i + " ");
  i++;
} while (i <= 10);

// Função para imitar o print
function print(output) {
  document.write(output);
}
</script>
