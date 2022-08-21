<ul>
    <li><a href="/lesson6.html">Home</a></li>
</ul>
<form action="" method="GET">
    <label for="ch1"></label>
    <input value="<?php if (isset($_GET['ch1'])) echo $_GET['ch1']; ?>" type="number" name="ch1" required>
    <label for="operation"> </label>
    <select name="operation" id="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <label for="ch2"></label>
    <input value="<?php if (isset($_GET['ch2'])) echo $_GET['ch2']; ?>" type="number" name="ch2" required>
    <input type="submit" value="Порахувати">
</form>
<?php
if (empty($_GET)) {
    return "Нічого не передано";
}
if (empty($_GET['operation'])) {
    return "Не вказана операція";
}
if (empty($_GET['ch1']) and empty(['ch2'])) {
    return "Не вказано числа";
}
$num1 = $_GET['ch1'];
$num2 = $_GET['ch2'];

$sk = $num1 . $_GET['operation'] . $num2;

switch ($_GET['operation']) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;
    default:
        return "Відсутня операція";
}
echo "Result: $sk=$result";
?>