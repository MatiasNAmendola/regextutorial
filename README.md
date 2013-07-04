regextutorial
=============

Regex Tutorial
-------------
	^  matches the beggining of the string; Inside a set [ ] works as a NOT operator;<br/>
	$  matches the end of the string (reads newlines too); <br/>
	.  matches any single character, except line breaks; <br/>
	*  matches zero or more occurences of the character immediately before it; <br/>
	+  matches one or more occurences of the character immediately before it; <br/>
	?  matches 0 or 1 occurence of the character or regular expression immediately preceding it; <br/>
	[] matches a set of characters; <br/>
	\  used to scape meta characters and to escape all Meta characters including itself; <br/>
	|  matches characters as an OR operator It's used with the () operator. Ex.'/(This|That)/' in 'This is what I like' match This; <br/>
	()  ; <br/>
	{} matches a specific number of instances of the preceding character or range of characters; <br/>
	\s matches any character, including line breaks. It's a flag for the . operator; <br/>
	\z matches the end of the string (doesn't read the new lines); <br/>
	/i matches insive characters (ABC = abc); <br/>
	\d matches any numeric character - same as [0-9]; <br/>
	\D matches any non-numeric character - same as [^0-9]; <br/>
	\s matches any whitespace character - sames as [\t\n\r\f\v]; <br/>
	\S matches any non-whitespace character - same as [^ \t\n\r\f\v]; <br/>
	\w matches any alphanumeric character - same as [a-zA-Z0-9_]; <br/>
	\W matches any non-alphanumeric character - same as [^a-zA-Z0-9_]; <br/>
