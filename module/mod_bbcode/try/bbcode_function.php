<!--
[b]...[/b] bold
[i]...[/i] italique
[u]...[/u] souligner
[color=red]...[/color] couleur
[color=#FF0000]...[/color]
[size=30]...[/size] font_size

[list]
[*]Rouge
[*]Bleu
[*]Jaune
[/list] liste a puce

[list=disc][/list], [list=circle][/list] ou [list=square][/list] forme de la puce

[list=1]
[*]Faire les courses
[*]Acheter un nouvel ordinateur
[*]Jurer quand le PC plante
[/list] liste numerotée

[list=a]
[*]Réponse 1
[*]Réponse 2
[*]Réponse 3
[/list] liste a, b, c

[url=http://www.phpbb-fr.com/]Visitez phpBB ![/url]

[email]personne@domain.adr[/email]

[font=Comic Sans MS]...text...[/font]

[align=center|left|right|justify]...texte...[/align]

[float=left|right]...text...[/float]

[spoil]...texte...[/spoil] spoiler text

[hidden]text[/hidden] contenu caché -->

<?php
function showBBcodes($text) {
	
	// NOTE : I had to update this sample code with below line to prevent obvious attacks as pointed out by many users.
	// Always ensure that user inputs are scanned and filtered properly.
	$text  = htmlspecialchars($text, ENT_QUOTES, $charset);

	// BBcode array
	$find = array(
		'~\[b\](.*?)\[/b\]~s',
		'~\[i\](.*?)\[/i\]~s',
		'~\[u\](.*?)\[/u\]~s',
		'~\[quote\](.*?)\[/quote\]~s',
		'~\[size=(.*?)\](.*?)\[/size\]~s',
		'~\[color=(.*?)\](.*?)\[/color\]~s',
		'~\[url\]((?:ftp|https?)://.*?)\[/url\]~s',
		'~\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]~s'
	);

	// HTML tags to replace BBcode
	$replace = array(
		'<b>$1</b>',
		'<i>$1</i>',
		'<span style="text-decoration:underline;">$1</span>',
		'<pre>$1</'.'pre>',
		'<span style="font-size:$1px;">$2</span>',
		'<span style="color:$1;">$2</span>',
		'<a href="$1">$1</a>',
		'<img src="$1" alt="" />'
	);

	// Replacing the BBcodes with corresponding HTML tags
	return preg_replace($find,$replace,$text);
}

// How to use the above function:

$bbtext = "This is [b]bold[/b] and this is [u]underlined[/u] and this is in [i]italics[/i] with a [color=red] red color[/color]";
$htmltext = showBBcodes($bbtext);
echo $htmltext;

?>

<?php
	
?>