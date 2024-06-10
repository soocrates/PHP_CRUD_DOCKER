<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Server Information</h1>

<table>
    <tr>
        <th>Element/Code</th>
        <th>Description</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>$_SERVER['PHP_SELF']</td>
        <td>Returns the filename of the currently executing script</td>
        <td><?php echo $_SERVER['PHP_SELF']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['GATEWAY_INTERFACE']</td>
        <td>Returns the version of the Common Gateway Interface (CGI) the server is using</td>
        <td><?php echo $_SERVER['GATEWAY_INTERFACE']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_ADDR']</td>
        <td>Returns the IP address of the host server</td>
        <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_NAME']</td>
        <td>Returns the name of the host server (such as www.w3schools.com)</td>
        <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_SOFTWARE']</td>
        <td>Returns the server identification string (such as Apache/2.2.24)</td>
        <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_PROTOCOL']</td>
        <td>Returns the name and revision of the information protocol (such as HTTP/1.1)</td>
        <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['REQUEST_METHOD']</td>
        <td>Returns the request method used to access the page (such as POST)</td>
        <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['REQUEST_TIME']</td>
        <td>Returns the timestamp of the start of the request (such as 1377687496)</td>
        <td><?php echo $_SERVER['REQUEST_TIME']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['QUERY_STRING']</td>
        <td>Returns the query string if the page is accessed via a query string</td>
        <td><?php echo $_SERVER['QUERY_STRING']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_ACCEPT']</td>
        <td>Returns the Accept header from the current request</td>
        <td><?php echo $_SERVER['HTTP_ACCEPT']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_ACCEPT_CHARSET']</td>
        <td>Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)</td>
        <td><?php echo $_SERVER['HTTP_ACCEPT_CHARSET']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_HOST']</td>
        <td>Returns the Host header from the current request</td>
        <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['HTTP_REFERER']</td>
        <td>Returns the complete URL of the current page (not reliable because not all user-agents support it)</td>
        <td><?php echo $_SERVER['HTTP_REFERER']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['HTTPS']</td>
        <td>Is the script queried through a secure HTTP protocol</td>
        <td><?php echo isset($_SERVER['HTTPS']) ? 'Yes' : 'No'; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['REMOTE_ADDR']</td>
        <td>Returns the IP address from where the user is viewing the current page</td>
        <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['REMOTE_HOST']</td>
        <td>Returns the Host name from where the user is viewing the current page</td>
        <td><?php echo $_SERVER['REMOTE_HOST']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['REMOTE_PORT']</td>
        <td>Returns the port being used on the user's machine to communicate with the web server</td>
        <td><?php echo $_SERVER['REMOTE_PORT']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SCRIPT_FILENAME']</td>
        <td>Returns the absolute pathname of the currently executing script</td>
        <td><?php echo $_SERVER['SCRIPT_FILENAME']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_ADMIN']</td>
        <td>Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)</td>
        <td><?php echo $_SERVER['SERVER_ADMIN']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_PORT']</td>
        <td>Returns the port on the server machine being used by the web server for communication (such as 80)</td>
        <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SERVER_SIGNATURE']</td>
        <td>Returns the server version and virtual host name which are added to server-generated pages</td>
        <td><?php echo $_SERVER['SERVER_SIGNATURE']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['PATH_TRANSLATED']</td>
        <td>Returns the file system based path to the current script</td>
        <td><?php echo $_SERVER['PATH_TRANSLATED']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SCRIPT_NAME']</td>
        <td>Returns the path of the current script</td>
        <td><?php echo $_SERVER['SCRIPT_NAME']; ?></td>
    </tr>
    <tr>
        <td>$_SERVER['SCRIPT_URI']</td>
        <td>Returns the URI of the current page</td>
        <td><?php echo $_SERVER['SCRIPT_URI']; ?></td>
    </tr>
</table>

</body>
</html>
