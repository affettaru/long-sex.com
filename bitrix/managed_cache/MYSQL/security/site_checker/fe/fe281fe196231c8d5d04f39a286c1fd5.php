<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001740989655';
$dateexpire = '001743581655';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:2:{s:7:"results";a:16:{i:0;a:5:{s:5:"title";s:128:"Уровень безопасности административной группы не является повышенным";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:182:"Пониженный уровень безопасности административной группы может значительно помочь злоумышленнику";s:14:"recommendation";s:337:"Ужесточить <a href="/bitrix/admin/group_edit.php?ID=1&tabControl_active_tab=edit2"  target="_blank">политики безопасности административной</a> группы или выбрать предопределенную настройку уровня безопасности "Повышенный".";s:15:"additional_info";s:0:"";}i:1;a:5:{s:5:"title";s:102:"Пароль к БД не содержит спецсимволов(знаков препинания)";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:138:"Пароль слишком прост, что повышает риск взлома учетной записи в базе данных";s:14:"recommendation";s:57:"Добавить спецсимволов в пароль";s:15:"additional_info";s:0:"";}i:2;a:5:{s:5:"title";s:113:"Разрешено отображение сайта во фрейме с произвольного домена";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:307:"Запрет отображения фреймов сайта со сторонних доменов способен предотвратить целый класс атак, таких как <a href="https://www.owasp.org/index.php/Clickjacking" target="_blank">Clickjacking</a>, Framesniffing и т.д.";s:14:"recommendation";s:1875:"Скорее всего, вам будет достаточно разрешения на просмотр сайта в фреймах только на страницах текущего сайта.
Сделать это достаточно просто, достаточно добавить заголовок ответа "X-Frame-Options: SAMEORIGIN" в конфигурации вашего frontend-сервера.
</p><p>В случае использования nginx:<br>
1. Найти секцию server, отвечающую за обработку запросов нужного сайта. Зачастую это файлы в /etc/nginx/site-enabled/*.conf<br>
2. Добавить строку:
<pre>
add_header X-Frame-Options SAMEORIGIN;
</pre>
3. Перезапустить nginx<br>
Подробнее об этой директиве можно прочесть в документации к nginx: <a href="http://nginx.org/ru/docs/http/ngx_http_headers_module.html" target="_blank">Модуль ngx_http_headers_module</a>
</p><p>В случае использования Apache:<br>
1. Найти конфигурационный файл для вашего сайта, зачастую это файлы /etc/apache2/httpd.conf, /etc/apache2/vhost.d/*.conf<br>
2. Добавить строки:
<pre>
&lt;IfModule headers_module&gt;
	Header set X-Frame-Options SAMEORIGIN
&lt;/IfModule&gt;
</pre>
3. Перезапустить Apache<br>
4. Убедиться, что он корректно обрабатывается Apache и этот заголовок никто не переопределяет<br>
Подробнее об этой директиве можно прочесть в документации к Apache: <a href="http://httpd.apache.org/docs/2.2/mod/mod_headers.html" target="_blank">Apache Module mod_headers</a>
</p>";s:15:"additional_info";s:2316:"Адрес: <a href="https://long-sex.com/?rnd=0.12281570291185828&t=T022" target="_blank">https://long-sex.com/?rnd=0.12281570291185828&t=T022</a><br>Запрос/Ответ: <pre>GET /?rnd=0.12281570291185828&amp;t=T022 HTTP/1.1
Host: long-sex.com
User-Agent: BitrixCloud BitrixSecurityScanner/Robin-Scooter rnd46
Accept: */*
Accept-Encoding: gzip, deflate

HTTP/1.1 200 OK
Server: nginx
Date: Mon, 03 Mar 2025 08:09:49 GMT
Content-Type: text/html; charset=UTF-8
Transfer-Encoding: chunked
Connection: keep-alive
Vary: Accept-Encoding
X-Powered-By: PHP/8.2.27
P3P: policyref=&quot;/bitrix/p3p.xml&quot;, CP=&quot;NON DSP COR CUR ADM DEV PSA PSD OUR UNR BUS UNI COM NAV INT DEM STA&quot;
X-Powered-CMS: Bitrix Site Manager (d6f015d4aa8c2d669445b2a96bfecdd8)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Set-Cookie: PHPSESSID=SzfYYmIZ6GUtl2kbpOVNBHIL5to6NYah; path=/; HttpOnly
Content-Encoding: gzip

&lt;!-- &lt;!DOCTYPE html&gt; --&gt;
&lt;html lang=ru&gt;

&lt;head&gt;

	&lt;!-- &lt;meta charset=&quot;utf-8&quot; /&gt; --&gt;
    &lt;!-- &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot; /&gt; --&gt;
    &lt;!-- &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot; /&gt; --&gt;
	&lt;meta name=&quot;description&quot; content=&quot;Сайт международный медицинский центр УРО-ПРО&quot; /&gt;
&lt;meta name=&quot;title&quot; content=&quot;Сайт международный медицинский центр УРО-ПРО&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/fancybox.css?174042251928077&quot; type=&quot;text/css&quot;  data-template-style=&quot;true&quot;  rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/swiper.css?17404225196312&quot; type=&quot;text/css&quot;  data-template-style=&quot;true&quot;  rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/custom-select.css?17404225191149&quot; type=&quot;text/css&quot;  data-template-style=&quot;true&quot;  rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/intlTelInput.css?174042251916476&quot; type=&quot;text/css&quot;  data-template</pre>";}i:3;a:5:{s:5:"title";s:69:"Включено использование расширения PHAR";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:171:"Использование расширения PHAR - небезопасно. <a href=\'https://blog.sonarsource.com/new-php-exploitation-technique\'>Подробнее</a>";s:14:"recommendation";s:101:"Отключите это расширение в конфигурационном файле php.ini";s:15:"additional_info";s:0:"";}i:4;a:5:{s:5:"title";s:121:"Уровень вывода ошибок должен быть "только ошибки" или "не выводить"";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:172:"Отображение предупреждений php может позволить узнать полный физический путь к вашему проекту";s:14:"recommendation";s:202:"Изменить уровень вывода ошибок на "не выводить": <a href="/bitrix/admin/settings.php?mid=main" target="_blank">Настройки главного модуля</a>";s:15:"additional_info";s:0:"";}i:5;a:5:{s:5:"title";s:81:"Отключена captcha при регистрации пользователя";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:115:"На сайте могут зарегистрироваться нежелательные пользователи";s:14:"recommendation";s:144:"Включите captcha в <a href="/bitrix/admin/settings.php?mid=main" target="_blank">настройках главного модуля</a>";s:15:"additional_info";s:0:"";}i:6;a:5:{s:5:"title";s:80:"Отключена капча при восставновлении пароля";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:75:"Возможен автоматический перебор паролей";s:14:"recommendation";s:144:"Включите captcha в <a href="/bitrix/admin/settings.php?mid=main" target="_blank">настройках главного модуля</a>";s:15:"additional_info";s:0:"";}i:7;a:5:{s:5:"title";s:69:"Выключено ограничение хостов/доменов";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:140:"Ограничение хостов/доменов позволяет предотвратить подмену HTTP-заголовка Host";s:14:"recommendation";s:133:"Включите защиту в <a href="/bitrix/admin/security_hosts.php?find_rule_type=M" target="_blank">настройках</a>";s:15:"additional_info";s:0:"";}i:8;a:5:{s:5:"title";s:64:"Выключена двухэтапная авторизация";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:178:"Двухэтапная авторизация призвана значительно повысить безопасность вашего сайта от фишинг-атак";s:14:"recommendation";s:114:"Включить: <a href="/bitrix/admin/security_otp.php" target="_blank">Одноразовые пароли</a>";s:15:"additional_info";s:0:"";}i:9;a:5:{s:5:"title";s:68:"Разрешено чтение файлов по URL (URL wrappers)";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:256:"Если эта, сомнительная, возможность PHP не требуется - рекомендуется отключить, т.к. она может стать отправной точкой для различного типа атак";s:14:"recommendation";s:89:"Необходимо в настройках php указать:<br>allow_url_fopen = Off";s:15:"additional_info";s:0:"";}i:10;a:5:{s:5:"title";s:110:"Установлен не корректный порядок формирования массива _REQUEST";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:392:"Зачастую в массив _REQUEST нет необходимости добавлять любые переменные, кроме массивов _GET и _POST. В противном случае это может привести к раскрытию информации о пользователе/сайте и иным не предсказуемым последствиям.";s:14:"recommendation";s:88:"Необходимо в настройках php указать:<br>request_order = "GP"";s:15:"additional_info";s:75:"Текущее значение: ""<br>Рекомендованное: "GP"";}i:11;a:5:{s:5:"title";s:82:"Не установлен атрибут secure для сессионной cookie";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:91:"Сессионные cookie могут передаваться без шифрования";s:14:"recommendation";s:94:"Необходимо в настройках php указать:<br>session.cookie_secure = On";s:15:"additional_info";s:0:"";}i:12;a:5:{s:5:"title";s:119:"Временные файлы хранятся в пределах корневой директории проекта";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:271:"Хранение временных файлов, создаваемых при использовании CTempFile, в пределах корневой директории проекта не рекомендовано и несет с собой ряд рисков.";s:14:"recommendation";s:883:"Необходимо определить константу "BX_TEMPORARY_FILES_DIRECTORY" в "bitrix/php_interface/dbconn.php" с указанием необходимого пути.<br>
Выполните следующие шаги:<br>
1. Выберите директорию вне корня проекта. Например, это может быть "/home/bitrix/tmp/www"<br>
2. Создайте ее. Для этого выполните следующую комманду:
<pre>
mkdir -p -m 700 /полный/путь/к/директории
</pre>
3. В файле "bitrix/php_interface/dbconn.php" определите соответствующую константу, чтобы система начала использовать эту директорию:
<pre>
define("BX_TEMPORARY_FILES_DIRECTORY", "/полный/путь/к/директории");
</pre>";s:15:"additional_info";s:87:"Текущая директория: /var/www/u3025934/data/www/long-sex.com/upload/tmp";}i:13;a:5:{s:5:"title";s:44:"Включен Automatic MIME Type Detection";s:8:"critical";s:3:"LOW";s:6:"detail";s:248:"По умолчанию в Internet Explorer/FlashPlayer включен автоматический mime-сниффинг, что может служить источником XSS нападения или раскрытия информации.";s:14:"recommendation";s:1752:"Скорее всего, вам не нужна эта функция, поэтому её можно безболезненно отключить, добавив заголовок ответа "X-Content-Type-Options: nosniff" в конфигурации вашего веб-сервера.
</p><p>В случае использования nginx:<br>
1. Найти секцию server, отвечающую за обработку запросов нужного сайта. Зачастую это файлы в /etc/nginx/site-enabled/*.conf<br>
2. Добавить строку:
<pre>
add_header X-Content-Type-Options nosniff;
</pre>
3. Перезапустить nginx<br>
Подробнее об этой директиве можно прочесть в документации к nginx: <a href="http://nginx.org/ru/docs/http/ngx_http_headers_module.html" target="_blank">Модуль ngx_http_headers_module</a>
</p><p>В случае использования Apache:<br>
1. Найти конфигурационный файл для вашего сайта, зачастую это файлы /etc/apache2/httpd.conf, /etc/apache2/vhost.d/*.conf<br>
2. Добавить строки:
<pre>
&lt;IfModule headers_module&gt;
	Header set X-Content-Type-Options nosniff
&lt;/IfModule&gt;
</pre>
3. Перезапустить Apache<br>
4. Убедиться, что он корректно обрабатывается Apache и этот заголовок никто не переопределяет<br>
Подробнее об этой директиве можно прочесть в документации к Apache: <a href="http://httpd.apache.org/docs/2.2/mod/mod_headers.html" target="_blank">Apache Module mod_headers</a>
</p>";s:15:"additional_info";s:1933:"Адрес: <a href="https://long-sex.com/bitrix/js/main/core/core.js?rnd=0.1533875513308237&t=T017" target="_blank">https://long-sex.com/bitrix/js/main/core/core.js?rnd=0.1533875513308237&t=T017</a><br>Запрос/Ответ: <pre>GET /bitrix/js/main/core/core.js?rnd=0.1533875513308237&amp;t=T017 HTTP/1.1
Host: long-sex.com
User-Agent: BitrixCloud BitrixSecurityScanner/Robin-Scooter rnd89
Accept: */*
Accept-Encoding: gzip, deflate

HTTP/1.1 200 OK
Server: nginx
Date: Mon, 03 Mar 2025 08:09:49 GMT
Content-Type: application/javascript
Last-Modified: Mon, 24 Feb 2025 18:57:05 GMT
Transfer-Encoding: chunked
Connection: keep-alive
Vary: Accept-Encoding
ETag: W/&quot;67bcc101-7998e&quot;
Expires: Thu, 17 Apr 2025 08:09:49 GMT
Cache-Control: max-age=3888000
Content-Encoding: gzip

/* eslint-disable */
;(function() {

	if (typeof window.BX === \'function\')
	{
		return;
	}

/**
 * Babel external helpers
 * (c) 2018 Babel
 * @license MIT
 */
(function (global) {
  var babelHelpers = global.babelHelpers = {};

  function _typeof(obj) {
    if (typeof Symbol === &quot;function&quot; &amp;&amp; typeof Symbol.iterator === &quot;symbol&quot;) {
      babelHelpers.typeof = _typeof = function (obj) {
        return typeof obj;
      };
    } else {
      babelHelpers.typeof = _typeof = function (obj) {
        return obj &amp;&amp; typeof Symbol === &quot;function&quot; &amp;&amp; obj.constructor === Symbol &amp;&amp; obj !== Symbol.prototype ? &quot;symbol&quot; : typeof obj;
      };
    }

    return _typeof(obj);
  }

  babelHelpers.typeof = _typeof;
  var REACT_ELEMENT_TYPE;

  function _createRawReactElement(type, props, key, children) {
    if (!REACT_ELEMENT_TYPE) {
      REACT_ELEMENT_TYPE = typeof Symbol === &quot;function&quot; &amp;&amp; Symbol.for &amp;&amp; Symbol.for(&quot;react.element&quot;) || 0xeac7;
    }

    var defaultProps = type &amp;&amp; type.defaultProps;
    var childrenLength = ar</pre>";}i:14;a:5:{s:5:"title";s:53:"Не используется HSTS заголовок";s:8:"critical";s:3:"LOW";s:6:"detail";s:147:"HSTS заголовок принудительно активирует защищённое соединение через протокол https";s:14:"recommendation";s:127:"Добавьте "Strict-Transport-Security: max-age=31536000" к заголовкам ответа вашего сервера";s:15:"additional_info";s:2313:"Адрес: <a href="https://long-sex.com/?rnd=0.8621872302245053&t=T032" target="_blank">https://long-sex.com/?rnd=0.8621872302245053&t=T032</a><br>Запрос/Ответ: <pre>GET /?rnd=0.8621872302245053&amp;t=T032 HTTP/1.1
Host: long-sex.com
User-Agent: BitrixCloud BitrixSecurityScanner/Robin-Scooter rnd77
Accept: */*
Accept-Encoding: gzip, deflate

HTTP/1.1 200 OK
Server: nginx
Date: Mon, 03 Mar 2025 08:09:50 GMT
Content-Type: text/html; charset=UTF-8
Transfer-Encoding: chunked
Connection: keep-alive
Vary: Accept-Encoding
X-Powered-By: PHP/8.2.27
P3P: policyref=&quot;/bitrix/p3p.xml&quot;, CP=&quot;NON DSP COR CUR ADM DEV PSA PSD OUR UNR BUS UNI COM NAV INT DEM STA&quot;
X-Powered-CMS: Bitrix Site Manager (d6f015d4aa8c2d669445b2a96bfecdd8)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Set-Cookie: PHPSESSID=vg6GnWXVjbOFTCCY7p43yYZnIzvKwQmU; path=/; HttpOnly
Content-Encoding: gzip

&lt;!-- &lt;!DOCTYPE html&gt; --&gt;
&lt;html lang=ru&gt;

&lt;head&gt;

	&lt;!-- &lt;meta charset=&quot;utf-8&quot; /&gt; --&gt;
    &lt;!-- &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot; /&gt; --&gt;
    &lt;!-- &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot; /&gt; --&gt;
	&lt;meta name=&quot;description&quot; content=&quot;Сайт международный медицинский центр УРО-ПРО&quot; /&gt;
&lt;meta name=&quot;title&quot; content=&quot;Сайт международный медицинский центр УРО-ПРО&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/fancybox.css?174042251928077&quot; type=&quot;text/css&quot;  data-template-style=&quot;true&quot;  rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/swiper.css?17404225196312&quot; type=&quot;text/css&quot;  data-template-style=&quot;true&quot;  rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/custom-select.css?17404225191149&quot; type=&quot;text/css&quot;  data-template-style=&quot;true&quot;  rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;/local/templates/main/assets/css/intlTelInput.css?174042251916476&quot; type=&quot;text/css&quot;  data-template</pre>";}i:15;a:5:{s:5:"title";s:38:"Включен вывод ошибок";s:8:"critical";s:3:"LOW";s:6:"detail";s:202:"Вывод ошибок предназначен для разработки и тестовых стендов, он не должен использоваться на конечном ресурсе.";s:14:"recommendation";s:88:"Необходимо в настройках php указать:<br>display_errors = Off";s:15:"additional_info";s:0:"";}}s:9:"test_date";O:25:"Bitrix\\Main\\Type\\DateTime":2:{s:8:"'.chr(0).'*'.chr(0).'value";O:8:"DateTime":3:{s:4:"date";s:26:"2025-03-03 11:11:21.000000";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}s:18:"'.chr(0).'*'.chr(0).'userTimeEnabled";b:1;}}}';
return true;
?>