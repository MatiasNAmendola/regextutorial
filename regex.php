<?php

echo "<h1>REGULAR EXPRESSION TUTORIAL</h1>";
echo "<h2>1 = TRUE, ENCONTROU; <br/> 0 = FALSE; </h2> <br/><br/>";

$dictionary = "
		<h4>
		^  matches the beggining of the string; Inside a set [ ] works as a NOT operator;<br/>
		$  matches the end of the string (reads newlines too); <br/>
		.  matches any single character, except line breaks; <br/>
		*  matches zero or more occurences of the character immediately before it; <br/>
		+  matches one or more occurences of the character immediately before it; <br/>
		?  matches 0 or 1 occurence of the character or regular expression immediately preceding it; <br/>
		[] matches a set of characters; <br/>
		\  used to scape meta characters and to escape all Meta characters including itself. \[\]; <br/>
		|  matches characters as an OR operator It's used with the () operator. Ex.'/(This|That)/' in 'This is what I like' match This; <br/>
		()  ; <br/>
		{} matches a specific number of instances of the preceding character or range of characters; <br/>
		</h4>
		<h3>PHP special characters</h3>
		<h4>
		\s matches any character, including line breaks. It's a flag for the . operator; <br/>
		\z matches the end of the string (doesn't read the new lines); <br/>
		/i matches insive characters (ABC = abc); <br/>
		\d matches any numeric character - same as [0-9]; <br/>
		\D matches any non-numeric character - same as [^0-9]; <br/>
		\s matches any whitespace character - sames as [\\t\\n\\r\\f\\v]; <br/>
		\S matches any non-whitespace character - same as [^ \\t\\n\\r\\f\\v]; <br/>
		\w matches any alphanumeric character - same as [a-zA-Z0-9_]; <br/>
		\W matches any non-alphanumeric character - same as [^a-zA-Z0-9_]; <br/>
		<h3>Modifiers</h3>
		<h4>
		i  Ignore Case, case insensitive; <br/>
		U  Make search ungreedy; <br/>
		s  Includes New line; <br/>
		m  Multiple lines; <br/>
		x  Extended for comments and whitespace; <br/>
		e  Enables evaluation of replacement as PHP code. (preg_replace only); <br/>
		S  Extra analysis of pattern; <br/>
		</h4>
		<h3>Assertions</h3>
		<h4>
		b  Word Boundry; <br/>
		B  Not a word boundary; <br/>
		A  Start of subject; <br/>
		Z  End of subject or newline at end; <br/>
		z  End of subject; <br/>
		G  First matching position in subject; <br/>
		</h4>
";

echo $dictionary;

$cobaia = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ012345678999~!@#$%^&*()_+-={}[]\|";:/?.>,<';
echo "Normal: " . $cobaia . "<br/>";

echo "Comeca com ABC ou abc: " . preg_match("/^ABC/i", $cobaia) . "<br/>"; // i = insensitive

echo "Termina com >,< (usando \z) : " . preg_match("/>,<\z/i", $cobaia) . "<br/>";

echo "Termina com >,< (usando $) : " . preg_match("/>,<$/i", $cobaia) . "<br/>"; // when a newline is not wanted, $ should not be used.

echo "Tem _+- : " . preg_match("[_\+\-]", $cobaia) . "<br/>";

echo "Nao tem b no comeco : " . preg_match("/[^b]/", $cobaia, $match) . "<br/>";
echo $match[0];
echo  "<br/>";

echo "Nao tem b em lugar algum: " . preg_match_all("/[^b]/", $cobaia, $match) . "<br/>";
echo implode('', $match[0]);
echo  "<br/>";

echo "Nao tem letras: " . preg_match_all("/[^a-zA-Z]/", $cobaia, $match) . "<br/>";
echo implode('', $match[0]);
echo  "<br/>";

echo "Nao tem numeros: " . preg_match_all("/[^0-9]/", $cobaia, $match) . "<br/>";
echo implode('', $match[0]);
echo  "<br/>";

echo "Nao tem caracteres especiais: " . preg_match_all("/[a-z0-9]/i", $cobaia, $match) . "<br/>";
echo implode('', $match[0]);
echo  "<br/>";

echo "Possui um e entre d f: " . preg_match("/d.f/", $cobaia, $match) . "<br/>";
echo $match[0];
echo  "<br/>";

echo "Possui um z depois de y: " . preg_match("/y*z/", $cobaia, $match) . "<br/>";
echo $match[0];
echo  "<br/>";

echo "Possui um g depois de y (asterisco sempre responde sim kkk...): " . preg_match("/y*g/", $cobaia, $match) . "<br/>"; // Zero ou mais caracteres.
echo $match[0];
echo  "<br/>";

echo "Possui um y antes de f: " . preg_match("/y+f/", $cobaia, $match) . "<br/>"; // Zero ou mais caracteres.
echo $match[0];
echo  "<br/>";

echo "Possui numeros sendo o 9 repetido 3 vezes: " . preg_match("/[0-9]*9{3}/", $cobaia, $match) . "<br/>"; // Zero ou mais caracteres.
echo $match[0];
echo  "<br/>";

echo " <h3> Making use of PHP special characters </h3>";

echo "Nao tem numeros ( /\D/ ): " . preg_match_all("/\D/", $cobaia, $match) . "<br/>";
echo implode('', $match[0]);
echo  "<br/>";

echo "Possui numeros sendo o 9 repetido 3 vezes (/\d*9{3}/): " . preg_match("/\d*9{3}/", $cobaia, $match) . "<br/>"; // Zero ou mais caracteres.
echo $match[0];
echo  "<br/>";

echo "Nao tem caracteres especiais (/\w/): " . preg_match_all("/\w/", $cobaia, $match) . "<br/>";
echo implode('', $match[0]);
echo  "<br/>";


?>