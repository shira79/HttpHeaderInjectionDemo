<h1>TRY http header injection!!!</h1>

<h3>Rewriting PHPSESSID by http header injection</h3>
<div>
    <a href="http://localhost/?url=http://localhost/%0d%0aSet-Cookie:+PHPSESSID%3Dhogehoge">
        http://localhost/?url=http://localhost/%0d%0aSet-Cookie:+PHPSESSID%3Dhogehoge
    </a>
</div>

<div>
    <a href="http://localhost/?url=http://localhost/%0d%0aSet-Cookie:+PHPSESSID%3Dfugafuga">
        http://localhost/?url=http://localhost/%0d%0aSet-Cookie:+PHPSESSID%3Dfugafuga
    </a>
</div>

<?php

header('Location: ' . $_GET['url']);

if (isset($_COOKIE)){
    echo('<pre>');
    var_dump($_COOKIE);
    echo('</pre>');
}


