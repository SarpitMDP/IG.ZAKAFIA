<script>
<button onclick="var jsVar = "<?php 
$nomor = array("6283136812307"); 
$nohp = $nomor[array_rand($nomor)]; 
$text = "Hi kak,saya mau beli *Followers, Liker* Atau mau tanya tanya dulu !";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>
