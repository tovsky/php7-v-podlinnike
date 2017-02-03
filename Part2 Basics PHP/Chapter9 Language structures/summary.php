<?php
/**
 * Оригинальные листинги в подкаталоге instruct
 *
 *
 *                              Инструкци if - else.
 * Классический вид:
 *      if (логич_выраж) {
 *          инструкция_1
 *      } elseif (другое_логич_выраж) (
 *          инструкция_2
 *      } else {
 *          инструкция_3
 *      }
 *
 * Альтернативный синтаксис:
 *      if (логическое_выражение) :
 *          команды;
 *      elseif (другое_логическое_выражение):
 *          другие_команды;
 *      else :
 *          иначе_команды;
 *      endif
 * 
 * Блоки  elseif  и  else  можно опускать.
 *
 *      listing-9-1
 *
 *
 *
 *                              Цикл с предусловием  while.
 * Классический вид.
 *      while (Логическое_условие) {
 *          инструкция;
 *      }
 *
 * Альтернативный синтаксис:
 *      while (логичиское_выражение) :
 *          команды;
 *      endwhile;
 *
 *      listing-9-2
 *
 *
 *                              Цикл с постусловием  do-while.
 * Тело цикла выполится хотя бы 1 раз!
 *      do {
 *          команды;
 *      } while (логическое_выражение);
 *
 *
 *                              Универсальный цик  for.
 *      for (инициализирующие_команды; условия_цикла; команды после прохода) {
 *          тело_цикла;
 *      }
 * 
 *      listing-9-3
 * 
 *
 *                              Инструкция break и continue.
 * Break и  continue   работают только с циклическими конструкциями.
 * Break осуществляет немедленный выход из цикла, можно указываеть
 *  вложенность циклов из которых выйти. (удобен для циклов поисков.)
 *      for ($i = 0; $i < count($matrix); $i++) {
 *          for ($j = 0; $j < count($matrix[$i]); $j++) {
 *              if ($matrix[$i][$j] == 0) break(2);         // прерываение 2-х циклов
 *          }
 *      }
 *      if ($i < 10) echo 'Найден нулевой элемент в матрице!';
 *
 * Continue завершает текущую итерацию цикла и переходит к новой.
 *  (удобно для циклов-фильтров, когда надо перебрать некоторые объекты, и выбрать, те
 *    которые удовлетворяют условиям).
 *      for ($i = 0; $i < count($files); $i++) {
 *          if ($files[$i] == ".") continue;
 *          if ($files[$i] == "..") continue;
 *          if (is_dir($files[$i])) continue;
 *          echo "Найден файл: {$files[$i]}<br />";
 *      }
 *          // Цикл печатает те элементы маассива, которые являются файлами.
 *
 *
 *                              Нетрадиционное использование do-while и break.
 *      listing-9-4 
 * В данном листинге ввод данных в форму, и если что-то заполнено неверно, то идет прерывание 
 * отображается снова наша форма и сообщение об ошибке. 
 * Используется конструкция   
 *   if (что_то) do {...} while (0);
 * 
 * 
 *                              Цикл  foreach.
 * Массив - это набор так называемых ключей, каждому из которых соответсвует некоторое значение.
 *      foreach (массив as $ключ => $значение)
 *          команды;
 * Команды циклически выполняются для каждого элемента массива.
 *      listing-9-5     // Вывод всех переменных окружения
 *
 * Другая форма записи цикла foreach, применяется, когда нас не интерисует значение ключа очередного элемента.
 *      foreach ($массив as $значение)
 *          команды;
 * В этом случае доступно лишь значение очередного элемента-массива, но не его ключ. Это может
 *  быть полезно, например, для работы с массивами-списками.
 * Цикл foreach  оперирует с копией массива. (создается копия массива)
 * Для того, чтобы изменять значения массива внутри тела цикла, стоит использовать ссылочный синтаксис.
 *      foreach ($массив as $ключ => &$значение) {
 *          //Здесь можно изменять $значение, при этом изменятся элементы.
 *          // исходного массива $массив
 *      }
 *
 *
 *                              Конструкция  switch-case.
 * За место нескольких подряд  if-else, целесообразнее switch-case.
 *      switch (выражение) {
 *          case значение1: команды1; [break;]
 *          case значение2: команды2; [break;]
 *          ...........
 *          case значениеN: командыN; [break;]
 *          [default: команды по умолчанию; [break;]]
 *      }
 *
 *
 *                              Инструкции goto.
 * с версии PHP 5.3  оператор goto   осуществляет безусловныый переход на метку.
 *      goto метка;
 *      .......
 *      метка:
 *
 *      listing-9-6    // пример организации цикла
 *
 * у goto много ограничений (нельзя перемещаться в цикл, в другой файл).
 * Фактически goto  это более удобная замена многоуровневого break.
 *
 *
 *                              Инструкции require и include.
 * Эти инструкции позволяют разбить текст программы на несколько файлов.
 *      require имя_файла;
 * При запуске программы интерпретатор просто заменит инструкцию на содержимое файла имя_файла
 *      listing-9-7
 *      listing-9-8
 *      listing-9-9
 *
 * Конструкция include   практически идентична require  за исключением, что в случае
 *  невозможности подключения файла работа сценария не завершится немедленно,
 * а продолжается(с выводом соответствующего диагностичского сообщения).
 *
 *
 *                              Инструкции require_once и include_once.
 * В случае большого количества подключений require может возникнуть ситуация, когда одна
 *  и таже функция подключена несколько раз. Тогда возникнет ошибка!
 * require_once (и include_once)  при подключении видит, что затребованный файл был уже ранее
 * подключен, то не будет производить подключение файла и ошибка не произойдет!
 *  Рекомендация от авторов использовать только require_once и include_once.
 *
 * РЕЗЮМЕ: каждая программа состоит из набора инструкций, объединяющих группы
 *  операций и позволяющих им выполняться в произвольной последовательности и в
 *  зависимости от некоторых условий (необязательно подряд).
 *
 *
 *
 *
 *
 *
 *
 *
 * 
 * 
 * Задача: сценарий получает 2 параметра имя root  и пароль   Z10N0101
 * если верно, то выводит "Доступ открыт".
 * Первый вариант передачи параметров, это в адрессной строке браузера.
 *      http://localhost:4000/hello.php?login=root&password=Z10N0101
 * Данные из командной строки получают, анализируя переменную окружения QUERY_STRING
 *      listing-8-1
 * 
 * На практике конечно пользователи передают данные через формы
 *      listing-8-2-form.html
 * В данном листинге значения форм пересылаются через браузерную строку в открытую
 *
 *                              Трансляция полей формы.
 * Все данные из полей формы РНР помещает в глобальный массив $_REQUEST.
 *      $_REQUEST['login']      здесь будет значение поля <input type="text" name="login" value="">
 *      $_REQUEST['login']      здесь будет значение поля <input type="password" name="password" value="">
 * Чтобы разделять GET-параметры от POST-параметров, существует 2 отдельных массива $_GET и $_POST
 *  а массив $_REQUEST это объединение двух массивов $_GET и $_POST
 *      listing-8-3-hello.php   первая версия проверки пароля
 *      listing-8-4-lock.php   вторая версия проверки пароля усовершенствованная
 *
 *      <?= выражение ?>   такая конструкция равносильна  <?php echo выражение ?> и предназначена
 *          для вставки величин прямо в HTML страницу.
 *
 *                              Трансляция переменных окружения.
 * В переменные преобразуются не только все данные из форм, но и переменные окружения (включая QUERY_STRING, CONTENT_LENGTH и многие другие).
 *      REMOTE_ADDR     //  IP
 *      HTTP_USER_AGENT     // тип браузера
 * 
 *      listing-8-5.php
 * 
 *                              Трансляция cookies.
 * Все cookies, пришедшие скрипту, попадают в массив $_COOKIES.
 *      listing-8-6-cookies.php     // Сценарий считает, сколько раз его запустил пользователь.
 * 
 *                              Обработка списков.
 * Механизм трансляци полей формы в PHP работает приемлимо, когда среди них нет полей с одинаковыми именами.
 * Если же таковые встречаются, то в переменную запишются данные последнего встретившегося поля.
 *      <select name="Sel" multiple>
 *          <option>First</option>
 *          <option>Second</option>
 *          <option>Third</option>
 *      </select>
 * Если выбрать 2 значения, то в сценарий придет строка Sel=First&Sel=Third
 * и в переменной $_REQUEST['Sel'] будет значение Third
 *
 * Можно решение через создание массива:
 *      <select name="Sel[]" multiple>
 *          <option>First</option>
 *          <option>Second</option>
 *          <option>Third</option>
 *      </select>
 * Теперь сценарию придет строка Sel[]=First&Sel[]=Third    создатся автомассив
 *      echo $_REQUUEST['Sel'][0];      // Выводит первый элемент
 *      echo $_REQUUEST['Sel'][1];      // Выводит 2 элемент
 *
 * Создавать автомассив можно для всех полей формы
 *      <input type="checkbox" name="Arr[]" value="ch1">
 *      <input type="checkbox" name="Arr[]" value="ch2">
 *      <input type="text" name="Arr[]" value="Some string">
 *      <textarea name="Arr[]">Some text</textarea>
 * После запуска сценария, обрабатывающего эту форму, все данные будут представлены в виде одного массива.
 *
 *                              Обработка массивов.
 *      Имя: <input type="text" name="Data[name]"><br />
 *      Адрес: <input type="text" name="Data[address]"><br />
 *      Город: <br />
 *      <input type="radio" name="Data[city}" value="Moscow">Москва<br />
 *      <input type="radio" name="Data[city}" value="Peter">Санкт-Петербург<br />
 *      <input type="radio" name="Data[city}" value="Kiev">Киев<br />
 * На выходе скрипта будет ассоциативный массив $Data с ключами name, address и city.
 *      $_REQUEST['Data']['city']   // Обращаемся к выбранной пользователем радиокнопке
 *      $_REQUEST['Data']['name']   // введеное имя
 *
 *                          Диагностика.
 * Когда данные приходят из формы, РНР создает массивы:
 *   $_GET - содержит GET-параметры, пришедшие скрипту через переменную окружения QUERY_STRING. Например $_GET['login']
 *   $_POST - данные формы, пришедшие методом POST.
 *   $_COOKIE - все cookies, которые прислал браузер.
 *   $_REQUEST - ОБЪЕДИНЕНИЕ 3 выше перечисленных массивов. Иногда эту переменную рекомендуют указывать в скриптах,
 *              потому что так мы не привязываемся к типу принимаемых данных (GET или POST).
 *   $_SERVER - содержит переменные окружения, переданные сервером
 * 
 *      listing-8-7         // Вывод всех переменных одним разом
 *
 *
 *                          Порядок трансляции переменных.
 * По умолчанию трансляция выполняется в порядке GPC (GET - POST - COOKIES).
 * Если отовсюду придет параметр A, то у итогового $_REQUEST['A'] будет значение из COOKIES, которое будет
 *  последним и перезапишет значение A, пришдшее из GET или POST ранее.
 *
 *
 *                          Особенности флажков checkbox.
 * Независимый переключатель (checkbox или коротко флажок) когда выбран пользователем, то сценарию приходит
 *  пара   имя_флажка = значение.  Если же флажок не был установлен, то пара вообще не посылается.
 *  Хотелось бы, чтобы в невыбранном состоянии флажок также присылал бы данные с заранее установленным
 *  значением, например 0 или пустая строка.
 *  Решение:  скрытое поле hidden.
 *      listing-8-8
 * 
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
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

 *
 *
 *
 *
 * 
 */