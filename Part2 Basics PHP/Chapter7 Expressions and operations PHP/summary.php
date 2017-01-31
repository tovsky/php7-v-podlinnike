<?php
/**
 * Оригинальные листинги в подкаталоге expr
 *
 *                      Выражения.
 * Выражение - нечто, имеющее определенное значение. И обратно: если что-то имеет значение, то это "что-то" есть выражение.
 *      $a = 3 * sin($b = $c + 10) + $d;    // Можем задавать значения прямо внутри оператора присваивания.
 *
 *                      Логические выражения.
 * Логические выражения - это выражения, у которых могут быть true и false.
 *
 *                      Строковое выражение.
 * Строки в РНР - один из основных объектов.
 *
 *                      Строка в апострофах.  ' ..... '
 * Строка в апострофах трактуется точно как написана, кроме 2-х исключений.
 *  - последовательность  \'  это экранирование апострофа для его вставки в строку.
 *      'д\'артаньян';      // д'артаньян
 *  - последовательность \\  это один обратный слеш \
 *    для вставки например 'C:\\m2transcript.txt'
 *
 *                      Строка в кавычках. "......"
 * Набор спец метасимволов, которые будучи помещены в кавычки, опеределяют тот или иной символ,
 * гораздо богаче:
 *      \n      // символ новой строки
 *      \r      //символ возвата каретки
 *      \t      //   символ табуляции
 *      \$      //  символ $ , чтобы он случайно не был интерполирован, как переменная
 *      \"      //  "
 *      \\      //   \
 *      \xNN        //  обозначает символ с 16-м кодом NN
 *
 * Переменные в строках с кавычками интерполируются
 *      echo "$hell word";      // Подставится значние переменной $hell
 *
 *      echo "{$SOME}o word!"   // Экранируем переменную. Аналог echo $SOME . "o word";
 *
 * Вставка в строку элементов массива и свойств объекта:
 *      $action = [
 *          "left" => "survive",
 *          "right" => "kill'em all"     
 *      ];
 *      echo "Выбранный элемент: {$action['left']}";  // отработает и выведет
 *      echo "Выбранный элемент: $action[left]";      // отработает и выведет
 *      echo "Выбранный элемент: {$action[left]}";    // будет ошибка
 *
 *                      Here-документ (встроенный документ).
 * Фактически это альтернатива для многострочных констант
 *      $name= "Гейтс Билл Иванович";
 *      $text = <<MARKER
 *      Далее идет какой-то текста,
 *      возможно, с переменными , которые интерполируются:
 *      например, $name будет интерполирована здесь.
 *      MARKER;
 *
 *                      Now-документ
 * Начиная с версии 5.3 , аналог Here документа, но переменные не интерполируются.
 *      $name= "Гейтс Билл Иванович";
 *      $text = <<'MARKER'
 *      Далее идет какой-то текста,
 *      возможно, с переменными , которые интерполируются:
 *      например, $name будет интерполирована здесь.
 *      MARKER; *
 *
 *                      Вызов внешней программы
 * Строка в обратных апострофах заставляет РНР выполнить команду операционной системы,
 * и то, что она вывела, подставить на место строки в обратных апострфах.
 *      $st = `command.com/c dir`;
 *      echo "<pre>$st</pre>";      // Узнаем содержимое текущего каталога в сис-ме Windows
 *
 *
 *                      Операции.
 *                      Арифмитические операции.
 *   a + b      // Сложение
 *   a - b      // Вычитание
 *   a * b      // Умножение
 *   a / b      // Деление
 *   a % b      // Остаток от деления а на b
 *   a ** b     // Возведение а в степень b   C Версии РНР 5.6
 *
 *                      Строковые операции.
 *   a . b      // слияние строк
 *   a[n]       // символ строки в позиции n
 *
 *                      Операции присваивания.
 *  =  говорит о том, что значение правого выражения должно быть присвоено переменной слева
 *      $a = ($b = 4) + 5;      // После этого $a равно 9 , $b равно 4.
 *
 * Подвиды +=   -=    ...
 *
 *                      Операции инкремента и декремента.
 *      $a++
 *      $b--
 *
 *                      Битовые операции (подробнее см. ст. 155 книги).
 *  a & b
 *  a | b
 *  a ^ b
 *  ~a
 *  a << b
 *  a >> b
 *
 *                      Операции сравнения.
 *  Независимо от типов своих аргументов, операции сравнения всегда возвращают TRUE Или FALSE
 *      a == b      // Истина, если a равно b
 *      a !=b       // Истина, если а не равно b
 *      a === b     // истина, если а эквивалентно b
 *      a !== b     // Истина, если ф не эквивалентно b
 *      a < b
 *      a > b
 *      a <= b
 *      a >= b
 *      a <=> b     // возвращет -1 если a < b , 0 если а = b, +1 Если а > b
 *
 * Кроме сравнение скалярных переменных (т.е. строки и числа), возможно еще
 *  сравнение массивов и объектов!
 *      listing-7-5
 *      listing-7-6
 *
 *                      Оператор <=>
 * Начиная с РНР 7 оператор <=> реализует сравнение переменных.
 * Раньше сортировка массива:
 *      function cmp($a, $b)
 *      {
 *          if ($a == $b) return 0;
 *          if ($a < $b) return -1;
 *          if ($a > $b) return 1;
 *      }
 *      $arr = [3, 1, 7, 6, 9, 4];
 *      usort($arr, 'cmp');
 *      print_r($arr);      // 1,3,4,6,7,9
 *
 * C испльзованием оператора <=> и анонимной функции:
 *      $arr = [3, 1, 7, 6, 9, 4];
 *      usort($arr, function($a, $b) {return $a <=> $b; });
 *      print_r($arr);      // 1,3,4,6,7,9*
 *
 *                      Логические операции
 * Эти операции предазначены исключительно для работы с логическими выражениями
 *  и также возвращают true или false.
 *      ! a     //
 *      a && b      // истина, если истины и а и b
 *      a || b      // иситна, если хотя бы один операнд истина или оба одновременно
 * 
 *                      Операция отключения предупреждений.
 *      listing-7-7-8
 * @ - оператор отключения предупреждений. Если поместить перед любым выражением,
 *     то сообщения об ошибках в этом выражении будут подавлены и в окне браузера не отображены.
 * @ - это быстрое решение, желательно избегать его в итоговом коде для боевого сервера
 * Не применять:
 *   - перед директивой   include
 *   - перед вызовом собственных (не встроенных в РНР) функций
 *   - перед функцией eval()   (запуск строкового выражения как программы на РНР)
 *
 *                      Условные операции.
 *      x ? y : z    // Возвращает y если x  true, и возврат z если  x  принимает значение false
 *
 * Классич пример "Получение абсолютного значения переменной"
 *      <?php
 *          $x = -17;
 *          $x = $x < 0 ? -$x ; $x;
 *          echo $x;
 *      ?>
 *
 * пример проверка инициализации переменной    listing-7-9
 *
 * Начиная с РНР 7 оператор ??
 * ?? - этот оператор принимает два операнда, и возвращает значение элемента не
 *      равного null, при этом оператор автоматически проверяет на существование
 *      выражения и не генерирует замечание в случае отсутствия одного из них.
 *      listing-7-10
 *
 *
 *
 *
 * 
 */