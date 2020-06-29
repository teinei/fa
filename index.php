<html>
<head>
</head>
<body>
<form action="fa.php">
<p>
select subject
<select name="topic" id="topic"><!--- //filed --->
    <option value="cpp">C++</option>
    <option value="db">Database</option>
    <option value="java">Java</option>
    <option value="com">Network and Communication</option>
    <option value="ibm-net-db">IBM network and database</option>
    <option value="ibm-zos">IBM z/OS Mainframe</option>
</select>
</p>

<p>
select offered by
<select name="offered" id="offered"><!--- //filed --->
    <option value="uw">University of Washinton</option>
    <option value="stanford">Stanford</option>
    <option value="ibm">IBM</option>
    <option value="google">Google</option>
</select>
</p>

<input type="submit" value="generate text">
</form>
</body>
</html>