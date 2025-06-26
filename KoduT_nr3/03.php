<?php include("header.php");?>

<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page=="services") {
        include("services.php");
    }else if($page="contact"){
        include("contact.php");
    }

}else{


?>

<h1>Avaleht</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deleniti odio omnis nisi non deserunt asperiores nulla molestias voluptas et! Quae quibusdam quasi, amet architecto adipisci ex mollitia obcaecati commodi.</p>
<?php
}
?>
<?php include("footer.php");?>