<!DOCTYPE html>
<html>
<head>
<title>@yield("title")</title>
<meta charset="utf-8" />
</head>
<body>
    <nav >
        <ul >
        <li >
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/report">Report</a>
        </li>
        <li>
            <a href="/report/drivers">Drivers</a>
        </li>
        </ul>
    </nav>

@yield("main-content")

</body>
</html>