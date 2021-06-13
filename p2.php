<style>
p{
    color: white;
    font-size: 90px;
    position : absolute;
    top: 50%;
    left : 50%;
    transform: translate(-50%, -50%);
}
body {
    background-color: black;
}
</style>
<body>
    <p> <?php date_default_timezone_set("Asia/Calcutta"); ?>  
     <?php echo date("h: i : s A"); ?> </p>
</body>
