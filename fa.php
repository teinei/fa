<html>
<head>
</head>

<body>
<a href="index.php">back to home</a>
<form action="fa.php">
<?php
//$breaker="<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$breaker="<br><br>";
$offered="";
//
$java="<b>Java</b> is a programming language. ";
//
$cpp="<b>C/C++ programming language</b> is one of the five degree courses of CS, which are c++, database, operating system, data structure, computer architecture. C and C++ is the grandpa of all programming languages. C is a low level language. C can access and manipulate memory. C has the ability to allocate the memory of computer, and maybe the only one language that still alive today that has this power. C is small, smaller than Java and a bunch of other languages. C is able to run in embedded systems. C has been based on with some other programming languages for example PHP, Ruby, Javascript, Python and so on. C is powerful. C++ is an extension of the programming language C. It adds more features such as object oriented programming, well designed error handling and information hiding which relating to encapsulation.";
//
$ibm_net_db="This course gives you the background needed to understand basic network security.  You will learn the about Local Area Networks, TCP/IP, the OSI Framework and routing basics.  You will learn how networking affects security systems within an organization.  You will learn the network components that guard an organization from cybersecurity attacks.";
//
$zos="This Professional Certificate is intended to provide the foundational skills required to launch a career in the enterprise platform that powers over 68% of worldwide transactions. Companies around the world are searching for these skills to run their critical system workloads. In this series of courses, the learner will be introduced to various operating systems, mainframe applications, and get real-time hands-on experience on an IBM Z server. The skills acquired on completion of this Professional Certificate allows the learner to pursue a career as a mainframe application developer, system programmer, system administrator, or a DBA Practitioner. ";
//
$network="<b>Network</b> course is a compulsory course for CS majored students. In stanford it is called 'Computer Networking' in Stanford, Computer Networks in MIT, Yale, and Oxford. ";
//
//schools
//
$uw="<b>University of Washington</b>. Founded in 1861, the University of Washington is one of the oldest state-supported institutions of higher education on the West Coast and is one of the preeminent research universities in the world. ";
//
$ibm="<b>IBM</b>. IBM offers a wide range of technology and consulting services; a broad portfolio of middleware for collaboration, predictive analytics, software development and systems management; and the world's most advanced servers and supercomputers. Utilizing its business consulting, technology and R&D expertise, IBM helps clients become \"smarter\" as the planet becomes more digitally interconnected. IBM invests more than $6 billion a year in R&D, just completing its 21st year of patent leadership. IBM Research has received recognition beyond any commercial technology research organization and is home to 5 Nobel Laureates, 9 US National Medals of Technology, 5 US National Medals of Science, 6 Turing Awards, and 10 Inductees in US Inventors Hall of Fame.";
//
$google="<b>Google</b>. The IT Support Professional Certificate program is part of Grow with Google, an initiative that draws on Google's 20-year history of building products, platforms, and services that help people and businesses grow. Through programs like these, we aim to help everyone– those who make up the workforce of today and the students who will drive the workforce of tomorrow – access the best of Google’s training and tools to grow their skills, careers, and businesses.";
//
$q1="Dear Coursera Financial Aid Administrator: Thank you for the offer of financial aid for attending Coursera's Course. I am from China, a sovereign state with the 2nd largest GDP just a little less than USA, even the GDP per capital is more than 8000 USD now, but my income is just a half of GDP per capital divided by ten, that is less than 400 USD per month. I am from a humble family and my parents are peasants in a small village near Shenyang(Mukden) city. I moved to the city and stay since left college. The wages of me is just enough to cover my life cost, and I have to make mortgage payments every month. Even though I can speak and use English properly but I still make very little money, that is one of the reason I want to learn more skills from Coursera online courses. 50 dollars is not a big number but that is almost the traffic fee I pay for each month and food cost for one week. Rich city, poor me. But I want to make a difference, I want to have a try. Everyone has need the chance and platform to learn and improve themselves, including the low income citizens from third world. That is why I am applying for financial aid/scholarship.";
//echo $_GET["topic"];
$q2="My career goals are: Increase earnings, becoming an expert in financial management, programming and art. I love programming and I want to be a computer scientist or a software engineer or a financial manager. I studied financial management in my college. The local programming employers are not friendly to employees more than 30, so maybe I can review some finance knowledges and find a job in a crossover of finance and programming position. ​";
//topic
$q2.=$breaker;
if($_GET["topic"]=="db"){
    //
    $q2.="<b>Database</b> is one of the five degree courses of CS, which are c++, database, operating system, data structure, computer architecture. A database course sometimes are titled as Database Management Systems, has the following topics: relational algebra, entity relationship diagram, Structured Query Language(SQL, pronounced 'ess-que-el') etc.";
    $q2.="";
    //
}elseif($_GET["topic"]=="cpp"){
    $q2.=$cpp;
    //
}else{
    //
}
if($_GET["topic"]=="com"){
    //
    $q2.=$network;
    //
}
if($_GET["topic"]=="java"){
    //
    $q2.=$java;
    //
}
if($_GET["topic"]=="ibm-net-db"){
    $q2.=$ibm_net_db;
}//
if($_GET["topic"]=="ibm-zos"){
    $q2.=$zos;
}//
//$_GET[""]==""
//offered by
$q2.=$breaker;
$q2.="This course is offered by ";
//
if($_GET["offered"]=="uw"){
    //
    //$q2.=$uw;
    //
}
if($_GET["offered"]=="ibm"){
    //
    $q2.=$ibm;
    //
}
if($_GET["offered"]=="google"){
    //
    $q2.=$google;
}
//
//
//
//xml failed
//echo "load xml";
//echo "<br><br>";
//
/*
if (file_exists('school.xml')) {
    $xml = simplexml_load_file('school.xml');
 
    print_r($xml);
} else {
    exit('Failed to open *.xml.');
}
*/
//
$xmldata = simplexml_load_file("school.xml") or die("Failed to load");
/*
echo $breaker;
echo $xmldata->school[0]->name;// . "<\n>";
echo $breaker;
*/
//echo $xmldata->employee[1]->firstname; 
//
foreach($xmldata->children() as $school){
    //echo (string)$school->name;
    //echo $breaker;
    //echo (string)$school->ref;
    if($_GET["offered"]==((string)$school->ref)){
        //
        echo "find";
        echo $breaker;
        $offered=$school->intro;
        //
    }
    //echo $breaker;
    //echo $school->intro;
    //echo $breaker;
}
//
$q2.=$offered;
//xml failed
//echo $breaker;
//echo $offered;
//echo $breaker;
//
$q2.=$breaker;
$q2.="The provider is a trustable one, it is able to be relied on, it can provide high quality courses and help me to achieve my career goals.";
//
$count = str_word_count($q2);
echo $q2;
echo $breaker;
//echo "There are <u>$count</u> words";
$iagree="I agree to the terms above";
//
//remove all breakers
$q2=str_replace($breaker,"",$q2);
//
?>


<input type="text" name="q0" value="<?=$iagree?>" size="50" >

<h3>Q1.</h3>
<p>
<textarea name="q1" cols ="100" rows="3" >
<?php 
//$q1=strip_tags($q2);
echo $q1; 
?>
</textarea>
</p>

<h3>Q2.</h3>
<p>
<textarea name="q2" cols ="100" rows="3" >
<?php 
$q2=strip_tags($q2);
echo $q2; 
?>
</textarea>
</p>
<p>
There are <u><?=$count?></u> words
</p>

</form>

<a href="index.php">back to home</a>
</body>
</html>